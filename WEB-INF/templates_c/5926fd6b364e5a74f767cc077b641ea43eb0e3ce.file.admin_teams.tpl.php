<?php /* Smarty version Smarty-3.0.7, created on 2017-08-25 17:18:46
         compiled from "/home/alltic/public_html/televida/tv_time/WEB-INF/templates/admin_teams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77968586559a05bf6844986-31001831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5926fd6b364e5a74f767cc077b641ea43eb0e3ce' => 
    array (
      0 => '/home/alltic/public_html/televida/tv_time/WEB-INF/templates/admin_teams.tpl',
      1 => 1503498080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77968586559a05bf6844986-31001831',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/alltic/public_html/televida/tv_time/WEB-INF/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/televida/tv_time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><script>
  function chLocation(newLocation) { document.location = newLocation; }
</script>

<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr><td valign="top"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['teams']['hint'];?>
</td></tr>
</table>

<table cellspacing="1" cellpadding="3" border="0" width="720">
  <tr>
    <td width="3%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['id'];?>
</td>
    <td width="70%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
</td>
    <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['date'];?>
</td>
    <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['language'];?>
</td>
    <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</td>
    <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</td>
  </tr>
<?php if ($_smarty_tpl->getVariable('teams')->value){?>
  <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('teams')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value){
?>
  <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#dedee5"),$_smarty_tpl);?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
</td>
    <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['team']->value['name'],'html');?>
</td>
    <td nowrap><?php echo $_smarty_tpl->tpl_vars['team']->value['date'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['team']->value['lang'];?>
</td>
    <td><a href="admin_team_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</a></td>
    <td><a href="admin_team_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</a></td>
  </tr>
  <?php }} ?>
<?php }?>
</table>

<table width="100%">
  <tr>
    <td align="center">
      <br>
      <form>
        <input type="button" onclick="chLocation('admin_team_add.php');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['create_team'];?>
">&nbsp;<?php echo $_smarty_tpl->getVariable('i18n')->value['label']['or'];?>
&nbsp;
        <input type="button" onclick="chLocation('import.php');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['import'];?>
">
      </form>
    </td>
  </tr>
</table>