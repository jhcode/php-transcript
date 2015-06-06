var $ = jQuery.noConflict();



// Progress Bar

$(document).ready(function ($) {
  "use strict";
  
  $('.skill-shortcode').appear(function () {
      $('.progress').each(function () {
          $('.progress-bar').css('width',  function () { return ($(this).attr('data-percentage') + '%')});
      });
  }, {accY: -100});
  $('#contactForm').submit(function(e){
  	e.preventDefault();
  	var data = $(this).serialize(), url = $(this).prop('action');
  	$.ajax({
  		type: 'POST',
  		url: url,
  		data: data
  	}).done(function(response){
  		$('#success').html('<div class="alert alert-success">'+response+'</div>');
      $('#contactForm').trigger("reset");
  	});
  });
  $('#authForm').submit(function(e){
  	e.preventDefault();
  	var data = $(this).serialize(), url = $(this).prop('action');
  	$.ajax({
  		type: 'POST',
  		url: url,
  		data: data
  	}).done(function(response){
  		if(response === "hod"){
  			var base = $('base').prop('href');
  			window.location.replace(base+'/index.php/admin');
  		}
  	});
  });
        
        
});