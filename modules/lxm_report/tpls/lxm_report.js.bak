$(document).ready( function() {
	var options = {
		type: 'get',
		url: "/index.php",
		dataType: "json",
		data: { module: "lxm_report", action: "getquery1"},
		success: function(data) {
			var html = "<table id='mytable' cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>";
			html += "<tr>"+
					"<th scope='col'><div style='white-space: normal;' width='100%' align='left'>姓名</div></th>"+
					"<th scope='col'><div style='white-space: normal;' width='100%' align='left'>性别</div></th>"+
					"<th scope='col'><div style='white-space: normal;' width='100%' align='left'>出生日期</div></th>"+
					"<th scope='col'><div style='white-space: normal;' width='100%' align='left'>现住址</div></th>"+
					"<th scope='col'><div style='white-space: normal;' width='100%' align='left'>身份证号码</div></th>"+
				    "</tr>";
			$.each(data, function(i, result) {
				alert(result);
				html += "<tr><td>" + result["last_name"] + result["first_name"] "</td><td>" + result["gender_c"] + "</td><td>" + result["birthday"] + "</td><td>" + result["persent_address"] + "</td><td>" + result["id_number"] + "</td></tr>";
			})
			html += "</table>";
			html += "<a  href='#' id='btn1'>首页</a>"+
					"<a  href='#' id='btn2'>上一页</a>"+
					"<a  href='#' id='btn3'>下一页</a>"+
					"<a  href='#' id='btn4'>尾页</a>"+
					"<a>转到 </a>"+
					"<input id='changePage' type='text' size='1' maxlength='4'/>"+
					"<a>页 </a>"+
					"<a  href='#' id='btn5'>跳转</a>";
			$("#content1").html(html);
		}
	};
    $.ajax(options);
});