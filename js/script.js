$(document).ready(function(){
$('.more a').live('click', function(e){
     e.preventDefault();
     var link = $(this).attr('href'); //get link
     $('.main').fadeOut(500).load(link + ' .main section', function(){
     $('.main').fadeIn(500); 
     });

  $('.more').load(link + ' .more a'); //update pages link
 });

});