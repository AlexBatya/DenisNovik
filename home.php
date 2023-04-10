<?php
/*
Template Name: home 
*/
?>

<?php get_header(); ?>



    <main>
        <div class="main__body">
            <div class="main__body__container container">
                <section class = 'aboutMe'>
                    <h2>About me</h2>
                    <p>Hi, I'm Denis – UX/UI designer from Minsk. 
                    I'm interested in design and everything connected with it.</p>
                        <br> 
                    <p style = 'max-width: 450px;'>I'm studying at courses "Web and mobile design 
                    interfaces" in IT-Academy.</p> 
                        <br> 
                    <p style="max-width: 400px">Ready to implement excellent projects
                    with wonderful people.</p> 
                </section>
                <section class="scils">
                    <h2>Skills</h2>
                    <h6>I work in such programs as</h6>
                    <div class="apps">
                        <div class="app">
                            <div class="app__img">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/ps.svg" alt="">
                                <div class="app__name">Adobe <br> Photoshop</div>
                            </div>
                            <div class="stars">
                                <div class="star s1"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s2"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s3"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s4"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s5"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                            </div>
                        </div>
                        <div class="app">
                            <div class="app__img">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/ai.svg" alt="">
                                <div class="app__name">Adobe <br> Illustrator</div>
                            </div>
                            <div class="stars">
                                <div class="star s1"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s2"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s3"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s4"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s5"><img src="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                            </div>
                        </div>
                        <div class="app">
                            <div class="app__img">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/ae.svg" alt="">
                                <div class="app__name">Adobe <br> After Effects</div>
                            </div>
                            <div class="stars">
                                <div class="star s1"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s2"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s3"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s4"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s5"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                            </div>
                        </div>
                        <div class="app">
                            <div class="app__img">
                                <img src="<?php bloginfo('template_url') ?>/assets/img/figma.svg" alt="">
                                <div class="app__name">Figma</div>
                            </div>
                            <div class="stars">
                                <div class="star s1"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s2"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s3"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s4"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                                <div class="star s5"><img src ="<?php bloginfo('template_url') ?>/assets/img/star.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="portfolio">
                    <h2>Portfolio</h2>
                    <article class="workOne">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/portfolio.png" alt="">
                        <div class="workOne__name"><a href="#">Online fashion store - Homepage</a></div>
                    </article>
                    <article class="workOne">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/portfolio2.png" alt="">
                        <div class="workOne__name"><a href="#">Reebok Store - Concept</a></div>
                    </article>
                    <article class="workOne">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/portfolio3.png" alt="">
                        <div class="workOne__name"><a href="#">Braun Landing Page - Concept</a></div>
                    </article>
                </section>
            </div>
        </div>
    </main>


<?php get_footer(); ?>
<?php wp_footer(); ?>