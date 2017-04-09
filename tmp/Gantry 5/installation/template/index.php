<?php
/**
 * @package	Joomla.Installation
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

// Add Stylesheets
JHtml::_('bootstrap.loadCss', true, $this->direction);
JHtml::_('stylesheet', 'installation/template/css/template.css');
JHtml::_('stylesheet', 'installation/template/css/rt_installer.css');

// Load the JavaScript behaviors
JHtml::_('bootstrap.framework');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
JHtml::_('script', 'installation/template/js/installation.js');

// Load the JavaScript translated messages
JText::script('INSTL_PROCESS_BUSY');
JText::script('INSTL_FTP_SETTINGS_CORRECT');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<!--[if lt IE 9]>
			<script src="../media/jui/js/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			jQuery(function()
			{
				// Delay instantiation after document.formvalidation and other dependencies loaded
				window.setTimeout(function(){
					window.Install = new Installation('container-installation', '<?php echo JUri::current(); ?>');
				}, 500);
			});
		</script>
	</head>
	<body data-basepath="<?php echo JURI::root(true); ?>" class="rt-installation">
		<!-- Header -->
		<div class="header">
			<div class="rt-bg-star">
				<div class="rt-top-space">
					<div class="rt-logo">
						<img src="<?php echo $this->baseurl ?>/template/images/rocketlauncher.png" alt="RocketLauncher" />
					</div>
					<div class="rt-jlogo">
						<img src="<?php echo $this->baseurl ?>/template/images/rt-joomla.png" alt="Joomla" />
					</div>
				</div>
				<div class="rt-bg-overlay">
					<div class="rt-jlicense">
                        <?php // Fix wrong display of Joomla!® in RTL language ?>
                        <?php if (JFactory::getLanguage()->isRtl()) : ?>
                            <?php $joomla = '<a href="https://www.joomla.org" target="_blank">Joomla!</a><sup>&#174;&#x200E;</sup>'; ?>
                        <?php else : ?>
                            <?php $joomla = '<a href="https://www.joomla.org" target="_blank">Joomla!</a><sup>&#174;</sup>'; ?>
                        <?php endif; ?>
						<?php
						$license = '<a data-toggle="modal" href="#licenseModal">' . JText::_('INSTL_GNU_GPL_LICENSE') . '</a>';
				        echo JText::sprintf('JGLOBAL_ISFREESOFTWARE', $joomla, $license);
				        ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Container -->
		<div class="rt-content">
		<div class="container">
			<jdoc:include type="message" />
			<div id="javascript-warning">
				<noscript>
					<div class="alert alert-error">
						<?php echo JText::_('INSTL_WARNJAVASCRIPT'); ?>
					</div>
				</noscript>
			</div>
			<div id="container-installation">
				<jdoc:include type="component" />
			</div>
			<hr />
				<div class="rt-logo-footer">
					<img src="<?php echo $this->baseurl ?>/template/images/rockettheme.png" alt="RocketTheme" />
				</div>
			</div>
		</div>
		<!-- GPL License Modal-->
		<div id="licenseModal" class="modal fade">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3><?php echo JText::_('INSTL_GNU_GPL_LICENSE'); ?></h3>
			</div>
			<div class="modal-body">
				<iframe src="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html" class="thumbnail span6 license" height="550" marginwidth="25" scrolling="auto"></iframe>
			</div>
		</div>
		<script>
			function initElements()
			{
				(function($){
					$('.hasTooltip').tooltip()

					// Chosen select boxes
					$("select").chosen({
						disable_search_threshold : 10,
						allow_single_deselect : true
					});

					// Turn radios into btn-group
					$('.radio.btn-group label').addClass('btn');

					$('fieldset.btn-group').each(function() {
						// Handle disabled, prevent clicks on the container, and add disabled style to each button
						if ($(this).prop('disabled')) {
							$(this).css('pointer-events', 'none').off('click');
							$(this).find('.btn').addClass('disabled');
						}
					});

					$(".btn-group label:not(.active)").click(function()
					{
						var label = $(this);
						var input = $('#' + label.attr('for'));

						if (!input.prop('checked'))
						{
							label.closest('.btn-group').find("label").removeClass('active btn-success btn-danger btn-primary');
							if(input.val()== '')
							{
									label.addClass('active btn-primary');
							 } else if(input.val()==0 || input.val()=='remove')
							{
									label.addClass('active btn-danger');
							 } else {
							label.addClass('active btn-success');
							 }
							input.prop('checked', true);
						}
					});
					$(".btn-group input[checked='checked']").each(function()
					{
						if ($(this).val()== '')
						{
						   $("label[for=" + $(this).attr('id') + "]").addClass('active btn-primary');
						} else if($(this).val()==0 || $(this).val()=='remove')
						{
						   $("label[for=" + $(this).attr('id') + "]").addClass('active btn-danger');
						} else {
							$("label[for=" + $(this).attr('id') + "]").addClass('active btn-success');
						}
					});
				})(jQuery);
			}
			initElements();
		</script>

	</body>
</html>
