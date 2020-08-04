


        /*let valor = jQuery('#form-credits input#id-credits').val();

        let form = new FormData(document.getElementById("form-credits"));


         var images = jQuery('#images')[0].files[0];
        
         if(images == undefined){

            form.append('images', "");

        }else{

            form.append('images', jQuery('#images')[0].files[0]);
        }
        */
        //jQuery("#form-product #miniature").attr("src", "");

            jQuery.ajax({
                url: '/credits',
                type: 'POST',
                contentType: false,
                data: form,
                processData: false,
                cache: false,
                success: function(resp) {
                    if (resp) {
                        datatable.ajax.reload();
                       
                        
                        jQuery('#id-modal-product').modal('hide');
                        jQuery('#form-credits input#id-credits').val('');
                        jQuery('#form-credits')[0].reset();


                        if (resp.code == 200) {
                            setTimeout(function () {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'fadeIn',
                                    hideMethod: 'fadeOut',
                                    timeOut: 5000
                                };
                                toastr.success('Creado', resp.message);
                            }, 100);
                        }

                        if (resp.code == 301) {
                            setTimeout(function () {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'fadeIn',
                                    hideMethod: 'fadeOut',
                                    timeOut: 5000
                                };
                                toastr.warning('No se Realizo', resp.message);
                            }, 100);
                        }


                        if (resp.code == 400) {

                            setTimeout(function () {
                                toastr.options = {
                                    closeButton: true,
                                    progressBar: true,
                                    showMethod: 'fadeIn',
                                    hideMethod: 'fadeOut',
                                    timeOut: 5000
                                };
                                toastr.danger('Error', resp.message);
                            }, 100);
                        }
                    }
                }
            });     

