var editVars = {
	voyageStatus: "new",
	currentVoyage: 0,
	captain: 0,
	insurer: 0,
	outfitter: 0,
	investor: 0,
	vessel: 0,
	slaves: 0,
	actor1: 0,
	actor2: 0,
	cargo: 0,
	currentCargo: 0
}

var currentForm = "";
var currentFormChanged = false;

var home = 'http://www.huc.localhost/esta';

var hucForms = {
	heSubvoyage: {
		empty: true,
		address: home + "/service/get_subvoyage"
	},
	heSlaves: {
		empty: true,
		address: home + "/service/get_slaves/"
	},
	heVessel: {
		empty: true,
		address: home + "/service/get_vessel"
	},
	heCargo: {
		empty: true,
		address: home + "/service/get_cargo"
	}
}


function setEvents() {
	$("#homeBtn").hover(function () {
		$("#homeBtn").css('cursor', 'pointer');
	}).click(function () {
		window.location = home;
	});

	$("#vmNew").click(
		function () {
			window.location = home + '/workspace/new_voyage';
		}
	)

	$("#vmMyVoyages").click(
		function () {
			alert("This function isn't implemented yet.")
		}
	)

	$("#vmSearch").click(
		function () {
			alert("This function isn't implemented yet.")
		}
	)

	$("#vmCollapser").click(
		function () {
			if ($(this).html() === "Expand") {
				$(this).html("Collapse");
				$(".subVoyageRow").css('display', 'table-row');
				$(".voyageRow").css('font-weight', 'bold');
			} else {
				$(this).html("Expand");
				$(".subVoyageRow").css('display', 'none');
				$(".voyageRow").css('font-weight', 'normal');
			}
		}
	)
}

function hideButtons() {
	$("#profileDataNavigator li").each(function () {
		if ($(this).hasClass("profileDataActiveTab")) {
			$(this).removeClass("profileDataActiveTab");
		}
	});
}

function hideDetails() {
	$('#profileXML').addClass('noView');
	$('#profileJSON').addClass('noView');
	$('#tweakXML').addClass('noView');
	$('#metadataRecs').addClass('noView');
	$('#voyage').addClass('noView');

}

function validateNewVoyage() {
	if ($("#voyageSummary").val() !== "" && $("#voyageYear").val() !== "") {
		$("#newVoyageForm").submit();
	} else {
		$("#formError").html(" Data missing!")
	}
}

function setUserEdit() {
	$(".noUserEdit").css("display", "none");
	$(".UserEdit").css('display', 'inline');
}

function submitUserEdit() {
	if ($("#first_name").val().trim() == "" || $("#name").val().trim() == "" || $("#email").val().trim() == "") {
		$("#loginError").html("Empty fields are not allowed in this form!");
	} else {
		$("#userProfileForm").submit();
	}
}

function revokeUserEdit() {
	$(".noUserEdit").css("display", "inline");
	$(".UserEdit").css('display', 'none');
}

function setEditors(id) {
	editVars.currentVoyage = id;
	if (id !== 0) {
		editVars.voyageStatus = 'edit';
		//getSubVoyageData(id);
		setCurrentForm("heSubvoyage");
	}

	$("#profileDataNavigator li").on("click", function () {
		if (!$(this).hasClass("profileDataActiveTab")) {
			hideButtons();
			hideDetails();
			$(this).addClass("profileDataActiveTab");

			switch ($(this).attr('id')) {
				case 'profileXMLTab':
					$('#profileXML').removeClass('noView');
					setCurrentForm("heSubvoyage");
					break;
				case 'profileJSONTab':
					$('#profileJSON').removeClass('noView');
					setCurrentForm("heSlaves");
					break;
				case 'profileTweakTab':
					$('#tweakXML').removeClass('noView');
					setCurrentForm("heVessel");
					break;
				case 'profileRecordsTab':
					$('#metadataRecs').removeClass('noView');
					setCurrentForm("heCargo");
					break;
				case 'voyageTab':
					$('#voyage').removeClass('noView');
					break;
			}
		}
	});

	$("#profileDataNavigator li").each(function () {
		$(this).hover(function () {
			$(this).css('cursor', 'pointer');
		});
	});

}

function setCurrentForm(formName) {
	if (currentForm !== "") {
		resetCurrentFormMetadata(currentForm);
	}
	currentForm = formName;
	if (hucForms[currentForm].empty) {
		initCurrentFormMetadata();
	}

}

function resetCurrentFormMetadata() {
	currentFormChanged = false;
	$("#" + currentForm).find(".changed_input_element").each(
		function () {
			$(this).removeClass("changed_input_element");
			$(this).addClass("input_element");
		}
	)
}

function initCurrentFormMetadata() {
	hucForms[currentForm].empty = false;

	$("#" + currentForm).find(".input_element").change(function () {
		$(this).removeClass("input_element");
		$(this).addClass("changed_input_element");
		currentFormChanged = true;
	});

	switch (currentForm) {
		case "heSubvoyage":
			getData(currentForm, editVars.currentVoyage);
			break;
		case "heVessel":
			getData(currentForm, editVars.vessel);
			break;
		case "heSlaves":
			getData(currentForm, editVars.slaves);
			break;
		case "heCargo":
			if (editVars.cargo[0] !== undefined) {
				editVars.currentCargo = editVars.cargo[0].cargo_id;
				getData(currentForm, editVars.cargo[0].cargo_id);
			} else {
				getData(currentForm, 0);
			}


	}

}


function getData(form, id) {
	if (id !== "0") {
		$.ajax({
			type: "POST",
			url: hucForms[form].address,
			data: {
				id: id
			},
			success: function (json) {
				populateForm(currentForm, json);
				console.log(json);
			},
			error: function (err) {
				console.log(err);
			}
		});
	}

}

function populateForm(form, json) {
	if (form === 'heSubvoyage') {
		setEditVars(json);
	}
	$("#" + form).find(".input_element").each(
		function () {
			var name = $(this).attr("id");
			if (json[name] !== undefined) {
				$(this).val(json[name]);
			}
		}
	);
	setActors(form, json);
}

function setEditVars(json) {
	editVars.currentVoyage = json.subvoyage_id;
	editVars.slaves = json.sub_slaves;
	editVars.vessel = json.sub_vessel;
	editVars.cargo = json.sub_cargo;
	editVars.captain = json.sub_captain;
	editVars.investor = json.voyage_investor;
	editVars.outfitter = json.voyage_outfitter;
	editVars.insurer = json.voyage_insurer;
}

function setActors(form, json) {
	switch (form) {
		case "heSubvoyage":
			setSubVoyageActors(json);
			addCargos(json);
			break;
		case "heSlaves":
			setSlaveActors(json);
			break;
	}
}

function addCargos(json) {
	console.log(editVars);
	for (var key in editVars.cargo) {
		var row = document.createElement("tr");
		var cell = document.createElement("td");
		$(cell).html(editVars.cargo[key].cargo_commodity);
		$(row).append(cell);
		var cell = document.createElement("td");
		$(cell).addClass("editIcon");
		var img = document.createElement("img");
		$(img).attr("src", home + "/img/edit.png");
		$(img).attr("height", "16px");
		$(img).attr("width", "16px");
		$(img).attr("data-cargo_id", editVars.cargo[key].cargo_id);
		$(img).on("click", function (e) {
			e.preventDefault();
			resetCargoList();
			selectCargo($(this).attr("data-cargo_id"));
			$(this).parent().parent().addClass("activeActorTableRow");
		});
		$(cell).append(img);
		$(cell).attr("width", "20px");
		$(row).append(cell);
		var cell = document.createElement("td");
		$(cell).addClass("editIcon");
		var img = document.createElement("img");
		$(img).attr("src", home + "/img/bin.png");
		$(img).attr("height", "16px");
		$(img).attr("width", "16px");
		$(cell).append(img);
		$(cell).attr("width", "20px");
		$(row).append(cell);
		$("#cargoTable").append(row);
	}
	$("#cargoTable").find("tr:nth-child(2)").addClass("activeActorTableRow");
}

function resetCargoList() {
	$("#heCargo").find(".activeActorTableRow").each( function () {
		$(this).removeClass("activeActorTableRow");
	})
}

function selectCargo(id) {
	editVars.currentCargo = id;
	resetCurrentFormMetadata();
	getData(currentForm, editVars.currentCargo);
}

function setSubVoyageActors(json) {
	$("#captainCell").html(json.ac_captain_name);
	$("#outfitterCell").html(json.ac_outfitter_name);
	$("#investorCell").html(json.ac_investor_name);
	$("#insurerCell").html(json.ac_insurer_name);
}

function setSlaveActors(json) {
	$("#slaveMainActorCell").html(json.ac_main_actor);
	$("#slaveSecondActorCell").html(json.ac_second_actor);
}

/*
	Saving functions
 */

function send_data(data, form, id) {
	$.ajax({
		type: "POST",
		url: home + "/service/update_data",
		data: {
			id: id,
			form: form,
			data: JSON.stringify(data)
		},
		success: function (ret_id) {;
			message("Form data saved...");
			updateLink(form, ret_id);
		},
		error: function (err) {
			alert("Errors! Data not saved");
		}
	});
}

function new_cargo() {
	var data = {};
	data.subvoyage_subvoyage_id = editVars.currentVoyage;
	send_data(data, "heCargo", 0);
}

function updateLink(form, id) {
	switch (form) {
		case "heVessel":
			if (editVars.vessel !== id) {
				editVars.vessel = id;
				data = {};
				data.sub_vessel = id;
				send_data(data, "heSubvoyage", editVars.currentVoyage);
			}
			break;
		case "heSlaves":
			if (editVars.slaves !== id) {
				editVars.slaves = id;
				data = {};
				data.sub_slaves = id;
				send_data(data, "heSubvoyage", editVars.currentVoyage);
			}
			break;
		case "heCargo":
			if (parseInt(editVars.currentCargo) !== parseInt(id)) {
				editVars.currentCargo = id;
				addCargoToList(id);
			}
	}
}

function validate_pw() {
	if ($("#opw").val().trim() === "" | $("#passwd1").val().trim() === "" | $("#passwd2").val().trim() === "") {
		$("#loginError").html("Input missing!");
	} else {
		if ($("#passwd1").val().trim() !== $("#passwd2").val().trim()) {
			$("#loginError").html("Values for new password are not identical!");
		} else {
			$("#pw").submit();
		}
	}
}

function message(msg) {
	$("#" + currentForm).find(".messageBox:first").each(function () {
		$(this).html(msg);
		setTimeout(eraseMsg, 2000);
	})
}

function eraseMsg() {
	$(".messageBox").each(function () {
		$(this).html("&nbsp;");
	})
}

function addCargoToList(id) {
	resetCargoList();
	var row = document.createElement("tr");
	var cell = document.createElement("td");
	if ($("#cargo_commodity").val().trim() === "") {
		$(cell).html("--New--");
	} else {
		$(cell).html($("#cargo_commodity").val());
	}

	$(row).append(cell);
	var cell = document.createElement("td");
	$(cell).addClass("editIcon");
	var img = document.createElement("img");
	$(img).attr("src", home + "/img/edit.png");
	$(img).attr("height", "16px");
	$(img).attr("width", "16px");
	$(img).attr("data-cargo_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		resetCargoList();
		selectCargo($(this).attr("data-cargo_id"));
		$(this).parent().parent().addClass("activeActorTableRow");
	});
	$(cell).append(img);
	$(cell).attr("width", "20px");
	$(row).append(cell);
	var cell = document.createElement("td");
	$(cell).addClass("editIcon");
	var img = document.createElement("img");
	$(img).attr("src", home + "/img/bin.png");
	$(img).attr("height", "16px");
	$(img).attr("width", "16px");
	$(cell).append(img);
	$(cell).attr("width", "20px");
	$(row).append(cell);
	$(row).addClass("activeActorTableRow");
	$("#cargoTable").append(row);
	selectCargo(id);
}

function saveSubVoyage() {
	if (currentFormChanged) {
		var data = harvestForm(currentForm);
		send_data(data, currentForm, editVars.currentVoyage);
	} else {
		alert("Form was not changed.");
	}
}

function saveSlaves() {
	if (currentFormChanged) {
		var data = harvestForm(currentForm);
		send_data(data, currentForm, editVars.slaves);
	} else {
		alert("Form was not changed.");
	}
}

function saveVessel() {
	if (currentFormChanged) {
		var data = harvestForm(currentForm);
		send_data(data, currentForm, editVars.vessel);
	} else {
		alert("Form was not changed.");
	}
}

function saveCargo() {
	if (currentFormChanged) {
		var data = harvestForm(currentForm);
		$("#heCargo").find(".activeActorTableRow td:first").html(data.cargo_commodity);
		send_data(data, currentForm, editVars.currentCargo);
	} else {
		alert("Form was not changed.");
	}
}

function harvestForm(form) {
	var data = {};
	$("#" + form).find(".changed_input_element").each(function () {
		var id = $(this).attr("id");
		data[id] = $("#" + id).val();
	});
	resetCurrentFormMetadata();
	return data;
}

