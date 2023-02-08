(function ($) {
  //on load page

  $(document).ready(function () {
    //products page
    $("[data-slug='carrots'] .cont1-s1").children("img").removeClass("filter");
    $('.products-categories-s1').first().children('div').last().addClass('selected animation');

    getProductsPostRequest('carrots',$("#dynmc-cont"));

    getNewsPostRequest(3);
    
    
  });

  //product page

  $(document).on("click", ".products-categories-s1", function (e) {
    // design
    //reset
    //add filters for all categories imgs 
    $(".products-categories-s1 .cont1-s1").children("img").addClass("filter");
    //remove all selected class
    $('.line').removeClass('selected');

    // re add css for clicked category
    $(this).children(".cont1-s1").children("img").removeClass("filter");
    $(this).children('div').last().addClass('selected');


    getProductsPostRequest($(this).attr("data-slug"),$("#dynmc-cont"));

  });

  function getProductsPostRequest(slug,parentElement){
    
    // request
    $.ajax({
      url: ajaxpagination.ajaxurl,
      type: "post",
      dataType: "html",
      data: {
        action: "ajax_pagination",
        slug: slug,
      },
      success: function (result) {
        parentElement.html(result);
      },
    });
  }

  //news page

$('#older-entries-btn').on('click',function(){
  $(this).css({'display':'none'});
  getNewsPostRequest();
});


function getNewsPostRequest(offset){
      // request
      $.ajax({
        url: ajaxpagination.ajaxurl,
        type: "post",
        dataType: "html",
        data: {
          action: "ajax_pagination_news",
          offset: offset ? offset : -1,
        },
        success: function (result) {
          $('#news-content').html(result);
        },
      });
}



})(jQuery);
