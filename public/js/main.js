$(document).ready( function () {
    
    $.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/",
        success: function (data) {
           $("#IdContenido").html(data);
        }


    });
});


/* $.ajax({
			type: "POST",
			url: "../ria/seg_usuarios_clientes_save_new.ria.php",
			data: {
				id_usuario: id_usuario,
				op: 'load'
			},		
			success: function(data){
				var data = jQuery.parseJSON(data);
				var result = data.result;
				if (result == 1) {
					$("#id_usuario").html(data.id_usuario);
					$("#IdUsuario").html(data.Usuario);
					$("#table-clientes tbody").html(data.TableTareas);
				} else {
					if (result == -1) {
						toastr.warning(data.msg);
					} else {
						toastr.info(data.msg);
					}
				}
			}
		});
	}	 */