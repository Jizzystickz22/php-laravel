<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:20:18
         compiled from "C:\laragon\www\multivendor\design\backend\templates\common\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5948158785cb4851240cb51-71240143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65637cbd928d7efaa2c8be60c8181f42079ca741' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\common\\tooltip.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5948158785cb4851240cb51-71240143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb485124315d4_33706173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb485124315d4_33706173')) {function content_5cb485124315d4_33706173($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
