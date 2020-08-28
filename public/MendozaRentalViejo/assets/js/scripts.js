// Contact Form
$(function() {
	
	var form = $(document.getElementById('contact-form'));

    form.on('submit', function (e) {
    	
    	e.preventDefault();
    	var action = form.prop('action'),
    		alert  = $(document.getElementById('alert'));
	    
	    $.post(action, form.serialize(), function(response) {
            alert.html(response);
            alert.removeClass('hidden');
            /* Conversion Tracking Start */
            var google_conversion_id = 961725737;
            var google_conversion_language = "en";
            var google_conversion_format = "3";
            var google_conversion_color = "ffffff";
            var google_conversion_label = "SsRuCI-LowoQqYrLygM";
            var google_remarketing_only = false;

            $.getScript('//www.googleadservices.com/pagead/conversion.js');

            var image = new Image(1, 1); 
            image.src = "//www.googleadservices.com/pagead/conversion/961725737/?label=SsRuCI-LowoQqYrLygM&amp;guid=ON&amp;script=0";  
            /* Conversion Tracking End */
        });
	    
	    return false;

    });
});
