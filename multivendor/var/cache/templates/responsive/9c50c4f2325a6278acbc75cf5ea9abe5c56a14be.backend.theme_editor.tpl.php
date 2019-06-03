<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 17:01:46
         compiled from "C:\laragon\www\multivendor\design\backend\templates\common\theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3205329405cb48eca5eea88-60841611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c50c4f2325a6278acbc75cf5ea9abe5c56a14be' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\common\\theme_editor.tpl',
      1 => 1550487342,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '3205329405cb48eca5eea88-60841611',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb48eca613492_16721560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb48eca613492_16721560')) {function content_5cb48eca613492_16721560($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
