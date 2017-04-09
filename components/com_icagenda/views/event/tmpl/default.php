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
 * @version 	3.6.0 2015-10-13
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

// Shortcut for item
$item = $this->item;
?>

<div id="icagenda" class="ic-event-view<?php echo $this->pageclass_sfx; ?>">

	<?php // Top Buttons ?>
	<?php echo $this->loadTemplate('top'); ?>

	<?php
	echo "<!-- " . $this->template . " -->";

	// iCagenda Vars
	require_once $this->icevent_vars;

	// Theme Pack layout
	require_once $this->themeEvent;
	?>

</div>
<div>&nbsp;</div>

<?php
$this->dispatcher->trigger('onEventAfterDisplay', array('com_icagenda.event', &$item, &$this->params));
