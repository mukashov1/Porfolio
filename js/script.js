jQuery(document).ready(function () {
         
    jQuery('form button').click( function() {
    	var form = jQuery(this).closest('form');
    	
    		form.css('opacity','.5');
    		var actUrl = form.attr('action');

    		jQuery.ajax({
    			url: actUrl,
    			type: 'post',
    			dataType: 'html',
    			data: form.serialize()
    		});
    });


});