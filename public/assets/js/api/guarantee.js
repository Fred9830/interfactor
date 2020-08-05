jQuery(document).ready(function() {
    
    jQuery('#enviargarantias').on("click", function(e) {

       
        var form = jQuery('#form-garantias');

        dato = jQuery('#form-garantias').serializeArray();
 
        var jsonArray = JSON.parse(JSON.stringify(dato));

        form.parsley().validate();
        
        if (form.parsley().isValid()){

            jQuery.ajax({
            method: "POST",
            url: "/save_guarantee",
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
