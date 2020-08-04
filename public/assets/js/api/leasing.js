jQuery(document).ready(function() {
    
    jQuery('#enviarleasing').on("click", function(e) {

        var form = jQuery('#form-leasing');
  
        dato = jQuery('#form-leasing').serializeArray();
 
        var jsonArray = JSON.parse(JSON.stringify(dato));
        //dato = jQuery('#form-leasing').serializeArray();
        form.parsley().validate();
        
        if (form.parsley().isValid()){

            jQuery.ajax({
                method: "POST",
                url: "/save_leasing",
                dataType: 'json',
                data: jsonArray,
                success: function(resp) {
                    if (resp) {
    
                        console.log(resp); 
            
                    }
                }
            });




        
        }else{
            return;
        }
        
     

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


        e.preventDefault();  
    });

});