<?php
/**
 *------------------------------------------------------------------------------
 *  iCagenda v3 by Jooml!C - Events Management Extension for Joomla! 2.5 / 3.x
 *------------------------------------------------------------------------------
 * @package     iCagenda
 * @subpackage  utilities
 * @copyright   Copyright (c)2012-2016 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @version     3.6.0 2015-09-02
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

/**
 * class icagendaRender
 */
class icagendaRender
{
	/**
	 * Function to return formatted title
	 *
	 * @since	3.6.0
	 */
	static public function titleToFormat($title)
	{
		$text_transform	= JComponentHelper::getParams('com_icagenda')->get('titleTransform', '');
		$mbString		= extension_loaded('mbstring');

		if ($text_transform == 1)
		{
			$titleFormat = $mbString ? iCString::mb_ucfirst(mb_strtolower($title)) : ucfirst(strtolower($title));

			return $titleFormat;
		}
		elseif ($text_transform == 2)
		{
			$titleFormat = $mbString ? mb_convert_case($title, MB_CASE_TITLE, "UTF-8") : ucwords(strtolower($title));

			return $titleFormat;
		}
		elseif ($text_transform == 3)
		{
			$titleFormat = $mbString ? mb_strtoupper($title, "UTF-8") : strtoupper($title);

			return $titleFormat;
		}
		elseif ($text_transform == 4)
		{
			$titleFormat = $mbString ? mb_strtolower($title, "UTF-8") : strtolower($title);

			return $titleFormat;
		}

		return $title;
	}

	/**
	 * Function to return formatted date (using globalization from iC Library)
	 *
	 * @since	3.6.0
	 */
	static public function dateToFormat($date)
	{
		// Date Format Option (Global Component Option)
		$date_format_global	= JComponentHelper::getParams('com_icagenda')->get('date_format_global', 'Y - m - d');

		// Date Format Option (Menu Option)
		$date_format_menu	= JFactory::getApplication()->getParams()->get('format', '');

		// Set Date Format option to be used
		$format				= $date_format_menu ? $date_format_menu : $date_format_global;

		// Separator Option
		$separator			= JFactory::getApplication()->getParams()->get('date_separator', ' ');

		if ( ! is_numeric($format))
		{
			// Update old Date Format options of versions before 2.1.7
			$format = str_replace(array('nosep', 'nosep', 'sepb', 'sepa'), '', $format);
			$format = str_replace('.', ' .', $format);
			$format = str_replace(',', ' ,', $format);
		}

		$dateFormatted = iCGlobalize::dateFormat($date, $format, $separator);

		return $dateFormatted;
	}

	/**
	 * Function to return formatted time
	 *
	 * @since	3.6.0
	 */
	static public function dateToTime($date)
	{
		$eventTimeZone	= null;
		$datetime		= JHtml::date($date, 'Y-m-d H:i', $eventTimeZone);
		$timeformat		= JFactory::getApplication()->getParams()->get('timeformat', 1);

		$lang_time		= ($timeformat == 1) ? 'H:i' : 'h:i A';

		$time			= date($lang_time, strtotime($datetime));

		return $time;
	}

	/**
	 * Function to return Website TAG
	 *
	 * @since	3.6.0
	 */
	static public function websiteTag($url)
	{
		$targetOption	= JComponentHelper::getParams('com_icagenda')->get('targetLink', '');
		$target			= ! empty($targetOption) ? '_blank' : '_parent';

		$link			= iCUrl::urlParsed($url, 'scheme');

		return '<a href="' . $link . '" rel="nofollow" target="' . $target . '">' . $url . '</a>';
	}

	/**
	 * Function to return File attachment TAG
	 *
	 * @since	3.6.0
	 */
	static public function fileTag($file)
	{
		return '<a class="icDownload" href="' . $file . '" rel="nofollow" target="_blank">' . JText::_('COM_ICAGENDA_EVENT_DOWNLOAD') . '</a>';
	}
}
