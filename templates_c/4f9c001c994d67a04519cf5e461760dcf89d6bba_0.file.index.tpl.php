<?php
/* Smarty version 4.2.1, created on 2022-10-28 12:45:28
  from 'C:\xampp\htdocs\Dropbox\php_fortgeschritten_18_10_2022\Smarty\templates2\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_635bb2c80b81d2_14843811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f9c001c994d67a04519cf5e461760dcf89d6bba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\templates2\\index.tpl',
      1 => 1666940234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:hallowelt.tpl' => 1,
  ),
),false)) {
function content_635bb2c80b81d2_14843811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\classes\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\Dropbox\\php_fortgeschritten_18_10_2022\\Smarty\\classes\\myplugins\\modifier.reverse.php','function'=>'smarty_modifier_reverse',),));
?>
<html>
<head>
<title>Info</title>

<?php echo '<script'; ?>
>
    function alarm(){alert('ALARM');}
<?php echo '</script'; ?>
>

</head>
<body>

<pre>
User Information:

Name: <?php echo smarty_modifier_reverse(smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'),10));?>

Address: <?php echo strrev($_smarty_tpl->tpl_vars['address']->value);?>

</pre>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obst']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <li><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['value']->value ?? '', 'UTF-8');?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
</ul>

<?php if ($_smarty_tpl->tpl_vars['name']->value == 'Fred') {?>
    Welcome Sir.
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'Wilma') {?>
    Welcome Ma'am.
<?php } else { ?>
    Welcome, whatever you are.
<?php }?>


<?php $_smarty_tpl->_subTemplateRender('file:hallowelt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
</body>
</html>
<?php }
}
