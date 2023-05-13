$(document).ready( function () {
	var url = window.location;
	const url_const = "http://localhost/webkyoshi/main/"
	const url_login = "http://localhost/webkyoshi/login/";
	const url_index = "http://localhost/webkyoshi/";
	
	/* Menu Aside */

	//carga inicial con el index
	$.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/libs/route.php",
		data:{
			resp:'si',
			op: 'preguntas',
		},
		dataType: 'json',
        success: function (data) {
			//console.log(data);
			var card = "";
			$.each(data, function (index, value) { 
				card += '<div class="bg-white rounded shadow-xl w-72 mx-3"><img class="w-full" src="'+url+value.ruta_img+'" alt=""><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+value.Titulo+'</h1><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold"><a href="'+url_const+value.href+'">Explora más</a></button></div></div>';
			});	
			$("#explora").html(card);
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });

	//funcion para refrescar el contenido explora
	$(".search_explora").on('click', function(){
	 	var data = $(this).attr('data-id');
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/libs/route.php",
			data:{
				resp: data,
				op: 'search_explora',
			},
			dataType: 'json',
			success: function (data) {
				console.log(data);
				if (data == '') {
					$("#explora").html("<h1 class='text-blue-600 text-center font-bold'>Ups :( el contenido no esta disponible</h1>");
				} else {
					var card = "";
					$.each(data, function (index, value) { 
						card += '<div class="bg-white rounded shadow-xl w-72 mx-3"><img class="w-full" src="'+url+value.ruta_img+'" alt=""><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+value.Titulo+'</h1><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold"><a href="'+url_const+value.href+'">Explora más</a></button></div></div>';
					});	
					$("#explora").html(card);
				}
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
		window.location.href = "http://localhost/webkyoshi/login/";
	});
	//location registro
	$("#btn-register").on('click', function (){
		window.location.href = "http://localhost/webkyoshi/registro/";
	});
	//location main
	$(".btn-main").on('click', function (){
		window.location.href = "http://localhost/webkyoshi/main/lluvia_de_ideas";
	});

	//despliegue de menu
	$("#btn-menu").on('click', function(){
		if($(".menu-drop").hasClass('max-lg:hidden')){
			$(".menu-drop").removeClass('max-lg:hidden');
			$("#btn-menu").html('<img src="'+'http://localhost/webkyoshi/public/img/closemenu.png" alt="" width="45px"></img>');
			//$("#toggle-menu i").addClass('fa-sharp fa-solid fa-caret-up');
		} else {
			$(".menu-drop").addClass('max-lg:hidden');
			$("#btn-menu").html('<img src="'+'http://localhost/webkyoshi/public/img/pointmenu.png" alt="" width="45px"></img>')
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
		} else {
			$("#drop-aside").addClass('hidden');
		}
	});

	//funcion para ocultar el menu una vez que se le haya dado click a un elemento
	$("#aside-menu li").on('click', '.menu-get', function(){
		$("#drop-aside").addClass('hidden');		
	});

	//funcion para mostrar y cerrar el buscador con la imagen del search
	$(".buscador").on('click', function(){
		/* $("#drop-aside").toggle('slow'); */
		if($("#content-search").hasClass('hidden')){
			$("#content-search").removeClass('hidden');
			$("body").addClass('overflow-hidden');		
		} else {
			$("#content-search").addClass('hidden');
			$("body").removeClass('overflow-hidden');
		}
	});

	//funcion para solo cerrar el buscador con la imagen close
	$("#close-search").on('click', function(){
		/* $("#drop-aside").toggle('slow'); */
		if($("#content-search").hasClass('hidden')){
			$("#content-search").removeClass('hidden');
			$("body").addClass('overflow-hidden');		
		} else {
			$("#content-search").addClass('hidden');
			$("body").removeClass('overflow-hidden');
		}
	});
	
	//funcion para deshabilitar el enter en el buscador
	$("#form-search").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });
	
	//FUNTION SEARCH
	$("#icon-search").keyup(function () { 
		var consulta = $("#icon-search").val();
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/libs/route.php",
			data:{
				resp: consulta,	
				op: 'search',
			},
			dataType: 'json',
			success: function (data) {
				var search = "";
				$.each(data, function (index, value) { 
					search += '<li class="p-2 hover:bg-blue-600 hover:text-white hover:font-bold"><a class="" href="'+url_const+value.href+'">'+value.texto+'</a></li>';
				});	
				$("#result-search").html(search);
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
	});

	//envio de formularios
	//registro
	$("#btn-registro").on('click', function (event) {
		var form = $("#form-registro").serialize();
		form = form + "&op=registro";
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/libs/route.php",
			data: form,
			dataType: 'json',
			success: function (data) {
				var result = data.result;
					if (result == -1) {
						alert(data.msg)
					} else {
						//alert(data.msg);		
						window.location.href = url_login;				
					}
				
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
		event.preventDefault();
	});
	
	//login
	$("#login").on('click', function (event) {
		var login = $("#form-login").serialize();
		login = login + "&op=login";
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/libs/route.php",
			data: login,
			dataType: 'json',
			success: function (data) {
				console.log(data);
				var result = data.result;
					if (result == -1) {
						alert(data.msg)
					} else {
						window.location.href = url_index;				
					}
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
		event.preventDefault();
	});

});