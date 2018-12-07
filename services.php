<?php
$service = filter_input(INPUT_GET, 'service');
$title = $service;
$html = <<<HTML
<div id="service"></div>
<h2>$service</h2>
<div class="service">
<img src="images/galery/$service.jpg" alt="$service" class="service_img float_left">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
HTML;
include_once 'view/templates.php';