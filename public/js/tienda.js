$(document).ready(function () {
    $.ajax({
        method:"GET",
        url: "https://api.itbook.store/1.0/search/mongodb",
        dataType: 'json',
        success: function (resp) {
            var card = "";
            var datos = resp.books
            datos.forEach(element => {
                card += '<div class="bg-white rounded shadow-lg w-72 mr-3 mb-3"><img src="'+element.image+'" alt="" height="1000px"><div class="block p-2"><h1 class="text-2xl font-semibold mb-3">'+element.title+'<h1><h2 class="font-semibold mb-3">'+element.subtitle+'</h2><p class="font-semibold mb-3">'+element.price+'</p><button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Comprar</button></div></div>';
            });
            $("#productos").html(card);
            
        
		},
		error: function (jqXHR, estado, error) {
            console.log(estado);
            console.log(error);
        },
		complete: function (data) {
			
        }
    });   
});

/*  
<div class="bg-white rounded shadow-lg w-72 mr-3">
    <img src="<?php echo constant('url'); ?>public/img/premium.png" alt="">
    <div class="block p-2">  
        <h1 class="text-2xl font-semibold mb-3">holas</h1>
        <button class="p-1 bg-blue-600 w-full rounded-md text-white font-semibold">Explorar más</button>
    </div>
</div> 
*/