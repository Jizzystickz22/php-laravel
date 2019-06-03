<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:40:20
         compiled from "C:\laragon\www\multivendor\design\backend\templates\common\sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20530323825cb489c4073651-79647764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49782ed383e6e081edce3ab3363844b0fd6ecf94' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\common\\sidebox.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20530323825cb489c4073651-79647764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb489c4099f69_57745499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb489c4099f69_57745499')) {function content_5cb489c4099f69_57745499($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
