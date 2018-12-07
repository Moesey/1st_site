<?php
$title = 'Галерея';
$html = '<div id="galery_anchor"</div><h2>Галерея</h2><div class="galery">';
$galery = 'images'.DIRECTORY_SEPARATOR.'galery';
$images = array_diff(scandir($galery), array('..', '.'));
foreach ($images as $image) {
    $html .= "<img src='$galery/$image' alt='$image'>";
}
$html .= '</div>';
include_once 'view'.DIRECTORY_SEPARATOR.'templates.php';