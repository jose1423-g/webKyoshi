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
