const url = "http://localhost/webkyoshi/";

$(document).ready( function () {

    $.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/Controllers/indexController.php",
		data:{
			op: 'http://localhost/webkyoshi/',
		},
		dataType: 'json',
        success: function (data) {
			img =  url + data[0].Img;
			$("#Titulo").text(data[0].Titulo);
			$("#Contenido").text(data[0].Contenido);
			$("#content-img").html('<img src="'+img+'" alt="icon-index" class="img">');
			/*++++++++++++++++++++++++++++++++*/
			$("#Titulo2").text(data[1].Titulo);
			$("#Contenido2").text(data[1].Contenido);
			/*++++++++++++++++++++++++++++++++*/
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });


	function menu() {
		var html = "";
		for (let index = 0; index <= 100; index++) {
			console.log(index);
			html += '<li class="mb-3"><a class="hover:text-blue-600" href="http://localhost/webkyoshi/main/sqa">sqa (qué sé, qué quiero saber, qué aprendí)</a></li>';		
		}
		$("#aside-menu").html(html);
	}
	//return menu();

});


/*FUNCIONES PARA ANIMACIONES */

$('#toggle-menu').hover(function () {
	$('.dropdown-menu').toggle();
});
	



