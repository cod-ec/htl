
$('.explorer').click(function(){
	  $('.our_rooms').fadeIn();
     
});

$('.close').click(function(){
	  $('.our_rooms').fadeOut();
     
});


$('.abt').click(function(){
	  $('.cntus').fadeOut();
	  $('.abtus').fadeIn();
     
});

$('.cnt').click(function(){
	  $('.abtus').fadeOut();
	  $('.cntus').fadeIn();
     
});

$('.profile').click(function(){
	  $('.profiledata').animate({height:"170px"}, 500);
	   $('.profilename').fadeIn();
	   $('.profileemail').fadeIn();
      $('.profileage').fadeIn();
      $('.logout').fadeIn();
});
