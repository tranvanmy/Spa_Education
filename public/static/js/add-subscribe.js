<!-- Script popup -->
  $(document).ready(function(){
      $('#onesignal-bell-launcher').click(function() {
          $(this).animate({width:'toggle'},350);
          $('#container-subciber').animate({width:'toggle'},350);
      })
      $('#subcribe-button-cancel').click(function() {
          $('#onesignal-bell-launcher').animate({width:'toggle'},350);
          $('#container-subciber').animate({width:'toggle'},350);
      })
  });
<!--  End script -->
