jQuery(document).ready(function ($) {
  $(".arrow").click(function () {
    var headerHeight = $("header").outerHeight(true);
    var section_1_Height = $(".section-1").outerHeight(true);
    var fullScreenHeight = headerHeight + section_1_Height;

    window.scrollTo({ left: 0, top: fullScreenHeight });
  });



  //pause video when modal is hidden
  var myModalEl = $(".modal1");
  myModalEl.on("hidden.bs.modal", function () {
    $("#video-s5").get(0).pause();
  });
});
