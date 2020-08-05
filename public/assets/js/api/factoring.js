jQuery(document).ready(function() {
    
    jQuery('#enviarfactoring').on("click", function(e) {

        /*
        window.ParsleyValidator.addValidator('typeFiles', {
            validateString: function(_value, maxSize, parsleyInstance) {
            
            var files = parsleyInstance.$element[0].files;
            var image = files[0];
            var result = (/\.(jpg|jpeg|png)$/i).test(image.name);
            return result === true;
            },
            messages: {
            en: 'El archivo debe ser PNG o JPG',
            }
        });

        window.Parsley.addValidator('maxFileSize', {
            validateString: function(_value, maxSize, parsleyInstance) {
            
            var files = parsleyInstance.$element[0].files;
            return files.length != 1  || files[0].size <= maxSize * 1024;
            },
            requirementType: 'integer',
            messages: {
            en: 'Este archivo no debe ser mayor que %s Kb '
            }
        });
        */

        var form = jQuery('#form-factoring');

        let formi = new FormData(document.getElementById("form-factoring"));

        var images = jQuery('#images')[0].files[0];

        if(images == undefined){

           formi.append('images', "");

        }else{

           formi.append('images', jQuery('#images')[0].files[0]);
        }

        //dato = jQuery('#form-factoring').serializeArray();

        
        //var jsonArray = JSON.parse(JSON.stringify(dato));

        form.parsley().validate();

        
        if (form.parsley().isValid()){

            /*
            jQuery.ajax({
                method: "POST",
                url: "/save_factoring",
                dataType: 'json',
                data: formi,
                success: function(resp) {
                    if (resp) {
                        console.log(resp); 
            
                    }
                }
            }); */

            $.ajax({
                type: "POST",
                url: '/save_factoring',
                data: formi,
                processData: false,
                contentType: false,
            })
    
        }else{
            return;
        }
            
        e.preventDefault();
    
    });

});