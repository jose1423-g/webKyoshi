$(document).ready( function () {
	var url = window.location;
	/* Menu Aside */
	$.ajax({
        method:"POST",
        url: "http://localhost/webkyoshi/libs/route.php",
		data:{
			resp: 'si',
			op: 'http://localhost/webkyoshi/',
		},
		dataType: 'json',
        success: function (data) {
			var menu1 = "";
			var menu2 = "";
			var menu3 = "";
			var menu4 = "";
			var activo = "";
			$.each(data, function (index, value) {
				if(value.estatus == 1){
					if (value.id_menu <= 7) {	
						menu1 += '<li class="mb-3"><a class="hover:text-blue-600" href="'+value.href+'">'+value.texto+'</a></li>';						
					}
					if (value.id_menu > 7 && value.id_menu <= 31) {
						menu2 += '<li class="mb-3"><a class="hover:text-blue-600" href="'+value.href+'">'+value.texto+'</a></li>';
					} 
					if (value.id_menu > 31 && value.id_menu <= 36 ) {
						menu3 += '<li class="mb-3"><a class="hover:text-blue-600" href="'+value.href+'">'+value.texto+'</a></li>';
					}
					if (value.id_menu > 36 && value.id_menu <= 53) {
						menu4 += '<li class="mb-3"><a class="hover:text-blue-600" href="'+value.href+'">'+value.texto+'</a></li>';
					}
				} else {
					if (value.id_menu <= 7) {	
						menu1 += '<li class="mb-3"><a class="hover:text-blue-600 disabled text-red-600" href="'+value.href+'">'+value.texto+'</a></li>';						
					}
					if (value.id_menu > 7 && value.id_menu <= 31) {
						menu2 += '<li class="mb-3"><a class="hover:text-blue-600 disabled text-red-600" href="'+value.href+'">'+value.texto+'</a></li>';
					} 
					if (value.id_menu > 31 && value.id_menu <= 36 ) {
						menu3 += '<li class="mb-3"><a class="hover:text-blue-600 disabled text-red-600" href="'+value.href+'">'+value.texto+'</a></li>';
					}
					if (value.id_menu > 36 && value.id_menu <= 53) {
						menu4 += '<li class="mb-3"><a class="hover:text-blue-600 disabled text-red-600" href="'+value.href+'">'+value.texto+'</a></li>';
					}
				}
			});
			console.log(activo);
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
				card += '<div class="bg-white rounded shadow-xl w-72 mx-3"><img class="w-full" src="'+url+value.ruta_img+'" alt=""><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+value.Titulo+'</h1><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold"><a href="main/'+value.href+'">Explora más</a></button></div></div>';
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
				var card = "";
				$.each(data, function (index, value) { 
					card += '<div class="bg-white rounded shadow-xl w-72 mx-3"><img class="w-full" src="'+url+value.ruta_img+'" alt=""><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+value.Titulo+'</h1><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold"><a href="main/'+value.href+'">Explora más</a></button></div></div>';
					console.log(value.Titulo +'   '+value.href +''+value.ruta_img);
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

	//funcion para mostrat el buscador
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

	//FUNTION SEARCH
	$("#icon-search").keyup(function () { 
		var consulta = $("#icon-search").val();
		console.log(consulta);
		$.ajax({
			method:"POST",
			url: "http://localhost/webkyoshi/libs/route.php",
			data:{
				resp: consulta,	
				op: 'search',
			},
			dataType: 'json',
			success: function (data) {
				console.log(data);
				/* var card = "";
				$.each(data, function (index, value) { 
					card += '<div class="bg-white rounded shadow-xl w-72 mx-3"><img class="w-full" src="'+url+value.ruta_img+'" alt=""><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+value.Titulo+'</h1><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold"><a href="main/'+value.href+'">Explora más</a></button></div></div>';
					console.log(value.Titulo +'   '+value.href +''+value.ruta_img);
				});	
				$("#explora").html(card); */
			},
			error: function (jqXHR, estado, error) {
				console.log(estado);
				console.log(error);
			},
			complete: function (data) {
				
			}
		});
	});



});