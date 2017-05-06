

$(window).scroll(function() {
		jQuery("#navbar").removeClass("navbar-absolute");
            jQuery("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        if (jQuery("#navbar").offset().top > 100) {
            $("#navbar").removeClass("navbar-absolute");
            $("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        } else {
             $("#navbar").removeClass("navbar-custom");
             $("#navbar").addClass("navbar-absolute");
             $("#navbar").removeClass("navbar-fixed-top");
        }
    });