var rows = 4;
var cols = 4;
var selectedObject = null;

function addRow() {
	var row = document.createElement("tr");
	for (var i = 1; i <= cols; i++) {
		var cell = document.createElement("td");
		$(cell).on("click", function (e) {
			fill_cell(this);
		});
		$(row).addClass("depRow");
		row.append(cell);
	}
	$("#dependencyTable").append(row);
	rows++;
}

function addCol() {
	$("#dependencyTable > tbody").children().each(
		function () {
			if ($(this).children(0).is("th")) {
				var el = document.createElement("th");
			} else {
				var el = document.createElement("td");
				$(el).on("click", function (e) {
					fill_cell(this);
				});
			}
			$(this).append(el);
		}
	);
	cols++;
}

function save_dependencies() {
	var row = 0;
	var cell = 0;
	var json = {};

	json.rows = rows;
	json.cols = cols;
	json.data = [];

	$("#dependencyTable").find(".depRow").each(function (index) {
		row = index;
		$(this).find("td").each(function (index) {
			cell = index;
			if ($(this).attr("data-id") !== undefined) {
				var obj = {};
				obj.row = row;
				obj.cell = cell;
				obj.id = $(this).attr("data-id");
				json.data.push(obj);
			}
		});
	});
	var data = JSON.stringify(json);
	send_dependencies(data);
}

function send_dependencies(data) {
	var voyage_id = $("#dependencyTable").attr("data-voyage-id");
	$.ajax({
		type: "POST",
		url: home + "/service/update_grid_data",
		data: {
			id: voyage_id,
			data: data
		},
		success: function () {
			gridMessage("Grid data saved...");
		},
		error: function (err) {
			console.log(err);
			alert("Errors! Data not saved");
		}
	});
}

function get_grid_data() {
	var voyage_id = $("#dependencyTable").attr("data-voyage-id");
	$.ajax({
		type: "POST",
		url: home + "/service/get_grid_data",
		data: {
			id: voyage_id
		},
		success: function (json) {
			if (json.data !== undefined) {
				fill_grid(json);
			}

		},
		error: function (err) {
			console.log(err);
			alert("Errors! Data not saved");
		}
	});
}

function fill_grid(json) {
	var i;
	for (i = rows; i < json.rows; i++) {
		addRow();
	}
	for (i = cols; i < json.cols; i++) {
		addCol();
	}

	for (var key in json.data) {
		setCell(json.data[key]);
	}
}

function setCell(obj) {
	$("td[data-id='" + obj.id + "']").click();
	$(".depRow").eq(obj.row).find("td").eq(obj.cell).click();
}

function gridMessage(msg) {
	$("#gridMessage").html(msg);
	setTimeout(eraseGridMsg, 2000);
}

function eraseGridMsg() {
	$("#gridMessage").html("&nbsp;");
}

function getGridData() {

}

function set_candidate(obj) {
	if (!$(obj).hasClass("noSeaNorLand")) {
		selectedObject = obj;
	}
}

//Code of this function needs optimizing!!! (two identical blocks)
function fill_cell(obj) {
	if (selectedObject !== null) {
		if ($(obj).attr("class") === undefined) {
			$(obj).html(selectedObject.id);
			$(obj).attr("class", null);
			$(obj).addClass($(selectedObject).attr("class"));
			$(obj).attr("data-id", $(selectedObject).attr("data-id"));
			$("#" + $(selectedObject).attr("id")).attr("class", "noSeaNorLand");
			selectedObject = null;
		} else {
			var id = $(obj).html();
			var objClass = $(obj).attr("class");
			$("#" + id).attr("class", objClass);
			$(obj).attr("data-id", null);
			$(obj).attr("class", null);
			$(obj).html("");
		}
	} else {
		var id = $(obj).html();
		var objClass = $(obj).attr("class");
		$("#" + id).attr("class", objClass);
		$(obj).attr("class", null);
		$(obj).attr("data-id", null);
		$(obj).html("");
	}
}

function validate_login() {
	//if ($("#userName").val() !== "robz" || $("#passwd").val() !== "bonzo") {
	//	$("#loginError").html("User name or password not correct!");
	//	$("#passwd").val("");
	//} else {
	$("#loginForm").submit();
	//}
}

