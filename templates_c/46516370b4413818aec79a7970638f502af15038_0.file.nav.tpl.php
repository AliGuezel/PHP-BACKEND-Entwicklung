<?php
/* Smarty version 4.2.1, created on 2022-10-28 09:12:34
  from 'C:\xampp\htdocs\Dropbox\php_fortgeschritten_18_10_2022\SmartyWebsite2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635b80e27aa5a6_94364666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46516370b4413818aec79a7970638f502af15038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\SmartyWebsite2\\templates\\nav.tpl',
      1 => 1666941100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:kontakt.tpl' => 1,
    'file:impressum.tpl' => 1,
    'file:startseite.tpl' => 2,
  ),
),false)) {
function content_635b80e27aa5a6_94364666 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_GET['nav']))) {?>
    <?php if ($_GET['nav'] == 'kontakt') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:kontakt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_GET['nav'] == 'impressum') {?>    
        <?php $_smarty_tpl->_subTemplateRender("file:impressum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:startseite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>    
<?php } else { ?>    
    <?php $_smarty_tpl->_subTemplateRender("file:startseite.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
