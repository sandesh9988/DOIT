<?php
get_header();
the_post();
?>
<main class="page__home">
    <section class="hero">
        <div class="container">
            <div class="slickslider">
                <div class="slider">
                    <div class="hero__content">
                        <h1 class="hero__heading">Launching Mobile Application
                        </h1>
                        <p>Honorable prime minister, K.P Sharma Oli Launching Mobile Application Local Agencies) (Dhulikhel) prepared by Department of Information Technology on August 03, 2018</p>
                        <div class="hero__slider">
                            <svg class="icon icon-leftArrow">
                                <use xlink:href="#icon-leftArrow"></use>
                            </svg>
                            <svg class="icon icon-rightArrow">
                                <use xlink:href="#icon-rightArrow"></use>
                            </svg>
                        </div>
                    </div>
                    <figure class="hero__media">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/kpbaa.jpg" alt="image of kp oli" />
                    </figure>
                </div>
                <div class="slider">
                    <div class="hero__content">
                        <h1 class="hero__heading">Launching Mobile Application
                        </h1>
                        <p>Honorable prime minister, K.P Sharma Oli Launching Mobile Application Local Agencies) (Dhulikhel) prepared by Department of Information Technology on August 03, 2018</p>
                        <div class="hero__slider">
                            <svg class="icon icon-leftArrow">
                                <use xlink:href="#icon-leftArrow"></use>
                            </svg>
                            <svg class="icon icon-rightArrow">
                                <use xlink:href="#icon-rightArrow"></use>
                            </svg>
                        </div>
                    </div>
                    <figure class="hero__media">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/kpbaa.jpg" alt="image of kp oli" />
                    </figure>
                </div>
                <div class="slider">
                    <div class="hero__content">
                        <h1 class="hero__heading">Launching Mobile Application
                        </h1>
                        <p>Honorable prime minister, K.P Sharma Oli Launching Mobile Application Local Agencies) (Dhulikhel) prepared by Department of Information Technology on August 03, 2018</p>
                        <div class="hero__slider">
                            <svg class="icon icon-leftArrow">
                                <use xlink:href="#icon-leftArrow"></use>
                            </svg>
                            <svg class="icon icon-rightArrow">
                                <use xlink:href="#icon-rightArrow"></use>
                            </svg>
                        </div>
                    </div>
                    <figure class="hero__media">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/kpbaa.jpg" alt="image of kp oli" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="post">
        <div class="container">
            <div class="post__left">
                <h2 class="post__heading">Latest Notices:</h2>
                <p>Information of Department of IT as per RTI Act Section 5(From Magh1 to End of Chaitra 2076)</p>
            </div>
            <div class="post__right">
                <div class="post__profile">
                    <figure class="post__image">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/profile1.jpg" alt="profile of a person" />
                    </figure>
                    <div class="post__profile-details">
                        <h3 class="post__profile-title">Prem Sharan Shrestha</h3>
                        <p>Director General</p>
                    </div>
                </div>
                <div class="post__profile">
                    <figure class="post__image post__image-alt">
                        <img src="<?php echo get_template_directory_uri() ?> /uploads/profile3.jpg" alt="profile of a person" />
                    </figure>
                    <div class="post__profile-details">
                        <h3 class="post__profile-title">Tej Kumar K.C.</h3>
                        <p>Information Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card">
        <div class="container">
            <div class="card__article">
                <figure class="card__media">
                    <img src="<?php echo get_template_directory_uri() ?> /uploads/block1.jpg" alt="image of a article" />
                </figure>
                <div class="card__content">
                    <h2 class="card__heading">IT Infrastructure</h2>
                    <p>Information and Communication Technology (ICT) together with Internet is making it possible to share vast amount of knowledge and information and …</p>
                    <div class="card__link">
                        <a href="#">Read More</a>
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </div>

                </div>
            </div>
            <div class="card__article">
                <figure class="card__media">
                    <img src="<?php echo get_template_directory_uri() ?> /uploads/block2.jpg" alt="image of a article" />
                </figure>
                <div class="card__content">
                    <h2 class="card__heading">Cyber Security Awareness</h2>
                    <p>Information and Communication Technology (ICT) together with Internet is making it possible to share vast amount of knowledge and information and …</p>
                    <div class="card__link">
                        <a href="#">Read More</a>
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>
                    </div>
                </div>

            </div>
            <div class="card__article">
                <figure class="card__media">
                    <img src="<?php echo get_template_directory_uri() ?> /uploads/block3.jpg" alt="image of a article" />
                </figure>
                <div class="card__content">
                    <h2 class="card__heading">E Governance</h2>
                    <p>Information and Communication Technology (ICT) together with Internet is making it possible to share vast amount of knowledge and information and …</p>
                    <div class="card__link">
                        <a href="#">Read More</a>
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-arrow"></use>
                        </svg>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include('modules/flex-content/flex-content.php') ?>
</main>
<?php get_footer(); ?>