<?php /* Smarty version 2.6.18, created on 2015-03-02 17:01:12
         compiled from table.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'formatNumber', 'table.html', 29, false),)), $this); ?>
<div id="video_plugin_table_wrapper">
      <table cellspacing="0" border="0">
        <thead>
          <tr>
          <?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columns'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columns']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['columnName']):
        $this->_foreach['columns']['iteration']++;
?>
            <th class="<?php if (($this->_foreach['columns']['iteration'] <= 1)): ?>first nameCol<?php else: ?>num viewsCol<?php endif; ?>"><?php echo $this->_tpl_vars['columnName']; ?>
</th>
          <?php endforeach; endif; unset($_from); ?>
          </tr>
        </thead>
        <tbody>
		<?php $_from = $this->_tpl_vars['dataTable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rows'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rows']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rowId'] => $this->_tpl_vars['rowMetrics']):
        $this->_foreach['rows']['iteration']++;
?>
	          <?php ob_start(); ?><?php if ($this->_tpl_vars['expandId'] == $this->_tpl_vars['rowId']): ?>1<?php else: ?>0<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('expanded', ob_get_contents());ob_end_clean(); ?>
	        	<?php $this->assign('iteration', ($this->_foreach['rows']['iteration']-1)); ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "row.html", 'smarty_include_vars' => array('level' => 0,'selectedDimension' => $this->_tpl_vars['selectedDimension'],'expandable' => $this->_tpl_vars['selectedDimensionExpanded'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php if ($this->_tpl_vars['expanded']): ?>
					<?php $_from = $this->_tpl_vars['expandedDataTable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowsExpanded'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowsExpanded']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rowId'] => $this->_tpl_vars['rowMetrics']):
        $this->_foreach['rowsExpanded']['iteration']++;
?>
						<?php ob_start(); ?><?php echo ($this->_foreach['rows']['iteration']-1)+($this->_foreach['rowsExpanded']['iteration']-1)+1; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('iteration', ob_get_contents());ob_end_clean(); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "row.html", 'smarty_include_vars' => array('level' => 2,'selectedDimension' => $this->_tpl_vars['selectedDimensionExpanded'],'expandable' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
        </tbody>
        <tfoot>
        	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columns'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columns']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['columnName']):
        $this->_foreach['columns']['iteration']++;
?>
            	<?php if (($this->_foreach['columns']['iteration'] <= 1)): ?>
            		<td class="first indented "><span class="inlineIcon"><strong><?php echo $this->_tpl_vars['summaryRow']['0']; ?>
</strong></span></td>
				<?php else: ?>
	            	<td class="num">
	            		<?php if (isset ( $this->_tpl_vars['summaryRow'][$this->_tpl_vars['columnId']] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['summaryRow'][$this->_tpl_vars['columnId']])) ? $this->_run_mod_handler('formatNumber', true, $_tmp) : smarty_modifier_formatNumber($_tmp)); ?>
<?php else: ?>0<?php endif; ?>
	            	</td>
	           	<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </tfoot>
      </table>
    </div>