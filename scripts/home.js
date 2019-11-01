$(function run() {
	slideout();
	scroll();
});

function slideout() {

	let displayed = 0;

	$(".navbar-expand-lg").hide();
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
}

function scroll() {
	$(document).scroll(function () {
		if ($(document).scrollTop() >= 550) {
			$(".navbar-expand-lg").fadeIn();
		}

		if($(document).scrollTop() <= 300) {
			$(".navbar-expand-lg").fadeOut(200);
		}
	});
}
/* if mobile https://getbootstrap.com/docs/4.3/components/dropdowns/ or jquery below
$(function() {
	$("#item").click(function() {
		$("#submenu").slideToggle(500);
	});
});
*/