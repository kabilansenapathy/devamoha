$(window).scroll(function() {
		jQuery("#navbar").removeClass("navbar-absolute");
            $("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        if ($("#navbar").offset().top > 100) {
            $("#navbar").removeClass("navbar-absolute");
            $("#navbar").addClass("navbar-custom");
            $("#navbar").addClass("navbar-fixed-top");
        } else {
             $("#navbar").removeClass("navbar-custom");
        }
    });