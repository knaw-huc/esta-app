var editVars = {
	voyageStatus: "new",
	currentVoyage: 0,
	vessel: 0,
	slaves: 0,
	cargo: 0,
	currentSlaveGroup: 0,
	currentCargo: 0,
	currentActor: 0,
	mainVoyage: 0
}


var currentForm = "";
var currentFormChanged = false;

var activeTab = "profileXML";

var home = 'http://www.huc.localhost/esta';
var subVoyageSwapped = false;

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
	},
	heActor: {
		empty: true,
		address: home + "/service/get_actor"
	},
	heVoyage: {
		empty: true,
		address: home + "/service/get_voyage"
	},
	heSlaveGroup: {
		empty: true,
		address: home + "/service/get_slave_group"
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
			if ($("#vmMyVoyages").hasClass("allRecs")) {
				window.location.assign(home + "/workspace/myvoyages");
			} else {
				window.location.assign(home + "/workspace/voyages");
			}

		}
	)

	$("#vmSearch").click(
		function () {
			alert("This function isn't implemented yet.");
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
	$("#actorForm").addClass("noView");
	$("#mutView").addClass("noView");
	$("#slaveGroupForm").addClass("noView");
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
	if ($("#first_name").val().trim() === "" || $("#name").val().trim() === "" || !validateEmail($("#email").val())) {
		$("#loginError").html("One or more field values are invalid!");
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
					if (subVoyageSwapped) {
						swapForms("profileXML");
						subVoyageSwapped = false;
					}
					activeTab = "profileXML";
					setCurrentForm("heSubvoyage");
					break;
				case 'profileJSONTab':
					$('#profileJSON').removeClass('noView');
					setCurrentForm("heSlaves");
					activeTab = "profileJSON";
					break;
				case 'profileTweakTab':
					$('#tweakXML').removeClass('noView');
					setCurrentForm("heVessel");
					activeTab = "tweakXML";
					break;
				case 'profileRecordsTab':
					$('#metadataRecs').removeClass('noView');
					setCurrentForm("heCargo");
					activeTab = "metadataRecs";
					break;
				case 'voyageTab':
					currentForm = "heVoyage";
					$('#voyage').removeClass('noView');
					getVoyageData(editVars.mainVoyage);
					activeTab = "voyage";
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

function getVoyageData(id) {
	getData(currentForm, id);
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


function returnToMainTab() {
	resetCurrentFormMetadata();
	hideDetails();
	hucForms.heActor.empty = true;
	hucForms.heSlaveGroup.empty = true;
	clearForm("heActor");
	clearForm("heSlaveGroup");
	$("#" + activeTab).removeClass("noView");
}

function closeMutationView() {
	hideDetails();
	clearMutationView();
	$("#" + activeTab).removeClass("noView");
}

function clearMutationView() {
	$(".mutViewRow").remove();
}

function show_mutations() {
	hideDetails();
	getMutationData();
	$("#mutView").removeClass("noView");
}

function getMutationData() {
	var id;
	var table;
	switch (currentForm) {
		case "heSubvoyage":
			id = editVars.currentVoyage;
			table = "subvoyage";
			break;
		case "heSlaves":
			id = editVars.slaves;
			table = "slaves";
			break;
		case "heVessel":
			id = editVars.vessel;
			table = "vessel";
			break;
		case "heCargo":
			id = editVars.currentCargo;
			table = "cargo";
			break;
		case "heActor":
			id = editVars.currentActor;
			table = "actor";
			break;
		case "heSlaveGroup":
			id = editVars.currentSlaveGroup;
			table = "slaves_group"
	}
	if (id !== undefined) {
		fetchMutationData(id, table);
	}
}

function change_cbDeleted(obj) {
	if ($(obj).is(':checked')) {
		$(".cbDeleted").prop('checked', true);
	} else {
		$(".cbDeleted").prop('checked', false);
	}

}

function checkSave() {
	if (currentFormChanged) {
		alert('You must first save your input.');
	}
	return !currentFormChanged;
}

function resetCurrentFormMetadata() {
	currentFormChanged = false;
	$("#" + currentForm).find(".changed_input_element").each(
		function () {
			$(this).removeClass("changed_input_element");
			$(this).addClass("input_element");
		}
	);
}

function initCurrentFormMetadata() {
	hucForms[currentForm].empty = false;

	$("#" + currentForm).find(".input_element").change(function () {
		$(this).removeClass("input_element");
		$(this).addClass("changed_input_element");
		if (currentForm == 'heSubvoyage') {
			lookForDateCopy($(this).attr("id"));
		}
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
				//getData(currentForm, 0);
				hide_cargo();
			}
			break;
		case "heActor":
			getData(currentForm, editVars.currentActor);
			break;
		case "heSlaveGroup":
			getData(currentForm, editVars.currentSlaveGroup);
		//}
	}
}

function lookForDateCopy(id) {
	switch(id) {
		case "sub_dept_date_day":
			copyFieldValues("#sub_dept_date_day", "#sub_dept_date_day_to");
			break;
		case "sub_dept_date_month":
			copyFieldValues("#sub_dept_date_month", "#sub_dept_date_month_to");
			break;
		case "sub_dept_date_year":
			copyFieldValues("#sub_dept_date_year", "#sub_dept_date_year_to");
			break;
		case "sub_arrival_date_day":
			copyFieldValues("#sub_arrival_date_day", "#sub_arrival_date_day_to");
			break;
		case "sub_arrival_date_month":
			copyFieldValues("#sub_arrival_date_month", "#sub_arrival_date_month_to");
			break;
		case "sub_arrival_date_year":
			copyFieldValues("#sub_arrival_date_year", "#sub_arrival_date_year_to");
			break;
	}
}

function copyFieldValues(from, to) {
	if ($(to).prop('readonly')) {
		$(to).val($(from).val());
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
				//console.log(json);
			},
			error: function (err) {
				console.log(err);
			}
		});
	}
}

function fetchMutationData(id, table) {
	$.ajax({
		type: "POST",
		url: home + "/service/get_mutation_data",
		data: {
			id: id,
			table: table
		},
		success: function (json) {
			populateMutationView(JSON.parse(json));
		},
		error: function (err) {
			console.log(err);
		}
	});
}

function populateMutationView(json) {
	for (var key in json) {
		var row = document.createElement('tr');
		$(row).append(cell(json[key].tablename));
		$(row).append(cell(json[key].fieldname));
		$(row).append(cell(json[key].name));
		$(row).append(cell(json[key].modification_date));
		$(row).append(cell(json[key].value_before));
		$(row).append(cell(json[key].value_after));
		$(row).addClass("mutViewRow");
		$("#mutTable").append(row);
	}

}

function cell(value) {
	var cell = document.createElement("td");
	$(cell).html(value);
	return cell;
}

function clearForm(form) {
	$("#" + form).find(".input_element").each(
		function () {
			$(this).val("");
		}
	);
}

function populateForm(form, json) {
	if (form === 'heVoyage') {
		fillVoyageForm(json);
		return;
	}

	$("#" + form).find(".input_element").each(
		function () {
			var name = $(this).attr("id");
			if (json[name] !== undefined) {
				$(this).val(json[name]);
			}
		}
	);
	if (form === 'heSubvoyage') {
		setEditVars(json);
		changeDepartureDateStatus($("#sub_dept_date_status"));
		changeArrivalDateStatus($("#sub_arrival_date_status"));
	}
	setActors(form, json);
}

function editGlobalVoyage() {
	$("#globalVoyageEditBtn").addClass("noView");
	$("#globalVoyageSaveBtn").removeClass("noView");
	$("#globalVoyageRejectBtn").removeClass("noView");
	$("#summaryBuffer").val($("#summary").html());
	$("#yearBuffer").val($("#year").html());
	element = document.createElement('input');
	element.setAttribute('id', 'summaryInput');
	element.setAttribute('value', $("#summaryBuffer").val());
	element.setAttribute('size', '40');
	$("#summary").html(element);
	element = document.createElement('input');
	element.setAttribute('id', 'yearInput');
	element.setAttribute('value', $("#yearBuffer").val());
	element.setAttribute('size', '10');
	$("#year").html(element);
}

function resetGlobalVoyage() {
	$("#summary").html($("#summaryBuffer").val());
	$("#year").html($("#yearBuffer").val());
	$("#globalVoyageSaveBtn").addClass("noView");
	$("#globalVoyageRejectBtn").addClass("noView");
	$("#globalVoyageEditBtn").removeClass("noView");
}

function saveGlobalVoyage() {
	$("#summaryBuffer").val($("#summaryInput").val());
	$("#yearBuffer").val($("#yearInput").val());
	$.ajax({
		type: "POST",
		url: home + "/service/update_global_voyage",
		data: {
			id: editVars.mainVoyage,
			summary: $("#summaryBuffer").val(),
			year: $("#yearBuffer").val(),
		},
		success: function (ret_id) {
			resetGlobalVoyage();
		},
		error: function (err) {
			alert("Errors! Data not saved");
		}
	});
}

function fillVoyageForm(json) {
	$("#heVoyage").find(".formField").each(
		function () {
			var name = $(this).attr("id");
			if (json[name] !== undefined) {
				$(this).html(json[name]);
			}
		}
	);
	if (json["creator_id"] === $("#globalVoyageOwner").val()) {
		$("#globalVoyageEditBtn").removeClass("noView");
		$("#globalVoyageSaveBtn").addClass("noView");
		$("#globalVoyageRejectBtn").addClass("noView");
	}
}

function setEditVars(json) {
	editVars.currentVoyage = json.subvoyage_id;
	editVars.slaves = json.sub_slaves;
	editVars.vessel = json.sub_vessel;
	editVars.cargo = json.sub_cargo;
	editVars.mainVoyage = json.voyage_id;
}

function setActors(form, json) {
	switch (form) {
		case "heSubvoyage":
			setSubVoyageActors(json);
			addCargos(json);
			break;
		case "heSlaves":
			setSlaveActors(json);
			setSlaveGroups(json);
			break;
		case "heCargo":
			setCargoActors(json);
			break;
	}
}

function setCargoActors(json) {
	resetCargoActortable();
	for (var key in json.actors) {
		addActorToList(json.actors[key].actor_id, json.actors[key].actor_name, json.actors[key].actor_role, "cargoActor");
	}
}

function resetCargoActortable() {
	$("#cargoActorTable tr:gt(0)").remove();
}

function addCargos(json) {
	for (var key in editVars.cargo) {
		var row = document.createElement("tr");
		$(row).attr("id", "cargo_row_" + editVars.cargo[key].cargo_id);
		$(row).attr("data-cargo_id", editVars.cargo[key].cargo_id);
		var cell = document.createElement("td");
		$(cell).html(editVars.cargo[key].cargo_commodity);
		$(cell).attr("id", "commodity_name_" + editVars.cargo[key].cargo_id);
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
		$(img).attr("data-cargo_id", editVars.cargo[key].cargo_id);
		$(img).on("click", function (e) {
			e.preventDefault();
			delete_cargo($(this).attr("data-cargo_id"));
		});
		$(cell).append(img);
		$(cell).attr("width", "20px");
		$(row).append(cell);
		$("#cargoTable").append(row);
	}
	$("#cargoTable").find("tr:nth-child(2)").addClass("activeActorTableRow");
}

function resetCargoList() {
	$("#cargoTable").find(".activeActorTableRow").each(function () {
		$(this).removeClass("activeActorTableRow");
	});
}

function resetGroupList() {
	$("#slaveGroupTable").find(".activeActorTableRow").each(function () {
		$(this).removeClass("activeActorTableRow");
	});
}

function resetActorList(type) {
	$("#" + type + "Table").find(".activeActorTableRow").each(function () {
		$(this).removeClass("activeActorTableRow");
	});
}

function emptyActorList(type) {
	$("#" + type + "Table").html("");
}

function selectCargo(id) {
	setCurrentForm("heCargo");
	editVars.currentCargo = id;
	resetCurrentFormMetadata();
	getData(currentForm, editVars.currentCargo);
}

function selectGroup(id) {
	setCurrentForm("heSlaveGroup");
	editVars.currentSlaveGroup = id;
	resetCurrentFormMetadata();
	hideDetails();
	$("#slaveGroupForm").removeClass("noView");
	getData(currentForm, editVars.currentSlaveGroup);
}


function selectActor(id) {
	//editVars.currentFreeActor = id;
	editVars.currentActor = id;
	resetCurrentFormMetadata();
	setCurrentForm("heActor");
	hideDetails();
	$("#actorForm").removeClass("noView");
}

function setSubVoyageActors(json) {
	if (json.actors.length) {
		for (key in json.actors) {
			addActorToList(json.actors[key].actor_id, json.actors[key].actor_name, json.actors[key].actor_role, "voyageActor");
		}
	}
}

function setSlaveActors(json) {
	$("#slavesActorTable").removeClass("noView");
	if (json.actors.length) {
		for (key in json.actors) {
			addActorToList(json.actors[key].actor_id, json.actors[key].actor_name, json.actors[key].actor_role, "slavesActor");
		}
	}
}

function setSlaveGroups(json) {
	$("#slaveGroupTable").removeClass("noView");
	if (json.groups.length) {
		for (key in json.groups) {
			addGroupToList(json.groups[key].group_id, makeGroupLabel(json.groups[key].gr_sex, json.groups[key].gr_age_group, json.groups[key].gr_quantity, json.groups[key].gr_quantity_standardized), false);
		}
	}
}

/*
	Saving functions
 */

function send_data(data, form, id, type = 'default') {
	//console.log(data);
	$.ajax({
		type: "POST",
		url: home + "/service/update_data",
		data: {
			id: id,
			form: form,
			data: JSON.stringify(data)
		},
		success: function (ret_id) {
			message("Form data saved...");
			updateLink(form, ret_id);
		},
		error: function (err) {
			console.log(err);
			alert("Errors! Data not saved");
		}
	});
}

function new_cargo() {
	var data = {};
	data.subvoyage_subvoyage_id = editVars.currentVoyage;
	show_cargo();
	send_data(data, "heCargo", 0);
}

function show_cargo() {
	$("#cargoComponent").css('visibility', 'visible');
	$("#cargoSaveBtn").removeClass("noView");
	$("#cargoActorTable").removeClass("noView");
	$("#noCargos").addClass("noView");
}

function hide_cargo() {
	$("#cargoComponent").css('visibility', 'hidden');
	$("#cargoSaveBtn").addClass("noView");
	$("#cargoActorTable").addClass("noView");
	$("#noCargos").removeClass("noView");
}

function delete_actor(id, table, name) {
	if (confirm("Do you want to delete " + name + "?")) {
		$.ajax({
			type: "POST",
			url: home + "/service/delete_actor",
			data: {
				id: id
			},
			success: function (json) {
				$("#actor_" + id).remove();
				message(name + " deleted");
			},
			error: function (error) {
				console.log(error);
			}
		})

	}
}

function delete_group(id, name) {
	if (confirm("Do you want to delete " + name + "?")) {
		$.ajax({
			type: "POST",
			url: home + "/service/delete_group",
			data: {
				id: id
			},
			success: function (json) {
				$("#data-group_" + id).remove();
				message(name + " deleted");
			},
			error: function (error) {
				console.log(error);
			}
		})

	}
}

function new_group(id) {
	if (parseInt(id) === 0) {
		message("No data to link new group on!");
	} else {
		$.ajax({
			type: "POST",
			url: home + "/service/add_group",
			data: {
				slaves_id: id
			},
			success: function (ret_id) {
				addGroupToList(ret_id, "male - adult", true);
			},
			error: function (err) {
				console.log(err);
				alert("Errors! Data not saved");
			}
		});
	}
}

function new_actor(type, id) {
	if (parseInt(id) === 0) {
		message("No data to link new actor on!");
	} else {
		switch (type) {
			case "slavesActor":
				var actorType = "slaves";
				break;
			case "voyageActor":
				var actorType = "voyage";
				break;
			case "cargoActor":
				var actorType = "cargo"
		}
		$.ajax({
			type: "POST",
			url: home + "/service/add_actor",
			data: {
				id: id,
				actor_type: actorType
			},
			success: function (ret_id) {
				addActorToList(ret_id, "--New--", "", type, true);
			},
			error: function (err) {
				console.log(err);
				alert("Errors! Data not saved");
			}
		});
	}
}

function updateLink(form, id) {
	switch (form) {
		case "heVessel":
			if (parseInt(editVars.vessel) !== parseInt(id)) {
				editVars.vessel = id;
				data = {};
				data.sub_vessel = id;
				send_data(data, "heSubvoyage", editVars.currentVoyage);
			}
			break;
		case "heSlaves":
			if (parseInt(editVars.slaves) !== parseInt(id)) {
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
			break;
		/*case "heActor":
			if (parseInt(editVars[editVars.currentActor]) !== parseInt(id)) {
				editVars[editVars.currentActor] = id;
				linkActor(editVars.currentActor, id);
			}
			break;*/
	}
}

// function linkActor(actor, id) {
// 	var table = "";
// 	var dataField = "";
// 	var data = {};
// 	var key = "";
//
// 	switch (actor) {
// 		case "captain":
// 			table = "heSubvoyage";
// 			dataField = "sub_captain";
// 			key = editVars.currentVoyage;
// 			break;
// 		case "outfitter":
// 			table = "heSubvoyage";
// 			dataField = "voyage_outfitter";
// 			key = editVars.currentVoyage;
// 			break;
// 		case "investor":
// 			table = "heSubvoyage";
// 			dataField = "voyage_investor";
// 			key = editVars.currentVoyage;
// 			break;
// 		case "insurer":
// 			table = "heSubvoyage";
// 			dataField = "voyage_insurer";
// 			key = editVars.currentVoyage;
// 			break;
//
// 	}
// 	data[dataField] = id;
// 	send_data(data, table, key);
// }

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
	$(row).attr("id", "cargo_row_" + id);
	$(row).attr("data-cargo_id", id);
	var cell = document.createElement("td");
	$(cell).attr("id", "commodity_name_" + id);
	$(cell).html("--New--");
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
	$(img).attr("data-cargo_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		delete_cargo($(this).attr("data-cargo_id"));
	});
	$(cell).append(img);
	$(cell).attr("width", "20px");
	$(row).append(cell);
	$(row).addClass("activeActorTableRow");
	$("#cargoTable").append(row);
	selectCargo(id);
}

function delete_cargo(id) {
	if (confirm("Do you want to delete cargo with commodity " + $("#commodity_name_" + id).html() + "?")) {
		$("#cargo_row_" + id).remove();
		if (parseInt(editVars.currentCargo) === parseInt(id)) {
			const firstRow = $("#cargoTable").find("tr:nth-child(2)");
			if (firstRow.length !== 0) {
				firstRow.addClass("activeActorTableRow");
				selectCargo(firstRow.attr("data-cargo_id"));
			} else {
				hide_cargo();
			}
		}
		$.ajax({
			type: "POST",
			url: home + "/service/delete_cargo",
			data: {
				id: id
			},
			success: function () {
				message("Cargo removed...");
			}
		});
	}
}

function addGroupToList(id, description, focusForm = true) {
	resetGroupList();
	var row = document.createElement("tr");
	$(row).attr("id", "data-group_" + id);
	var cell = document.createElement("td");
	$(cell).html(description);
	$(cell).attr("id", "group_description_" + id);
	$(row).append(cell);
	var cell = document.createElement("td");
	$(cell).addClass("editIcon");
	var img = document.createElement("img");
	$(img).attr("src", home + "/img/edit.png");
	$(img).attr("height", "16px");
	$(img).attr("width", "16px");
	$(img).attr("data-group_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		resetGroupList();
		selectGroup($(this).attr("data-group_id"));
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
	$(img).attr("data-actor_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		delete_group(id, description);
	});
	$(cell).append(img);
	$(cell).attr("width", "20px");
	$(row).append(cell);
	$("#slaveGroupTable").append(row);
	if (focusForm) {
		selectGroup(id);
	}


}

function addActorToList(id, name, role, tableName, focusForm = false) {
	resetActorList(tableName + "Table");
	var row = document.createElement("tr");
	$(row).attr("id", "actor_" + id);
	var cell = document.createElement("td");
	$(cell).html(role);
	$(cell).attr("id", "role_" + id);
	$(row).append(cell);
	var cell = document.createElement("td");
	$(cell).html(name);
	$(cell).attr("id", "name_" + id);
	$(row).append(cell);
	var cell = document.createElement("td");
	$(cell).addClass("editIcon");
	var img = document.createElement("img");
	$(img).attr("src", home + "/img/edit.png");
	$(img).attr("height", "16px");
	$(img).attr("width", "16px");
	$(img).attr("data-actor_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		resetActorList(tableName + "Table");
		selectActor($(this).attr("data-actor_id"));
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
	$(img).attr("data-actor_id", id);
	$(img).on("click", function (e) {
		e.preventDefault();
		delete_actor($(this).attr("data-actor_id"), tableName, name);
	});
	$(cell).append(img);
	$(cell).attr("width", "20px");
	$(row).append(cell);
	// $(row).addClass("activeActorTableRow");
	$("#" + tableName + "Table").append(row);
	if (focusForm) {
		selectActor(id);
	}

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

function saveActor() {
	if (currentFormChanged) {
		$("#name_" + editVars.currentActor).html($("#actor_name").val());
		$("#role_" + editVars.currentActor).html($("#actor_role").val());
		var data = harvestForm(currentForm);
		send_data(data, currentForm, editVars.currentActor);
	} else {
		alert("Form was not changed.");
	}
}

function saveSlaveGroup() {
	if (currentFormChanged) {
		$("#group_description_" + editVars.currentSlaveGroup).html(makeGroupLabel($("#gr_sex").val(), $("#gr_age_group").val(), $("#gr_quantity").val(), $("#gr_quantity_standardized").val()));
		var data = harvestForm(currentForm);
		send_data(data, currentForm, editVars.currentSlaveGroup);
	} else {
		alert("Form was not changed.");
	}
}

function makeGroupLabel(sex, age, amount, amount_st) {
	$retVal = sex + " - " + age;
	if (amount.trim() !== "") {
		$retVal = $retVal + " (" + amount + ")";
	} else {
		if (amount_st.trim() !== "") {
			$retVal = $retVal + " (" + amount_st + ")";
		}
	}
	return $retVal;
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

function validateEmail(email) {
	var re = /\S+@\S+\.\S+/;
	return re.test(email);
}

function submitNewPasswd() {
	if (validateEmail($("#email").val())) {
		$("#newPasswdForm").submit();
	} else {
		$("#nwPasswdMessage").html("This is not a valid email address!");
		$("#nwPasswdMessage").css('font-weight', 'bold');
		$("#nwPasswdMessage").css('color', '#b00');
	}
}

function validate_user() {
	var ok = true;
	if (!validateEmail($("#email").val())) {
		$("#email_error").html("This is not a valid email address!");
		ok = false;
	} else {
		$("#username_error").html("");
	}

	if ($("#chr_name").val().trim() === "") {
		$("#chr_name_error").html("First name cannot be empty!");
		ok = false;
	} else {
		$("#chr_name_error").html("");
	}
	if ($("#name").val().trim() === "") {
		$("#name_error").html("Family name cannot be empty!");
		ok = false;
	} else {
		$("#name_error").html("");
	}
	if ($("#username").val().trim() === "") {
		$("#username_error").html("User name cannot be empty!");
		ok = false;
	} else {
		$("#username_error").html("");
	}

	if (ok) {
		$("#userForm").submit();
	}
}

function createAutoCompletes() {
	$("input[data-auto='yes']").each(function () {
		$(this).devbridgeAutocomplete({
			serviceUrl: home + '/service/get_standard_values/' + $(this).attr("data-table") + '/' + $(this).attr("id"),
			type: "POST",
			dataType: 'json',
			paramName: 'q'
		});
	});
}

function delete_voyage(id) {
	if (confirm("Do you really want to delete voyage " + id + "?")) {
		$.ajax({
			url: home + "/service/delete_voyage/" + id,
			success: function (json) {
				location.reload();
			},
			error: function (err) {
				alert("An error occurred: " + err);
			}
		})

	}
}

function edit_voyage(id) {
	if ($("#gridSaveBtn").hasClass("toBeSaved")) {
		alert("You have to save the subvoyage relations first!");
	} else {
		window.location = home + "/workspace/edit_voyage/" + id;
	}
}

function delete_subvoyage(id) {
	if (confirm("Do you really want to delete subvoyage " + id + "?")) {
		$.ajax({
			url: home + "/service/delete_subvoyage/" + id,
			success: function (json) {
				location.reload();
			},
			error: function (err) {
				alert("An error occurred: " + err);
			}
		})
	}
}

// Standardized subvoyage departure dates
function changeDepartureDateStatus(obj) {
	switch($(obj).val()) {
		case "Confirmed":
		case "Inferred":
		case "Uncertain":
		case "Incomplete":
			resetSecondDepartureDate();
			$("#sub_dept_date_relative").addClass("noView");
			break;
		case "Range":
		case "Date alternative":
			$("#sub_dept_date_relative").addClass("noView");
			$("#sub_dept_date_to").removeClass('noView');
			openSecondDepartureDate();
			break;
		case "Year alternative":
			$("#sub_dept_date_relative").addClass("noView");
			$("#sub_dept_date_to").removeClass('noView');
			closeSecondDepartureDate();
			$("#sub_dept_date_year_to").prop("readonly", false);
			break;
		case "Month alternative":
			$("#sub_dept_date_relative").addClass("noView");
			$("#sub_dept_date_to").removeClass('noView');
			closeSecondDepartureDate();
			$("#sub_dept_date_month_to").prop("readonly", false);
			break;
		case "Day alternative":
			$("#sub_dept_date_relative").addClass("noView");
			$("#sub_dept_date_to").removeClass('noView');
			closeSecondDepartureDate();
			$("#sub_dept_date_day_to").prop("readonly", false);
			break;
		case "Relative":
			resetSecondDepartureDate();
			$("#sub_dept_date_relative").removeClass("noView");
			break;
	}
}

function resetSecondDepartureDate() {
	$("#sub_dept_date_to").addClass('noView');
	setFieldValue("#sub_dept_date_day_to", "0");
	setFieldValue("#sub_dept_date_month_to", "0");
	setFieldValue("#sub_dept_date_year_to", "0");
}

function openSecondDepartureDate() {
	$("#sub_dept_date_day_to").prop("readonly", false);
	$("#sub_dept_date_month_to").prop("readonly", false);
	$("#sub_dept_date_year_to").prop("readonly", false);
}

function closeSecondDepartureDate() {
	$("#sub_dept_date_day_to").prop("readonly", true);
	$("#sub_dept_date_month_to").prop("readonly", true);
	$("#sub_dept_date_year_to").prop("readonly", true);
	copyFieldValues("#sub_dept_date_day", "#sub_dept_date_day_to");
	copyFieldValues("#sub_dept_date_month", "#sub_dept_date_month_to");
	copyFieldValues("#sub_dept_date_year", "#sub_dept_date_year_to");
}


//End standardized subvoyage departure dates

//Standardized subvoyage arrival dates
function changeArrivalDateStatus(obj) {
	switch($(obj).val()) {
		case "Confirmed":
		case "Inferred":
		case "Uncertain":
		case "Incomplete":
			resetSecondArrivalDate();
			$("#sub_arrival_date_relative").addClass("noView");
			break;
		case "Range":
		case "Date alternative":
			$("#sub_arrival_date_relative").addClass("noView");
			$("#sub_arrival_date_to").removeClass('noView');
			openSecondArrivalDate();
			break;
		case "Year alternative":
			$("#sub_arrival_date_relative").addClass("noView");
			$("#sub_arrival_date_to").removeClass('noView');
			closeSecondArrivalDate();
			$("#sub_arrival_date_year_to").prop("readonly", false);
			break;
		case "Month alternative":
			$("#sub_arrival_date_relative").addClass("noView");
			$("#sub_arrival_date_to").removeClass('noView');
			closeSecondArrivalDate();
			$("#sub_arrival_date_month_to").prop("readonly", false);
			break;
		case "Day alternative":
			$("#sub_dept_date_relative").addClass("noView");
			$("#sub_arrival_date_to").removeClass('noView');
			closeSecondArrivalDate();
			$("#sub_arrival_date_day_to").prop("readonly", false);
			break;
		case "Relative":
			resetSecondArrivalDate();
			$("#sub_arrival_date_relative").removeClass("noView");
			break;
	}
}

function resetSecondArrivalDate() {
	$("#sub_dept_date_to").addClass('noView');
	setFieldValue("#sub_arrival_date_day_to", "0");
	setFieldValue("#sub_arrival_date_month_to", "0");
	setFieldValue("#sub_arrival_date_year_to", "0");
}

function openSecondArrivalDate() {
	$("#sub_arrival_date_day_to").prop("readonly", false);
	$("#sub_arrival_date_month_to").prop("readonly", false);
	$("#sub_arrival_date_year_to").prop("readonly", false);
}

function closeSecondArrivalDate() {
	$("#sub_arrival_date_day_to").prop("readonly", true);
	$("#sub_arrival_date_month_to").prop("readonly", true);
	$("#sub_arrival_date_year_to").prop("readonly", true);
	copyFieldValues("#sub_arrival_date_day", "#sub_arrival_date_day_to");
	copyFieldValues("#sub_arrival_date_month", "#sub_arrival_date_month_to");
	copyFieldValues("#sub_arrival_date_year", "#sub_arrival_date_year_to");
}

// End standardized subvoyage arrival dates


function setFieldValue(obj, value) {
	$(obj).val(value);
	$(obj).removeClass('input_element');
	$(obj).addClass('changed_input_element');
}

