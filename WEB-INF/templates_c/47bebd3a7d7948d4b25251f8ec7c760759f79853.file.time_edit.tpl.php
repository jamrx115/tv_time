<?php /* Smarty version Smarty-3.0.7, created on 2017-09-04 13:14:01
         compiled from "/home/alltic/public_html/televida/tv_time/WEB-INF/templates/time_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64809517259ad51995e07a5-73995525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bebd3a7d7948d4b25251f8ec7c760759f79853' => 
    array (
      0 => '/home/alltic/public_html/televida/tv_time/WEB-INF/templates/time_edit.tpl',
      1 => 1503498080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64809517259ad51995e07a5-73995525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/alltic/public_html/televida/tv_time/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><script>
// We need a few arrays to populate project and task dropdowns.
// When client selection changes, the project dropdown must be re-populated with only relevant projects.
// When project selection changes, the task dropdown must be repopulated similarly.
// Format:
// project_ids[143] = "325,370,390,400";  // Comma-separated list of project ids for client.
// project_names[325] = "Time Tracker";   // Project name.
// task_ids[325] = "100,101,302,303,304"; // Comma-separated list ot task ids for project.
// task_names[100] = "Coding";            // Task name.

//Prepare an array of projects ids for clients.
project_ids = new Array();
<?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
  project_ids[<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
] = "<?php echo $_smarty_tpl->tpl_vars['client']->value['projects'];?>
";
<?php }} ?>
// Prepare an array of project names.
project_names = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
  project_names[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
] = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'javascript');?>
";
<?php }} ?>
// We'll use this array to populate project dropdown when client is not selected.
var idx = 0;
projects = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
  projects[idx] = new Array("<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
", "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['name'],'javascript');?>
");
  idx++;
<?php }} ?>

// Prepare an array of task ids for projects.
task_ids = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
  task_ids[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
] = "<?php echo $_smarty_tpl->tpl_vars['project']->value['tasks'];?>
";
<?php }} ?>
// Prepare an array of task names.
task_names = new Array();
<?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('task_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value){
?>
  task_names[<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
] = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['task']->value['name'],'javascript');?>
";
<?php }} ?>

// Prepare an array of activities ids for projects.
activities_ids = new Array();
<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
	<?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('activities_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value){
?>
		<?php if ($_smarty_tpl->tpl_vars['project']->value['id']==$_smarty_tpl->tpl_vars['activity']->value['project_id']){?>
			if(typeof activities_ids[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
] == 'undefined') {
				activities_ids[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
] = new Array();
			}
			var one_activity = new Array();
			one_activity['id'] = "<?php echo $_smarty_tpl->tpl_vars['activity']->value['id'];?>
";
			one_activity['name'] = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['activity']->value['name'],'javascript');?>
";
			activities_ids[<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
].push(one_activity);
		<?php }?>
	<?php }} ?>
<?php }} ?>

// Mandatory top options for project and task dropdowns.
empty_label_project = '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('i18n')->value['dropdown']['select'],'javascript');?>
';
empty_label_task = '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('i18n')->value['dropdown']['select'],'javascript');?>
';

// The fillDropdowns function populates the "project" and "task" dropdown controls
// with relevant values.
function fillDropdowns() {
  if(document.body.contains(document.timeRecordForm.client))
    fillProjectDropdown(document.timeRecordForm.client.value);

  fillTaskDropdown(document.timeRecordForm.project.value);
}

// The fillProjectDropdown function populates the project combo box with
// projects associated with a selected clientt (client id is passed here as id).
function fillProjectDropdown(id) {
  var str_ids = project_ids[id];

  var dropdown = document.getElementById("project");
  // Determine previously selected item.
  var selected_item = dropdown.options[dropdown.selectedIndex].value;

  // Remove existing content.
  dropdown.length = 0;
  var project_reset = true;
  // Add mandatory top option.
  dropdown.options[0] = new Option(empty_label_project, '', true);

  // Populate project dropdown.
  if (!id) {
    // If we are here, client is not selected.
    var len = projects.length;
    for (var i = 0; i < len; i++) {
      dropdown.options[i+1] = new Option(projects[i][1], projects[i][0]);
      if (dropdown.options[i+1].value == selected_item)  {
        dropdown.options[i+1].selected = true;
        project_reset = false;
      }
    }
  } else if (str_ids) {
    var ids = new Array();
    ids = str_ids.split(",");
    var len = ids.length;

    for (var i = 0; i < len; i++) {
      var p_id = ids[i];
      dropdown.options[i+1] = new Option(project_names[p_id], p_id);
      if (dropdown.options[i+1].value == selected_item)  {
        dropdown.options[i+1].selected = true;
        project_reset = false;
      }
    }
  }

  // If project selection was reset - clear the tasks dropdown.
  if (project_reset) {
    dropdown = document.getElementById("task");
    dropdown.length = 0;
    dropdown.options[0] = new Option(empty_label_task, '', true);

    dropdown = document.getElementById("activity");
    dropdown.length = 0;
    dropdown.options[0] = new Option(empty_label_task, '', true);
  }
}

// The fillTaskDropdown function populates the task combo box with
// tasks associated with a selected project (project id is passed here as id).
function fillTaskDropdown(id) {
  var str_ids = task_ids[id];

  var dropdown = document.getElementById("task");
  if (dropdown == null) return; // Nothing to do.

  // Determine previously selected item.
  var selected_item = dropdown.options[dropdown.selectedIndex].value;

  // Remove existing content.
  dropdown.length = 0;
  // Add mandatory top option.
  dropdown.options[0] = new Option(empty_label_task, '', true);

  // Populate the dropdown from the task_names array.
  if (str_ids) {
    var ids = new Array();
    ids = str_ids.split(",");
    var len = ids.length;

    var idx = 1;
    for (var i = 0; i < len; i++) {
      var t_id = ids[i];
      if (task_names[t_id]) {
        dropdown.options[idx] = new Option(task_names[t_id], t_id);
        idx++;
      }
    }

    // If a previously selected item is still in dropdown - select it.
    if (dropdown.options.length > 0) {
      for (var i = 0; i < dropdown.options.length; i++) {
        if (dropdown.options[i].value == selected_item)  {
          dropdown.options[i].selected = true;
        }
      }
    }
  }


  var dropdown_act = document.getElementById("activity");
  // Determine previously selected item.
  var selected_item_act = dropdown_act.options[dropdown_act.selectedIndex].value;
  // Remove existing content.
  dropdown_act.length = 0;
  // Add mandatory top option.
  dropdown_act.options[0] = new Option(empty_label_task, '', true);

  // Populate the dropdown from the task_names array.
  if(activities_ids[id] && activities_ids[id].length > 0) {


	var idx = 1;
	for (var i = 0; i < activities_ids[id].length; i++) {
		if (activities_ids[id][i]['name']) {
			dropdown_act.options[idx] = new Option(activities_ids[id][i]['name'], activities_ids[id][i]['id']);
			idx++;
		}
	}

	// If a previously selected item is still in dropdown - select it.
	if (dropdown_act.options.length > 0) {
		for (var i = 0; i < dropdown_act.options.length; i++) {
			if (dropdown_act.options[i].value == selected_item_act)  {
				dropdown_act.options[i].selected = true;
			}
		}
	}
  }
}

// The formDisable function disables some fields depending on what we have in other fields.
function formDisable(formField) {
  var formFieldValue = eval("document.timeRecordForm." + formField + ".value");
  var formFieldName = eval("document.timeRecordForm." + formField + ".name");

  if (((formFieldValue != "") && (formFieldName == "start")) || ((formFieldValue != "") && (formFieldName == "finish"))) {
    var x = eval("document.timeRecordForm.duration");
    x.value = "";
    x.disabled = true;
    x.style.background = "#e9e9e9";
  }

  if (((formFieldValue == "") && (formFieldName == "start") && (document.timeRecordForm.finish.value == "")) || ((formFieldValue == "") && (formFieldName == "finish") && (document.timeRecordForm.start.value == ""))) {
    var x = eval("document.timeRecordForm.duration");
    x.value = "";
    x.disabled = false;
    x.style.background = "white";
  }

  if ((formFieldValue != "") && (formFieldName == "duration")) {
    var x = eval("document.timeRecordForm.start");
    x.value = "";
    x.disabled = true;
    x.style.background = "#e9e9e9";
    var x = eval("document.timeRecordForm.finish");
    x.value = "";
    x.disabled = true;
    x.style.background = "#e9e9e9";
  }

  if ((formFieldValue == "") && (formFieldName == "duration")) {
    var x = eval("document.timeRecordForm.start");
    x.disabled = false;
    x.style.background = "white";
    var x = eval("document.timeRecordForm.finish");
    x.disabled = false;
    x.style.background = "white";
  }
}

// The setNow function fills a given field with current time.
function setNow(formField) {
  var x = eval("document.timeRecordForm.start");
  x.disabled = false;
  x.style.background = "white";
  var x = eval("document.timeRecordForm.finish");
  x.disabled = false;
  x.style.background = "white";
  var today = new Date();
  var time_format = '<?php echo $_smarty_tpl->getVariable('user')->value->time_format;?>
';
  var obj = eval("document.timeRecordForm." + formField);
  obj.value = today.strftime(time_format);
  formDisable(formField);
}
</script>

<?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
<tr>
  <td>
  <table width = "100%">
  <tr>
    <td valign="top">
    <table border="0">
<?php if ($_smarty_tpl->getVariable('user')->value->isPluginEnabled('cl')){?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['client'];?>
<?php if ($_smarty_tpl->getVariable('user')->value->isPluginEnabled('cm')){?> (*)<?php }?>:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['client']['control'];?>
</td>
    </tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('user')->value->isPluginEnabled('iv')){?>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['billable']['control'];?>
<?php echo $_smarty_tpl->getVariable('i18n')->value['form']['time']['billable'];?>
</label></td>
    </tr>
<?php }?>
<?php if (($_smarty_tpl->getVariable('custom_fields')->value&&$_smarty_tpl->getVariable('custom_fields')->value->fields[0])){?> 
    <tr>
      <td align="right"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('custom_fields')->value->fields[0]['label'],'html');?>
<?php if ($_smarty_tpl->getVariable('custom_fields')->value->fields[0]['required']){?> (*)<?php }?>:</td><td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['cf_1']['control'];?>
</td>
    </tr>
<?php }?>
<?php if ((@MODE_PROJECTS==$_smarty_tpl->getVariable('user')->value->tracking_mode||@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['project'];?>
 (*):</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['project']['control'];?>
</td>
    </tr>
<?php }?>
<?php if ((@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['task'];?>
 (*):</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['task']['control'];?>
</td>
    </tr>
<?php }?>

    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['activity'];?>
 (*):</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['activity']['control'];?>
</td>
    </tr>

<?php if (((@TYPE_START_FINISH==$_smarty_tpl->getVariable('user')->value->record_type)||(@TYPE_ALL==$_smarty_tpl->getVariable('user')->value->record_type))){?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['start'];?>
:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['start']['control'];?>
&nbsp;<input onclick="setNow('start');" type="button" tabindex="-1" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['now'];?>
"></td>
    </tr>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['finish'];?>
:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['finish']['control'];?>
&nbsp;<input onclick="setNow('finish');" type="button" tabindex="-1" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['now'];?>
"></td>
    </tr>


     <tr>
       <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['real_finish'];?>
:</td>
       <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['real_finish']['control'];?>
</td>
     </tr>

<?php }?>
<?php if (((@TYPE_DURATION==$_smarty_tpl->getVariable('user')->value->record_type)||(@TYPE_ALL==$_smarty_tpl->getVariable('user')->value->record_type))){?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['duration'];?>
:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['duration']['control'];?>
&nbsp;<?php echo $_smarty_tpl->getVariable('i18n')->value['form']['time']['duration_format'];?>
</td>
    </tr>
<?php }?>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['date'];?>
:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['date']['control'];?>
</td>
    </tr>
    <tr>
      <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['note'];?>
:</td>
      <td><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['note']['control'];?>
</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td align="left"><?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['btn_save']['control'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['btn_copy']['control'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['btn_delete']['control'];?>
</td>
    </tr>
    </table>
    </td>
    </tr>
  </table>
  </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['timeRecordForm']['close'];?>

