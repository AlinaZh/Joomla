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
 * @version     3.6.6 2016-12-20
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

JHtml::_('behavior.keepalive');

if (version_compare(JVERSION, '3.3.6', 'le'))
{
	// For versions from 2.5 to 3.3.6
	JHtml::_('behavior.formvalidation');
}
else
{
	// For versions from 3.4
	JHtml::_('behavior.formvalidator');
}

// Get the core Joomla objects
$app			= JFactory::getApplication();
$document		= JFactory::getDocument();

// Shortcut for item
$item			= $this->item;

// Form Validation (Only Server side validation (1), or Client & Server validation (default))
$form_validate	= ($this->reg_form_validation == 1) ? '' : ' form-validate';
$novalidate		= ($this->reg_form_validation == 1) ? ' novalidate' : '';

// Load custom fields
$customFields	= icagendaCustomfields::getCustomFields(1, $item->params->get('custom_form', ''));
$listSlugs		= icagendaCustomfields::listSlugs($customFields);

// Terms
$terms			= $this->params->get('terms', 0);
$session		= JFactory::getSession();
$ic_submit_tos	= $session->get('ic_submit_tos', '');
?>

<div id="icagenda" class="ic-registration-view<?php echo $this->pageclass_sfx; ?>">

	<?php echo "<!-- " . $this->template . " -->"; ?>

	<?php // iCagenda Vars ?>
	<?php require_once $this->icevent_vars; ?>

	<?php // Theme Pack layout (Header) ?>
	<?php require_once $this->themeRegistration; ?>

	<?php // START CONTENT ?>

	<?php // TITLE REGISTRATION ?>
	<div class="ic-form-title">
		<h1><?php echo JText::_('COM_ICAGENDA_REGISTRATION_TITLE'); ?></h1>
	</div>

	<?php // FIELDS REQUIRED INFO ?>
	<div class="ic-required-info">
		<?php echo JText::_('COM_ICAGENDA_FORM_REQUIRED_INFO'); ?>
	</div>

	<?php // START FORM ?>
	<form class="<?php echo $form_validate; ?> form-horizontal well"
		id="icagenda-registration"
		action="<?php echo JRoute::_('index.php?option=com_icagenda&task=registration.register'); ?>"
		method="post"
		enctype="multipart/form-data"<?php echo $novalidate; ?>
		>


		<?php // CORE FIELDS (fieldset 'default') ?>
		<?php $fields = $this->form->getFieldset('default'); ?>
		<?php if (count($fields)) : ?>
			<fieldset>
			<?php // Iterate through the fields in the set and display them. ?>
			<?php foreach ($fields as $field) : ?>
				<?php $name = str_replace(array('[', ']', 'jform'), '', $field->name); ?>
				<?php // If display this core field, and not overrided in custom fields. ?>
				<?php if (isset($this->coreFields[$name]) && $this->coreFields[$name] && ! in_array('core_' . $name, $listSlugs)) : ?>
					<?php // If field date OR field is readonly, no infotip and label tooltip. ?>
					<?php if (($name == 'date') || $field->readonly) : ?>
						<?php $infoTip = ''; ?>
						<?php //if (version_compare(JVERSION, '3.0', 'ge')) $field->description = ''; ?>
						<?php $this->form->setFieldAttribute($name, 'description', ''); ?>
					<?php // Set the infotip and remove label tooltip. ?>
					<?php elseif ($field->description) : ?>
						<?php $infoTip = '<span class="iCFormTip iCicon iCicon-info-circle" title="'; ?>
						<?php $infoTip.= htmlspecialchars('<strong>' . JText::_($field->title) . '</strong><br />' . JText::_($field->description)); ?>
						<?php $infoTip.= '"></span>'; ?>
						<?php $this->form->setFieldAttribute($name, 'description', ''); ?>
					<?php else : ?>
						<?php $infoTip = ''; ?>
					<?php endif; ?>
					<?php // If the field is hidden or only one ticket per registration, just display the hidden input. ?>
					<?php if ($field->hidden || ($name == 'people' && $item->tickets == 1)) : ?>
						<?php echo $this->form->getInput($name); ?>
					<?php else : ?>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel($name); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput($name); ?>
								<?php echo $infoTip; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</fieldset>
		<?php endif; ?>


		<?php // CUSTOM FIELDS ?>
		<?php if ($customFields && count($customFields)) : ?>
			<?php // Load Custom fields - Registration form (1); ?>
			<?php icagendaCustomfields::loader(1, $item->params->get('custom_form', ''), $customFields); ?>
			<fieldset>
			<?php // Iterate through the fields in the set and display them. ?>
			<?php foreach ($customFields as $field) : ?>
				<?php $infoTip = ''; ?>
				<?php if ($field->description) : ?>
					<?php $infoTip.= '<span class="iCFormTip iCicon iCicon-info-circle" title="'; ?>
					<?php $infoTip.= htmlspecialchars('<strong>' . JText::_($field->title) . '</strong><br />' . JText::_($field->description)); ?>
					<?php $infoTip.= '"></span>'; ?>
					<?php $this->form->setFieldAttribute($field->slug, 'description', ''); ?>
				<?php endif; ?>
				<?php // If the field is hidden, just display the input. ?>
				<?php if ($field->type == 'hidden') : ?>
					<?php echo $this->form->getInput($field->slug); ?>
				<?php else : ?>
					<div class="control-group">
						<div class="control-label">
							<?php echo $this->form->getLabel($field->slug); ?>
						</div>
						<div class="controls">
							<?php echo $this->form->getInput($field->slug); ?>
							<?php echo $infoTip; ?>
						</div>
					</div>
					<?php // If Override Email, add the email2 field (if enabled in global options). ?>
					<?php if ($field->slug == 'email') : ?>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel('email2'); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput('email2'); ?>
								<?php echo $infoTip; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</fieldset>
		<?php endif; ?>


		<?php // EXTRA FIELDS (fieldset 'extra', not enabled by default) ?>
		<?php $fields = $this->form->getFieldset('extra'); ?>
		<?php if (count($fields)) : ?>
			<fieldset>
			<?php // Iterate through the fields in the set and display them. ?>
			<?php foreach ($fields as $field) : ?>
				<?php $name = str_replace(array('[', ']', 'jform'), '', $field->name); ?>
				<?php if (isset($this->extraFields[$name]) && $this->extraFields[$name]) : ?>
					<?php // If the field is hidden, just display the input. ?>
					<?php if ($field->hidden) : ?>
						<?php echo $this->form->getInput($name); ?>
					<?php else : ?>
						<div class="control-group">
							<div class="control-label">
								<?php echo $this->form->getLabel($name); ?>
							</div>
							<div class="controls">
								<?php echo $this->form->getInput($name); ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</fieldset>
		<?php endif; ?>


		<?php // HIDDEN FIELDS (fieldset 'hidden') ?>
		<?php $eventid = $app->input->getInt('id'); ?>
		<?php $menuid  = $app->input->getInt('Itemid'); ?>

		<?php $fields = $this->form->getFieldset('hidden'); ?>
		<?php if (count($fields)) : ?>
			<fieldset>
			<?php // Iterate through the fields in the set and display them. ?>
			<?php foreach ($fields as $field) : ?>
				<?php $name = str_replace(array('[', ']', 'jform'), '', $field->name); ?>
				<?php if ($field->hidden) : ?>
					<?php echo $this->form->getInput($name, null, ${$name}); ?>
				<?php endif; ?>
			<?php endforeach; ?>
			</fieldset>
		<?php endif; ?>

		<?php // Input to process registration function, not saved in database ?>
		<input name="jform[type_registration]" type="hidden" value="<?php echo $item->params->get('typeReg', '1'); ?>" />
		<input name="jform[current_url]" type="hidden" value="<?php echo JUri::getInstance()->toString(); ?>" />
		<input name="jform[max_nb_of_tickets]" type="hidden" value="<?php echo $item->params->get('maxReg', '1000000'); ?>" />

		<?php // Form Submit or Cancel ?>
		<div class="control-group" id="submit">
			<div class="controls">
				<button class="btn btn-primary validate" type="submit"><?php echo JText::_('JREGISTER'); ?></button>
				<input name="eventID" type="hidden" value="<?php echo $eventid; ?>" />
				<input name="option" type="hidden" value="com_icagenda" />
				<input name="task" type="hidden" value="registration.register" />
				<?php echo JHtml::_('form.token'); ?>
				<a class="btn" href="<?php echo icagendaEvent::eventURL($item); ?>" title="<?php echo JTEXT::_('COM_ICAGENDA_CANCEL'); ?>">
					<?php echo JTEXT::_('COM_ICAGENDA_CANCEL'); ?>
				</a>
			</div>
		</div>
	</form>
</div>

<?php
// Add iCtip declaration
$document->addScriptDeclaration('
	jQuery(document).ready(function(){
		jQuery(".iCFormTip").tipTip({maxWidth: "250px", defaultPosition: "right", edgeOffset: 10});
	});
');

// Disable submit button after first click (TODO : check and simplify)
$document->addScriptDeclaration('
	jQuery(function($) {
		$("#icagenda-registration").one("submit", function() {
			$(this).find(\'button[type="submit"]\')
				.attr("disabled","disabled")
				.css({
					"background-color": "transparent",
					"color": "grey"
				});
			$("#submit").addClass("ic-loader");
			$(".buttonx").css("display", "none");
		});
	});
');
