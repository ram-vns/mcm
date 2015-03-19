<?php /* Smarty version 2.6.18, created on 2015-03-02 17:01:12
         compiled from row.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'row.html', 6, false),array('modifier', 'formatNumber', 'row.html', 25, false),)), $this); ?>
<tr class="level<?php echo $this->_tpl_vars['level']; ?>
 <?php if ($this->_tpl_vars['iteration'] % 2 == 0): ?>even<?php else: ?>odd<?php endif; ?>">
<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columns'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columns']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['columnName']):
        $this->_foreach['columns']['iteration']++;
?>
	<?php if (($this->_foreach['columns']['iteration'] <= 1)): ?>
		<td class="first indented ">
			<?php if ($this->_tpl_vars['expandable']): ?>
				<a href="<?php if ($this->_tpl_vars['expanded']): ?><?php echo smarty_function_url(array('expandId' => null), $this);?>
<?php else: ?><?php echo smarty_function_url(array('expandId' => $this->_tpl_vars['rowId']), $this);?>
<?php endif; ?>#table" title="<?php if ($this->_tpl_vars['expanded']): ?>Collapse<?php else: ?>Expand<?php endif; ?> <?php echo $this->_tpl_vars['rowMetrics']['name']; ?>
">
				<img width="16" height="16" border="0" align="absmiddle" src="../../assets/images/<?php if ($this->_tpl_vars['expanded']): ?>triangle-d<?php else: ?>ltr/triangle-l<?php endif; ?>.gif"></a>
			<?php endif; ?>
			<span title="<?php echo $this->_tpl_vars['rowMetrics']['name']; ?>
" class="inlineIcon <?php if ($this->_tpl_vars['selectedDimension'] == 'campaign'): ?>iconCampaign<?php elseif ($this->_tpl_vars['selectedDimension'] == 'banner'): ?>iconBanner<?php elseif ($this->_tpl_vars['selectedDimension'] == 'zone'): ?>iconZone<?php else: ?>iconDate<?php endif; ?>">
				<?php if ($this->_tpl_vars['selectedDimension'] == 'campaign' || $this->_tpl_vars['selectedDimension'] == 'banner' || $this->_tpl_vars['selectedDimension'] == 'zone'): ?>
					<?php ob_start(); ?>
					<?php if ($this->_tpl_vars['selectedDimension'] == 'campaign'): ?><?php echo smarty_function_url(array('entity' => $this->_tpl_vars['selectedDimension'],'entityId' => $this->_tpl_vars['rowId'],'dimension' => null,'campaignid' => $this->_tpl_vars['rowId'],'expandId' => null), $this);?>

					<?php elseif ($this->_tpl_vars['selectedDimension'] == 'banner'): ?><?php echo smarty_function_url(array('entity' => $this->_tpl_vars['selectedDimension'],'entityId' => $this->_tpl_vars['rowId'],'dimension' => null,'bannerid' => $this->_tpl_vars['rowId'],'expandId' => null), $this);?>

					<?php elseif ($this->_tpl_vars['selectedDimension'] == 'zone'): ?><?php echo smarty_function_url(array('entity' => $this->_tpl_vars['selectedDimension'],'entityId' => $this->_tpl_vars['rowId'],'dimension' => null,'zoneid' => $this->_tpl_vars['rowId'],'expandId' => null), $this);?>

					<?php endif; ?>
					<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkToStats', ob_get_contents());ob_end_clean(); ?>
					<a href="<?php echo $this->_tpl_vars['linkToStats']; ?>
" title="Video Statistics for <?php echo $this->_tpl_vars['rowMetrics']['name']; ?>
"><?php echo $this->_tpl_vars['rowMetrics']['name']; ?>
</a>
				<?php else: ?>
					<?php echo $this->_tpl_vars['rowMetrics']['name']; ?>

				<?php endif; ?>
			</span>
		</td>
		<?php else: ?>
 	<td class="num">
 		<?php if (isset ( $this->_tpl_vars['rowMetrics'][$this->_tpl_vars['columnId']] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rowMetrics'][$this->_tpl_vars['columnId']])) ? $this->_run_mod_handler('formatNumber', true, $_tmp) : smarty_modifier_formatNumber($_tmp)); ?>
<?php else: ?>0<?php endif; ?>
 	</td>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</tr>