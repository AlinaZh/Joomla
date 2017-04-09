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
 * @version     3.6.0 2016-06-30
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

/**
 * class icagendaGooglemaps
 */
class icagendaGooglemaps
{
	/**
	 * Function to display Google Map
	 *
	 * @since	3.6.0
	 */
	static public function display($item)
	{
		// Hide/Show Option
		$GoogleMaps			= JComponentHelper::getParams('com_icagenda')->get('GoogleMaps', 1);

		// Access Levels Option
		$accessGoogleMaps	= JComponentHelper::getParams('com_icagenda')->get('accessGoogleMaps', 1);

		$markerLat			= self::lat($item);
		$markerLng			= self::lng($item);

		if ($GoogleMaps == 1
			&& icagendaEvents::accessLevels($accessGoogleMaps)
			&& $markerLat != NULL
			&& $markerLng != NULL
			)
		{
			return true;
		}

		return false;
	}

	/**
	 * Function to return Google Map
	 *
	 * @since	3.6.0
	 */
	static public function map($item)
	{
		$params			= JFactory::getApplication()->getParams();
		$map_width		= $params->get('m_width', '100%');
		$map_height		= $params->get('m_height', '300px');

		$markerLat		= self::lat($item);
		$markerLng		= self::lng($item);
		$mapID			= $item->id;

		$iCgmap = '<div class="icagenda_map" id="map_canvas' . (int) $mapID . '"';
		$iCgmap.= ' style="width:' . $map_width . '; height:' . $map_height . '">';
		$iCgmap.= '</div>';
		$iCgmap.= '<script type="text/javascript">';
		$iCgmap.= 'initialize(' . $markerLat . ', ' . $markerLng . ', ' . (int) $mapID . ');';
		$iCgmap.= '</script>';

		return $iCgmap;
	}

	/**
	 * Function to return Latitude
	 *
	 * @since	3.6.0
	 */
	static public function lat($item)
	{
		// Convert old coordinate value to latitude
		if ($item->coordinate != NULL
			&& $item->lat == '0.0000000000000000')
		{
			$ex			= explode(', ', $item->coordinate);
			$latitude	= $ex[0];
		}
		else
		{
			$latitude	= ($item->lat != '0.0000000000000000') ? $item->lat : NULL;
		}

		return $latitude;
	}

	/**
	 * Function to return Longitude
	 *
	 * @since	3.6.0
	 */
	static public function lng($item)
	{
		if ($item->coordinate != NULL
			&& $item->lng == '0.0000000000000000')
		{
			$ex			= explode(', ', $item->coordinate);
			$longitude	= $ex[1];
		}
		else
		{
			$longitude	= ($item->lng != '0.0000000000000000') ? $item->lng : NULL;
		}

		return $longitude;
	}

	/**
     * Load Google Maps Scripts.
     *
	 * @param   type   show (display map) or edit (create and set map values)
     *
     * @since   3.5.0
     */
	public static function loadGMapScripts($type = 'show')
	{
		// Google Maps api V3
		$document      = JFactory::getDocument();
		$scripts       = array_keys($document->_scripts);
		$gmapApiLoaded = false;

		for ($i = 0; $i < count($scripts); $i++)
		{
    		if ( stripos($scripts[$i], 'maps.googleapis.com') !== false
    			&& stripos($scripts[$i], 'maps.gstatic.com') !== false )
			{
				$gmapApiLoaded = true;
			}
		}

		if ( ! $gmapApiLoaded)
		{
			$curlang   = $document->language;
			$lang      = substr($curlang, 0, 2);
			$key       = JComponentHelper::getParams('com_icagenda')->get('googlemaps_browser_key', '');
			$client_id = JComponentHelper::getParams('com_icagenda')->get('googlemaps_client_id', '');
			$client    = (substr($client_id, 0, 4) === 'gme-') ? $client_id : 'gme-' . $client_id;

			// Google Maps API variables
			$apiLang   = '?language=' . $lang;
			$apiLib    = '&librairies=places';
			$apiKey    = ($key && ! $client_id) ? '&key=' . $key : '';
			$apiClient = $client_id ? '&client=' . $client : '';

			$document->addScript('https://maps.googleapis.com/maps/api/js' . $apiLang . $apiLib . $apiKey . $apiClient);
		}

		if ($type == 'show')
		{
			JHtml::script('com_icagenda/icmap-front.js', false, true);
		}
		else
		{
			JHtml::script('com_icagenda/icmap.js', false, true);
		}
	}
}
