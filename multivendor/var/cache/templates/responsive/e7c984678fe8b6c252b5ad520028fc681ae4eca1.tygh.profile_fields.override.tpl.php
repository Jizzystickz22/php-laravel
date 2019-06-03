<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 17:43:06
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\vendor_plans\hooks\profiles\profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16636296135cb4987a71a010-89370603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7c984678fe8b6c252b5ad520028fc681ae4eca1' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\vendor_plans\\hooks\\profiles\\profile_fields.override.tpl',
      1 => 1555336629,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16636296135cb4987a71a010-89370603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'field' => 0,
    'pref_field_name' => 0,
    'id_prefix' => 0,
    'company_data' => 0,
    'default_plan' => 0,
    'skip_field' => 0,
    '_class' => 0,
    'data_name' => 0,
    'data_id' => 0,
    'disabled_param' => 0,
    'plan' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb4987a95a0f0_37289357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4987a95a0f0_37289357')) {function content_5cb4987a95a0f0_37289357($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value!=$_smarty_tpl->tpl_vars['field']->value['description']||$_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['plan_id'], null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
        <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_REQUEST['plan_id'], null, 0);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
        <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);?>
)</option>
        <?php } ?>
    </select>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/profiles/profile_fields.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
<div class="ty-control-group ty-profile-field__item ty-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['pref_field_name']->value!=$_smarty_tpl->tpl_vars['field']->value['description']||$_smarty_tpl->tpl_vars['field']->value['required']=="Y") {?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-profile-field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_smarty_tpl->tpl_vars['company_data']->value['plan_id'], null, 0);?>
    <?php if (!$_smarty_tpl->tpl_vars['default_plan']->value) {?>
        <?php $_smarty_tpl->tpl_vars['default_plan'] = new Smarty_variable($_REQUEST['plan_id'], null, 0);?>
    <?php }?>

    <select <?php if ($_smarty_tpl->tpl_vars['field']->value['autocomplete_type']) {?>x-autocompletetype="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['autocomplete_type'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-profile-field__select <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['_class']->value, ENT_QUOTES, 'UTF-8');
} else { ?>cm-skip-avail-switch<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
]" <?php if (!$_smarty_tpl->tpl_vars['skip_field']->value) {
echo $_smarty_tpl->tpl_vars['disabled_param']->value;
}?>>
        <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((!$_smarty_tpl->tpl_vars['default_plan']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['default_plan']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);?>
)</option>
        <?php } ?>
    </select>
</div>
<?php }
}?><?php }} ?>
