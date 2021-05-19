<!doctype html>
<html lang="nl">
<head>
   <title>Het Fruithuisje</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>
<script src="app.js"></script>
<!-- php part -->
<?php 
   
?>   
<!-- body part -->

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
   
 	$(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    if (this.hash !== "") {

      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  
   $(".slideanimate").each(function(){
        $(this).stop().delay(1000).addClass("slide");
    });
  
    $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
    
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
    });
    
})


</script>
</body>
</html>
