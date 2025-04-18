<?php require_once './header.php'; ?>
<div data-scroll-container="" data-scroll-section-id="section0" data-scroll-section-inview=""
    style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1; pointer-events: all;">
    <div class="txt-cont" style="padding-top: 100px; text-align: center; width: 100%;">
        <a href="/img/about/portfolio.pdf" download class="download-button">
            Download Portfolio
        </a>

        <style>
            .download-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: rgb(194, 175, 10);
                color: white;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s;
                margin-bottom: 50px;
            }

            .download-button:hover {
                background-color: rgb(155, 143, 33);
            }
        </style>
        <li class="splide__slide" id="splide01-slide01" aria-hidden="true" tabindex="-1"
            style="width: 100%; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s; display: flex; justify-content: center;">
            <img src="./img/about/about.jpg" style="width: 100%; height: auto; object-fit: cover;" alt="">
        </li>
    </div>
    <div data-controller="quienes-somos">
        <!-- <div class="img-ani" style="align-items: center;"><img src="./3.svg" alt="Alibaba Frutan" style="width:300px;">
    </div> -->

        <div class="banner-cont">
            <div class="splide splide--fade splide--ltr splide--draggable is-active" id="splide01"
                style="visibility: visible;">
                <div class="splide__track" id="splide01-track">
                    <ul class="splide__list" id="splide01-list">
                        <li class="splide__slide" id="splide01-slide01" aria-hidden="true" tabindex="-1"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;">
                            <img src="./img/AboutImg/bio.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide" id="splide01-slide02"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="true" tabindex="-1">
                            <img src="./img/AboutImg/biooo.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide is-active is-visible" id="splide01-slide03"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="false" tabindex="0">
                            <img src="./img/AboutImg/bio.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide" id="splide01-slide04"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="true" tabindex="-1">
                            <img src="./img/motionEffect/3.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide" id="splide01-slide05"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="true" tabindex="-1">
                            <img src="./img/motionEffect/4.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide" id="splide01-slide06"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="true" tabindex="-1">
                            <img src="./img/motionEffect/5.jpg" width="100%" alt="">
                        </li>
                        <li class="splide__slide" id="splide01-slide07"
                            style="width: 1366px; transition: opacity 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;"
                            aria-hidden="true" tabindex="-1">
                            <img src="./img/motionEffect/1.jpg" width="100%" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './footer.php'; ?>