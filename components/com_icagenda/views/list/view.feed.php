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
 * @version     3.6.5 2016-11-21
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

/**
 * HTML View class - iCagenda - RSS Feeds.
 */
class icagendaViewList extends JViewLegacy
{
	function display($cachable = false, $urlparams = false)
	{
		$app        = JFactory::getApplication();
		$document   = JFactory::getDocument();
		$params     = JFactory::getApplication()->getParams();
		$items      = $this->get('Items');
		$Itemid     = $app->input->getInt('Itemid');

		$mcatid             = $params->get('mcatid', '');
		$filter_category    = ! is_array($mcatid) ? array($mcatid) : $mcatid;

		// Set events for the current page
		$getAllDates        = icagendaEventsData::getAllDates();
		$new_items          = array();
		$evt                = array();

		if (count($getAllDates) > 0)
		{
			$number             = JFactory::getConfig()->get('feed_limit', $params->get('number', 5));

			// Set number of events to be displayed per page
			$currentPageDates   = array_slice($getAllDates, '0', $number, true);

			foreach ($currentPageDates as $date_id)
			{
				// Get id and date for each event to be displayed
				$ex_date_id = explode('_', $date_id);
				$evt[]      = $ex_date_id['0'];
				$evt_id     = $ex_date_id['1'];

				foreach ($items as $item)
				{
					if ($evt_id == $item->id)
					{
						$new_items[] = $item;
					}
				}
			}
		}

		$items  = $new_items;

		foreach ($items as $k => $item)
		{
			if ( ! in_array('', $filter_category) && ! in_array('0', $filter_category)
				&& in_array($item->catid, $filter_category)
				|| in_array('', $filter_category)
				|| in_array('0', $filter_category)
				)
			{
				$EVENT_TIME	= ($params->get('time_display_global', 0) && $item->displaytime == 1)
							? ' ' . icagendaEvents::dateToTimeFormat($evt[$k])
							: '';

				// Load individual item creator class.
				$feeditem               = new JFeedItem;
				$feeditem->title        = $item->title . ' (' . $item->cat_title . ')';
				$feeditem->link         = JROUTE::_('index.php?option=com_icagenda&view=event&Itemid='
											. (int) $Itemid . '&id=' . (int) $item->id . ':' . $item->alias);
				$feeditem->image        = icagendaThumb::sizeMedium($item->image);
				$feeditem->description  = icagendaRender::dateToFormat($evt[$k]) . $EVENT_TIME . '<br /><img src="' . $feeditem->image . '" alt="" style="margin: 5px; float: left;">' . $item->description;

				// Set date
				$timezone	= self::getTimeZone();
				$date		= new JDate($evt[$k], $timezone);
				$date		= $date->format('Y-m-d H:i:s', false, false);

				$feeditem->date         = $date;
				$feeditem->category     = $item->cat_title;

				// Loads item information into RSS array
				$document->addItem($feeditem);
			}
		}
	}

	/**
	 * Returns the userTime zone if the user has set one, or the global config one
	 * @return mixed
	 */
	public static function getTimeZone()
	{
		$userTz     = JFactory::getUser()->get('timezone');
		$timeZone   = JFactory::getConfig()->get('offset');

		if ($userTz)
		{
			$timeZone = $userTz;
		}

		return new DateTimeZone($timeZone);
    }
}
