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
            $("#" + $(selectedObject).attr("id")).attr("class", "noSeaNorLand");
            selectedObject = null;
        } else {
            var id = $(obj).html();
            var objClass = $(obj).attr("class");
            $("#" + id).attr("class", objClass);
            $(obj).attr("class", null);
            $(obj).html("");
        }
    } else {
        var id = $(obj).html();
        var objClass = $(obj).attr("class");
        $("#" + id).attr("class", objClass);
        $(obj).attr("class", null);
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

