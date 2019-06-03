<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:10:33
         compiled from "C:\laragon\www\multivendor\design\backend\templates\addons\help_tutorial\components\video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5110735275cb482c9311380-36788946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e169f7913bae0644552a968bd5c7aebe6b469d3' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\addons\\help_tutorial\\components\\video.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5110735275cb482c9311380-36788946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'open' => 0,
    'key' => 0,
    'width' => 0,
    'hash' => 0,
    'align' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb482c93a81c5_89030515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb482c93a81c5_89030515')) {function content_5cb482c93a81c5_89030515($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\block.inline_script.php';
?><div class="help-tutorial-wrapper"><div class="help-tutorial-content clearfix <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value)>1) {?>help-tutorial-content_width_big<?php }
if ($_smarty_tpl->tpl_vars['open']->value) {?> open<?php }?>" id="help_tutorial_content"><?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value)>1) {
$_smarty_tpl->tpl_vars["width"] = new Smarty_variable("460", null, 0);
} else {
$_smarty_tpl->tpl_vars["width"] = new Smarty_variable("640", null, 0);
}
$_smarty_tpl->tpl_vars["align"] = new Smarty_variable("left", null, 0);
$_smarty_tpl->tpl_vars['hash'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hash']->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hash']->key => $_smarty_tpl->tpl_vars['hash']->value) {
$_smarty_tpl->tpl_vars['hash']->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars['hash']->key;
if ($_smarty_tpl->tpl_vars['key']->value==1) {
$_smarty_tpl->tpl_vars["align"] = new Smarty_variable("right", null, 0);
}?><div class="help-tutorial-iframe-wrapper"><iframe width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hash']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0&html5=1" frameborder="0" allowfullscreen align="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['align']->value, ENT_QUOTES, 'UTF-8');?>
"></iframe></div><?php } ?></div></div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $(function() {
            $('#help_tutorial_link').on('click', function() {
                $(this).toggleClass('open');
                $('.help-tutorial-wrapper').toggleClass('open');
                $('#help_tutorial_content').toggleClass('open');
            });
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>
