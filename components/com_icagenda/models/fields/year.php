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
 * @version 	3.6.0 2016-07-08
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('JPATH_BASE') or die;

jimport('joomla.html.html');
jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

/**
 * Year frontend search filter.
 */
class JFormFieldYear extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	3.6.0
	 */
	protected $type = 'year';

	/**
	 * Method to get the field options.
	 *
	 * @return	array	The field option objects.
	 * @since	3.6.0
	 */
	public function getOptions()
	{
		// Initialize variables.
		$options = array();

//		$db	= JFactory::getDbo();
//		$query	= $db->getQuery(true);

//		$query->select('next AS next');
//		$query->from('#__icagenda_events AS e');
//		$query->order('e.next');
//		$query->where('state = 1');

		// Get the options.
//		$db->setQuery($query);

//		$dates = $db->loadObjectList();

		$dates = icagendaEventsData::getAllDates('0');

		foreach ($dates AS $date)
		{
//			$ex_date	= explode('_', $date);
//			$date		= $ex_date['0'];
//			$year		= date('Y', strtotime($date));

			$year		= substr($date, 0, 4); // faster than explode (8x)

			$year_option = new stdClass;
			$year_option->value = $year;
			$year_option->label = $year;

			if ( ! in_array($year_option, $options))
			{
				$options[] = $year_option;
			}
		}

		// Check for a database error.
//		if ($db->getErrorNum())
//		{
//			JError::raiseWarning(500, $db->getErrorMsg());
//		}

		rsort($options);

		return $options;
	}
}
