<?php
$title = 'Контакты';
$html = <<<HTML
<div id="contacts_anchor"></div>
<h2>Позвоните в отдел продаж для получения подробной информации</h2>
<div class="adds">
    <p class="text">
        График работы отдела продаж:<br/>
        Пн-Пт — 09:00 — 20:00,<br/>
        Сб — 10:00 — 16:00,<br/>
        Вс — выходной<br/>
        <addres>г. Днипро,<br/>
            ул. Луговская, 255
        </addres>
        <br/>
        Тел: +38 (067) 222-22-22 Тел: +38 (050) 333-33-33<br/>
        <a href="mailto:SITE_NAME.sales@gmail.com" class="link">SITE_NAME.sales@gmail.com</a>
    </p>
</div>
HTML;
include_once 'view/templates.php';
