$(function run() {
	slideout();
	scroll();
});

var slideoutDisplayed = 0;

function slideout() {

	$("#hamburgerButton").click(function () {

		if (window.innerWidth < 450) {
			$("#slideout").animate({ width: "100%" }, 500);
			$(".navbar-custom").hide();
		} else if (window.innerWidth < 992 && window.innerWidth > 450) {
			$("#slideout").animate({ width: "35%" }, 500);
		} else {
			$("#slideout").animate({ width: "18%" }, 500);
			$(".navbar-custom").show();
		}

		//$("#slideoutButtons").fadeToggle(3000);
		$("#slideoutButtons").show();
		$("#hamburgerButton").hide();
		slideoutDisplayed = 1;
	});

	$(".close").click(function () {
		$("#slideoutButtons").hide();
		$("#slideout").animate({ width: "0" }, 500);
		$("#hamburgerButton").show();
		$(".navbar-custom").show();
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
			$(".navbar-custom").show();
		}

		if ($(document).scrollTop() >= 600) $(".navbar-expand-lg").fadeIn(300);

		if ($(document).scrollTop() <= 300) $(".navbar-expand-lg").fadeOut(200);
	});
}