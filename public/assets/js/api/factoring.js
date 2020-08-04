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
        form.parsley().validate();
        
        if (form.parsley().isValid()){
            //product.setData(TableProduct);

            console.log('formulario validado'); 

        }
        
        e.preventDefault();
        

    });

});