const url = "http://localhost/webkyoshi/";

$(document).ready( function () {
	/* CARGA INDEX */
    $.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/Controllers/indexController.php",
		data:{
			op: 'http://localhost/webkyoshi/',
		},
		dataType: 'json',
        success: function (data) {
			img =  url + data[0].Img;
			/*Inicio*/
			$("#Titulo1").text(data[0].Titulo);
			$("#Contenido1").text(data[0].Contenido);
			$("#content-img1").html('<img src="'+img+'" alt="icon-index" class="img">');
			/*Explora*/
			$("#Titulo2").text(data[1].Titulo);
			$("#Contenido2").text(data[1].Contenido);
			/*planes*/
			$("#Titulo3").text(data[2].Titulo);
			$("#Contenido3").text(data[2].Contenido);
			$("#content-img3").html('<img src="'+img+'" alt="icon-index" class="img">');
			/*+Premium*/
			$("#Titulo4").text(data[3].Titulo);
			$("#Contenido4").text(data[3].Contenido);
			/*+Recursos*/
			$("#Titulo5").text(data[4].Titulo);
			$("#Contenido5").text(data[4].Contenido);
			$("#content-img5").html('<img src="'+img+'" alt="icon-index" class="img">');
			
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });
	/* Menu Aside */
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
				 	menu1 += '<li class="mb-3"><a class="hover:text-blue-600 pointer menu-get" data-id="'+value.texto+'" href="#'+value.texto+'">'+value.texto+'</a></li>';
				} 
				if (value.id_menu > 7 && value.id_menu <= 31) {
					menu2 += '<li class="mb-3"><a class="hover:text-blue-600 pointer menu-get" data-id="'+value.texto+'">'+value.texto+'</a></li>';
				}
				if (value.id_menu > 31 && value.id_menu <= 36) {
					menu3 += '<li class="mb-3"><a class="hover:text-blue-600 pointer menu-get" data-id="'+value.texto+'">'+value.texto+'</a></li>';
				}
				if (value.id_menu > 36 && value.id_menu <= 53) {
					menu4 += '<li class="mb-3"><a class="hover:text-blue-600 pointer menu-get" data-id="'+value.texto+'">'+value.texto+'</a></li>';
				}
			});
			$(".aside-menu1").html(menu1);
			$(".aside-menu2").html(menu2);
			$(".aside-menu3").html(menu3);
			$(".aside-menu4").html(menu4);
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });

	/* var url_actual = window.location;
		console.log(url_actual['href']);   */

	$("#aside-menu li").on('click','.menu-get', function () {
		var data = $(this).attr('data-id');
		$.ajax({
			method:"get",
			url: "http://localhost/webkyoshi/Controllers/mainController.php",
			data:{
				data: data,
				op: data,
			},
			dataType: 'json',
			success: function (data) {
				//muestra de datos al main
				console.log(data)
				/* location = 'http://localhost/webkyoshi/main/'+data; */
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
	}); 

	//Explora contenido dinamico
	$(".contenido-dinamico").on('click', function () {
		var data = $(this).attr('data-id');
		/* alert(data); */
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/Controllers/indexController.php",
			data:{
				data: data,
				op: data,
			},
			dataType: 'json',
			success: function (data) {
				console.log(data);
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
	});

	//LOCATION HREF
	//location login
	$("#btn-login").on('click', function (){
		window.location.href = url+"login";
	});
	//location registro
	$("#btn-register").on('click', function (){
		window.location.href = url+"registro";
	});
	//location main
	$(".btn-main").on('click', function (){
		window.location.href = url+"main";
	});

	//despliegue de menu
	$("#btn-menu").on('click', function(){
		if($(".menu-drop").hasClass('max-lg:hidden')){
			$(".menu-drop").removeClass('max-lg:hidden');
			$("#btn-menu").html('<img src="'+url+'public/img/closemenu.png" alt="" width="45px"></img>')
			//$("#toggle-menu i").addClass('fa-sharp fa-solid fa-caret-up');
		} else {
			$(".menu-drop").addClass('max-lg:hidden');
			$("#btn-menu").html('<img src="'+url+'public/img/pointmenu.png" alt="" width="45px"></img>')
		}
	});
	
	//despliegue de sub-menu RECURSOS
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

	//Menu aside drop
	$("#btn-aside").on('click', function(){
		/* $("#drop-aside").toggle('slow'); */
		
		if($("#drop-aside").hasClass('hidden')){
			$("#drop-aside").removeClass('hidden');
			//$("#btn-menu").html('<img src="'+url+'public/img/closemenu.png" alt="" width="45px"></img>')
			//$("#toggle-menu i").addClass('fa-sharp fa-solid fa-caret-up');
		} else {
			$("#drop-aside").addClass('hidden');
			//$("#btn-menu").html('<img src="'+url+'public/img/iconmenu.png" alt="" width="45px"></img>')
			//$("#btn-menu i").addClass('fa-sharp fa-solid fa-caret-down');
		}
	});

	//funcion para ocultar el menu una vez que se le haya dado click a un elemento
	$("#aside-menu li").on('click', '.menu-get', function(){
		$("#drop-aside").addClass('hidden');		
	});
	

});

