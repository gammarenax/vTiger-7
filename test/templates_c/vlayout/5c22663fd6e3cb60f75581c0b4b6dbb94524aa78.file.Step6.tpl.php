<?php /* Smarty version Smarty-3.1.7, created on 2017-09-04 18:59:35
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Install/Step6.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164939438859ad9487580462-77246614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c22663fd6e3cb60f75581c0b4b6dbb94524aa78' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Install/Step6.tpl',
      1 => 1504540935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164939438859ad9487580462-77246614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AUTH_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ad948766b4a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad948766b4a')) {function content_59ad948766b4a($_smarty_tpl) {?>
<form class="form-horizontal" name="step6" method="post" action="index.php">
	<input type=hidden name="module" value="Install" />
	<input type=hidden name="view" value="Index" />
	<input type=hidden name="mode" value="Step7" />
	<input type=hidden name="auth_key" value="<?php echo $_smarty_tpl->tpl_vars['AUTH_KEY']->value;?>
" />

	<div class="row-fluid main-container">
		<div class="inner-container">
			<div class="row-fluid">
				<div class="span10">
					<h4><?php echo vtranslate('LBL_ONE_LAST_THING','Install');?>
</h4>
				</div>
				<div class="span2">
					<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
						<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
					</a>
				</div>
			</div>
		    <hr>
			<div class="offset2 row-fluid">
				<div class="span8">
					<table class="config-table input-table">
						<tbody>
							<tr>
								<td>
									<strong>Please let us know your Industry</strong> <span class="no">*</span>
								</td>
								<td>
									<select name="industry" class="select2" required="true" style="width:250px;" placeholder="Choose one...">
										<option value=""></option> 
										<option>Accounting</option> 
										<option>Advertising</option>
										<option>Agriculture</option>
										<option>Apparel &amp; Accessories</option>
										<option>Automotive</option>
										<option>Banking &amp; Financial Services</option>
										<option>Biotechnology</option>
										<option>Call Centers</option>
										<option>Careers/Employment</option>
										<option>Chemical</option>
										<option>Computer Hardware</option>
										<option>Computer Software</option>
										<option>Consulting</option>
										<option>Construction</option>
										<option>Education</option>
										<option>Energy Services</option>
										<option>Engineering</option>
										<option>Entertainment</option>
										<option>Financial</option>
										<option>Food &amp; Food Service</option>
										<option>Government</option>
										<option>Health care</option>
										<option>Insurance</option>
										<option>Legal</option>
										<option>Logistics</option>
										<option>Manufacturing</option>
										<option>Media &amp; Production</option>
										<option>Non-profit</option>
										<option>Pharmaceutical</option>
										<option>Real Estate</option>
										<option>Rental</option>
										<option>Retail &amp; Wholesale</option>
										<option>Security</option>
										<option>Service</option>
										<option>Sports</option>
										<option>Telecommunications</option>
										<option>Transportation</option>
										<option>Travel &amp; Tourism</option>
										<option>Utilities</option>
										<option>Other</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									We collect anonymous information (Country, OS) 
									to help us improve future versions of Vtiger. 
									Data about how CRM is used and where it is being used helps 
									us identify the areas in the product that need to be enhanced. 
									We use this data to improve your experience with Vtiger. 
									None of the data collected here can be linked back to an individual.
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row-fluid offset2">
				<div class="span8">
					<div class="button-container">
						<input type="button" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_NEXT','Install');?>
" name="step7"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<div id="progressIndicator" class="row-fluid main-container hide">
	<div class="inner-container">
		<div class="inner-container">
			<div class="row-fluid">
				<div class="span12 welcome-div alignCenter">
					<h3><?php echo vtranslate('LBL_INSTALLATION_IN_PROGRESS','Install');?>
...</h3><br>
					<img src="<?php echo vimage_path('install_loading.gif');?>
"/>
					<h6><?php echo vtranslate('LBL_PLEASE_WAIT','Install');?>
.... </h6>
				</div>
			</div>
		</div>
	</div>
</div>
</div><?php }} ?>