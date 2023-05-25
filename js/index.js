  $("#navbar-icon-first").click(function () {
    $("#sideBar").css("transform", "translate(0)")
  });
  $("#navbar-icon").click(function () {
    $("#sideBar").css("transform", "translate(-100%)")
  });




  var path = window.location.pathname;
  var page = path.split("/").pop();
  if (page == "") {
    page = "index";
  } else {
    page = page.slice(0, -4);
  }
$("#" + page).addClass("line-under");
if (page == "aboutUs" || page == "contact") {
  document.getElementById("myImg").src = "images/logowhite.png";

}
  if (page == "aboutUs" ) {
    $("#track-button").addClass("text-white");
    $("#track-button").addClass("border");
  }