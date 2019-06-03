<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:10:41
         compiled from "C:\laragon\www\multivendor\design\backend\templates\addons\vendor_plans\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18150441295cb482d1367266-02554995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfdab4afe25ce2409028119f643c570b1a1273a' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\addons\\vendor_plans\\hooks\\index\\scripts.post.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18150441295cb482d1367266-02554995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans_payments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb482d1396a92_19810990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb482d1396a92_19810990')) {function content_5cb482d1396a92_19810990($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\block.inline_script.php';
?><?php if ($_smarty_tpl->tpl_vars['vendor_plans_payments']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$.get('<?php echo fn_url('vendor_plans.async?is_ajax=1','A','current');?>
');
});
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
