<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 17:40:45
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\vendor_plans\views\companies\vendor_plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4192826995cb497eddf0c22-63892767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b351d4b5337edeb7eb630749596bb3c0025bcd8' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\vendor_plans\\views\\companies\\vendor_plans.tpl',
      1 => 1555336629,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4192826995cb497eddf0c22-63892767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'name' => 0,
    'vendor_plans' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb497ee0e8ed7_97741103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb497ee0e8ed7_97741103')) {function content_5cb497ee0e8ed7_97741103($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_plans.choose_your_plan','vendor_plans.select_plan_text','vendor_plans.choose_your_plan','vendor_plans.choose_your_plan','vendor_plans.select_plan_text','vendor_plans.choose_your_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-vendor-plans__title">
    <h1 class="ty-vendor-plans__title-header"><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</h1>
    <p class="ty-vendor-plans__title-desc"><?php echo $_smarty_tpl->__("vendor_plans.select_plan_text");?>
</p>
</div>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-vendor-plans-selector-value" />
<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/companies/components/plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('plans'=>$_smarty_tpl->tpl_vars['vendor_plans']->value), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span}><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/views/companies/vendor_plans.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/views/companies/vendor_plans.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-vendor-plans__title">
    <h1 class="ty-vendor-plans__title-header"><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</h1>
    <p class="ty-vendor-plans__title-desc"><?php echo $_smarty_tpl->__("vendor_plans.select_plan_text");?>
</p>
</div>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-vendor-plans-selector-value" />
<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_plans/views/companies/components/plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('plans'=>$_smarty_tpl->tpl_vars['vendor_plans']->value), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span}><?php echo $_smarty_tpl->__("vendor_plans.choose_your_plan");?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
