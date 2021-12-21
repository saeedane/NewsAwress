

jQuery(function($) {

var post_id = jQuery('#postId').attr("data-post-id");
/*var ts = Math.round(new Date().getTime() / 1000);
var tsYesterday = ts - (24 * 3600);*/

var lastclear = localStorage.getItem('lastclear'),
      time_now  = (new Date()).getTime();
if ($('#exampleCheck1').attr(':checked')); {
    
    
    if ((time_now - lastclear) > 1000 * 60 * 60 * 24) {

        localStorage.clear();
    
        localStorage.setItem('lastclear', time_now);
      }
      setTimeout(unChecked,7000);


}

$('#exampleCheck1').change(function(){

    if ($('#exampleCheck1').attr(':checked')); {
        if ((time_now - lastclear) > 1000 * 60 * 60 * 24) {

            localStorage.clear();
        
            localStorage.setItem('lastclear', time_now);
          }
    
        setTimeout(unChecked,7000);

    
    
    }
    




});

function unChecked() {
    var status = document.getElementById("exampleCheck1").checked = false;
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        dataType: 'JSON',
        data: 'action=save_post_meta&post_id='+post_id + '&status='+status,
        success: function( response ) {
            alert('Saved');

         
  
        }
      });     
  
}
  
  
$('#exampleCheck1').click(function() {


    let timerInHr = 86400000 //24Hr convereted into milliseconds;
    console.log(post_id);

    if ($('#exampleCheck1').attr(':checked')); {
        if(this.checked) {
            var status = "on";
        } else {
            var status = "off";
        }




        $.ajax({
            type: 'POST',
            url: ajaxurl,
            dataType: 'JSON',
            data: 'action=save_post_meta&post_id='+post_id + '&status='+status,
            success: function( response ) {
                alert('Saved');
    
             
      
            }
          });             




    }



   
  
});

    


  
  });
  
  