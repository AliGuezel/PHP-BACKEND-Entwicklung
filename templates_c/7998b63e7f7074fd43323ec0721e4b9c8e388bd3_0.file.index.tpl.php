<?php
/* Smarty version 4.2.1, created on 2022-10-27 12:17:26
  from 'C:\xampp\htdocs\Dropbox\php_fortgeschritten_18_10_2022\Smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635a5ab66e4e66_54756527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7998b63e7f7074fd43323ec0721e4b9c8e388bd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\templates\\index.tpl',
      1 => 1666865812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a5ab66e4e66_54756527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\classes\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\classes\\plugins\\modifier.reverse.php','function'=>'smarty_modifier_reverse',),));
?>
<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo smarty_modifier_reverse(smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'),10));?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

</body>
</html>
<?php }
}
