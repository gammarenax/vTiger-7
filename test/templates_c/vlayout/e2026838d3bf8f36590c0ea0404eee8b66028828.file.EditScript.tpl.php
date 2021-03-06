<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:51:00
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/EditScript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15209883775a0d6373345e43-04811613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2026838d3bf8f36590c0ea0404eee8b66028828' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/EditScript.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15209883775a0d6373345e43-04811613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d637337a1f',
  'variables' => 
  array (
    'ROLEIDSTR' => 0,
    'ROLENAMESTR' => 0,
    'USERIDSTR' => 0,
    'USERNAMESTR' => 0,
    'GROUPIDSTR' => 0,
    'GROUPNAMESTR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d637337a1f')) {function content_5a0d637337a1f($_smarty_tpl) {?>


<script>
var constructedOptionValue;
var constructedOptionName;

var roleIdArr=new Array(<?php echo $_smarty_tpl->tpl_vars['ROLEIDSTR']->value;?>
);
var roleNameArr=new Array(<?php echo $_smarty_tpl->tpl_vars['ROLENAMESTR']->value;?>
);
var userIdArr=new Array(<?php echo $_smarty_tpl->tpl_vars['USERIDSTR']->value;?>
);
var userNameArr=new Array(<?php echo $_smarty_tpl->tpl_vars['USERNAMESTR']->value;?>
);
var grpIdArr=new Array(<?php echo $_smarty_tpl->tpl_vars['GROUPIDSTR']->value;?>
);
var grpNameArr=new Array(<?php echo $_smarty_tpl->tpl_vars['GROUPNAMESTR']->value;?>
);

/*Sharing functions*/
function sharing_changed(){
    var selectedValue = document.getElementById('sharing').value;
    if(selectedValue != 'share')
    {
        document.getElementById('sharing_share_div').style.display = 'none';
    }
    else
    {
        document.getElementById('sharing_share_div').style.display = 'block';
        setSharingObjects();
        showSharingMemberTypes();
    }
}

function showSharingMemberTypes(){
	var selectedOption=document.getElementById('sharingMemberType').value;
	/*Completely clear the select box*/
	document.getElementById('sharingAvailList').options.length = 0;

	if(selectedOption == 'groups')
	{
		constructSelectOptions('groups',grpIdArr,grpNameArr);
	}
	else if(selectedOption == 'roles')
	{
		constructSelectOptions('roles',roleIdArr,roleNameArr);
	}
	else if(selectedOption == 'rs')
	{
		constructSelectOptions('rs',roleIdArr,roleNameArr);
	}
	else if(selectedOption == 'users')
	{
		constructSelectOptions('users',userIdArr,userNameArr);
	}
}

function constructSelectOptions(selectedMemberType,idArr,nameArr){
	var i;
	var findStr=document.getElementById('sharingFindStr').value;
	if(findStr.replace(/^\s+/g, '').replace(/\s+$/g, '').length !=0)
	{
		var k=0;
		for(i=0; i<nameArr.length; i++)
		{
			if(nameArr[i].indexOf(findStr) ==0)
			{
				constructedOptionName[k]=nameArr[i];
				constructedOptionValue[k]=idArr[i];
				k++;
			}
		}
	}
	else
	{
		constructedOptionValue = idArr;
		constructedOptionName = nameArr;
	}

	/*Constructing the selectoptions*/
	var j;
	var nowNamePrefix;
	for(j=0;j<constructedOptionName.length;j++)
	{
		if(selectedMemberType == 'roles')
		{
			nowNamePrefix = 'Roles::';
		}
		else if(selectedMemberType == 'rs')
		{
			nowNamePrefix = 'RoleAndSubordinates::';
		}
		else if(selectedMemberType == 'groups')
		{
			nowNamePrefix = 'Group::';
		}
		else if(selectedMemberType == 'users')
		{
			nowNamePrefix = 'User::';
		}

		var nowName = nowNamePrefix + constructedOptionName[j];
		var nowId = selectedMemberType + '::'  + constructedOptionValue[j];
		document.getElementById('sharingAvailList').options[j] = new Option(nowName,nowId);
	}
	/*clearing the array*/
	constructedOptionValue = new Array();
  constructedOptionName = new Array();
}

function sharingAddColumn(){
    for (i=0;i<selectedColumnsObj.length;i++)
    {
        selectedColumnsObj.options[i].selected=false;
    }

    for (i=0;i<availListObj.length;i++)
    {
        if (availListObj.options[i].selected==true)
        {
        	var rowFound=false;
        	var existingObj=null;
            for (j=0;j<selectedColumnsObj.length;j++)
            {
                if (selectedColumnsObj.options[j].value==availListObj.options[i].value)
                {
                    rowFound=true;
                    existingObj=selectedColumnsObj.options[j];
                    break
                }
            }

            if (rowFound!=true)
            {
                var newColObj=document.createElement("OPTION");
                newColObj.value=availListObj.options[i].value;
                if (browser_ie) newColObj.innerText=availListObj.options[i].innerText;
                else if (browser_nn4 || browser_nn6) newColObj.text=availListObj.options[i].text;
                selectedColumnsObj.appendChild(newColObj);
                availListObj.options[i].selected=false;
                newColObj.selected=true;
                rowFound=false;
            }
            else
            {
                if(existingObj != null) existingObj.selected=true;
            }
        }
    }
}

function sharingDelColumn(){
    for (i=selectedColumnsObj.options.length;i>0;i--)
    {
    	if (selectedColumnsObj.options.selectedIndex>=0)
            selectedColumnsObj.remove(selectedColumnsObj.options.selectedIndex);
    }
}

function setSharingObjects(){
    availListObj=getObj("sharingAvailList");
    selectedColumnsObj=getObj("sharingSelectedColumns");
}

jQuery( document ).ready(function(){
    sharing_changed();
});
/*Sharing Ends*/

</script>
<?php }} ?>