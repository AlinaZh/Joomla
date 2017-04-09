<?php
/**
 *------------------------------------------------------------------------------
 *  iCagenda v3 by Jooml!C - Events Management Extension for Joomla! 2.5 / 3.x
 *------------------------------------------------------------------------------
 * @package     com_icagenda
 * @copyright   Copyright (c)2012-2016 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @version     3.6.0 2016-08-08
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

jimport('joomla.application.component.helper');

/**
 * HTML View class - iCagenda List of Events.
 */
class icagendaViewList extends JViewLegacy
{
	protected $params;

	protected $items;

	protected $getAllDates;

	protected $state;

	protected $template;

	protected $themeList;

	protected $header;

	protected $pagination;

	protected $sharing;

	protected $iclist_vars = 'components/com_icagenda/add/elements/iclist_vars.php';


	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 * @return  mixed         A string if successful, otherwise a Error object.
	 *
	 * @since   3.6.0
	 */
	public function display($tpl = null)
	{
		$app				= JFactory::getApplication();
		$document			= JFactory::getDocument();

		// Loading data
		$items				= $this->getModel()->getItems();
		$this->state		= $this->get('State');
		$this->params		= $this->state->get('params');
		$this->getAllDates	= icagendaEventsData::getAllDates();

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		// Shortcut for params
		$params				= $this->params;

		// For Dev.
		$time_loading = $params->get('time_loading', '');

		if ($time_loading)
		{
			$starttime_list = iCLibrary::getMicrotime();
		}

		// Set events for the current page
		$getAllDates		= $this->getAllDates;
		$new_items			= array();
		$evt				= array();

		if (count($getAllDates) > 0)
		{
			$number				= $this->params->get('number', 5);
			$getpage			= JFactory::getApplication()->input->get('page', 1);

			// Set number of events to be displayed per page
			$index				= $number * ($getpage - 1);
			$currentPageDates	= array_slice($getAllDates, $index, $number, true);

			foreach ($currentPageDates as $date_id)
			{
				// Get id and date for each event to be displayed
				$ex_date_id	= explode('_', $date_id);
				$evt[]		= $ex_date_id['0'];
				$evt_id		= $ex_date_id['1'];

				foreach ($items as $item)
				{
					if ($evt_id == $item->id)
					{
						$new_items[] = $item;
					}
				}
			}
		}

		$this->items		= $new_items;
		$this->evt			= $evt;

		// Load Theme pack layout for list
		$this->template		= $params->get('template', 'default');
		$themeList			= icagendaTheme::getThemeLayout($this->template, 'list');

		// Check if errors (file missing)
		if ($themeList[1])
		{
			$msg = ($themeList[1] !== 'deprecated')
					? 'iCagenda ' . JText::_('PHPMAILER_FILE_OPEN') . ' <strong>' . $this->template . '_list.php</strong>'
					: JText::_('COM_ICAGENDA_ERROR_THEME_PACK_OUTDATED') . '<br/>'
						. JText::sprintf('COM_ICAGENDA_ERROR_THEME_PACK_EDIT_OR_CHANGE', '<strong>'
						. $this->template . '_list.php</strong>');

			$app->enqueueMessage($msg, 'warning');

			if ($themeList[1] !== 'alert')
			{
				return false;
			}
		}

		$this->themeList	= $themeList[0];

		// Component Options
		$this->cat_description	= ($params->get('displayCatDesc_menu', 'global') == 'global')
								? $params->get('CatDesc_global', '0')
								: $params->get('displayCatDesc_menu', '');

		$cat_options			= ($params->get('displayCatDesc_menu', 'global') == 'global')
								? $params->get('CatDesc_checkbox', '')
								: $params->get('displayCatDesc_checkbox', '');

		$this->cat_options		= is_array($cat_options) ? $cat_options : array();
		$this->pageclass_sfx	= htmlspecialchars($params->get('pageclass_sfx'));

		// Set Header and pagination
		$countAll				= count($this->getAllDates);
		$arrowText				= $params->get('arrowtext', 1);
		$number					= $params->get('number', 5);
		$pagination				= $params->get('pagination', 1);
		$filters_active			= $this->state->get('filter.search')
									|| $this->state->get('filter.from')
									|| $this->state->get('filter.to')
									|| $this->state->get('filter.category')
									|| $this->state->get('filter.month')
									|| $this->state->get('filter.year')
								? true
								: false;

		$this->header			= icagendaList::header($countAll, $number, $filters_active);
		$this->pagination		= icagendaList::pagination($countAll, $arrowText, $number, $pagination);
		$this->sharing			= icagendaAddthis::share();

		// Process the content plugins.
		JPluginHelper::importPlugin('content');

		if (version_compare(JVERSION, '3.0', 'lt'))
		{
			$this->dispatcher	= JDispatcher::getInstance();
		}
		else
		{
			$this->dispatcher	= JEventDispatcher::getInstance();
		}

		icagendaInfo::commentVersion();

		$this->_prepareDocument();

		$this->iclist_vars = 'components/com_icagenda/add/elements/iclist_vars.php'; // icagendaEvent::setVar($evt, $item);

		parent::display($tpl);

		// Loads jQuery Library
		if (version_compare(JVERSION, '3.0', 'lt'))
		{
			icagendaThemeJoomla25::loadjQuery();
		}
		// Joomla 3
		else
		{
			JHtml::_('bootstrap.framework');
			JHtml::_('jquery.framework');
		}

		// Add CSS
		icagendaTheme::loadComponentCSS($this->template);
		icagendaThemeStyle::addMediaCss($this->template, 'component');

		// Loading Script tipTip used for iCtips
		JHtml::script('com_icagenda/jquery.tipTip.js', false, true);

		// Add RSS Feeds
		$menu = $app->getMenu()->getActive()->id;

		$feed	= 'index.php?option=com_icagenda&amp;view=list&amp;Itemid=' . (int) $menu . '&amp;format=feed';
		$rss	= array(
					'type'   =>  'application/rss+xml',
					'title'  =>  'RSS 2.0',
				);

		$document->addHeadLink(JRoute::_($feed.'&amp;type=rss'), 'alternate', 'rel', $rss);

		// For Dev.
		if ($time_loading)
		{
			$endtime_list = iCLibrary::getMicrotime();

			echo '<center style="font-size:8px;">Time to create page: ' . round($endtime_list-$starttime_list, 3) . ' seconds</center>';
		}
	}

	/**
	 * Prepares the document
	 *
	 * @since   3.6.0
	 */
	protected function _prepareDocument()
	{
		$app		= JFactory::getApplication();
		$menus		= $app->getMenu();
		$pathway	= $app->getPathway();
		$title		= null;

		$menu = $menus->getActive();

		if ($menu)
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::_('JGLOBAL_ARTICLES'));
		}

		$title = $this->params->get('page_title', '');

		if (empty($title))
		{
			$title = $app->getCfg('sitename');
		}
		elseif ($app->getCfg('sitename_pagetitles', 0) == 1)
		{
			$title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
		}
		elseif ($app->getCfg('sitename_pagetitles', 0) == 2)
		{
			$title = JText::sprintf('JPAGETITLE', $title, $app->getCfg('sitename'));
		}

		$this->document->setTitle($title);

		if ($this->params->get('menu-meta_description', ''))
		{
			$this->document->setDescription($this->params->get('menu-meta_description', ''));
		}

		if ($this->params->get('menu-meta_keywords', ''))
		{
			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords', ''));
		}

		if ($app->getCfg('MetaTitle') == '1'
			&& $this->params->get('menupage_title', ''))
		{
			$this->document->setMetaData('title', $this->params->get('page_title', ''));
		}
	}
}
