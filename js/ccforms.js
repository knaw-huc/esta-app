var editVars = {
	voyageStatus: "new",
	currentVoyage: 0,
	captain: 0,
	vessel: 0,
	slaves: 0,
	actor: 0,
	cargo: 0
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
        if ($(this).hasClass("profileDataActiveTab"))
        {
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
		if (!$(this).hasClass("profileDataActiveTab"))
		{
			hideButtons();
			hideDetails();
			$(this).addClass("profileDataActiveTab");

			switch ($(this).attr('id'))
			{
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
		success: function(json) {
			console.log(json);
		},
		error: function(msg) {
			console.log(msg);
		}
	}
);
}

