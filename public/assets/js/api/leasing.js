jQuery(document).ready(function() {
    
    jQuery('#enviarleasing').on("click", function(e) {

        var form = jQuery('#form-leasing');
        dato = jQuery('#form-leasing').serialize();
        form.parsley().validate();
        
        if (form.parsley().isValid()){

         console.log(dato); 
        }
        
        e.preventDefault();

        /*
        jQuery.ajax({
            url: '/save_leasing',
            type: 'POST',
            contentType: false,
            data: datas,
            processData: false,
            cache: false,
            success: function(resp) {
                if (resp) {

                    console.log(resp); 
        
                }
            }
        });*/

        

    });

});