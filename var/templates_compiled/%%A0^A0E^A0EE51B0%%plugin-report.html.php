<?php /* Smarty version 2.6.18, created on 2015-03-03 12:37:55
         compiled from plugin-report.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'plugin-report.html', 28, false),)), $this); ?>


<div style="min-width: 750px">

    <span style="font-style:italic;">A detailed report has been written to var/plugins-report.log </ br></span>
    <table class="data" >
        <thead>
            <tr>
                <td>Name</td>
                <td>Version</td>
                <td>Status</td>
                <td>Errors</td>
            </tr>
        </thead>

        <tbody>
          <?php if (! count($this->_tpl_vars['aPlugins'])): ?>
            <tr class="even">
                <td colspan="6">
                 <p>No plugins installed.</p>
                </td>
            </tr>
          <?php else: ?>
	        <?php $_from = $this->_tpl_vars['aPlugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['aitem']):
?>
	            <tr class="<?php echo $this->_tpl_vars['bgClass']; ?>
">
	                <td width="40%">
	                       <?php echo $this->_tpl_vars['aitem']['name']; ?>

	                </td>
	                <td>
	                       <?php echo $this->_tpl_vars['aitem']['version']; ?>

	                </td>
	                <td>
	                   <?php if ($this->_tpl_vars['aitem']['enabled']): ?>
	                       enabled
	                   <?php else: ?>
	                       disabled
	                   <?php endif; ?>
	                </td>
	                <td>
	                   <?php if (! $this->_tpl_vars['aitem']['error']): ?>
	                   No&nbsp;
	                   <?php endif; ?>
	                   Errors
	               </td>
	            </tr>
            <?php endforeach; endif; unset($_from); ?>
           <?php endif; ?>
        </tbody>
    </table>
</div>

<?php if ($this->_tpl_vars['aErrors']): ?>
    <div class="error-box" style="margin-bottom: 10px">
        <?php $_from = $this->_tpl_vars['aErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['idx'] => $this->_tpl_vars['error']):
?>
            <?php echo $this->_tpl_vars['error']; ?>

            <br />
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>



