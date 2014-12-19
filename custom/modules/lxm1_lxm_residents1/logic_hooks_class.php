<?php
require_once('log4php/LoggerManager.php');
$GLOBALS['log']=LoggerManager::getLogger('SugarCRM');

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	
class logic_hooks_class 
{
	function after_save_method($bean, $event, $arguments)
	{
//	$GLOBALS['log']->info('$bean'+ $bean->isdraft);	
		if($bean->isdraft == '0')
		{
		$focus = new lxm1_lxm_residents();
		$return_id = $focus->id;
		header("Location: index.php?module=lxm1_lxm_residents&action=index");
		sugar_cleanup(true);
		}
	}
}
?>
