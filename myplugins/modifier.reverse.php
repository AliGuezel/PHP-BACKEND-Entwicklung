<?php  
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsModifier
 */
function smarty_modifier_reverse($string) {
    return strrev($string);
}
