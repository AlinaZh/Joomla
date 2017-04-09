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
 * @version     3.6.6 2016-12-05
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die;

/**
 * Registration view class for iCagenda
 */
class iCagendaViewRegistration extends JViewLegacy
{
	protected $data;

	protected $form;

	protected $state;

	protected $params;

	protected $item;

	public $document;

	/**
	 * Method to display the view.
	 *
	 * @param   string  $tpl  The template file to include
	 *
	 * @return  mixed
	 *
	 * @since   1.6
	 */
	public function display($tpl = null)
	{
		$app        		= JFactory::getApplication();
		$user       		= JFactory::getUser();

		// Get the view data.
		$this->data			= $this->get('Data');
		$this->form			= $this->get('Form');
		$this->state		= $this->get('State');
		$this->item			= $this->get('Item');
		$this->registration	= $this->get('Registration');

		$this->params		= $this->state->get('params');

		$this->coreFields	= array(
								'uid'		=> true,
								'name'		=> true,
								'email'		=> true,
								'email2'	=> true,
								'phone'		=> $this->params->get('phoneDisplay', 1) ? true : false,
								'date'		=> true,
								'people'	=> true,
							);

		$this->extraFields	= array(
								'notes'		=> $this->params->get('notesDisplay', 0) ? true : false,
								'terms'		=> $this->params->get('terms', 0) ? true : false,
								'captcha'	=> $this->params->get('reg_captcha', 0) ? true : false,
							);

		// Shortcuts
		$params				= $this->params;
		$item				= $this->item;

		// For Dev.
		$time_loading		= $params->get('time_loading', '');

		if ($time_loading)
		{
			$starttime_reg = iCLibrary::getMicrotime();
		}

		// Get Options
		$this->reg_captcha				= $params->get('reg_captcha', 0);
		$this->reg_form_validation		= $params->get('reg_form_validation', '');

		// DEPRECATED 3.6.0 : To be migrated to registrationdates form field, getOptions
//		$this->formDatesList = icagendaRegistration::formDatesList($item);

		// Check Access
		$userLevels = $user->getAuthorisedViewLevels();
		$userGroups = $user->getAuthorisedGroups();

		$groupid	= JComponentHelper::getParams('com_icagenda')->get('approvalGroups', array("8"));
		$groupid	= is_array($groupid) ? $groupid : array($groupid);

		$uri		= JFactory::getUri();
		$return		= base64_encode($uri);
		$rlink		= JRoute::_("index.php?option=com_users&view=login&return=$return", false);

		if ($item == NULL
			|| $item->state != 1
			|| $item->approval == 1
			)
		{
			JError::raiseError('404',JTEXT::_('JERROR_LAYOUT_PAGE_NOT_FOUND'));

			return false;
		}

		// Warning 'Registration closed' if no ticket available for the current form
		// @TODO: set this as a content message, replacing the form, and keeping the event info header.
		elseif ($item->ticketsBookable <= 0
			|| ! icagendaRegistration::upcomingDatesBooking($item)
			)
		{
			$app->enqueueMessage(JTEXT::_('COM_ICAGENDA_REGISTRATION_CLOSED'), 'warning');

			return false;
		}

		elseif ( ! in_array('8', $userGroups)
			&& ! in_array(icagendaRegistration::accessReg($item), $userLevels)
			)
		{
			if ($user->id)
			{
				$app->enqueueMessage(JText::_( 'JERROR_LOGIN_DENIED' ), 'warning');
			}
			else
			{
//				$app->enqueueMessage(JText::_( 'JGLOBAL_YOU_MUST_LOGIN_FIRST' ), 'info');

				// Redirect to login page if no access to registration form
				$msg = '<div>';
				$msg.= '<h2>';
				$msg.= JText::_('IC_AUTH_REQUIRED');
				$msg.= '</h2>';
				$msg.= '<div>';
				$msg.= JText::_("COM_ICAGENDA_LOGIN_TO_ACCESS_REGISTRATION_FORM");
				$msg.= '</div>';
				$msg.= '<br />';
				$msg.= '<div>';
				$msg.= '<a href="' . icagendaEvent::eventURL($item) . '" class="btn btn-default btn-small button">';
				$msg.= '<i class="iCicon iCicon-backic icon-white"></i>&nbsp;' . JTEXT::_('COM_ICAGENDA_BACK') . '';
				$msg.= '</a>';
				$msg.= '&nbsp;';
				$msg.= '<a href="index.php" class="btn btn-info btn-small button">';
				$msg.= '<i class="icon-home icon-white"></i>&nbsp;' . JTEXT::_('JERROR_LAYOUT_HOME_PAGE') . '';
				$msg.= '</a>';
				$msg.= '</div>';
				$msg.= '</div>';

				// if not login, and registration form not "public"
				$app->enqueueMessage($msg);
			}

			$app->redirect($rlink);
		}

		// Load Theme pack layout for event details view
		$this->template		= $params->get('template', 'default');
		$themeRegistration	= icagendaTheme::getThemeLayout($this->template, 'registration');

		// Check if errors (file missing)
		if ($themeRegistration[1])
		{
			$msg = ($themeRegistration[1] !== 'deprecated')
					? 'iCagenda ' . JText::_('PHPMAILER_FILE_OPEN') . ' <strong>' . $this->template . '_registration.php</strong>'
					: JText::_('COM_ICAGENDA_ERROR_THEME_PACK_OUTDATED') . '<br/>' .
						JText::sprintf('COM_ICAGENDA_ERROR_THEME_PACK_EDIT_OR_CHANGE', '<strong>' . $this->template . '_registration.php</strong>');
			$app->enqueueMessage($msg, 'warning');

			if ($themeRegistration[1] !== 'alert')
			{
				return false;
			}
		}

		$this->themeRegistration	= $themeRegistration[0];

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Check for layout override
		$active = JFactory::getApplication()->getMenu()->getActive();

		if (isset($active->query['layout']))
		{
			$this->setLayout($active->query['layout']);
		}

		// Escape strings for HTML output
		$this->pageclass_sfx = htmlspecialchars($this->params->get('pageclass_sfx'));

		icagendaInfo::commentVersion();

		$this->icevent_vars = 'components/com_icagenda/add/elements/icevent_vars.php';

		// Common fields
		JFormHelper::addFieldPath(JPATH_ADMINISTRATOR . '/components/com_icagenda/utilities/form/field');

		$this->prepareDocument();

		parent::display($tpl);


		// Loads Scripts and CSS
		$document = JFactory::getDocument();

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

		// iCagenda scripts (radio buttons...)
		JHtml::script( 'com_icagenda/icagenda.js', false, true );

		// Loading tipTip Library used for iCtips
		JHtml::script('com_icagenda/jquery.tipTip.js', false, true);

		// iCagenda Script validation for Registration form (1)
//		if ( ! $this->reg_form_validation)
//		{
//			$iCheckForm = icagendaForm::submit(1);
//			$document->addScriptDeclaration($iCheckForm);
//		}

		// Add custom handler to check both the emails (Email and Confirm Email) are same
//		$document->addScriptDeclaration('jQuery(document).ready(function(){
//			document.formvalidator.setHandler("emailverify", function (value) {
//				var email = document.getElementById("reg_email");
//				var email2 = document.getElementById("reg_email2");
//				return (email.value === email2.value);
//			});
//		});');

		// Add CSS
		icagendaTheme::loadComponentCSS($this->template);
		icagendaThemeStyle::addMediaCss($this->template, 'component');

		// For Dev.
		if ($time_loading)
		{
			$endtime_reg = iCLibrary::getMicrotime();

			echo '<center style="font-size:8px;">Time to create page: ' . round($endtime_reg-$starttime_reg, 3) . ' seconds</center>';
		}
	}

	/**
	 * Prepares the document.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function prepareDocument()
	{
		$app	= JFactory::getApplication();
		$menus	= $app->getMenu();
		$pathway = $app->getPathway();
		$title	= null;

		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();

		if ($menu)
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::_('COM_ICAGENDA_REGISTRATION_TITLE'));
		}

		$title = $this->params->get('page_title', '');

		$id = (int) @$menu->query['id'];

		// If the menu item does not concern this event
		if ($menu && ($menu->query['option'] != 'com_icagenda' || $menu->query['view'] != 'registration' || $id != $this->item->id))
		{
			// If this is not a single event menu item, set the page title to the event title
			if ($this->item->title)
			{
				$title = $this->item->title;
			}

			$pathway->addItem($this->item->title . ' (' . JText::_('COM_ICAGENDA_REGISTRATION_TITLE') . ')', '');
		}

		if (empty($title))
		{
			$title = $app->get('sitename');
		}
		elseif ($app->get('sitename_pagetitles', 0) == 1)
		{
			$title = JText::sprintf('JPAGETITLE', $app->get('sitename'), $title);
		}
		elseif ($app->get('sitename_pagetitles', 0) == 2)
		{
			$title = JText::sprintf('JPAGETITLE', $title, $app->get('sitename'));
		}

		$this->document->setTitle($title . ' - ' . JText::_('COM_ICAGENDA_REGISTRATION_TITLE'));

		if ($this->params->get('menu-meta_description'))
		{
			$this->document->setDescription($this->params->get('menu-meta_description'));
		}

		if ($this->params->get('menu-meta_keywords'))
		{
			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
		}

		if ($this->params->get('robots'))
		{
			$this->document->setMetadata('robots', $this->params->get('robots'));
		}
	}
}
