<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 17:01:35
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\newsletters\blocks\static_templates\subscribe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5242381325cb48ebf84c127-70460104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e3141b3e54b076112dd90ad060a566b0f11735' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\newsletters\\blocks\\static_templates\\subscribe.tpl',
      1 => 1555336626,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5242381325cb48ebf84c127-70460104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'config' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb48ebf9128f9_69338754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb48ebf9128f9_69338754')) {function content_5cb48ebf9128f9_69338754($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('stay_connected','email','enter_email','go','stay_connected','email','enter_email','go'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block ty-footer-form-block--responsive">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribe_form" class="cm-processing-personal-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />

        <h3 class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</h3>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"newsletters:email_subscription_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <div class="ty-footer-form-block__form-container">
            <div class="ty-footer-form-block__form ty-control-group ty-input-append cm-block-add-subscribe">
                <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo $_smarty_tpl->__("enter_email");?>
" class="cm-hint ty-input-text" />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"newsletters.add_subscriber",'alt'=>$_smarty_tpl->__("go")), 0);?>

            </div>
        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </form>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/newsletters/blocks/static_templates/subscribe.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/newsletters/blocks/static_templates/subscribe.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['newsletters']) {?>
<div class="ty-footer-form-block ty-footer-form-block--responsive">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="subscribe_form" class="cm-processing-personal-data">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="newsletter_format" value="2" />

        <h3 class="ty-footer-form-block__title"><?php echo $_smarty_tpl->__("stay_connected");?>
</h3>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"newsletters:email_subscription_block")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


        <div class="ty-footer-form-block__form-container">
            <div class="ty-footer-form-block__form ty-control-group ty-input-append cm-block-add-subscribe">
                <label class="cm-required cm-email hidden" for="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("email");?>
</label>
                <input type="text" name="subscribe_email" id="subscr_email<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" size="20" value="<?php echo $_smarty_tpl->__("enter_email");?>
" class="cm-hint ty-input-text" />
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"newsletters.add_subscriber",'alt'=>$_smarty_tpl->__("go")), 0);?>

            </div>
        </div>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"newsletters:email_subscription_block"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </form>
</div>
<?php }
}?><?php }} ?>
