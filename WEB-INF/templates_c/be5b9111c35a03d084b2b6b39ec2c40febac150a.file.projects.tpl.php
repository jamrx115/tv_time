<?php /* Smarty version Smarty-3.0.7, created on 2016-10-05 20:18:48
         compiled from "/home/alltic/public_html/timetracker/WEB-INF/templates/projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5299682357f560282ab749-55148818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be5b9111c35a03d084b2b6b39ec2c40febac150a' => 
    array (
      0 => '/home/alltic/public_html/timetracker/WEB-INF/templates/projects.tpl',
      1 => 1475695922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5299682357f560282ab749-55148818',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/alltic/public_html/timetracker/WEB-INF/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/timetracker/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><script>
  function chLocation(newLocation) { document.location = newLocation; }
</script>

<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr>
    <td valign="top">
<?php if ($_smarty_tpl->getVariable('user')->value->canManageTeam()){?>
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
  <?php if ($_smarty_tpl->getVariable('inactive_projects')->value){?>
        <tr><td class="sectionHeaderNoBorder"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['projects']['active_projects'];?>
</td></tr>
  <?php }?>
        <tr>
          <td width="35%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
</td>
          <td width="35%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['description'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</td>
        </tr>
  <?php if ($_smarty_tpl->getVariable('active_projects')->value){?>
    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('active_projects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#dedee5"),$_smarty_tpl);?>
">
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'html');?>
</td>
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['description'],'html');?>
</td>
          <td><a href="project_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</a></td>
          <td><a href="project_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</a></td>
        </tr>
    <?php }} ?>
  <?php }?>
      </table>

      <table width="100%">
        <tr>
          <td align="center"><br>
            <form><input type="button" onclick="chLocation('project_add.php');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['add_project'];?>
"></form>
          </td>
        </tr>
      </table>

  <?php if ($_smarty_tpl->getVariable('inactive_projects')->value){?>
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
        <tr><td class="sectionHeaderNoBorder"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['projects']['inactive_projects'];?>
</td></tr>
        <tr>
          <td width="35%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
</td>
          <td width="35%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['description'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</td>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inactive_projects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#dedee5"),$_smarty_tpl);?>
">
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'html');?>
</td>
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['description'],'html');?>
</td>
          <td><a href="project_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</a></td>
          <td><a href="project_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</a></td>
        </tr>
    <?php }} ?>
      </table>

      <table width="100%">
        <tr>
          <td align="center"><br>
            <form><input type="button" onclick="chLocation('project_add.php');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['add_project'];?>
"></form>
          </td>
        </tr>
      </table>
  <?php }?>
<?php }else{ ?>
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
        <tr>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['description'];?>
</td>
        </tr>
  <?php if ($_smarty_tpl->getVariable('active_projects')->value){?>
    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('active_projects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#dedee5"),$_smarty_tpl);?>
">
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'html');?>
</td>
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['description'],'html');?>
</td>
        </tr>
    <?php }} ?>
  <?php }?>
      </table>
<?php }?>
    </td>
  </tr>
</table>
