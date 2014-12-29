<link rel="stylesheet" type="text/css" href="{sugar_getjspath file='modules/lxm_report/tpls/tabs.css'}"/>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/jquery/jquery.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/jquery/jquery.json-2.3.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='modules/lxm_report/tpls/tabs.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='modules/lxm_report/tpls/lxm_report.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='modules/lxm_report/tpls/pager.js'}"></script>

<div id="Tab1"> 
	<div class="Menubox"> 
		<ul> 
			<li id="one1" onClick="setTab('one',1,3)" class="hover">联系人基本情况表</li> 
			<li id="one2" onClick="setTab('one',2,3)" >联系人诉求情况表</li> 
			<li id="one3" onClick="setTab('one',3,3)">约谈记录表</li>
		</ul> 
	</div>

	<div class="Contentbox"> 
		<div id="con_one_1" class="hover">
			<div class="search">
				<form name="search_form" id="search_form" class="search_form" method="post" action="index.php?module=lxm1_lxm_residents&action=index" onkeydown="submitOnEnter(event);">
					<input type="hidden" name="searchFormTab" value="basic_search">
					<input type="hidden" name="module" value="lxm1_lxm_residents">
					<input type="hidden" name="action" value="index"> 
					<input type="hidden" name="query" value="true">
					联系人姓名: <input type="text" name="full_name_basic" id="full_name_basic" size="30" maxlength="510" value="" title=""> <input tabindex="2" title="查找 [Alt+Q]" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="查找" id="search_form_submit">
				</form>
			</div>

			<div id="content1">
			

			</div>
		</div>

		<div id="con_one_2" style="display:none">
			<div class="search">
				<form name="search_form" id="search_form" class="search_form" method="post" action="index.php?module=lxm1_lxm_conversation&amp;action=index" onkeydown="submitOnEnter(event);">
					<input type="hidden" name="searchFormTab" value="basic_search">
					<input type="hidden" name="module" value="lxm1_lxm_conversation">
					<input type="hidden" name="action" value="index"> 
					<input type="hidden" name="query" value="true">
					联系人姓名: <input type="text" name="full_name_basic" id="full_name_basic" size="30" maxlength="510" value="" title=""> <input tabindex="2" title="查找 [Alt+Q]" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="查找" id="search_form_submit">
				</form>
			</div>

			<div class="content">
			<table id="mytable" cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
				<tr>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">姓名</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">性别</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">出生日期</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">现住址</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">dsafa</div></th>
				</tr>

				<tr>
					<td><input type="button" name="runReport" id="runReport" value="生成报表"  width="15%"/></td>
					<td align="left" valign="top">sadfa</td>
					<td align="left" valign="top">asdfa</td>
					<td align="left" valign="top">asdf</td>
					<td align="left" valign="top">asf</td>
				</tr>

			</table> 
<a  href="#" id="btn1">首页</a>
<a  href="#" id="btn2">上一页</a>
<a  href="#" id="btn3">下一页</a>
<a  href="#" id="btn4">尾页</a> 
<a>转到 </a>
<input id="changePage" type="text" size="1" maxlength="4"/>
<a>页 </a>
<a  href="#" id="btn5">跳转</a>
			</div>
		</div>

		<div id="con_one_3" style="display:none">
			<div class="search">
				<form name="search_form" id="search_form" class="search_form" method="post" action="index.php?module=lxm1_lxm_residents&action=index" onkeydown="submitOnEnter(event);">
					<input type="hidden" name="searchFormTab" value="basic_search">
					<input type="hidden" name="module" value="lxm1_lxm_residents">
					<input type="hidden" name="action" value="index"> 
					<input type="hidden" name="query" value="true">
					联系人姓名: <input type="text" name="full_name_basic" id="full_name_basic" size="30" maxlength="510" value="" title=""> 约谈记录编号: <input type="text" name="name_basic" id="name_basic" size="30" maxlength="255" value="" title="" accesskey="9"> <input tabindex="2" title="查找 [Alt+Q]" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="查找" id="search_form_submit">
				</form>
			</div>

			<div class="content">
			<table id="mytable" cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
				<tr>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">联系人姓名</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">约谈记录编号</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">主持人姓名</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">约谈时间</div></th>
					<th scope="col"><div style="white-space: normal;" width="100%" align="left">约谈地点</div></th>
				</tr>

				<tr>
					<td><input type="button" name="runReport" id="runReport" value="生成报表" width="15%"/></td>
					<td align="left" valign="top">sadfa</td>
					<td align="left" valign="top">asdfa</td>
					<td align="left" valign="top">asdf</td>
					<td align="left" valign="top">asf</td>
				</tr>

			</table> 
<a  href="#" id="btn1">首页</a>
<a  href="#" id="btn2">上一页</a>
<a  href="#" id="btn3">下一页</a>
<a  href="#" id="btn4">尾页</a> 
<a>转到 </a>
<input id="changePage" type="text" size="1" maxlength="4"/>
<a>页 </a>
<a  href="#" id="btn5">跳转</a>
			</div>
		</div>
	</div> 
</div>