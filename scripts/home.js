$(function () {

	let displayed = 0;
	$("#slideoutButtons").hide();

	$("#hamburgerButton").click(function () {
		if (!displayed) {
			$("#slideout").animate({ width: "13%" }, 500);
			//$("#slideoutButtons").fadeToggle(3000);
			$("#slideoutButtons").show();
			$("#hamburgerButton").hide();
			displayed = 1;
		}
	});

	$("#closeButton").click(function () {
		if (displayed) {
			$("#slideoutButtons").hide();
			$("#slideout").animate({ width: "0" }, 500);
			displayed = 0;
			$("#hamburgerButton").show();
		}
	});
});

/* if mobile https://getbootstrap.com/docs/4.3/components/dropdowns/ or jquery below
$(function() {
	$("#item").click(function() {
		$("#submenu").slideToggle(500);
	});
});
*/