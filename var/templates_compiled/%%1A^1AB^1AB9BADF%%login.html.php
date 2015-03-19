<?php /* Smarty version 2.6.18, created on 2015-03-16 09:49:41
         compiled from login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'login.html', 15, false),array('function', 't', 'login.html', 20, false),array('function', 'tabindex', 'login.html', 69, false),array('function', 'phpAds_ShowBreak', 'login.html', 92, false),)), $this); ?>

<?php if ($this->_tpl_vars['uiEnabled']): ?>
<br />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/css/style.css">

<!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1><?php echo OA_Admin_Template::_function_t(array('str' => 'WelcomeTo'), $this);?>
 MultiTV Adserver</h1>
            <p>Enter your username and password to log in</p>
					<div class="head">
						<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/user.png" alt=""/>
					</div>
				<form class="login" name="login" method="post" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['formAction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
                                     
                                                <input type="hidden" name="oa_cookiecheck" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sessionID'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
                                                <label for="username">Username
                                                <input type="text" class="text" name="username" id="username" ></label>
						<label for="password">Password
                                                <input type="password" name="password" id="password"></label>
						<div class="submit">
							<input type="submit" name="login" id="login" value="<?php echo OA_Admin_Template::_function_t(array('str' => 'Login'), $this);?>
"  >
					</div>	
					<p><a href="password-recovery.php"><?php echo OA_Admin_Template::_function_t(array('str' => 'ForgotPassword'), $this);?>
</a></p>
				</form>
			</div>
			<!--//End-login-form-->
			 <!-----start-copyright---->
   					
				<!-----//end-copyright---->
		</div> <!-----//end-main---->


<!--
<form class="login" name="login" method="post" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['formAction'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
    <input type="hidden" name="oa_cookiecheck" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['sessionID'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td width="80"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/login-welcome.gif">&nbsp;&nbsp;</td>
            <td width="100%" >
                <span class="tab-s"><?php echo OA_Admin_Template::_function_t(array('str' => 'WelcomeTo'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['appName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</span><br />
                <span class="install"><?php echo OA_Admin_Template::_function_t(array('str' => 'EnterUsername'), $this);?>
</span><br />
    <?php if ($this->_tpl_vars['message']): ?>
                <div class="errormessage" style="width: 400px;"><img class="errormessage" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/errormessage.gif" align="absmiddle" />
                    <span class="tab-r"><?php echo $this->_tpl_vars['message']; ?>
</span>
                </div>
    <?php else: ?>
                <img class="break" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/break-el.gif" width="400" height="1" vspace="8" />
    <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr height="24">
                        <td><?php echo OA_Admin_Template::_function_t(array('str' => 'Username'), $this);?>
:&nbsp;</td>
                        <td><input class="flat" type="text" name="username" id="username"<?php echo OA_Admin_Template::_function_tabindex(array(), $this);?>
 /></td>
                    </tr>
                    <tr height="24">
                        <td><?php echo OA_Admin_Template::_function_t(array('str' => 'Password'), $this);?>
:&nbsp;</td>
                        <td><input class="flat" type="password" name="password" id="password"<?php echo OA_Admin_Template::_function_tabindex(array(), $this);?>
 /></td>
                    </tr>
                    <tr height="24">
                        <td>&nbsp;</td>
                        <td><input type="submit" name="login" id="login" value="<?php echo OA_Admin_Template::_function_t(array('str' => 'Login'), $this);?>
"<?php echo OA_Admin_Template::_function_tabindex(array(), $this);?>
 /></td>
                    </tr>
                </table>
                <img class="break" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/break-el.gif" width="400" height="1" vspace="8" /><br />
                <a href="password-recovery.php"><?php echo OA_Admin_Template::_function_t(array('str' => 'ForgotPassword'), $this);?>
</a>
            </td>
        </tr>
    </table>
</form>-->
<script type="text/javascript">
<!--
    login_focus();
//-->
</script>
<?php else: ?>
<?php echo OA_Admin_Template::_function_phpAds_ShowBreak(array(), $this);?>

<br /><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['assetPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/images/info.gif" align="absmiddle">&nbsp;<?php echo OA_Admin_Template::_function_t(array('str' => 'NoAdminInterface'), $this);?>

<?php endif; ?>

<!-- login -->
