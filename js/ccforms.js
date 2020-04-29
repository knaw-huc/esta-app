function setEvents() {
    var home = 'http://www.huc.localhost/esta';

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
            }
        }
    });

    $("#homeBtn").hover(function () {
        $("#homeBtn").css('cursor', 'pointer');
    }).click(function () {
        window.location = home;
    });

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

    $("#logout").hover(function () {
		$("#logout").css('cursor', 'pointer');
	}).click(function () {
		window.location = home + "/workspace/logout";
	});

    $("#profileDataNavigator li").each(function () {
        $(this).hover(function () {
            $(this).css('cursor', 'pointer');
        });
    });

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
    $("#profileDetails div").each(function () {
        if (!$(this).hasClass("noView"))
        {
            $(this).addClass("noView");
        }
    });
}

