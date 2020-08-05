jQuery(document).ready(function() {
    
    jQuery('#enviarcreditos').on("click", function(e) {

        var form = jQuery('#form-creditos');

        dato = jQuery('#form-creditos').serializeArray();
 
        var jsonArray = JSON.parse(JSON.stringify(dato));

        form.parsley().validate();
        
        if (form.parsley().isValid()){
            
            jQuery.ajax({
                method: "POST",
                url: "/save_credits",
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
        
        e.preventDefault();
        

    });

});

