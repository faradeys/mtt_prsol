<?php /* Smarty version Smarty-3.0.4, created on 2015-07-02 13:22:51
         compiled from "/var/www/blog.mtt.ru/public_html/manager/templates/default/resource/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218615028559510fb12d2c6-94395925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502274ae588c588f56680baebc435b20a2590d6f' => 
    array (
      0 => '/var/www/blog.mtt.ru/public_html/manager/templates/default/resource/create.tpl',
      1 => 1435247116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218615028559510fb12d2c6-94395925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/blog.mtt.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo $_smarty_tpl->getVariable('tvOutput')->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hidden')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }} ?>

<?php echo $_smarty_tpl->getVariable('onDocFormPrerender')->value;?>

<?php if ($_smarty_tpl->getVariable('resource')->value->richtext&&(isset($_smarty_tpl->getVariable('_config')->value['use_editor']) ? $_smarty_tpl->getVariable('_config')->value['use_editor'] : null)){?>
<?php echo $_smarty_tpl->getVariable('onRichTextEditorInit')->value;?>

<?php }?>