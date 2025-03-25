<?php $page = 'home'; ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Horizon Architects - Welcome to Our Website </title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/splitting@1.0.5/dist/splitting-cells.css" />
    <style>
        .header {
            position: relative;
            /* background-color: #fff !important;
            z-index: 2; */
        }



        .header .menu-links ul li {
            & a {
                padding: 35px 0;
                color: #000;
                font-weight: 600;
            }
        }
    </style>

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <div class="banner2">

            <div class="banner-wrapper">

                <div class="banner-text d-flex  ">
                    <div class="inner_content">

                        <h1 class="fontHeading large_heading  text-white  mt-5 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000">
                            Transform Your Space: Affordable &amp; Elegant <span
                                class=" fontWeight700 text_primary_light">Design Solutions</span>
                        </h1>

                        <p class="mt-4 text-white aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-offset="20">
                            Residential | Commercial | Mixed Use
                        </p>
                        <div class="mt-5">



                        </div>
                    </div>
                </div>
                <!-- <div class="experience">
                    14+ Years of Excellence
                </div> -->
            </div>
        </div>
        <div class="containerFull">
            <?php

            $contentFragments = [
                [
                    'title' => '10K',
                    'description' => 'Happy Customers'
                ],
                [
                    'title' => '30+',
                    'description' => 'Cities'
                ],
                [
                    'title' => '500+',
                    'description' => 'Design Experts'
                ],
                [
                    'title' => '3.5K+',
                    'description' => 'Completed Projects'
                ],
                [
                    'title' => '60+',
                    'description' => 'Quality Checks'
                ]
            ];

            ?>

            <div class="row justify-content-center py-5">
                <?php foreach ($contentFragments as $fragment): ?>
                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading"><?php echo $fragment['title']; ?></h4>
                            <p><?php echo $fragment['description']; ?></p>

                        </div>

                    </div>

                <?php endforeach; ?>
            </div>

        </div>

        <section class="">
            <div class="containerFull overflow-hidden">
                <h5 class="fontHeading fonmtWeight600 text-center text_dark_gold " data-aos="flip-up"
                    data-aos-duration="1000">
                    Interior Services
                </h5>
                <h4 class="fontHeading fontWeight700 heading text-center mt-3 " data-aos="fade-up"
                    data-aos-duration="1000">

                    Discover the world of interior design
                </h4>
                <div class="row mt-5 pt-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="item_interior_services">
                            <div class="img_box">
                                <img src="images/interior/commercial.jpg" alt="">
                            </div>

                            <div class="content">
                                <div class="content_inner">

                                    <h4 class="fontHeading">
                                        Residential
                                    </h4>
                                    <p class="mt-3">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, deserunt natus eos
                                        beatae odit esse sint exercitationem animi repellat, delectus possimus
                                        consequuntur sit placeat quod mollitia reprehenderit distinctio totam.
                                        Repudiandae!
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mt-5" data-aos="fade-up" data-aos-duration="1100">
                        <div class="item_interior_services">
                            <div class="img_box">
                                <img src="images/interior/commercial.jpg" alt="">
                            </div>

                            <div class="content">
                                <div class="content_inner">

                                    <h4 class="fontHeading">
                                        Commercial
                                    </h4>
                                    <p class="mt-3">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, deserunt natus eos
                                        beatae odit esse sint exercitationem animi repellat, delectus possimus
                                        consequuntur sit placeat quod mollitia reprehenderit distinctio totam.
                                        Repudiandae!
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="item_interior_services">
                            <div class="img_box">
                                <img src="images/interior/commercial.jpg" alt="">
                            </div>

                            <div class="content">
                                <div class="content_inner">

                                    <h4 class="fontHeading">
                                        Residential
                                    </h4>
                                    <p class="mt-3">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, deserunt natus eos
                                        beatae odit esse sint exercitationem animi repellat, delectus possimus
                                        consequuntur sit placeat quod mollitia reprehenderit distinctio totam.
                                        Repudiandae!
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </section>

        <!--  -->
        <section class="whyChoose interior">
            <div class="containerFull">
                <h5 class="fontHeading text_dark_gold title text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    Why Choose Us
                </h5>
                <h4 class="fontHeading fontWeight700 heading mt-4 text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    Why Choose Horizon Architects
                </h4>
                <div class="row mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1050">
                    <div class="col-lg-5 pe-5">
                        <section class="experience">
                            <div class="containerFull">
                                <div class="">

                                    <div class="item_why mb-5 aos-init aos-animate" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <div class="icon">
                                            <img src="images/icons/design.svg" alt="image not found">
                                        </div>
                                        <div class="content">

                                            <h4 class="fontHeading  fontWeight700">Modern Design</h4>
                                            <p class="mt-2">Decoral is one of the most popular for those who want to
                                                explore the</p>
                                        </div>
                                    </div>


                                    <div class="item_why mb-5 aos-init" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="icon">
                                            <img src="images/icons/expert.svg" alt="image not found">
                                        </div>
                                        <div class="content">

                                            <h4 class="fontHeading  fontWeight700">Expert Team</h4>
                                            <p class="mt-2">Decoral is one of the most popular for those who want to
                                                explore the</p>
                                        </div>
                                    </div>


                                    <div class="item_why mb-5 aos-init" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="icon">
                                            <img src="images/icons/price.svg" alt="image not found">
                                        </div>
                                        <div class="content">

                                            <h4 class="fontHeading  fontWeight700">Reasonable Price</h4>
                                            <p class="mt-2">Decoral is one of the most popular for those who want to
                                                explore the</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>


                    </div>
                    <div class="col-lg-7">
                        <div class="row  why_images">
                            <div class="col-lg-6">
                                <img class="w-100 img_1 "
                                    src="https://html.rrdevs.net/artima/assets/imgs/why-choose-us/why-choose-us-1.jpg"
                                    alt="">

                            </div>
                            <div class="col-lg-6">
                                <img class="img_2"
                                    src="https://html.rrdevs.net/artima/assets/imgs/why-choose-us/why-choose-us-2.jpg"
                                    alt="">
                                <img class="mt-4 img_3"
                                    src="https://html.rrdevs.net/artima/assets/imgs/why-choose-us/why-choose-us-3.jpg"
                                    alt="">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!--  -->


        <section>
            <div class="containerFull">
                <h5 class="fontHeading text_dark_gold title text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    projects
                </h5>
                <h4 class="fontHeading fontWeight700 heading mt-4 text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    See Our Work
                </h4>
                <div class="mt-5 ">

                    <?php
                    $images = [
                        "1.png",
                        "2.png",
                        "3.jpg",
                        "4.jpg",
                        "5.jpg",
                        "6.jpg",
                        "7.jpg",
                        "8.jpg",
                        "9.jpg"
                    ];
                    ?>

                    <?php foreach ($images as $image): ?>
                        <div class="tiler" data-aos="fade-up" data-aos-offset="50" >
                            <a href="images/interior/projects/<?= $image; ?>" data-fancybox="gallery">
                                <img src="images/interior/projects/<?= $image; ?>"
                                    alt="images/interior/projects/<?= $image; ?>" />
                            </a>
                        </div>
                    <?php endforeach; ?>


                </div>

            </div>
        </section>

        <!--  -->
        <section class="testimonials">
            <div class="containerFull">
                <h5 class="fontHeading text_dark_gold title text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    Testimonials
                </h5>
                <h4 class="fontHeading fontWeight700 heading mt-4 text-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1000">
                    Words of Appreciation
                </h4>
                <div class="swiper testimonial-slider2 mt-5">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-info">
                                <p class="testimonial-text">
                                    “Project journey with Beautiful Homes Service has been quite smooth and
                                    professional. We are very much satisfied with the final outcome.”
                                </p>
                                <div class="testimonial-profile">
                                    <div class="testimonial-user-img">
                                        <img src="//static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/user-icon.png"
                                            alt="user-icon" class="lozad">
                                    </div>
                                    <div class="testimonial-user-detail">
                                        <h3>Mr. Charles Selwyn</h3>
                                        <span>Wall Of Fame</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="swiper-slide testimonial-card ">
                            <div class="testimonial-video-category">
                                <video class="testimonial-clip" id="video-clips" preload="none"
                                    poster="//static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/shweta.png">
                                    <source
                                        src="//static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/shweta-testimonial.mp4"
                                        type="video/mp4">
                                </video>

                                <button class="playbtn">
                                    <img src="images/icons/play-button.png" alt="">
                                </button>

                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="swiper-slide testimonial-card ">
                            <div class="testimonial-video-category">
                                <video class="testimonial-clip" id="video-clips" preload="none"
                                    poster="https://static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/anuj.png">
                                    <source
                                        src="https://static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/anuj-testimonials.mp4"
                                        type="video/mp4">
                                </video>

                                <button class="playbtn">
                                    <img src="images/icons/play-button.png" alt="">
                                </button>

                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-info">
                                <p class="testimonial-text">
                                    “Our renovation project was handled with care and expertise. We couldn't be
                                    happier!”
                                </p>
                                <div class="testimonial-profile">
                                    <div class="testimonial-user-img">
                                        <img src="//static.asianpaints.com/content/dam/asianpaintsbeautifulhomes/ids-testimonial/user-icon.png"
                                            alt="user-icon" class="lozad">
                                    </div>
                                    <div class="testimonial-user-detail">
                                        <h3>Mr. Rohit Mehta</h3>
                                        <span>Architect</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Swiper Navigation & Pagination -->
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </section>
        <!--  -->





    </div>



    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <script src="https://unpkg.com/splitting@1.0.5/dist/splitting.js">
    </script>
    <script src="https://codepen.io/shshaw/pen/5eb6d4e9bfd78e3911ed9d0d0dfce69b.js">
    </script>
    <script>
        var swiper = new Swiper(".testimonial-slider2", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Splitting({
                target: '.tiler',
                by: 'cells',
                rows: 3,
                columns: 3,
                image: true
            });
            const videos = document.querySelectorAll(".testimonial-clip");
            const buttons = document.querySelectorAll(".playbtn");

            buttons.forEach((button, index) => {
                button.addEventListener("click", function () {
                    const video = videos[index];

                    if (video.paused) {
                        video.play();
                        button.style.display = "none";
                    } else {
                        video.pause();
                        button.style.display = "block";
                    }
                });


                videos[index].addEventListener("play", function () {
                    buttons[index].style.display = "none";
                });


                videos[index].addEventListener("pause", function () {
                    buttons[index].style.display = "block";
                });

                videos[index].addEventListener("ended", function () {
                    buttons[index].style.display = "block";
                });
            });



        });
    </script>

</body>

</html>