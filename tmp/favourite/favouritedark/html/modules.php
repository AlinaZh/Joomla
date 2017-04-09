<?php

defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the submenu style, you would use the following include:
 * <jdoc:include type="module" name="test" style="submenu" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * Module chrome for rendering the module in a submenu
 */

function modChrome_no($module, &$params, &$attribs)
{
	if ($module->content) {
		echo $module->content;
	}
}

function modChrome_well($module, &$params, &$attribs)
{
	if ($module->content) {
		echo "<div class=\"well " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle)
		{
			echo "<div class=\"page-header\"><strong>" . $module->title . "</strong></div>";
		}
		echo $module->content;
		echo "</div>";
	}
}

function modChrome_icon( $module, &$params, &$attribs ) {

$app = JFactory::getApplication('site');
$template = $app->getTemplate(true);
$sfxn = htmlspecialchars($params->get( 'moduleclass_sfx' ));
$sfxnlt = substr($sfxn, -2);

if(is_numeric($sfxnlt)) {$sfxnl = $sfxnlt;} else {$sfxnl = substr($sfxn, -1);}

if (isset($sfxnl) && !empty($sfxnl)) {
$sfxe =  explode($sfxnl, $sfxn);
} else { $sfxe = array(); }
 
    if ($module->content) {
    echo '<div class="moduletable'.$sfxn.'" >';
     
    if ($template->params->get("sfx".$sfxnl."TitleIcon") && $sfxe[0] == "-sfx") { $icont = '<i class="fa '.$template->params->get("sfx".$sfxnl."TitleIcon").'"></i>';}
    else {$icont = '';}

    if ($module->showtitle) 
    {
      echo '<h3>'.$icont.$module->title .'</h3>';
    }
 
    echo $module->content;
 
    echo '</div>';
  } }

?>
