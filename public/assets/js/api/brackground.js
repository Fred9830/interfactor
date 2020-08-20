jQuery( document ).ready(function() {
    
    jQuery.ajax({
        method: "GET",
        url: "/vector_api",
        dataType: 'json',
        success: function(resp) {
            if (resp) {
              
                var todos = resp.response.todoarr; 
                console.log(todos); 

                jQuery('#hola').html(todos);
            }
        }
    });  

});