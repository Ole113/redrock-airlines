/*
  Topic: Create a website for a new discount airline. This airline serves the states surrounding the one in which you live. The airline has hired you to create a website. The website must include:

  Airline name and theme/slogan
  Introduction to the airline that includes animation
  Flight schedules, with the ability to book flights
  Information on the frequent flyer program
  How to apply for a job with the airline
  Social media links (NOTE: No live social media accounts should be created for this event.)

  libraries must be identified.
  Any photographs, texts, trademarks, or names used must be supported by proper documentation and approvals indicated on the site or project.

  Rating Guide:
  https://www.fbla-pbl.org/media/Website-Design-FBLA-Rating-Sheet-2.pdf

  Format Guide:
  https://www.fbla-pbl.org/media/Format-Guide-Competitive-Events.pdf

  in assests put images/favicon etc.

  https://www.w3schools.com/howto/howto_css_parallax.asp
  Bootstrap nav bar, no materialize
*/

$(function () {

  let displayed = 0;

  $("#button").click(function () {
    if (!displayed) {
      $("#slideout").animate({ width: "100px" }, 500);
      displayed = 1;
    } else {
      $("#slideout").animate({ width: "0" }, 500);
      displayed = 0;
    }
  });
});

/* if mobile
$(function() {
	$("#item").click(function() {
		$("#submenu").slideToggle(500);
	});
});
*/