<?php /* Smarty version Smarty-3.0.4, created on 2015-07-02 18:27:23
         compiled from "/var/www/blog.mtt.ru/public_html/manager/templates/default/element/tv/renders/inputproperties/number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12871244815595585bd8b7a8-35019003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4288bf71863f294b08299e71cb0d62dbe9ba8f20' => 
    array (
      0 => '/var/www/blog.mtt.ru/public_html/manager/templates/default/element/tv/renders/inputproperties/number.tpl',
      1 => 1435247116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12871244815595585bd8b7a8-35019003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/blog.mtt.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,labelAlign: 'top'
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('number_allowdecimals')
        ,name: 'inopt_allowDecimals'
        ,id: 'inopt_allowDecimals<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowDecimals'] || true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowDecimals<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('allowdecimals_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('number_allownegative')
        ,name: 'inopt_allowNegative'
        ,id: 'inopt_allowNegative<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowNegative'] || true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowNegative<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('allownegative_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'numberfield'
        ,fieldLabel: _('number_decimalprecision')
        ,name: 'inopt_decimalPrecision'
        ,id: 'inopt_decimalPrecision<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['decimalPrecision'] || 2
        ,width: 100
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_decimalPrecision<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('decimalprecision_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('number_decimalseparator')
        ,name: 'inopt_decimalSeparator'
        ,id: 'inopt_decimalSeparator<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['decimalSeparator'] || '.'
        ,width: 100
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_decimalSeparator<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('decimalseparator_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('number_maxvalue')
        ,name: 'inopt_maxValue'
        ,id: 'inopt_maxValue<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['maxValue'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_maxValue<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('maxvalue_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('number_minvalue')
        ,name: 'inopt_minValue'
        ,id: 'inopt_minValue<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['minValue'] || ''
        ,width: 300
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_minValue<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('minvalue_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

