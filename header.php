<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denis Novik</title>
    <?php wp_head(); ?>
</head>
<body>

    <div class='menu'>
        <div class='menu__shell animate__animated'></div>
        <div class='menu__body animate__animated'>
            <article class='menu__body__container'>
                <div class="language"><span>RU </span> | <span>ENG</span> </div>
                <div class="menu__body__container__close">X</div>
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About me</a></li>
                            <li><a href="#">Skills</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
            </article>
        </div>
    </div>

    <header>
        <div class="header__body">
            <div class="header__body__container container">
                <article class="head">
                    <nav>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About me</a></li>
                            <li><a href="#">Skills</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </article>
                <hr> <!-- Это линия разделяющая head и img --> 
                <article class="logo">
                    <div class="name">Denis <br> Novik</div>
                    <div class="discription">UX | UI designer <br> 24 years old, Minsk</div>
                    <div class="language"><span>RU </span> | <span>ENG</span> </div>
                    <div class="menu__open">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/menu.svg" alt="">
                    </div>
                </article>
                <article class="header__img">
                    <img class = 'novik__img' src="<?php bloginfo('template_url') ?>/assets/img/novik.png" alt="">
                    <img class = 'novik__img2' src="<?php bloginfo('template_url') ?>/assets/img/novik2.png" alt="">
                </article>
            </div>
        </div>
    </header>