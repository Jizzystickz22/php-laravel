<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:20:35
         compiled from "C:\laragon\www\multivendor\design\backend\templates\common\previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12250975015cb4852377c256-96186313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63dc22d97a241e35f3df9c159f9640f22c804a14' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\common\\previewer.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12250975015cb4852377c256-96186313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb4852378f4e3_97643529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4852378f4e3_97643529')) {function content_5cb4852378f4e3_97643529($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
