<!-- ------------------- SCROLL TO START ------------------- -->
            jQuery(function() {
                jQuery('nav ul li a').bind('click',function(event){
                    var $anchor = jQuery(this);
                    
                    jQuery('html, body').stop().animate({
                        scrollTop: jQuery($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');
                    event.preventDefault();
                });
            });
<!-- ------------------- SCROLL TO END ------------------- -->
	   
<!-- ------------------- FORM TEXT STYLE START ------------------- -->

   jQuery(document).ready(function() {
 jQuery('input[title]').each(function() {
  if(jQuery(this).val() === '') {
   jQuery(this).val(jQuery(this).attr('title')); 
  }
  
  jQuery(this).focus(function() {
   if(jQuery(this).val() === jQuery(this).attr('title')) {
    jQuery(this).val('').addClass('focused'); 
   }
  });
  
  jQuery(this).blur(function() {
   if(jQuery(this).val() === '') {
    jQuery(this).val(jQuery(this).attr('title')).removeClass('focused'); 
   }
  });
 });
  jQuery('textarea[title]').each(function() {
  if(jQuery(this).val() === '') {
   jQuery(this).val(jQuery(this).attr('title')); 
  }
  
  jQuery(this).focus(function() {
   if(jQuery(this).val() === jQuery(this).attr('title')) {
    jQuery(this).val('').addClass('focused'); 
   }
  });
  
  jQuery(this).blur(function() {
   if(jQuery(this).val() === '') {
    jQuery(this).val(jQuery(this).attr('title')).removeClass('focused'); 
   }
  });
 });
});
<!-- ------------------- FORM TEXT STYLE END ------------------- -->

<!-- ------------------- FORM SUBMIT START ------------------- -->
	jQuery(document).ready(function() {
		jQuery('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			jQuery('#error').fadeIn('slow');
			}
		});
	});
<!-- ------------------- FORM SUBMIT END ------------------- -->

