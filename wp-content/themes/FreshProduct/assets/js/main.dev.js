"use strict";

jQuery(document).ready(function ($) {
  console.log('test');
  $(".arrow").click(function () {
    var headerHeight = $("header").outerHeight(true);
    var section_1_Height = $(".section-1").outerHeight(true);
    var fullScreenHeight = headerHeight + section_1_Height;
    window.scrollTo({
      left: 0,
      top: fullScreenHeight
    });
  }); //modal
  //   $('#myModal').on('shown.bs.modal', function () {
  //     $('#myInput').trigger('focus')
  //   })
  // $('#myModal').modal({
  //     keyboard: false
  //   })
});