<footer class="wrapper footer">
        <section class="footer-info">
            <div class="footer-navigation">
                <a href="#!" class="footer-logo">
                    <h2>СТРОИМ ДОМ</h2>
                    <p>ОФИЦИАЛЬНАЯ ГАРАНТИЯ</p>
                </a>

                <?php
                wp_nav_menu( array(
                    'theme_location'=>'footer',
                    'container'     => 'nav',
                    'container_class' => 'footer-menu',
                ) );
                ?>

            </div>

            <div class="footer-contacts">
                <a href="#!" class="footer-contacts-vk">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_b_2737_26)">
                      <path d="M25.1217 3.33325H14.8967C5.55337 3.33325 3.33337 5.55492 3.33337 14.8783V25.1049C3.33337 34.4449 5.53837 36.6666 14.8784 36.6666H25.105C34.445 36.6666 36.6667 34.4616 36.6667 25.1216V14.8966C36.6667 5.55325 34.4617 3.33325 25.1217 3.33325ZM30.2434 27.1166H27.8117C26.8917 27.1166 26.615 26.3716 24.965 24.7216C23.525 23.3333 22.9167 23.1599 22.5517 23.1599C22.0484 23.1599 21.91 23.2983 21.91 23.9933V26.1799C21.91 26.7716 21.7184 27.1183 20.1734 27.1183C18.6742 27.0164 17.2206 26.5604 15.9319 25.7877C14.6432 25.015 13.5561 23.9476 12.76 22.6733C10.8706 20.3241 9.55675 17.5657 8.92337 14.6183C8.92337 14.2533 9.06171 13.9233 9.75671 13.9233H12.1884C12.8134 13.9233 13.0384 14.2016 13.2817 14.8433C14.4617 18.3166 16.475 21.3366 17.2917 21.3366C17.605 21.3366 17.7417 21.1982 17.7417 20.4166V16.8399C17.6384 15.2083 16.7717 15.0699 16.7717 14.4799C16.7828 14.3243 16.8542 14.1791 16.9705 14.0752C17.0869 13.9713 17.2392 13.9168 17.395 13.9233H21.215C21.7367 13.9233 21.91 14.1833 21.91 14.8083V19.6349C21.91 20.1566 22.135 20.3299 22.2917 20.3299C22.605 20.3299 22.8467 20.1566 23.42 19.5833C24.6515 18.0815 25.6576 16.4084 26.4067 14.6166C26.4838 14.4017 26.6287 14.2177 26.8197 14.0926C27.0107 13.9675 27.2372 13.908 27.465 13.9233H29.8967C30.625 13.9233 30.78 14.2883 30.625 14.8083C29.7409 16.789 28.6469 18.6692 27.3617 20.4166C27.1 20.8166 26.995 21.0249 27.3617 21.4933C27.6034 21.8583 28.455 22.5699 29.0284 23.2466C29.8612 24.0779 30.5531 25.0394 31.0767 26.0933C31.285 26.7699 30.9367 27.1166 30.2434 27.1166Z" fill="#0077FF" />
                    </g>
                    <defs>
                      <filter id="filter0_b_2737_26" x="-42.2666" y="-42.2667" width="124.533" height="124.533" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="22.8" />
                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_2737_26" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_2737_26" result="shape" />
                      </filter>
                    </defs>
                  </svg>
                </a>
                  <div class="footer-contact-links">
                    <div class="footer-contact-links__phone">
                        <a href="tel:+78352772077">+7 (8352) 77-20-77</a>
                    </div>

                    <div class="footer-contact-links__callme">
                        <a href="#!">Заказать звонок</a>
                    </div>

                    <div class="footer-contact-links__callme">
                        <a href="mailto:mail@yandex.ru">E-mail: mail@yandex.ru</a>
                    </div>
                  </div>
            </div>
        </section>

        <section class="copyright">
            <p>© 2025 Компания ООО "Империал Тест"<br>Все права защищены.</p>
            <p><a href="#!">Политика конфиденциальности</a></p>
        </section>
    </footer>

    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_footer() ?>
</body>
</html>