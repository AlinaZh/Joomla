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
 * @version     3.6.6 2016-12-07
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

?>
<div id="icagenda" class="ic-list-view<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading', 1)) : ?>
	<h1 class="componentheading">
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</h1>
	<?php endif; ?>

	<?php // Start List of events ?>
	<form id="icagenda-list"
		name="iclist"
		action="<?php echo JRoute::_('index.php?option=com_icagenda&view=list'); ?>"
		method="post">

		<?php // Search Filters ?>
		<?php if ($this->params->get('search_filters', '0') == 1) : ?>
			<?php echo $this->loadTemplate('filters'); ?>
		<?php endif; ?>

		<?php // Start Header ?>
		<div class="ic-clearfix">

			<?php // Header - Title / Subtitle ?>
			<?php echo $this->header; ?>

			<?php // Header - Categories Information ?>
			<?php echo $this->loadTemplate('categories'); ?>

		</div>
		<?php // End Header ?>

		<?php // Header - Pagination ?>
		<?php if ( in_array($this->params->get('navposition', 1), array('0', '2')) ) : ?>
			<div class="ic-clearfix">
				<?php echo $this->pagination; ?>
			</div>
		<?php endif; ?>

		<?php // List of events ?>
		<div class="ic-list-events ic-clearfix">
			<?php echo '<!-- ' . $this->template . ' -->'; ?>

			<?php foreach ($this->items as $k => $item) : ?>

				<?php // Get the date ?>
				<?php $evt = $this->evt[$k]; ?>

				<?php // Load preset data variables for list of events ?>
				<?php require $this->iclist_vars; ?>

				<?php // Load template to display each event in the list ?>
				<?php require $this->themeList; ?>

			<?php endforeach; ?>
		</div>

		<?php // AddThis buttons ?>
		<?php if ($this->params->get('atlist', 0) && $this->sharing) : ?>
			<div class="share ic-clearfix">
				<?php echo $this->sharing; ?>
			</div>
		<?php endif; ?>

		<?php // Navigation & pagination ?>
		<?php if ( in_array($this->params->get('navposition', 1), array('1', '2')) ) : ?>
			<div class="ic-clearfix">
				<?php echo $this->pagination; ?>
			</div>
		<?php endif; ?>

	</form>
	<?php // End List of events ?>

	<?php $this->dispatcher->trigger('onListAfterDisplay', array('com_icagenda.list', &$this->items, &$this->params)); ?>

</div>
