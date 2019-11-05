$(function run() {
	slideout();
	scroll();
});

var slideoutDisplayed = 0;

function slideout() {

	$("#hamburgerButton").click(function () {
		$("#slideout").animate({ width: "16%" }, 500);
		//$("#slideoutButtons").fadeToggle(3000);
		$("#slideoutButtons").show();
		$("#hamburgerButton").hide();
		slideoutDisplayed = 1;
	});

	$(".close").click(function () {
		$("#slideoutButtons").hide();
		$("#slideout").animate({ width: "0" }, 500);
		$("#hamburgerButton").show();
		slideoutDisplayed = 0;
	});
}

function scroll() {
	$(document).scroll(function () {

		if (slideoutDisplayed) {
			$("#slideoutButtons").hide();
			$("#slideout").animate({ width: "0" }, 500);
			$("#hamburgerButton").show();
			slideoutDisplayed = 0;
		}

		if ($(document).scrollTop() >= 550) $(".navbar-expand-lg").fadeIn(300);

		if($(document).scrollTop() <= 300) $(".navbar-expand-lg").fadeOut(200);
	});
}
/* if mobile https://getbootstrap.com/docs/4.3/components/dropdowns/ or jquery below
$(function() {
	$("#item").click(function() {
		$("#submenu").slideToggle(500);
	});
});
*/