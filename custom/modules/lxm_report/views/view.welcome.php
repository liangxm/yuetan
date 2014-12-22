<?php
class lxm_reportViewWelcome extends SugarView {
     function lxm_reportViewWelcome(){
         parent::SugarView();
     }

    public function preDisplay(){
        $this->dv->tpl = 'custom/modules/lxm_report/tpl/welcome.tpl';
    }

    function display(){
         $smarty = new Sugar_Smarty();
         parent::display();
         $smarty->assign("welcome", 'welcome');
         $smarty->display($this->dv->tpl);
    }
}
?>