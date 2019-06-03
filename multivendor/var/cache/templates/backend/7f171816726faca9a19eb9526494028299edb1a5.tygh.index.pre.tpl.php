<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 16:10:25
         compiled from "C:\laragon\www\multivendor\design\backend\templates\addons\vendor_debt_payout\hooks\index\index.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16201823365cb482c13ea3c8-30628197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f171816726faca9a19eb9526494028299edb1a5' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\index.pre.tpl',
      1 => 1550487342,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16201823365cb482c13ea3c8-30628197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_block_alert' => 0,
    'block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb482c140dff4_20533498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb482c140dff4_20533498')) {function content_5cb482c140dff4_20533498($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_block_alert']->value) {?>
    <div class="alert alert-block alert-error debt-notification">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['block_alert']->value;?>

        </div>
        <div class="debt-notification__button">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_debt_payout/views/vendor_debt_payout/components/pay_debt_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pay_debt_class'=>"btn-large"), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
