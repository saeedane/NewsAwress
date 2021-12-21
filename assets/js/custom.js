

$(document).ready(function() {

  $('.more-post').click(function(event) {
    event.preventDefault();

    $.ajax({
      type: 'POST',
      url: wpc_vars.ajax_url,
      data: { action : 'get_ajax_posts_view_by_mouth'},
      success: function( response ) {
          $('#posts-area').html(response); 

      

      }
    });     

    return false;



  });

    


  var post_id = jQuery('.media-body').attr("data-post-id");
  var nonce = jQuery('.media-body').attr("data-nonce");

  $(document).on("click","#lineComent",function(event) {
    event.preventDefault();
  $(this).children().attr('colors','primary:#ff0000,secondary:#ff0000');
  $('.dislike').children().attr('colors','primary:#000000,secondary:#000000');

  $.ajax({
    type: 'POST',
    url: wpc_vars.ajax_url,
    dataType: 'JSON',
    data: 'action=pt_like_it&post_id='+post_id + "&nonce="+ nonce ,
    success: function( response ) {
        alert('Saved');



    }
  });             



  });
  $(document).on("click","#dislikeComent",function(event) {
    event.preventDefault();
    $(this).children().attr('colors','primary:#ff0000,secondary:#ff0000');
    $('.liked').children().attr('colors','primary:#000000,secondary:#000000');

  });






  var post_news_status = $('.sNewsSlide ').attr('data-status-news');
  if(!post_news_status){
    document.getElementById("breaking-news").style.display="none";

  }



});








