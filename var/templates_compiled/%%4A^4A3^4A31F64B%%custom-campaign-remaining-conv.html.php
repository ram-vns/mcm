<?php /* Smarty version 2.6.18, created on 2015-03-16 15:20:34
         compiled from /var/www/html/multitv/lib/templates/admin/form/custom-campaign-remaining-conv.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', '/var/www/html/multitv/lib/templates/admin/form/custom-campaign-remaining-conv.html', 14, false),)), $this); ?>
<span id="conversions_remaining_span" style="display: none">
    <?php echo OA_Admin_Template::_function_t(array('str' => 'ConversionsRemaining'), $this);?>
:<span id='conversions_remaining_count'><?php echo $this->_tpl_vars['_e']['vars']['conversionsRemaining']; ?>
</span>
</span>