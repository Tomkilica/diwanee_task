<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./resources/assets/css/home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="./resources/assets/js/home.js"></script>

        <title>Diwanee</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    <body>
        <div class="header">
            <div class="header__box">
            <img class="header__logo" src="./resources/assets/img/header__logo.png">
                <div class="nav--desc">
                    <ul class="header__nav header__nav--desc">
                        <li class="header__li header__li--desc"><a href="#onama">o nama</a></li>
                        <li class=" header__li  header__li--desc"><a href="#poslovi">poslovi</a></li>
                        <li class="header__li header__li--desc"><a href="#kontakt">kontakt</a></li>
                    </ul>
                </div>
            <div class="nav--tab">
                <div class="header-button">
                    <span class="span">
                        <i id="prva" class="bar bar--first first--nonactive"></i>
                        <i class="bar bar--mid"></i>
                        <i id="druga" class="bar bar--last last--nonactive"></i>
                    </span>
                </div>
                <ul class="header__nav header__nav--tab header__nav--up">
                    <li class="header__li header__li--tab-first header__li--tab"><a href="#onama">o nama</a></li>
                    <li class=" header__li header__li--tab-mid header__li--tab"><a href="#poslovi">poslovi</a></li>
                    <li class="header__li header__li--tab-last header__li--tab"><a href="#kontakt">kontakt</a></li>
                    <div class="header__social">
                        <p class="follow">pratite nas</p>
                        <i class="fa fa-twitter header__fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook header__fa-facebook" aria-hidden="true"></i>
                    </div>
                </ul>
            </div>
            </div>
        </div>
        <div class="hero">
            <img class="hero__img" src="./resources/assets/img/hero.png">
            <img class="hero__img--tab" src="./resources/assets/img/her-tablet.png">
            <img class="hero__img--mob" src="./resources/assets/img/hero-mob.png">
            <h1 class="hero__title">DIWANEE SERBIA</h1>
            <div class="dash dash--absolute"></div>
            <p class="hero__text">Digital Media Agency always looking for motivated,<br> multi-talented,
                        and organized people to join our<br> diverse team.</p>
        </div>
        <div class="services">
            <div class="services__box">
                <img class="services__img" src="./resources/assets/img/development.png">
                <p class="services__title">DEVELOPMENT</p>
                <div class="services__dash"></div>
                <p class="services__text">Front-end Developers play a critical role in most projects at Code and Theory.
                They are actively involved throughout the project lifecycle,
                    often times starting with rapid prototypes early in the design phase. </p>
            </div>
            <div class="services__box services__box--grey">
                <img class="services__img" src="./resources/assets/img/web.png">
                <p class="services__title">WEB & UI DESIGN</p>
                <div class="services__dash services__dash--grey"></div>
                <p class="services__text">Front-end Developers play a critical role in most projects at Code and Theory.
                    They are actively involved throughout the project lifecycle,
                    often times starting with rapid prototypes early in the design phase. </p>
            </div>
            <div class="services__box">
                <img class="services__img" src="./resources/assets/img/teamwork.png">
                <p class="services__title">WORK IN TEAM</p>
                <div class="services__dash"></div>
                <p class="services__text">Front-end Developers play a critical role in most projects at Code and Theory.
                    They are actively involved throughout the project lifecycle,
                    often times starting with rapid prototypes early in the design phase. </p>
            </div>
        </div>
        <div id="poslovi" class="jobs">
                <p class="jobs__subtitle">otvorene pozicije</p>
                <p class="jobs__title title">poslovi</p>
                <div class="dash dash--relative"></div>
                <p class="jobs__desc">We are always looking for motivated, multi-talented, and organized<br>
                    people to join our diverse team.</p>
                <div class="position position--grey">
                    <div class="position__box">
                        <p class="position__title">FRONT-END DEVELOPER</p>
                        <p class="position__desc">Trazimo Front End Developera sa odlicnim poznavanjem i
                            iskustvom vise od godinu dana u Drupalu.</p>
                         <a class="position__btn position__btn-mob" href="">prijavi se</a>
                        <div class="position__tech position__tech--mob">
                            <div class="position__tech__item position__tech__item--mob">#HTML</div>
                            <div class="position__tech__item position__tech__item--mob">#CSS</div>
                            <div class="position__tech__item position__tech__item--mob">#JavaScript</div>
                        </div>
                    </div>
                 </div>
            <div class="position">
                <div class="position__box">
                    <p class="position__title">PROJECT MANAGER</p>
                    <p class="position__desc">Trazimo Project Managera sa odlicnim organizacionim sposobnostima i
                        iskustvom vodjenja digital projekata...</p>
                    <a class="position__btn position__btn-mob" href="">prijavi se</a>
                    <div class="position__tech position__tech--mob">
                        <div class="position__tech__item position__tech__item--mob">#HTML</div>
                        <div class="position__tech__item position__tech__item--mob">#CSS</div>
                        <div class="position__tech__item position__tech__item--mob">#Balsamiq</div>
                        <div class="position__tech__item position__tech__item--mob">#UXpin</div>
                    </div>
                </div>
            </div>
            <div class="position position--grey">
                <div class="position__box">
                    <p class="position__title">UX/UI DESIGNER</p>
                    <p class="position__desc">Ako si kreativan i volis da radis u timu, posedujes visegodisnje iskustvo
                        iz oblasti digital dizajna, ux/ui...</p>
                    <a class="position__btn position__btn-mob" href="">prijavi se</a>
                    <div class="position__tech position__tech--mob">
                        <div class="position__tech__item position__tech__item--mob">#Sketch</div>
                        <div class="position__tech__item position__tech__item--mob">#AdobeXD</div>
                        <div class="position__tech__item position__tech__item--mob">#Photoshop</div>
                        <div class="position__tech__item position__tech__item--mob">#Balsamiq</div>
                    </div>
                </div>
            </div>
            <a class="load-more" href="">učitaj još pozicija</a>
        </div>
        <div id="onama" class="about">
            <p class="about__heading">DIWANEE BEOGRAD</p>
            <p class="about__title title">DIGITAL MEDIA COMPANY</p>
            <div class="dash dash--relative"></div>
            <p class="about__text">Diwanee je digitalna medijska kompanija, okrenuta velikoj ženskoj publici na Bliskom istoku.
                Naša kompanija stvara i distribuira originalan, visokokvalitetan i pouzdan sadržaj.
                Diwanee je takođe partner sa YouTube-om, i zajedno smo pokrenuli kanal
                nudeći na taj način sve vrste bogatog video sadržaja za arapske žene širom sveta. </p>
            <p class="about__text">Radimo sa velikim brojem brendova radi povećanja angažovanja, a sve u digitalnom prostoru.
                Diwanee je partner i sa velikim regionalnim vlasnicima medija,
                kako bismo upravljali svojom digitalnom prisutnošću.</p>
        </div>
        <div class="social">
            <p class="social__title">pratite nas</p>
            <div class="social__box">
                <img class="social__icon social__icon--left" src="./resources/assets/img/twiter.png">
                 <img class="social__icon" src="./resources/assets/img/fb.png">
            </div>
        </div>
        <div id="kontakt" class="footer">
            <div class="footer__box">
                <div class="footer__item">
                    <div class="item__box item__box--first">
                        <div class="item__title">
                            <img class="item__pin" src="./resources/assets/img/pin.png">
                            <p class="item_city">dubai</p>
                        </div>
                        <p class="item__info">Office Park, Building Block A</p>
                        <p class="item__info">Units A301-A302</p>
                        <p class="item__info">Dubai Internet City</p>
                        <p class="item__info">T: 971 4 - 434 7147</p>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="item__box item__box--middle">
                        <div class="item__title">
                            <img class="item__pin" src="./resources/assets/img/pin.png">
                            <p class="item_city">beirut</p>
                        </div>
                        <p class="item__info">Dora, Seaside Road,</p>
                        <p class="item__info">BCP bldg (Facing Demco Steel)</p>
                        <p class="item__info">Mobile: 961 76 - 866 700</p>
                        <p class="item__info">Fax: 961 1 - 244 846</p>
                    </div>
                </div>
                <div class="footer__item">
                    <div class="item__box item__box--last">
                        <div class="item__title">
                            <img class="item__pin" src="./resources/assets/img/pin.png">
                            <p class="item_city">belgrade</p>
                        </div>
                        <p class="item__info">Resavska 33,</p>
                        <p class="item__info">11000 Beograd</p>
                        <p class="item__info">Tel: +381 11 - 3340 117</p>
                    </div>
                </div>
            </div>
            <div class="copyrights__box copyrights__box--last copyrights__box--mobile">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <p class="copyrights__text copyrights__text--web">www.diwanee.com</p>
            </div>
            <div class="copyrights">
                <div class="copyrights__box copyrights__box--first">
                    <p class="copyrights__text copyrights__text--copy copy--desc">COPYRIGHT © 2015  DIWANEEE SERBIA ALL RIGHTS RESERVED</p>
                    <p class="copyrights__text copyrights__text--copy copy--mob">COPYRIGHT © 2015  DIWANEEE SERBIA</p>
                </div>

                <div class="copyrights__box copyrights__box--last copyrights__box--desc">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <p class="copyrights__text copyrights__text--web">www.diwanee.com</p>
                </div>
            </div>
        </div>
    </body>
</html>