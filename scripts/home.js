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