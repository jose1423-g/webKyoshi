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
			$("#content-img").html('<img src="'+img+'" alt="icon-index" class="">');
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

	/* <li class="mb-3"><a class="hover:text-blue-600" href="http://localhost/webkyoshi/main/sqa">sqa (qué sé, qué quiero saber, qué aprendí)</a></li> */


	$.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/Controllers/mainController.php",
		data:{
			op: 'http://localhost/webkyoshi/main/',
		},
        success: function (data) {
			var data =  JSON.parse(data);
			var menu1 = "";
			var menu2 = "";
			var menu3 = "";
			var menu4 = "";
			$.each(data, function (index, value) { 

				if (value.id_menu <= 7) {
				 	menu1 += '<li class="mb-3"><a class="hover:text-blue-600" href="">'+value.texto+'</a></li>';
				} 
				if (value.id_menu > 7 && value.id_menu <= 31) {
					menu2 += '<li class="mb-3"><a class="hover:text-blue-600" href="">'+value.texto+'</a></li>';
				}
				if (value.id_menu > 31 && value.id_menu <= 36) {
					menu3 += '<li class="mb-3"><a class="hover:text-blue-600" href="">'+value.texto+'</a></li>';
				}
				if (value.id_menu > 36 && value.id_menu <= 53) {
					menu4 += '<li class="mb-3"><a class="hover:text-blue-600" href="">'+value.texto+'</a></li>';
				}
			});
			$("#aside-menu1").html(menu1);
			$("#aside-menu2").html(menu2);
			$("#aside-menu3").html(menu3);
			$("#aside-menu4").html(menu4);
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });

	//Explora contenido dinamico
	$(".contenido-dinamico").on('click', function () {
		var data = $(this).attr('data-id');
		alert(data);
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/Controllers/indexController.php",
			data:{
				data: data,
				op: data,
			},
			dataType: 'json',
			success: function (data) {
				console.log('Chido')
	
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
	});

	//location login
	$("#btn-login").on('click', function (){
		window.location.href = url+"login";
	});
	//location registro
	$("#btn-register").on('click', function (){
		window.location.href = url+"registro";
	});
	//despliigue de menu
	$("#toggle-menu").on('click', function(){
		if($(".dropdown-menu").hasClass('hidden')){
			$(".dropdown-menu").removeClass('hidden');
			$("#toggle-menu i").removeClass('fa-sharp fa-solid fa-caret-down');
			$("#toggle-menu i").addClass('fa-sharp fa-solid fa-caret-up');
		} else {
			$(".dropdown-menu").addClass('hidden');
			$("#toggle-menu i").removeClass('fa-sharp fa-solid fa-caret-up');
			$("#toggle-menu i").addClass('fa-sharp fa-solid fa-caret-down');
		}
	});






});

