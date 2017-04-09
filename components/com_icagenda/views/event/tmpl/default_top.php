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
 * @version     3.6.6 2016-12-02
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

$app        = JFactory::getApplication();
$isSef      = $app->getCfg('sef');
$item       = $this->item;
$iCicons    = new iCicons();

$uri        = JUri::getInstance()->toString();
$evt_id     = $app->input->get('id', 0);
$event_link = JRoute::_('index.php?option=com_icagenda&view=event&id=' . $evt_id);

$print_url  = ($isSef == 1) ? $event_link . '?tmpl=component' : $event_link . '&tmpl=component';
$ical_url   = ($isSef == 1) ? $uri . '?vcal=1' : $uri . '&vcal=1';
$ical_url   = preg_replace('/\?date=[^\?]*/', '', $ical_url);
$ical_url   = preg_replace('/&date=[^&]*/', '', $ical_url);
?>

<?php // Top Buttons ?>
<div class="ic-top-buttons">

<?php if ($app->input->get('tmpl') != 'component') : ?>

	<?php // Back button ?>
	<div class="ic-back ic-clearfix">
		<?php echo $item->backArrow; ?>
	</div>

	<div class="ic-buttons ic-clearfix">

		<?php // Print icon ?>
		<?php if ($this->iconPrint_global == 2) : ?>
		<div class="ic-icon">
			<?php echo $iCicons->showIcon('printpreview', $print_url); ?>
		</div>
		<?php endif; ?>

		<?php // Add to Cal icon ?>
		<?php if ($this->iconAddToCal_global == 2) :  ?>
		<div class="ic-icon">
			<?php echo $iCicons->showIcon('vcal', $uri, $ical_url, $item->googleCalendar, $item->windowsliveCalendar, $item->yahooCalendar); ?>
		</div>
		<?php endif; ?>

		<?php // Manager Icons ?>
		<div class="ic-icon">
			<?php echo $item->managerToolBar; ?>
		</div>

	</div>

<?php else : ?>

	<?php // Print Icon ?>
	<div class="ic-printpopup-btn">
		<?php echo $iCicons->showIcon('print'); ?>
	</div>

<?php endif; ?>

</div>
