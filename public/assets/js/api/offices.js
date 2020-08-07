jQuery( document ).ready(function() {
  
	$("select[name=region]").change(function(e){

        var id = $("#region option:selected").attr("value")


     if(id){


        jQuery.ajax({
            method: "POST",
            url: "/lista_sucursales",
            dataType: 'json',
            data: {id:id},
            success: function(resp) {
                if (resp) {

               /*     
        for (var i in response.da) {
            var at = "";
            at += '<div id="div' + response.da[i].id + '" class="todo-item">';
            at += '<input id="inp' + response.da[i].id + '" type="checkbox" name="'+ response.da[i].comentary +'">';
            at += '<span>' + response.da[i].comentary + '</span>';
            at += '<a href="javascript:void(0);" class="pull-right remove-todo-item"><i class="fa fa-times"></i></a>';
            at += '</div>';

            $('.todo-list').append(at);

            if (response.da[i].active == true) {
                $('#inp' + response.da[i].id).prop("checked", true);
                $('#div' + response.da[i].id).addClass('complete');
            }
        }*/




                    jQuery('#lista').html('lalalalistaenhtml');
                    console.log(resp.response.officess); 
        
                }
            }
        });  
      

     }
    });







});