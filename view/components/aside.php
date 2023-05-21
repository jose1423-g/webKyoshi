<?php 
	include_once './models/indexmodel.php';
	$menu = new indexModel;
	$data = $menu->aside_menu();
?>
<!-- 1 -->

	<?php
	$html_previos = "";
	$html_informacion = "";
	$html_otras = "";
	$html_grupales  = "";
	$html_competencias = "";

	while ($row  = mysqli_fetch_array($data, MYSQLI_ASSOC)) { 
		$id_menu = $row['id_menu'];
		$link = $row['href'];
		$texto = $row['texto'];
		$estatus = $row['estatus'];
	if ($estatus == 1) {
		if($id_menu <= 7) { 
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_previos .= '<li class="mb-3"><a class="hover:text-blue-600" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 7 && $id_menu <= 31) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_informacion .= '<li class="mb-3"><a class="hover:text-blue-600" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 31 && $id_menu <= 36) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_otras .= '<li class="mb-3"><a class="hover:text-blue-600" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 36 && $id_menu <= 42) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_grupales .= '<li class="mb-3"><a class="hover:text-blue-600" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 42) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_competencias .= '<li class="mb-3"><a class="hover:text-blue-600" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		}
	} else {
		if($id_menu <= 7) { 
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_previos .= '<li class="mb-3"><a class="hover:text-blue-600 disabled text-blue-300" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 7 && $id_menu <= 31) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_informacion .= '<li class="mb-3"><a class="hover:text-blue-600 disabled text-blue-300" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 31 && $id_menu <= 36) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_otras .= '<li class="mb-3"><a class="hover:text-blue-600 disabled text-blue-300" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 36 && $id_menu <= 42) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_grupales .= '<li class="mb-3"><a class="hover:text-blue-600 disabled text-blue-300" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		} elseif ($id_menu > 42) {
			$previos_link = $row['href'];
			$previos_texto = $row['texto'];
			$html_competencias .= '<li class="mb-3"><a class="hover:text-blue-600 disabled text-blue-300" href='.constant("url").'main/'.$previos_link.'>'.$previos_texto.'</a></li>';
		}
	}
	
}?>
		
<ul class="pl-5 py-4" id="aside-menu">
	<h1 class="text-blue-600 text-3xl font-bold mb-3">Contenido</h1>
	<h1 class="font-bold mb-3 text-blue-600">Conocimientos Previos</h1>
	<?php echo $html_previos; ?>					
	<h1 class="font-bold mb-3 text-blue-600">Organizacion de informacion</h1>
	<?php echo $html_informacion; ?>					
	<h1 class="font-bold mb-3 text-blue-600">Otras estrategias que promueven la compresion</h1>
	<?php echo $html_otras; ?>					
	<h1 class="font-bold mb-3 text-blue-600">Estrategias grupales</h1>
	<?php echo $html_grupales; ?>					
	<h1 class="font-bold mb-3 text-blue-600">Desarrollo de competencias</h1>
	<?php echo $html_competencias; ?>					
</ul>


<!-- 

Desarrollo de competencias
 -->



<!-- if(value.estatus == 1){
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
				} -->