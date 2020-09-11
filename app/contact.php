<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/libs.min.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <header class="header header__contactpage">
        <div class="container">
            <div class="header__top">
                <a class="logo" href="#">
                    <img src="images/logo.svg" alt="">
                </a>
                <div class="menu__btn">
                    <div class="menu__btn-line"></div>
                    <div class="menu__btn-line"></div>
                    <div class="menu__btn-line"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="contact__banner" style="background-image: url(images/contact-banner.jpg);">
        <div class="container">
            <div class="contact__banner-title">
                Contact Us
            </div>
            <div class="contact__banner-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact__inner">
                <div class="contact__info">
                    <div class="contact__info-img">
                        <img src="images/contact-img.svg" alt="">
                    </div>
                    <div class="contact__info-item">
                        <div class="contact__info-item__title">
                            ADDRESS
                        </div>
                        <div class="contact__info-item__text">
                            Id convallis placerat sit sed duis id amet volutpat quam a, pharetra.
                        </div>
                    </div>
                    <div class="contact__info-item">
                        <div class="contact__info-item__title">
                            PHONE
                        </div>
                        <a class="contact__info-item__link link__phone" href="tel:+6281273134321">+62-812-7313-4321</a>
                        <a class="contact__info-item__link link__phone" href="tel:+628170001234">+62-817-000-1234</a>
                    </div>
                    <div class="contact__info-item">
                        <div class="contact__info-item__title">
                            ONLINE SERVICE
                        </div>
                        <a class="contact__info-item__link link__site" href="http://www.afrianska.com/">www.afrianska.com</a>
                        <a class="contact__info-item__link link__mail" href="mailto:hello.afrian@gmail.com">hello.afrian@gmail.com</a>
                    </div>
                </div>
                <form class="contact__form">
                    <div class="contact__form-title">
                        SEND US MESSAGE
                    </div>
                    <div class="contact__form-item">
                        <label>Full Name</label>
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="contact__form-item">
                        <label>Email</label>
                        <input type="text" placeholder="Your Email" required>
                    </div>
                    <div class="contact__form-item">
                        <label>Message</label>
                        <textarea placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit">SUBMIT</button>
                </form>
            </div>
            <div class="contact__map">
                <img src="images/map.jpg" alt="">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.15276746552!2d-74.03927143600023!3d40.759170360657535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2z0JzQsNC90YXRjdGC0YLQtdC9LCDQndGM0Y4t0JnQvtGA0LosINCh0KjQkA!5e0!3m2!1sru!2sru!4v1592374982527!5m2!1sru!2sru"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>
        </div>
    </section>

    <footer class="footer__wrapper footer__wrapper-contactpage">
        <div class="footer">
            <div class="container footer__container">
                <div class="footer__top">
                    <div class="footer__work">
                        <div class="footer__work-title">
                            Interested to work with our team?
                        </div>
                        <p class="footer__work-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <a class="footer__btn" data-fancybox data-src="#modal" href="javascript:;">
                        Let’s Talk
                    </a>
                </div>
            </div>
            <div class="footer__border"></div>
            <div class="container footer__container">
                <div class="footer__bottom">
                    <div class="footer__item footer__contact">
                        <div class="footer__company">
                            <a class="logo" href="#">
                                <img src="images/footer-logo.svg" alt="">
                            </a>
                            <a class="footer__company-name" href="#">
                                Afrianska
                            </a>
                        </div>
                        <div class="footer__contact-item address">
                            <span>A.</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div class="footer__contact-item">
                            <span>T.</span>
                            <a href="tel:+6281273134321">+62-812-7313-4321</a>
                        </div>
                        <div class="footer__contact-item">
                            <span>E</span>
                            <a href="mailto:hello.afrian@gmail.com">hello.afrian@gmail.com</a>
                        </div>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            About US
                        </div>
                        <ul>
                            <li><a class="footer__item-link" href="#">About</a></li>
                            <li><a class="footer__item-link" href="#">What We Do</a></li>
                            <li><a class="footer__item-link" href="#">Project</a></li>
                            <li><a class="footer__item-link" href="#">How It Work With Us</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <div class="footer__item-title">
                            Follow US
                        </div>
                        <ul>
                            <li><a class="footer__item-link" href="#">Instagram</a></li>
                            <li><a class="footer__item-link" href="#">Facebook</a></li>
                            <li><a class="footer__item-link" href="#">LinkedIn</a></li>
                            <li><a class="footer__item-link" href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__copy">
                    2019 © Afrianska. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <div class="contact__form-modal" style="display: none;" id="modal">
        <form class="contact__form contact__form-popup" method="post" id="ajax_form" action="">
            <div class="contact__form-title">
                SEND US MESSAGE
            </div>
            <div class="contact__form-item">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="contact__form-item">
                <label>Email</label>
                <input type="text" name="mail" placeholder="Your Email" required>
            </div>
            <div class="contact__form-item">
                <label>Message</label>
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
            <button class="btn_send-form" id="btn_send" type="submit">SUBMIT</button>
            <div class="result_form-modal" id="result_form"></div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>    
    <script src="js/ajax.js"></script>
    <script src="js/main.js"></script>
</body>

</html>