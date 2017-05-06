

jQuery(window).scroll(function() {
		 jQuery("#navbar").removeClass("navbar-absolute");
              jQuery("#navbar").addClass("navbar-custom");
            jQuery("#navbar").addClass("navbar-fixed-top");
      
        if (jQuery("#navbar").offset().top > 100) {
            jQuery("#navbar").removeClass("navbar-absolute");
            jQuery("#navbar").addClass("navbar-custom");
            jQuery("#navbar").addClass("navbar-fixed-top");
        } else {
             jQuery("#navbar").removeClass("navbar-custom");
             jQuery("#navbar").addClass("navbar-absolute");
             jQuery("#navbar").removeClass("navbar-fixed-top");
        }
    });