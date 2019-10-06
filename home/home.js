/*

  https://www.fbla-pbl.org/competitive-event/website-design-fbla/

  Topic: Create a website for a new discount airline. This airline serves the states surrounding the one in which you live. The airline has hired you to create a website. The website must include:

  Airline name and theme/slogan
  Introduction to the airline that includes animation
  Flight schedules, with the ability to book flights
  Information on the frequent flyer program
  How to apply for a job with the airline
  Social media links (NOTE: No live social media accounts should be created for this event.)

  libraries must be identified.

  Libraries used so far:
  https://getbootstrap.com/docs/4.3/components/navbar/
  https://material.io/resources/icons/?style=baseline

  Any photographs, texts, trademarks, or names used must be supported by proper documentation and approvals indicated on the site or project.

  Rating Guide:
  https://www.fbla-pbl.org/media/Website-Design-FBLA-Rating-Sheet-2.pdf

  Format Guide:
  https://www.fbla-pbl.org/media/Format-Guide-Competitive-Events.pdf

  in assests put images/favicon etc.

  https://www.w3schools.com/howto/howto_css_parallax.asp
  Bootstrap nav bar, no materialize

  Use this for social media links box shawdow:
  https://alligator.io/css/box-shadow-examples/

  Images attribution:
  https://www.pexels.com/photo/low-angle-photography-of-airplane-1157255/
  https://pixabay.com/photos/airplane-window-wing-flight-travel-2619434/
  https://pixabay.com/photos/architecture-skyscraper-2256489/
  https://pixabay.com/photos/cooling-tower-concrete-perspective-4210918/
  https://www.pexels.com/photo/low-angle-photo-of-airplane-1154619/
  https://en.facebookbrand.com/assets/f-logo/
  https://about.twitter.com/en_us/company/brand-resources.html
  https://en.instagram-brand.com/assets/icons

*/

$(function () {



  let displayed = 0;
  $("#slideoutButtons").hide();

  $("#hamburgerButton").click(function () {
    if (!displayed) {
      $("#slideout").animate({ width: "30%" }, 500);
      $("#slideoutButtons").show();
      displayed = 1;
    } else {
      $("#slideoutButtons").hide();
      $("#slideout").animate({ width: "0" }, 500);
      displayed = 0;
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