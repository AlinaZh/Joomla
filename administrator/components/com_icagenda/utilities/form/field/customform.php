<?php
/**
 *------------------------------------------------------------------------------
 *  iC Library - Library by Jooml!C, for Joomla!
 *------------------------------------------------------------------------------
 * @package     iC Library
 * @subpackage  Fields
 * @copyright   Copyright (c)2012-2016 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @version     3.6.0 2015-12-16
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

//jimport('joomla.form.formfield');
JFormHelper::loadFieldClass('list');

/**
 * Custom form groups multiple select form field
 */
class icagendaFormFieldCustomform extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since   3.6.0
	 */
	protected $type = 'customform';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 * @since   3.6.0
	 */
	protected function getInput()
	{
		$value = isset($this->value) ? $this->value : '';

		$options = array();

		foreach($this->getOptions() as $opt)
		{
			$options[] = JHTML::_('select.option', $opt->value, $opt->option);
		}

		return JHtml::_('select.genericlist', $options, $this->name, 'class="inputbox" multiple', 'value', 'text', $value);
	}

	/**
	 * Method to get the field options.
	 *
	 * @return	array	The field option objects.
	 * @since	3.6.0
	 */
	protected function getOptions()
	{
		$options = array();

		$db	= JFactory::getDbo();
		$query	= $db->getQuery(true);

		$query->select('f.*');
		$query->from($db->qn('#__icagenda_filters') . ' AS f');
		$query->where($db->qn('type') . ' = "customfield"');
		$query->where($db->qn('filter') . ' = "groups"');
		$query->where($db->qn('state') . ' = 1');

		$query->order('f.option ASC');

		// Get the options.
		$db->setQuery($query);

		$options = $db->loadObjectList();

		// Check for a database error.
		if ($db->getErrorNum())
		{
			JError::raiseWarning(500, $db->getErrorMsg());
		}

		return $options;
	}
}
