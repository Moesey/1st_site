<main>
    <div class="outer_header">
        <div>
            <h2>Кратко о нас</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <a href="about.php#about_anchor">
                <button>Подробнее</button>
            </a>
        </div>
        <img src="../images/header.jpg" alt="" id="main_photo">
    </div>
    <div id="content">
        <?= $html ?>
        <?php if ($_SERVER["PHP_SELF"] === "/index.php"): ?>
            <div id="service_anchor"></div>
            <h2>Наши услуги</h2>
            <div class="service_main">
                <a href="services.php?service=Услуга1#Услуга1">
                    <img src="../images/galery/Услуга1.jpg" alt="Услуга1" class="service_img float_left">
                </a>
                <div class="desc_servive">
                    <h3>Услуга1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="service_main">
                <a href="services.php?service=Услуга2#Услуга2">
                    <img src="../images/galery/Услуга2.jpg" alt="Услуга2" class="service_img float_right">
                </a>
                <div class="desc_servive">
                    <h3>Услуга2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="service_main">
                <a href="services.php?service=Услуга3#Услуга3">
                    <img src="../images/galery/Услуга3.jpg" alt="Услуга3" class="service_img float_left">
                </a>
                <div class="desc_servive">
                    <h3>Услуга3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

</main>