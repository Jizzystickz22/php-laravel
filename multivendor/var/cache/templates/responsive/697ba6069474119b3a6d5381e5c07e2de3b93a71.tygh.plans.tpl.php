<?php /* Smarty version Smarty-3.1.21, created on 2019-04-15 17:40:46
         compiled from "C:\laragon\www\multivendor\design\themes\responsive\templates\addons\vendor_plans\views\companies\components\plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21345235545cb497ee1bbe06-38622837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '697ba6069474119b3a6d5381e5c07e2de3b93a71' => 
    array (
      0 => 'C:\\laragon\\www\\multivendor\\design\\themes\\responsive\\templates\\addons\\vendor_plans\\views\\companies\\components\\plans.tpl',
      1 => 1555336629,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21345235545cb497ee1bbe06-38622837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'as_info' => 0,
    'plans' => 0,
    'plan_id' => 0,
    'plan' => 0,
    'hide' => 0,
    'commissionRound' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cb497ee5b7831_84601398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb497ee5b7831_84601398')) {function content_5cb497ee5b7831_84601398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/laragon/www/multivendor/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('vendor_plans.best_choice','vendor_plans.','vendor_plans.choose','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.transaction_fee_value','vendor_plans.vendor_store','vendor_plans.best_choice','vendor_plans.','vendor_plans.choose','vendor_plans.products_limit_value','vendor_plans.products_limit_unlimited','vendor_plans.revenue_up_to_value','vendor_plans.revenue_up_to_unlimited','vendor_plans.transaction_fee_value','vendor_plans.vendor_store'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><ul class="ty-vendor-plans<?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?> ty-vendor-plans-info cm-vendor-plans-info<?php }?>">
    <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(false, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?>
            <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(true, null, 0);?>
            <?php if ((!$_smarty_tpl->tpl_vars['plan_id']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['plan_id']->value) {?>
                <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php }?>
        <li class="ty-vendor-plans__item <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> active<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }?>" data-ca-plan-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?>
                <div class="ty-vendor-plan-current-plan">
                   <?php echo $_smarty_tpl->__("vendor_plans.best_choice");?>

                </div>
            <?php }?>
            <div class="ty-vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> vendor-plan-current<?php }?>">
                
                <?php if ($_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <p class="ty-vendor-plan-descr"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['plan']->value['description'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</p>
                <?php }?>
                
                <h3 class="ty-vendor-plan-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>
                
                <span class="ty-vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity']!='onetime') {?><span class="ty-vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['as_info']->value) {?>
                <div class="ty-vendor-plan-link">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("vendor_plans.choose"),'but_href'=>"companies.apply_for_vendor?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'but_role'=>"text",'but_meta'=>"ty-btn__secondary"), 0);?>

                </div>
                <?php }?>
                
                <div class="ty-vendor-plan-params">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array("[products]"=>$_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("revenue", null, null); ob_start(); ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>Smarty::$_smarty_vars['capture']['revenue']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php $_smarty_tpl->tpl_vars['commissionRound'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value->commissionRound(), null, 0);?>

                        <?php $_smarty_tpl->_capture_stack[0][] = array("fee_value", null, null); ob_start(); ?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?> + <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0);?>

                            <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0)||($_smarty_tpl->tpl_vars['commissionRound']->value>0)) {?>
                            <?php ob_start();
echo Smarty::$_smarty_vars['capture']['fee_value'];
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_tmp1));?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                </div>

            </div>
        </li>
    <?php } ?>
</ul>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/views/companies/components/plans.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/views/companies/components/plans.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><ul class="ty-vendor-plans<?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?> ty-vendor-plans-info cm-vendor-plans-info<?php }?>">
    <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(false, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['as_info']->value) {?>
            <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(true, null, 0);?>
            <?php if ((!$_smarty_tpl->tpl_vars['plan_id']->value&&$_smarty_tpl->tpl_vars['plan']->value['is_default'])||$_smarty_tpl->tpl_vars['plan']->value['plan_id']==$_smarty_tpl->tpl_vars['plan_id']->value) {?>
                <?php $_smarty_tpl->tpl_vars['hide'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php }?>
        <li class="ty-vendor-plans__item <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> active<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }?>" data-ca-plan-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?>
                <div class="ty-vendor-plan-current-plan">
                   <?php echo $_smarty_tpl->__("vendor_plans.best_choice");?>

                </div>
            <?php }?>
            <div class="ty-vendor-plan-content<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> vendor-plan-current<?php }?>">
                
                <?php if ($_smarty_tpl->tpl_vars['plan']->value['description']) {?>
                    <p class="ty-vendor-plan-descr"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['plan']->value['description'])===null||$tmp==='' ? "&nbsp;" : $tmp);?>
</p>
                <?php }?>
                
                <h3 class="ty-vendor-plan-header"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</h3>
                
                <span class="ty-vendor-plan-price"><?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['price'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['price']), 0);
} else {
echo $_smarty_tpl->__('free');
}?></span><?php if ($_smarty_tpl->tpl_vars['plan']->value['periodicity']!='onetime') {?><span class="ty-vendor-plan-price-period">/&nbsp;<?php echo $_smarty_tpl->__("vendor_plans.".((string)$_smarty_tpl->tpl_vars['plan']->value['periodicity']));?>
</span><?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['as_info']->value) {?>
                <div class="ty-vendor-plan-link">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("vendor_plans.choose"),'but_href'=>"companies.apply_for_vendor?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'but_role'=>"text",'but_meta'=>"ty-btn__secondary"), 0);?>

                </div>
                <?php }?>
                
                <div class="ty-vendor-plan-params">
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['plan']->value['products_limit']) {?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_value",array("[products]"=>$_smarty_tpl->tpl_vars['plan']->value['products_limit']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.products_limit_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php if (floatval($_smarty_tpl->tpl_vars['plan']->value['revenue_limit'])) {?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("revenue", null, null); ob_start(); ?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value['revenue_limit']), 0);?>

                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_value",array("[revenue]"=>Smarty::$_smarty_vars['capture']['revenue']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_plans.revenue_up_to_unlimited");?>

                        <?php }?>
                    </p>
                    <p>
                        <?php $_smarty_tpl->tpl_vars['commissionRound'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value->commissionRound(), null, 0);?>

                        <?php $_smarty_tpl->_capture_stack[0][] = array("fee_value", null, null); ob_start(); ?>
                            <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commissionRound']->value, ENT_QUOTES, 'UTF-8');?>
%
                            <?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['commissionRound']->value>0) {?> + <?php }?>
                                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['plan']->value->fixed_commission), 0);?>

                            <?php }?>
                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                        <?php if (($_smarty_tpl->tpl_vars['plan']->value->fixed_commission>0.0)||($_smarty_tpl->tpl_vars['commissionRound']->value>0)) {?>
                            <?php ob_start();
echo Smarty::$_smarty_vars['capture']['fee_value'];
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->__("vendor_plans.transaction_fee_value",array("[value]"=>$_tmp2));?>

                        <?php }?>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['vendor_store']) {?>
                        <p><?php echo $_smarty_tpl->__("vendor_plans.vendor_store");?>
</p>
                    <?php }?>
                </div>

            </div>
        </li>
    <?php } ?>
</ul>
<?php }?><?php }} ?>
