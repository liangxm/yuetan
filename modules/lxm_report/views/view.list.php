<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');
class lxm_reportViewList extends ViewList
{
	
	function lxm_reportViewList(){
		parent::ViewList();
	}

	function listViewProcess(){
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if(!$this->headers)
            return;
        if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
            $this->lv->setup($this->seed, 'modules/lxm_report/tpls/ListView.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo get_form_header($GLOBALS['mod_strings']['LBL_LIST_FORM_TITLE'].$savedSearchName, '', false);
			echo $this->lv->display();
        }
    }


	function prepareSearchForm()
    {
        $this->searchForm = null;

        //search
        $view = 'basic_search';
        if(!empty($_REQUEST['search_form_view']) && $_REQUEST['search_form_view'] == 'advanced_search')
            $view = $_REQUEST['search_form_view'];
        $this->headers = true;

        if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only'])
            $this->headers = false;
        elseif(!isset($_REQUEST['search_form']) || $_REQUEST['search_form'] != 'false')
        {
            if(isset($_REQUEST['searchFormTab']) && $_REQUEST['searchFormTab'] == 'advanced_search')
            {
                $view = 'advanced_search';
            }
            else
            {
                $view = 'basic_search';
            }
        }

        $this->use_old_search = true;
        if ((file_exists('modules/' . $this->module . '/SearchForm.html')
                && !file_exists('modules/' . $this->module . '/metadata/searchdefs.php'))
            || (file_exists('custom/modules/' . $this->module . '/SearchForm.html')
                && !file_exists('custom/modules/' . $this->module . '/metadata/searchdefs.php')))
        {
            require_once('include/SearchForm/SearchForm.php');
            $this->searchForm = new SearchForm($this->module, $this->seed);
        }
        else
        {
            $this->use_old_search = false;
            require_once('include/SearchForm/SearchForm2.php');

            $searchMetaData = SearchForm::retrieveSearchDefs($this->module);

            $this->searchForm = $this->getSearchForm2($this->seed, $this->module, $this->action);
            $this->searchForm->setup($searchMetaData['searchdefs'], $searchMetaData['searchFields'], 'SearchFormGeneric.tpl', $view, $this->listViewDefs);
            $this->searchForm->lv = $this->lv;
        }
    }

}
?>
