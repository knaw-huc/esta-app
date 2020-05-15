var editVars = {
	voyageStatus: "new",
	currentVoyage: 0,
	captain: 0,
	vessel: 0,
	slaves: 0,
	actor: 0,
	cargo: 0
}

var currentForm = "";

var hucForms = {
	heSubvoyage: {
		empty: true
	}
}
var home = 'http://www.huc.localhost/esta';

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
		getSubVoyageData(id);
	}

	$("#profileDataNavigator li").on("click", function () {
		if (!$(this).hasClass("profileDataActiveTab")) {
			hideButtons();
			hideDetails();
			$(this).addClass("profileDataActiveTab");

			switch ($(this).attr('id')) {
				case 'profileXMLTab':
					$('#profileXML').removeClass('noView');
					break;
				case 'profileJSONTab':
					$('#profileJSON').removeClass('noView');
					break;
				case 'profileTweakTab':
					$('#tweakXML').removeClass('noView');
					break;
				case 'profileRecordsTab':
					$('#metadataRecs').removeClass('noView');
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

	setCurrentForm("heSubvoyage");
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
	});
}


function getSubVoyageData(id) {
	$.ajax(
		{
			type: "POST",
			url: home + "/service/get_subvoyage/" + id,
			data: {
				id: id
			},
			dataType: "json",
			success: function (json) {
				if (json.captain !== undefined) {
					editVars.captain = json.captain;
				}
				console.log(json);
				populateForm("heSubvoyage", json);
				$("#captainCell").html(json.ac_captain_name);
				$("#insurerCell").html(json.ac_insurer_name);
				$("#outfitterCell").html(json.ac_outfitter_name);
				$("#investorCell").html(json.ac_investor_name);
			},
			error: function (msg) {
				console.log(msg);
			}
		}
	);
}

function populateForm(form, json) {
	$("#" + form).find(".input_element").each(
		function () {
			var name = $(this).attr("id");
			if (json[name] !== undefined) {
				$(this).val(json[name]);
			}
		}
	);

}

