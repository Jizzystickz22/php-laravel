<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:10:41
         compiled from "C:\laragon\www\multivendor\design\backend\templates\addons\advanced_import\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17435451435cb482d11fbd80-04902256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4fb67691c5ec243bdc0185c20ce281e8925fde' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\addons\\advanced_import\\hooks\\index\\scripts.post.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17435451435cb482d11fbd80-04902256',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb482d122b4d0_82384252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb482d122b4d0_82384252')) {function content_5cb482d122b4d0_82384252($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('advanced_import.cant_save_preset_invalid_modifiers'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/read_more.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        _.tr({
            "advanced_import.cant_save_preset_invalid_modifiers":
                "<?php echo strtr($_smarty_tpl->__("advanced_import.cant_save_preset_invalid_modifiers"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
