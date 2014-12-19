<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$mod_strings = array(
	'LBL_LOADING' => '加载中' /*for 508 compliance fix*/,
	'LBL_HIDEOPTIONS' => '隐藏设置' /*for 508 compliance fix*/,
	'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
	'LBL_POWERED_BY_SUGAR' => 'SugarCRM提供' /*for 508 compliance fix*/,
'help'=>array(
	'package'=>array(
			'create'=>'提供 <b>名称</b> 给文件包。输入的名称必须为字母并且不包含空格。 (Example: HR_Management)<br/><br/> 你可以提供 <b>作者</b> 和 <b>说明</b> 信息给文件包。 <br/><br/>点击 <b>保存</b> 来创建新文件包。',
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这里。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。',
			'name'=>'这是当前文件包的 <b>名称</b> 。<br/><br/>您输入的姓名必须为字母， 以字母开头并且不包含空格。 (例如: HR_Management)',
			'author'=>'这是在安装过程中显示的 <b>作者</b>  作为实体的名称创建文件包。<br><br>作者可以是个人或者是一个公司。',
			'description'=>'这是在安装是显示的文件包的 <b>说明</b> 。',
			'publishbtn'=>'点击 <b>公布</b> 保存所有输入的数据并创建一个 .zip 文件，是文件包的可安装版。<br><br>用<b>模块加载器</b> 上传 .zip 文件 并安装文件包。',
			'deploybtn'=>'点击 <b>显示</b> 保留所有输入的数据并安装文件包，包含当前例证中的所有模块 。',
			'duplicatebtn'=>'点击<b>复制</b> 去复制文件包的内容到一个新文件夹并显示这个新文件包。 <br/><br/>对于此新文件包，添加数字到用来创建新文件包的名字的结尾时，新名称会自动生成。 您可以通过输入新<b>名称</b> 并点击 <b>保存</b>来重新命名此新文件夹。',
			'exportbtn'=>'点击<b>导出</b> 来创建 一个 .zip 文件包含文件包中的自定义。<br><br> 生成的文件不是文件包的自动安装版本。<br><br>用 <b>模块加载器</b>去导入 .zip 文件 和文件包，包含出现在模块加载器中的自定义。',
			'deletebtn'=>'点击 <b>删除</b> 去删除此文件包中的所有相关文件。',
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
			'existing_module'=>'点击 <b>模块</b> 图标去编辑属性和自定义模块，关系和与模块相关的布局。',
			'new_module'=>'点击 <b>新模块</b> 来给文件包创建一个新模块。',
			'key'=>'这个五个字母的字母<b>关键值</b> 会被使用加在所有当前文件包模块的目录，分类名和数据库表之前。<br><br>关键值用来使表格名称独特。',
			'readme'=>'点击增加文件包的<b>自述文件</b> 。<br><br>自述文件在安装期间可利用。',

),
	'main'=>array(

	),
	'module'=>array(
			'create'=>'提供 <b>名称</b> 给文件包。输入的名称必须为字母并且不包含空格。 (Example: HR_Management)<br/><br/> 你可以提供 <b>作者</b> 和 <b>说明</b> 信息给文件包。 <br/><br/>点击 <b>保存</b> 来创建新文件包。',
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。',
		'importable'=>'检查 <b>可导入的</b> 检查框会使模块进行导入。<br><br>一个导入向导的链接会出现在模块的快捷版面中。导入向导促进从外部资源到自定义模块的数据导入。',
		'team_security'=>'检查 <b>团队安全</b> 检查框会使模块团队安全。<br/><br/>如果团队安全性能保证，团队选择将会出现在模块的数据中。',
		'reportable'=>'检查这个盒子会使模块有数据与之冲突。',
		'assignable'=>'检查这个盒子会允许模块的数据分配给选定的用户。',
		'has_tab'=>'检查 <b>导航标签</b> 将会给模块提供一个导航标签。',
		'acl'=>'检查这个盒子会使模块有访问控制，包含字段级安全。',
		'studio'=>'检查这个盒子会允许管理员在工作室内自定义这个模块。',
		'audit'=>'检查这个盒子会孕育模块的审计。某些字段的改变将会被记录以至于管理员可以回顾更改历史记录。',
		'viewfieldsbtn'=>'点击 <b>查看字段</b> 来查看模块相关字段并且创建和编辑自定义字段。',
		'viewrelsbtn'=>'点击 <b>查看关系</b>来查看与模块相关的关系并且创建新关系。',
		'viewlayoutsbtn'=>'点击 <b>查看布局</b> 来查看模块的布局和自定义布局内的字段安排。',
			'duplicatebtn'=>'点击<b>复制</b> 去复制文件包的内容到一个新文件夹并显示这个新文件包。 <br/><br/>对于此新文件包，添加数字到用来创建新文件包的名字的结尾时，新名称会自动生成。 您可以通过输入新<b>名称</b> 并点击 <b>保存</b>来重新命名此新文件夹。',
			'deletebtn'=>'点击 <b>删除</b> 去删除此文件包中的所有相关文件。',
			'name'=>'这是当前文件包的 <b>名称</b> 。<br/><br/>您输入的姓名必须为字母， 以字母开头并且不包含空格。 (例如: HR_Management)',
		'label'=>'这是将会出现在模块导航标签中的 <b>标签</b> 。 ',
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'type_basic'=>' <b>基础</b> 模板类型提供基本字段，例如姓名，负责人，团队，创建日期和字段说明。',
		'type_company'=>'<b>公司</b> 模板类型提供特殊的组织字段，例如公司名称，行业，和账单地址。<br/><br/>使用这个模板来创建与标准账户模块相似的模块。',
		'type_issue'=>' <b>发行</b>模板会提供客户反馈和特殊缺陷字段，例如数字，状态，属性和描述。<br/><br/>使用这个模板还创建与标准客户反馈和追踪系统模块类似的模块。',
		'type_person'=>' <b>个人</b> 模板类型提供个人专用字段，例如称谓，头衔，姓名，地址和电话号码。<br/><br/>使用这个模板来新增与标准联系人和潜在客户模块类似的模块。',
		'type_sale'=>' <b>销售</b>模板提供指定字段机会，例如 潜在客户资源，阶段，数量和可能性。<br/><br/>使用这个模板来创建与标准机会模板相似的模板。',
		'type_file'=>'<b>文件</b> 模板提供文档指定字段，例如文件名，文档类型和公布日期。<br><br>使用这个模板来创建与标准文档模块相似的模块。',

	),
	'dropdowns'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'editdropdown'=>'下拉列表可被用在模块中标准和自定义的下拉字段。<br><br>提供一个<b>名称</b> 给下拉列表。<br><br>如果任何语言包被安装在应用程序中，你可以选择  <b>语言</b> 用于列表项目。<br><br>在<b>项目名称</b> 字段，提供一个名称给下拉列表选项。这个名字不会出现在对用户可见的下拉列表中。<br><br>在 <b>显示标签</b> 字段，提供一个对使用者可见的标签。<br><br>在提供项目名称和显示标签之后，点击 <b>添加</b>来添加项目到下拉列表。 <br><br>拖放项目到想所需位置来重新排序表单中的项目。<br><br>点击 <b>编辑图标</b>, 并输入新标签来编辑项目的显示标签并进入新标签。 点击<b>删除图标</b>来删除下拉列表中的项目.<br><br> 点击<b>撤销</b>来撤销显示表格的改变。 点击<b>重置</b>来重置没做完的修改。<br><br>点击 <b>保存</b> 来保存下拉列表。',

	),
	'subPanelEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。'
    ,
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
	    'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',

	),
	'listViewEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。'
    ,
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
	    'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'Available' => '<b>可利用的</b> 字段不通过默认显示，但是可以被用户添加到列表视图中。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',
	),
	'popupListViewEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。'
    ,
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
	    'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',
	),
	'searchViewEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。'
    ,
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
	    'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'<b>布局</b> 区域包含现在显示在<b>细节视图</b>中的字段。<br/><br/> <b>工具箱</b> 包含 <b>回收站</b> 和可以添加到布局的字段和布局元素 。<br><br>通过拖拽在 <b>工具箱</b>和<b>布局</b> 之间的和在布局本身内部的元素和字段来给布局做更改。<br><br>把字段拖到 <b>回收站</b>来从布局中移除一个字段。然后字段将在工具箱中可用，用以添加布局。'
    ,
		'defaultquickcreate'=>'<b>布局</b> 区域包含现在显示在<b>快速新增</b> 表单中的字段。<br><br>快速新增表单出现在子面板中当创建按钮被点击时。<br/><br/> <b>工具箱</b> 包含 <b>回收站</b>和可以被添加到布局中的字段和布局元素。<br><br>通过拖拽在 <b>工具箱</b>和<b>布局</b> 之间的和在布局本身内部的元素和字段来给布局做更改。<br><br>把字段拖到 <b>回收站</b>来从布局中移除一个字段。 然后字段将在工具箱中可用，用以添加布局。'
    ,
		//this defualt will be used for edit view
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单'
    ,
		'saveBtn'	=> '点击 <b>保存</b> 来保存自从上次保存以来您对布局所做的更改。<br><br>更改将不会显示到模块中直到你部署所做的更改。',
		'historyBtn'=> '点击 <b>查看历史记录</b>从历史记录中来查看和恢复先前保存的布局 。',
	    'historyDefault'=> '点击 <b>恢复默认</b>来恢复对原始布局的查看。',
		'publishBtn'=> '点击 <b>保存和部署</b> 来保存自从上次保存以来您对布局所做的更改并使更改在模块中启用。<br><br>布局将会立即被显示在模块中。',
		'toolbox'	=> ' <b>工具箱</b> 包含 <b>回收站</b>, 额外布局元素和一系列添加到布局中的可用字段。<br/><br/>在工具箱中的布局元素和字段可以被拖拽到布局中，布局元素和字段可以从布局中被拖拽到工具箱中。<br><br>布局元素是<b>面板</b>和 <b>行</b>. 添加一个新的行或面板在布局中给字段提供额外的位置。<br/><br/>拖拽工具箱或布局中的任意字段到已占用的字段位置来置换两个字段的位置。<br/><br/><b>填充</b> 字段在布局中创建了它被放置的空白区。',
		'panels'	=> '<b>布局</b>区域提供了布局将会如何出现在模块中的视图当对布局所做的改变被显示的时候。<br/><br/>您可以通过拖拽他们到所需位置来重置字段，行和面板。<br/><br/>通过拖拽他们到工具箱中的<b>回收站</b> 来去除要素，或者通过从<b>工具箱</b>中拖拽出它们来增加新元素和字段，把它们放到布局中所需位置。',
		'delete'	=> '拖拽任何元素来从布局中移除它。',
		'property'	=> '编辑这为这个字段显示的标签。 <br/><b>定位顺序</b> 控制以什么顺序跳格键在字段之间转换。',
	),
	'fieldsEditor'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'mbDefault'=>'模块可用<b>字段</b> 通过字段名显示在这。<br><br>点击字段名来给字段配置属性。<br><br> 点击<b>添加字段</b>来新增一个字段。 标签和新字段的其他属性可以在通过点击字段名创建后被编辑。 <br><br>在模块被显示之后，在 Module Builder中新增的字段在工作室显示的模块中被视为标准字段。',
        'addField'	=> '选择一个 <b>日期类型</b> 给新字段。 您选择的类型决定可以被输入的字段字符种类。 例如, 只有整数可以被输入到整数数据型字段中。<br><br> 提供一个 <b>名字</b> 给字段。名字必须是字母并且不能包含空格。 底线是有效的。<br><br> <b>显示标签</b> 是在模块布局中为字段出现的标签 。<b>系统标签</b> 用于指代码中的字段。<br><br> 取决于为字段所选的数据类型，一些或下面所有属性可以给字段设置:<br><br> <b>帮助文本</b> 在用户在字段徘徊是短暂出现，可以被用来提示用户想要的输入类型。<br><br> <b>批注文字</b> i仅在工作室和/Module Builder中可见, 可以被用来为管理员描述字段。<br><br> <b>默认值</b> 将会出现在字段中。  用可以在字段中输入新值或使用默认值。<br><br> 选择<b>批量更新</b> 检查框以便能够为字段使用批量更新特征。<br><br><b>最大值</b> 决定了可以被输入到字段中最大字符数量。<br><br> 选择<b>必须字段</b> 检查框为了使字段必要。必须为字段提供一个值以便能够保存包含字段的记录。<br><br> 选择 <b>可报告的</b> 检查框为了允许字段为过滤去所使用 和为了显示记录中的数据。<br><br> 选择<b>审计</b> 检查框为了能够在变更日志中追踪字段的变更。<br><br> 选择一个选项在 <b>可导入的</b> 字段来允许，不允许或者要求字段被导入到导入向导。<br><br>选择一个选项在<b>副本合并</b>字段来允许或不允许副本合并，并找到副本特征。<br><br>额外的特征可以为一些数据类型设置。',
		'editField' => '这个字段的属性可以自定义。<br><br>点击<b>复制</b> 来创建一个有同样属性的新字段。',
        'mbeditField' => '模板字段的<b>显示标签</b> 可以被自定义 。字段的其他属性不能被自定义。<br><br>点击 <b>复制</b> 来创建一个有相同属性的新字段。<br><br>要移除一个模板字段以至于它不会显示在模块中，从适当的<b>布局</b>中移除字段。'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'导出工作室的自定义通过创建可以通过<b>Module Loader</b>被上传到另外一个Sugar例证的文件包 。<br><br> 首先，提供一个<b>文件包名称</b>.  你可以提供 <b>作者</b> 和 <b>说明</b> 信息为文件包.<br><br>选择包含你想要导出的包含自定义的模块。仅仅包含自定义的模块会出现供您选择。<br><br>然后点击 <b>导出</b> 来为文件包创建一个包含自定义的 .zip 文件',
	    'exportCustomBtn'=>'点击<b>导出</b>来为您想导出的包含自定义的文件包创建一个 .zip 文件。',
			'name'=>'这是当前文件包的 <b>名称</b> 。<br/><br/>您输入的姓名必须为字母， 以字母开头并且不包含空格。 (例如: HR_Management)',
			'author'=>'这是在安装过程中显示的 <b>作者</b>  作为实体的名称创建文件包。<br><br>作者可以是个人或者是一个公司。',
			'description'=>'这是在安装是显示的文件包的 <b>说明</b> 。',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> '欢迎来到 <b>开发工具</b> 区域。 <br/><br/>使用这个区域的工具来创建和管理标准和自定义的模块和字段。',
		'studioBtn'	=> '使用 <b>工作室</b> 来自定义显示的模块。',
		'mbBtn'		=> '使用<b>Module Builder</b> 来新增模块。',
		'sugarPortalBtn' => '使用<b>Sugar 门户编辑</b> 来管理和自定义Sugar门户。',
		'dropDownEditorBtn' => '使用 <b>下拉编辑器</b> 来为下拉字段新增和编辑全局的下拉单 。',
		'appBtn' 	=> '应用模式是您可以自定义程序不同属性的地方，例如多少 TPS 记录显示在首页中。',
		'backBtn'	=> '返回上一步。',
		'studioHelp'=> '使用 <b>工作室</b>来决定什么信息要被显示在模块中。',
		'moduleBtn'	=> '点击编辑这个模块。',
		'moduleHelp'=> '你可以为模块自定义的组件出现在这。<br><br>点击一个图标选择编辑的组件。',
		'fieldsBtn'	=> '创建和自定义<b>字段</b> 来在模块内储存信息。',
		'labelsBtn' => '编辑为字段和模块中其他标题显示的 <b>标签</b> 。'	,
	    'relationshipsBtn' => '添加新的或查看已经存在的模块 <b>关系</b> 。' ,
		'layoutsBtn'=> '自定义模块<b>布局</b>.  布局是包含字段的模块的不同视图。<br><br>您可以决定哪些模块出现和他们在每个布局中的组织。',
		'subpanelBtn'=> '决定哪些字段出现在模块的<b>子面板</b> 中。',
		'portalBtn' =>'自定义出现在 <b>Sugar 门户</b>模块<b>布局</b> 。',
		'layoutsHelp'=> '可以被自定义的模块<b>布局</b>出现在这 。<br><br>布局显示字段和字段数据。<br><br>点击一个图标选择编辑的布局。',
		'subpanelHelp'=> ' 模块中可以被自定义的<b>子面板</b> 出现在这.<br><br>点击一个图标选择编辑的模块。',
        'newPackage'=>'点击 <b>新闻简报</b>来创建一个新文件包。',
        'exportBtn' => '点击 <b>到处自定义</b>来创建和下载一个在工作室中为指定模块制定的包含自定义的文件包。',
        'mbHelp'    => '使用<b>Module Builder</b> 来创建一个文件包，它包含基于标准或自定义对象的自定义模块。',
	    'viewBtnEditView' => '自定义模块\'s的 <b>编辑视图</b> 布局。<br><br>编辑视图是为锁定用户输入数据的包含输入字段的表格。',
	    'viewBtnDetailView' => '爱定义模块\'s 的<b>细节视图</b> 布局。<br><br>细节视图显示了用户输入字段数据。',
		'viewBtnDashlet' => '自定义模块\'s的 <b>Sugar Dashlet</b>, 包含 Sugar Dashlet\'s 列表视图和查找.<br><br>The Sugar Dashlet 将会在增加首页模块页数是可用。',
	    'viewBtnListView' => '自定义模块\'的 <b>列表视图</b> 布局<br><br>查找结果出现在列表视图中。',
	    'searchBtn' => '自定义模块\'的 <b>查找</b> 布局。<br><br>决定什么字段可被用来过滤出现在列表视图中的记录。',
		'viewBtnQuickCreate' =>  '自定义模块\'的 <b>快速创建</b> 布局<br><br>快速创建表格出现在子面板和电子邮件模板中。',

	    'searchHelp'=> '可以被自定义的<b>查找</b> 表格出现在这。<br><br>查找表格包含为过滤记录的字段。<br><br>点击图标来选择查找编辑的布局。',
	    'dashletHelp' =>' 可以被自定义的<b>Sugar Dashlet</b> 布局出现在这.<br><br>Sugar Dashlet 将会在添加主页模块页数时可用。',
	    'DashletListViewBtn' =>' <b>Sugar Dashlet 列表视图</b> 显示了基于Sugar Dashlet查找过滤器的记录。',
	    'DashletSearchViewBtn' =>' <b>Sugar Dashlet 查找</b> 为 the Sugar Dashlet列表视图过滤记录。',
	    'popupHelp' =>' 可以被自定义的<b>弹出</b>布局出现在这。<br>',
	    'PopupListViewBtn' =>' <b>弹出列表视图</b> 显示了基于弹出查找视图的记录.',
	    'PopupSearchViewBtn' =>' <b>弹出查找</b> 为弹出列表视图查看记录。',
		'BasicSearchBtn' => '自定义 <b>基本查找</b>，它出现在模块查找区域的【基本查找】标签。',
	    'AdvancedSearchBtn' => '自定义 <b>高级查找</b>表格，它出现在模块查找区域的高级查找标签。',
	    'portalHelp' => '管理和自定义<b>Sugar 门户</b>.',
	    'SPUploadCSS' => '上传一个<b>样式表</b>为Sugar门户.',
	    'SPSync' => '<b>数据同步</b>  Sugar门户例证的自定义。',
	    'Layouts' => '自定义Sugar门户模块的<b>布局</b> 。',
	    'portalLayoutHelp' => '门户内的模块出现在此区域。<br><br>选择一个模块来编辑<b>布局</b>。',
		'relationshipsHelp' => '所有的存在在模块和其他显示模块之间 <b>关系</b>出现在这。<br><br>关系 <b>名称</b>是系统为关系生成的名称。<br><br> <b>主要模块</b> 使用有关系的模块。 例如，关系的所有属性，账户模块为主要模块，储存在在账户数据库表格中。<br><br><b>类型</b> 存在在主要模块和 <b>相关模块</b>之间的关系类型。<br><br>点击列标题来排序列.<br><br> 点击关系表格中的一行来查看与关系相关的属性。<br><br>点击 <b>添加关系</b> 来创建一个新关系。<br><br>关系可以在两个被部署的模块之间被创建。',
        'relationshipHelp'=>'<b>关系</b> 可以在模块和其他部署的模块之间被创建。<br><br> 关系通过子面板被从视觉上表现出来并使字段在模块记录中产生关联。<br><br>为模块选择下面其中一个关系<b>类型</b> :<br><br> <b>一对一</b> - 两个模块\' 记录都会包含相关字段 。<br><br> <b>一对多</b> - 主要模块的\'记录会包含一个子面板， 并且相关模块的\'记录 会包含相关字段。<br><br> <b>多对多</b> - 两个模块\' 记录都会显示子面板。<br><br>为关系选择 <b>相关模块</b> 。<br><br>如果关系类型包含子面板，为合适的模块选择子面板视图。<br><br> 点击<b>保存</b> 来创建关系。',
		'convertLeadHelp' => "这儿您可以添加模块来转换布局 清理已经存在的布局。<br/>
		You can re-order the modules by dragging their rows in the table.<br/><br/>

		<b>Module:</b> The name of the module.<br/><br/>
		<b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
		<b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
		<b>Allow Selection:</b> Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br/><br/>
		<b>Edit:</b> Modify the convert layout for this module.<br/><br/>
		<b>Delete:</b> Remove this module from the convert layout.<br/><br/>
		",
        'editDropDownBtn' => '编辑一个全局下拉单',
		'addDropDownBtn' => '添加一个全局下拉单',
	),
	'fieldsHelp'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
	),
	'relationshipsHelp'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'addrelbtn'=>'滑动鼠标添加新关系..',
		'addRelationship'=>'<b>关系</b> 可以在模块和其他自定义模块之间活在部署模块中被创建。<br><br> 关系通过自面板和模块记录中的相关字段被形象地表达。<br><br>从下面的关系<b>中</b> 中为模块选择一个关系类型:<br><br> <b>一对一</b> - 两个模块\' 记录都会包含相关字段 。<br><br> <b>一对多</b> - 主要模块的\'记录会包含一个子面板， 并且相关模块的\'记录 会包含相关字段。<br><br> <b>多对多</b> -两个模块\' 记录都会显示子面板。<br><br>为关系选择 <b>相关模块</b> 。 <br><br>如果关系类型包含子面板，为合适的模块选择子面板视图。<br><br> 点击<b>保存</b> 来创建关系。',
	),
	'labelsHelp'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'saveBtn'	=> '点击 <b>保存</b> 来保存自从上次保存以来您对布局所做的更改。<br><br>更改将不会显示到模块中直到你部署所做的更改。',
		'publishBtn'=> '点击 <b>保存和部署</b> 来保存自从上次保存以来您对布局所做的更改并使更改在模块中启用。<br><br>布局将会立即被显示在模块中。',
	),
	'portalSync'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
	),
	'portalStyle'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
	),
),

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>' 要开始项目，点击 <b>新闻简报</b>来新增一个文件包到你的自定义模块。 <br/><br/>每个文件包可以包含一个或多个模块。<br/><br/>例如, 您可能想要新增一个文件包，其包含一个与标准账户模块相关的自定义模块。或者，您可能想要新增一个文件包，文件包包含几个新的模块，它们作为一个项目一起工作并且比起关联或是与已经存在于应用程序中的其他模块相关联。',
			'somepackages'=>'<b>文件包</b>作为一个包含自定义模块的容器，其所有部分都是项目的一部分。文件包可以包含一个或多个自定义 <b>模块</b> ，他们可以彼此关联或与应用程序其他模块关联。<br/><br/>在为您的项目创建了文件包之后，您可以立即创建文件包的模块，或者您可以稍后返回 Module Builder 来完成此项目。<br><br>当项目完成时，您可以 <b>部署</b>文件包在应用程序内安装自定义模块。',
			'afterSave'=>'您的新文件包应该包含至少一个模块。您可以给文件包新增一个或多个自定义模块。<br/><br/>点击<b>新模块</b>来为这个文件包创建一个自定义模块。<br/><br/>在创建至少一个模块之后，您可以公布或部署文件包，使它为您的例证或/其他用户\' 例证可用。<br/><br/>要在您sugar例证中部署文件包，点击 <b>部署</b>。<br><br>点击 <b>公布</b>来保存文件包作为一个 zip 文件。 在zip文件被保存到您的系统之后，使用<b>模块加载器</b> 来上传和安装文件包在您的 Sugar instance中。 <br/><br/>您可以分配这个文件给其他用户在他们的Sugar 例证中上传和安装。',
			'create'=>'提供 <b>名称</b> 给文件包。输入的名称必须为字母并且不包含空格。 (Example: HR_Management)<br/><br/> 你可以提供 <b>作者</b> 和 <b>说明</b> 信息给文件包。 <br/><br/>点击 <b>保存</b> 来创建新文件包。',
			),
	'main'=>array(
		'welcome'=>'使用 <b>开发工具</b> 来创建和管理标准的和自定义的模块和字段。 <br/><br/>要管理应用程序中的模块，点击 <b>工作室</b>。 <br/><br/>要创建自定义模块，点击 <b>Module Builder</b>.',
		'studioWelcome'=>'所有现在已经安装的模块，包含标准的和模块加载的物件，都是在工作室内自定义的。'
	),
	'module'=>array(
		'somemodules'=>"既然当前的文件包包含至少一个模块，您可以 <b>部署</b> 文件包中的模块在您的Sugar例证中，或者 <b>公布</b>将要被安装到当前例证中或另外一个使用  <b>模块加载器</b>的文件包。<br/><br/>要在您的Sugar例证中直接安装文件包，点击<b>部署</b>。<br><br>要新增一个zip 文件给文件包，文件包是可以被加载和安装在当前的Sugar例证中和 其他使用<b>模块加载器</b>中, 点击 <b>公布</b>.<br/><br/> 您可以有阶段性的为文件包构建模块，公布或部署当您准备好要这么做的时候。<br/><br/>在公布或部署一个文件包之后，您可以改变文件包的属性并进一步自定义模块。然后再次公布或再次部署文件包来应用更改。" ,
		'editView'=> '在这您可以编辑已经存在的字段。您可以移除任何已经存在的字段或添加在左侧面板可用的字段。',
			'create'=>'提供 <b>名称</b> 给文件包。输入的名称必须为字母并且不包含空格。 (Example: HR_Management)<br/><br/> 你可以提供 <b>作者</b> 和 <b>说明</b> 信息给文件包。 <br/><br/>点击 <b>保存</b> 来创建新文件包。',
			'afterSave'=>'您的新文件包应该包含至少一个模块。您可以给文件包新增一个或多个自定义模块。<br/><br/>点击<b>新模块</b>来为这个文件包创建一个自定义模块。<br/><br/>在创建至少一个模块之后，您可以公布或部署文件包，使它为您的例证或/其他用户\' 例证可用。<br/><br/>要在您sugar例证中部署文件包，点击 <b>部署</b>。<br><br>点击 <b>公布</b>来保存文件包作为一个 zip 文件。 在zip文件被保存到您的系统之后，使用<b>模块加载器</b> 来上传和安装文件包在您的 Sugar instance中。 <br/><br/>您可以分配这个文件给其他用户在他们的Sugar 例证中上传和安装。',
		'viewfields'=>'模块中的字段可以被自定义来适应您的需要。<br/><br/>您可以删除标准字段，但是您可以从布局页中适当的布局中移除他们。<br/><br/>您可以快速创建与已经存在有相思树行的新字段，通过点击 <b>复制</b> 在<b>属性</b> 表格中。输入任何新属性，然后点击 <b>保存</b>。<br/><br/>建议您为标准字段和自定义字段设置所有属性，在您公布和安装包含自定义模块的文件包之前。',
		'viewrelationships'=>'您可以创建当前模块和文件包中其他模块之间的多对多关系，并且/或者，在当前模块和应经安装在应用程序中的模块之间。<br><br> 要创建一对多和一对一关系，为模块创建 <b>关联</b> 和<b>弹性关联</b>字段。',
		'viewlayouts'=>'您可以控制在 <b>编辑视图</b>中什么字段可用于捕获数据， 您也可以控制什么数据显示在<b>细节视图</b>中。试图不需要匹配。 <br/><br/>快速创建表格被显示，当<b>创建</b> 在子面板中被点击时。通过默认，<b>快速创建</b> f表格布局与默认 <b>编辑视图</b> 布局相同。您可以自定义快速创建表格使它比编辑视图布局包含更少的和/或不同的字段。<br><br>您可以决定模块的安全性，使用自定义和<b>角色管理</b>。<br><br>',
		'existingModule' =>'在创建和自定义这个模块之后，您可以创建额外的模块或返回到文件包中去<b>公布</b> 或 <b>部署</b> 文件包。<br><br>要创建额外的模块，点击 <b>复制</b> 来创建一个与当前模块有相同属性的模块，或返回文件包，并点击 <b>新模块</b>。<br><br> 如果您准备好去 <b>公布</b> 或 <b>部署</b> 包含这个模块的文件包，导航返回文件包去执行这些功能。您可以公布或部署包含至少一个模块的文件包。',
		'labels'=> '标准字段和自定义字段的标签可以被改变。 改编字段标签不会影响储存在字段中的数据。',
	),
	'listViewEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。',
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'Available' => '<b>可利用的</b> 字段不通过默认显示，但是可以被用户添加到列表视图中。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',
	),

	'searchViewEditor'=>array(
			'modify'=>'<b>文件包</b> 属性和可能的行为出现在这。<br><br>你可以修改文件包的 <b>名称</b>, <b>作者</b>和<b>说明</b> ，也可以查看和自定义所有文件包里包含的模块。<br><br>点击 <b>新模块</b> 来给文件包新增模块。<br><br> 如果文件包包含至少一个模块，你可以<b>公布</b> 和 <b>部署</b> 文件包, 和 <b>导出</b> 文件包中的自定义。',
			'savebtn'=>'点击 <b>保存</b>去保存与文件包中相关的所有输入数据。',
		'Hidden' 	=> '<b>隐藏</b> 字段不出现在子面板中。',
		'Default'	=> '<b>默认</b>字段出现在子面板中。',
	),
	'layoutEditor'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'saveBtn'	=> '点击 <b>保存</b> 来保存自从上次保存以来您对布局所做的更改。<br><br>更改将不会显示到模块中直到你部署所做的更改。',
		'publishBtn'=> '点击 <b>保存和部署</b> 来保存自从上次保存以来您对布局所做的更改并使更改在模块中启用。<br><br>布局将会立即被显示在模块中。',
		'toolbox'	=> ' <b>工具箱</b> 包含 <b>回收站</b>, 额外布局元素和一系列添加到布局中的可用字段。<br/><br/>在工具箱中的布局元素和字段可以被拖拽到布局中，布局元素和字段可以从布局中被拖拽到工具箱中。<br><br>布局元素是<b>面板</b>和 <b>行</b>. 添加一个新的行或面板在布局中给字段提供额外的位置。<br/><br/>拖拽工具箱或布局中的任意字段到已占用的字段位置来置换两个字段的位置。<br/><br/><b>填充</b> 字段在布局中创建了它被放置的空白区。',
		'panels'	=> '<b>布局</b>区域提供了布局将会如何出现在模块中的视图当对布局所做的改变被显示的时候。<br/><br/>您可以通过拖拽他们到所需位置来重置字段，行和面板。<br/><br/>通过拖拽他们到工具箱中的<b>回收站</b> 来去除要素，或者通过从<b>工具箱</b>中拖拽出它们来增加新元素和字段，把它们放到布局中所需位置。',
	),
	'dropdownEditor'=>array(
		'default' => ' 所有<b>下拉列表</b> 应用程序的下拉菜单都被列在这。<br><br>下拉列表可下拉模块中任意字段。<br><br>点击下拉单名称来改变已经存在的下拉列表。<br><br>点击<b>新增下拉列表</b> 来新增下拉表单',
		'dropdownaddbtn'=> '点击这个按钮给下拉式菜单新增一个项目。',

	),
	'exportcustom'=>array(
	    'exportHelp'=>'导出工作室的自定义通过创建可以通过<b>Module Loader</b>被上传到另外一个Sugar例证的文件包 。<br><br> 首先，提供一个<b>文件包名称</b>.  你可以提供 <b>作者</b> 和 <b>说明</b> 信息为文件包.<br><br>选择包含你想要导出的包含自定义的模块。仅仅包含自定义的模块会出现供您选择。<br><br>然后点击 <b>导出</b> 来为文件包创建一个包含自定义的 .zip 文件',
	    'exportCustomBtn'=>'点击<b>导出</b>来为您想导出的包含自定义的文件包创建一个 .zip 文件。',

			'name'=>'这是当前文件包的 <b>名称</b> 。<br/><br/>您输入的姓名必须为字母， 以字母开头并且不包含空格。 (例如: HR_Management)',
			'author'=>'这是在安装过程中显示的 <b>作者</b>  作为实体的名称创建文件包。<br><br>作者可以是个人或者是一个公司。',

			'description'=>'这是在安装过程中显示的对文件包的<b>描述</b> 信息。',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> '欢迎来到 <b>开发工具</b> 区域。 <br/><br/>使用这个区域的工具来创建和管理标准和自定义的模块和字段。',
		'studioBtn'	=> '使用 <b>工作室</b> 来自定义显示的模块。',
		'mbBtn'		=> '使用<b>Module Builder</b> 来新增模块。',
		'appBtn' 	=> '应用模式是您可以自定义程序不同属性的地方，例如多少 TPS 记录显示在首页中。',
		'backBtn'	=> '返回上一步。',
		'studioHelp'=> '使用 <b>工作室</b>来决定什么信息要被显示在模块中。',
		'moduleBtn'	=> '点击编辑这个模块。',
		'moduleHelp'=> '你可以为模块自定义的组件出现在这。<br><br>点击一个图标选择编辑的组件。',
		'fieldsBtn'	=> '创建和自定义<b>字段</b> 来在模块内储存信息。',
		'labelsBtn' => '编辑为字段和模块中其他标题显示的 <b>标签</b> 。'	,
		'layoutsBtn'=> '自定义模块<b>布局</b>.  布局是包含字段的模块的不同视图。<br><br>您可以决定哪些模块出现和他们在每个布局中的组织。',
		'subpanelBtn'=> '决定哪些字段出现在模块的<b>子面板</b> 中。',
		'layoutsHelp'=> '可以被自定义的模块<b>布局</b>出现在这 。<br><br>布局显示字段和字段数据。<br><br>点击一个图标选择编辑的布局。',
		'subpanelHelp'=> ' 模块中可以被自定义的<b>子面板</b> 出现在这.<br><br>点击一个图标选择编辑的模块。',
	    'searchHelp'=> '可以被自定义的<b>查找</b> 表格出现在这。<br><br>查找表格包含为过滤记录的字段。<br><br>点击图标来选择查找编辑的布局。',
		'labelsBtn' => '编辑为字段和模块中其他标题显示的 <b>标签</b> 。'	,
        'newPackage'=>'点击 <b>新闻简报</b>来创建一个新文件包。',
        'mbHelp'    => '使用<b>Module Builder</b> 来创建一个文件包，它包含基于标准或自定义对象的自定义模块。',
        'exportBtn' => '点击 <b>到处自定义</b>来创建和下载一个在工作室中为指定模块制定的包含自定义的文件包。',
	),


),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'下拉列表编辑器',

//ASSISTANT
'LBL_AS_SHOW' => '今后显示助手。',
'LBL_AS_IGNORE' => '今后忽略助手。',
'LBL_AS_SAYS' => '助手说:',


//STUDIO2
'LBL_MODULEBUILDER'=>'模块生成器',
'LBL_STUDIO' => '工作室',
'LBL_DROPDOWNEDITOR' => '下拉列表编辑器',
'LBL_EDIT_DROPDOWN'=>'编辑下拉列表',
'LBL_DEVELOPER_TOOLS' => '开发工具',
'LBL_SUGARPORTAL' => 'Sugar门户编辑',
'LBL_SYNCPORTAL' => '同步门户',
'LBL_PACKAGE_LIST' => '文件包列表',
'LBL_HOME' => '首页',
'LBL_NONE'=>'-无-',
'LBL_DEPLOYE_COMPLETE'=>'部署完成',
'LBL_DEPLOY_FAILED'   =>'在部署的时候发生错误，你准备部署的包可能没有被正确安装。',
'LBL_ADD_FIELDS'=>'添加客户字段',
'LBL_AVAILABLE_SUBPANELS'=>'子面板可用',
'LBL_ADVANCED'=>'高级',
'LBL_ADVANCED_SEARCH'=>'高级查找',
'LBL_BASIC'=>'基本',
'LBL_BASIC_SEARCH'=>'基本查找',
'LBL_CURRENT_LAYOUT'=>'当前布局',
'LBL_CURRENCY' => '货币',
'LBL_CUSTOM' => '客户',
'LBL_DASHLET'=>'Sugar 新增栏',
'LBL_DASHLETLISTVIEW'=>'Sugar 新增栏列表',
'LBL_DASHLETSEARCH'=>'Sugar新增栏查找',
'LBL_POPUP'=>'弹出窗口',
'LBL_POPUPLIST'=>'弹出列表',
'LBL_POPUPLISTVIEW'=>'弹出列表视图',
'LBL_POPUPSEARCH'=>'弹出查找',
'LBL_DASHLETSEARCHVIEW'=>'Sugar 新增栏查找',
'LBL_DISPLAY_HTML'=>'显示 HTML 编码',
'LBL_DETAILVIEW'=>'细节视图',
'LBL_DROP_HERE' => '[拽到这里]',
'LBL_EDIT'=>'编辑',
'LBL_EDIT_LAYOUT'=>'编辑布局',
'LBL_EDIT_ROWS'=>'编辑行',
'LBL_EDIT_COLUMNS'=>'编辑列',
'LBL_EDIT_LABELS'=>'编辑标签',
'LBL_EDIT_FIELDS'=>'编辑字段',
'LBL_EDIT_PORTAL'=>'编辑门户 ',
'LBL_EDIT_FIELDS'=>'编辑字段',
'LBL_EDITVIEW'=>'编辑视图',
'LBL_FILLER'=>'(填充器)',
'LBL_FIELDS'=>'字段',
'LBL_FAILED_TO_SAVE' => '保存失败',
'LBL_FAILED_PUBLISHED' => '发布失败',
'LBL_HOMEPAGE_PREFIX' => '我的',
'LBL_LAYOUT_PREVIEW'=>'预览面板',
'LBL_LAYOUTS'=>'版面布局',
'LBL_LISTVIEW'=>'列表视图',
'LBL_MODULES'=>'模块',
'LBL_MODULE_TITLE' => '工作室',
'LBL_NEW_PACKAGE' => '新建文件包',
'LBL_NEW_PANEL'=>'新建面板',
'LBL_NEW_ROW'=>'新建行',
'LBL_PACKAGE_DELETED'=>'已删除的包',
'LBL_PUBLISHING' => '发布中 ...',
'LBL_PUBLISHED' => '已发布',
'LBL_SELECT_FILE'=> '选择文件',
'LBL_SAVE_LAYOUT'=> '保存布局',
'LBL_SELECT_A_SUBPANEL' => '选择一个子面板',
'LBL_SELECT_SUBPANEL' => '选择一个子面板',
'LBL_SUBPANELS' => '子面板',
'LBL_SUBPANEL' => '子面板',
'LBL_SUBPANEL_TITLE' => '标题:',
'LBL_SEARCH_FORMS' => '查找窗体',
'LBL_SEARCH'=>'查找',
'LBL_STAGING_AREA' => '开始区域 (在这里拖拽条目)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar 字段 (点击条目添加到当前区域)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (点击条目添加到当前区域)',
'LBL_TOOLBOX' => '工具箱',
'LBL_VIEW_SUGAR_FIELDS' => '产看Sugar 字段',
'LBL_VIEW_SUGAR_BIN' => '查看Sugar Bin',
'LBL_QUICKCREATE' => '快速创建',
'LBL_EDIT_DROPDOWNS' => '编辑一个全局下拉列表',
'LBL_ADD_DROPDOWN' => '添加一个新的全局下拉列表',
'LBL_BLANK' => '-空白-',
'LBL_TAB_ORDER' => '标签顺序',
'LBL_TAB_PANELS' => '将面板显示为标签',
'LBL_TAB_PANELS_HELP' => '显示标签下的所有面板，而不是在一个屏幕显示所有标签下的面板。',
'LBL_DROPDOWN_TITLE_NAME' => '名称',
'LBL_DROPDOWN_LANGUAGE' => '语言',
'LBL_DROPDOWN_ITEMS' => '下拉列表条目',
'LBL_DROPDOWN_ITEM_NAME' => '条目名称',
'LBL_DROPDOWN_ITEM_LABEL' => '显示列表',
'LBL_SYNC_TO_DETAILVIEW' => '同步到细节视图',
'LBL_SYNC_TO_DETAILVIEW_HELP' => '选择这个选项来同步这个[编辑视图]到相应的[细节视图]布局。编辑视图中字段和字段的位置<br>将会被同步， 并且在点击保存或保存和部署的时候，自动保存到细节视图中。<br>细节视图中将不可以进行布局更改。',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => '这个细节视图已经与相应的编辑视图一起同步。<br> 细节视图中字段和字段位置反映了编辑视图中字段和字段的位置。<br> 在此页中，对细节视图的更改不能被保存或部署。若要更改细节视图，需在编辑视图中不同步布局。 ',
'LBL_COPY_FROM_EDITVIEW' => '从编辑视图复制',
'LBL_DROPDOWN_BLANK_WARNING' => '项目名称和显示标签都需要值。 要增加一个空白项，点击添加但不输入任何项目名称和显示标签的值。',



//RELATIONSHIPS
'LBL_MODULE' => '模块',
'LBL_LHS_MODULE'=>'主模块',
'LBL_CUSTOM_RELATIONSHIPS' => '* 工作室或模块生成器创建的模块',
'LBL_RELATIONSHIPS'=>'关系',
'LBL_RELATIONSHIP_EDIT' => '编辑关系',
'LBL_REL_NAME' => '名称',
'LBL_REL_LABEL' => '标签',
'LBL_REL_TYPE' => '类型',
'LBL_RHS_MODULE'=>'关联模块',
'LBL_NO_RELS' => '无关联',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'可选条件' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'列',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'值',
'LBL_SUBPANEL_FROM'=>'子面板来自',
'LBL_RELATIONSHIP_ONLY'=>'没有创建该关联的可见元素，因为两模块已存在可见关联。',
'LBL_ONETOONE' => '一对一',
'LBL_ONETOMANY' => '一对多',
'LBL_MANYTOONE' => '多对一',
'LBL_MANYTOMANY' => '多对多',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => '选择一项功能或组件',
'LBL_QUESTION_MODULE1' => '选择一个模块。',
'LBL_QUESTION_EDIT' => '选择一个模块来编辑',
'LBL_QUESTION_LAYOUT' => '选择一个布局来编辑',
'LBL_QUESTION_SUBPANEL' => '选择一个子面板来编辑。',
'LBL_QUESTION_SEARCH' => '选择一个查找版面来编辑',
'LBL_QUESTION_MODULE' => '选择一个模块组件来编辑',
'LBL_QUESTION_PACKAGE' => '选择一个文件包来编辑,或创建一个新文件包。',
'LBL_QUESTION_EDITOR' => '选择一工具。',
'LBL_QUESTION_DROPDOWN' => '选择一个下拉列表来编辑,或创建一个新下拉列表。',
'LBL_QUESTION_DASHLET' => '选择编辑一个统计图布局。',
'LBL_QUESTION_POPUP' => '选择一个弹出式布局编辑。',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'相关',
'LBL_NAME'=>'名称',
'LBL_LABELS'=>'标签',
'LBL_MASS_UPDATE'=>'主题更新',
'LBL_AUDITED'=>'审计',
'LBL_CUSTOM_MODULE'=>'模块',
'LBL_DEFAULT_VALUE'=>'默认值',
'LBL_REQUIRED'=>'需求',
'LBL_DATA_TYPE'=>'类型',
'LBL_HCUSTOM'=>'客户',
'LBL_HDEFAULT'=>'默认',
'LBL_LANGUAGE'=>'语言:',
'LBL_CUSTOM_FIELDS' => '* 字段已在工作室创建',

//SECTION
'LBL_SECTION_EDLABELS' => '编辑标签',
'LBL_SECTION_PACKAGES' => '文件包',
'LBL_SECTION_PACKAGE' => '文件包',
'LBL_SECTION_MODULES' => '模块',
'LBL_SECTION_PORTAL' => '门户',
'LBL_SECTION_DROPDOWNS' => '下拉列表',
'LBL_SECTION_PROPERTIES' => '属性',
'LBL_SECTION_DROPDOWNED' => '下拉列表编辑器',
'LBL_SECTION_HELP' => '帮助',
'LBL_SECTION_ACTION' => '动作',
'LBL_SECTION_MAIN' => '主要',
'LBL_SECTION_EDPANELLABEL' => '编辑面板标签',
'LBL_SECTION_FIELDEDITOR' => '字段编辑器',
'LBL_SECTION_DEPLOY' => '展开',
'LBL_SECTION_MODULE' => '模块',
'LBL_SECTION_VISIBILITY_EDITOR'=>'编辑可见度',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'默认',
'LBL_HIDDEN'=>'隐藏',
'LBL_AVAILABLE'=>'可用',
'LBL_LISTVIEW_DESCRIPTION'=>'下面显示了三列。 <b>默认</b> 列包含的字段被默认显示在列表视图中。 <b>附加</b> 列包含的字段用户可以选择使用创建客户视图。<b>可用</b> 行显示当您为管理员是添加默认或附加行被用户使用。',
'LBL_LISTVIEW_EDIT'=>'列表显示编辑器',

//Manager Backups History
'LBL_MB_PREVIEW'=>'预览',
'LBL_MB_RESTORE'=>'重新保存',
'LBL_MB_DELETE'=>'删除',
'LBL_MB_COMPARE'=>'比较',
'LBL_MB_DEFAULT_LAYOUT'=>'默认布局',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'增加',
'LBL_BTN_SAVE'=>'保存',
'LBL_BTN_SAVE_CHANGES'=>'保存更改',
'LBL_BTN_DONT_SAVE'=>'放弃更改',
'LBL_BTN_CANCEL'=>'取消',
'LBL_BTN_CLOSE'=>'关闭',
'LBL_BTN_SAVEPUBLISH'=>'保存 & 发布',
'LBL_BTN_NEXT'=>'下一条',
'LBL_BTN_BACK'=>'后退',
'LBL_BTN_CLONE'=>'复制',
'LBL_BTN_ADDCOLS'=>'添加列',
'LBL_BTN_ADDROWS'=>'添加行',
'LBL_BTN_ADDFIELD'=>'添加字段',
'LBL_BTN_ADDDROPDOWN'=>'添加下拉列表',
'LBL_BTN_SORT_ASCENDING'=>'升序排序',
'LBL_BTN_SORT_DESCENDING'=>'降序排序',
'LBL_BTN_EDLABELS'=>'编辑标签',
'LBL_BTN_UNDO'=>'撤销',
'LBL_BTN_REDO'=>'重做',
'LBL_BTN_ADDCUSTOMFIELD'=>'添加客户字段',
'LBL_BTN_EXPORT'=>'导出客户化订制',
'LBL_BTN_DUPLICATE'=>'复制',
'LBL_BTN_PUBLISH'=>'发布',
'LBL_BTN_DEPLOY'=>'部署',
'LBL_BTN_EXP'=>'导出',
'LBL_BTN_DELETE'=>'删除',
'LBL_BTN_VIEW_LAYOUTS'=>'查看布局',
'LBL_BTN_VIEW_FIELDS'=>'查看字段',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'查看关系项',
'LBL_BTN_ADD_RELATIONSHIP'=>'添加关系项',
'LBL_BTN_RENAME_MODULE' => '改变',
'LBL_BTN_INSERT'=>'Insert',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> '错误: 字段已经存在',
'ERROR_INVALID_KEY_VALUE'=> "错误: 无效的关键值: [\']",
'ERROR_NO_HISTORY' => '没有找到历史文件',
'ERROR_MINIMUM_FIELDS' => '布局中必须包含一个字段',
'ERROR_GENERIC_TITLE' => '一个错误已经发生',
'ERROR_REQUIRED_FIELDS' => '您确定要继续吗？布局中缺少以下必填字段： ',
'ERROR_ARE_YOU_SURE' => '您确定要继续么？',



//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'文件包名称:',
'LBL_MODULE_NAME'=>'模块名称:',
'LBL_AUTHOR'=>'作者:',
'LBL_DESCRIPTION'=>'说明:',
'LBL_KEY'=>'关键值:',
'LBL_ADD_README'=>' 自述',
'LBL_MODULES'=>'模块',
'LBL_LAST_MODIFIED'=>'最新修改:',
'LBL_NEW_MODULE'=>'新增模块',
'LBL_LABEL'=>'标签:',
'LBL_LABEL_TITLE'=>'标签',
'LBL_WIDTH'=>'宽',
'LBL_PACKAGE'=>'文件包:',
'LBL_TYPE'=>'类型:',
'LBL_TEAM_SECURITY'=>'团队安全',
'LBL_ASSIGNABLE'=>'可分配',
'LBL_PERSON'=>'人员',
'LBL_COMPANY'=>'公司',
'LBL_ISSUE'=>'发行',
'LBL_SALE'=>'销售',
'LBL_FILE'=>'文件',
'LBL_NAV_TAB'=>'导航标签',
'LBL_CREATE'=>'创建',
'LBL_LIST'=>'列表',
'LBL_VIEW'=>'查看',
'LBL_LIST_VIEW'=>'查看列表',
'LBL_HISTORY'=>'查看历史记录',
'LBL_RESTORE_DEFAULT'=>'恢复默认值',
'LBL_ACTIVITIES'=>'销售活动',
'LBL_SEARCH'=>'查找',
'LBL_NEW'=>'新建',
'LBL_TYPE_BASIC'=>'基本',
'LBL_TYPE_COMPANY'=>'公司',
'LBL_TYPE_PERSON'=>'人员',
'LBL_TYPE_ISSUE'=>'发行',
'LBL_TYPE_SALE'=>'销售',
'LBL_TYPE_FILE'=>'文件',
'LBL_RSUB'=>'这是将显示在您模块中的子面板',
'LBL_MSUB'=>'这是您模块的子面板用于提供给相关模块显示。',
'LBL_MB_IMPORTABLE'=>'导入',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'可见',
'LBL_VE_HIDDEN'=>'隐藏',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] 已经被删除',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'导出客户化订制',
'LBL_EC_NAME'=>'文件包名称:',
'LBL_EC_AUTHOR'=>'作者:',
'LBL_EC_DESCRIPTION'=>'描述:',
'LBL_EC_KEY'=>'关键值:',
'LBL_EC_CHECKERROR'=>'前选择一个模块。',
'LBL_EC_CUSTOMFIELD'=>'客户化订制字段',
'LBL_EC_CUSTOMLAYOUT'=>'客户化界面',
'LBL_EC_NOCUSTOM'=>'无模块被客户化订制。',
'LBL_EC_EMPTYCUSTOM'=>'空白客户化订制。',
'LBL_EC_EXPORTBTN'=>'导出',
'LBL_MODULE_DEPLOYED' => '模块已打开。',
'LBL_UNDEFINED' => '未定义',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => '挽回数据失败',
'LBL_AJAX_TIME_DEPENDENT' => '动作正在进行中,请耐心等待并在几秒钟后重试。',
'LBL_AJAX_LOADING' => '加载中...',
'LBL_AJAX_DELETING' => '删除中...',
'LBL_AJAX_BUILDPROGRESS' => '建设过程中...',
'LBL_AJAX_DEPLOYPROGRESS' => '扩展过程中...',
'LBL_AJAX_FIELD_EXISTS' =>'你输入的字段名已经存在。请输入新字段名。 ',
//JS
'LBL_JS_REMOVE_PACKAGE' => '你确定要删除此模块？这会永久删除这个模块相关的所有文件。',
'LBL_JS_REMOVE_MODULE' => '你确定要删除此模块？这会永久删除这个模块相关的所有文件。',
'LBL_JS_DEPLOY_PACKAGE' => '重新部署该模块将覆盖所有你在工作室中针对该模块所做的定制。你确定要继续吗？',

'LBL_DEPLOY_IN_PROGRESS' => '部署文件包',
'LBL_JS_VALIDATE_NAME'=>'名称 - 必须为字母数字并且以字母开头。',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'文件包名称已经存在',
'LBL_JS_VALIDATE_KEY'=>'关键值 - 必须为字母数字并且以字母开头。',
'LBL_JS_VALIDATE_LABEL'=>'请输入一条标签作为此模块的显示名称',
'LBL_JS_VALIDATE_TYPE'=>'请在列表中选择你喜欢的模块类型',
'LBL_JS_VALIDATE_REL_NAME'=>'名称 - 必须为字母数字并且无空格',
'LBL_JS_VALIDATE_REL_LABEL'=>'标签 - 请添加一条可显示于子面板上',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"删除一条客户字段将会删除所有与客户相关的数据。您将在所有添加过此字段的界面中删除它。"
		. "\\n\\n你要继续吗?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'您确定您希望删除此项关系吗?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'将永久添加该关联，是否部署？',
'LBL_CONFIRM_DONT_SAVE' => '自上次保存已变化,您真要保存吗？',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '保存更改?',
'LBL_CONFIRM_LOWER_LENGTH' => '数据可能被截断并且该操作不能被撤消，你确定要继续吗?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'请按照加入该字段的数据类型选择合适的数据类型。',
'LBL_POPHELP_SEARCHABLE'=>'Select the boost level for this field. <br />Fields with a higher boost level will be given greater weight when the search is performed. <br />When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br /> If you change the boost level for a field from one level to another, perform a system index to apply the change. <br/> Be sure to select to delete the existing data at the time that the system index is performed.',
'LBL_POPHELP_IMPORTABLE'=>'<b>是:</b> 导入操作将加入该字段。\\n<b>否:</b> 导入操作不会加入该字段。\\n<b>必要:</b> 任何导入操作必须提供该字段数值。',
'LBL_POPHELP_IMAGE_WIDTH'=>'输入一个以像素为单位的宽度值。',
'LBL_POPHELP_IMAGE_HEIGHT'=>'输入一个以像素为单位的宽度值。<br> 传的图像将被缩放到这个宽度。',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>禁止:</b> 该字段将在合并重复时不会出现，在查找重复时也不会做为筛选条件出现。.\\n<b>启用:</b> 该字段将在合并重复时出现，但在查找重复时不会做为筛选条件出现。\\n<b>在过滤:</b> 该字段将在合并重复时出现，但在查找重复时也会做为筛选条件出现。\\n<b>默认选择的过滤:</b> 在查找重复时，该字段作为默认筛选条件，并在合并重复时出现。<b>只过滤:</b> 该字段将在合并重复时不会出现，但在查找重复时会做为筛选条件出现。\\n'
,
'LBL_POPHELP_GLOBAL_SEARCH'=>'当在该模块内用全局搜索的时候，请选择使用此字段。',
//Revert Module labels
'LBL_RESET' => '重置',
'LBL_RESET_MODULE' => '复位模块',
'LBL_REMOVE_CUSTOM' => '删除自定义',
'LBL_CLEAR_RELATIONSHIPS' => '消除关系',
'LBL_RESET_LABELS' => '复位标签',
'LBL_RESET_LAYOUTS' => '复位布局"',
'LBL_REMOVE_FIELDS' => '删除自定义字段',
'LBL_CLEAR_EXTENSIONS' => '消除扩展',
'LBL_CLEAR_EXTENSIONS' => '消除扩展',



'LBL_HISTORY_TIMESTAMP' => '时间戳',
'LBL_HISTORY_TITLE' => ' 历史记录',

'fieldTypes' => array(
				'varchar'=>'单行文本', 
				'int'=>'整数型', 
				'float'=>'浮点型',
				'bool'=>'布尔型',
				'enum'=>'枚举型(下拉列表)',
				'multienum' => '多选',
				'date'=>'日期型', 
				'phone' => '电话', 
				'currency' => '货币', 
				'html' => 'HTML', 
				'radioenum' => '单选框',
				'relate' => '关联型', 
				'address' => '地址', 
				'text' => '多行文本', 
				'url' => '超链接',
				'iframe' => '浮动窗口',
        'datetimecombo' =>'日期时间型',
		    'decimal'=>'十进制数值型',
),
'labelTypes' => array(
    "" => "经常使用的标签",
	"all" => "所有标签",
),

'parent' => '弹性关联',

'LBL_ILLEGAL_FIELD_VALUE' =>"下拉列表的键中不能含有引号。",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"你是选择从下拉列表中删除这一项目。任何使用此下拉列表的字段将不再显示该值，该值将不再能够从下拉字段选中。您确定要继续吗？",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"选择输入10个数字来验证这个字段<br>" .
					             "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'所有模块',

);

