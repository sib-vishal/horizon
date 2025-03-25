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
                            About Horizon Architects: <span class=" fontWeight700 text_primary_light">Interior Solutions
                                Provider</span>
                        </h1>

                        <p class="mt-4 text-white aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100"
                            data-aos-offset="20">
                            Innovative Spaces, Timeless Design – Shaping Skylines with Excellence.
                        </p>
                        <div class="mt-5">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section>
            <div class="containerFull overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-lg-8 pe-lg-5">
                        <h4 class="fontHeading fontWeight700 heading mt-4  aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-offset="50">
                            About Us
                        </h4>

                        <p class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="50">
                            Horizon Architects, founded by Hemal Shah, a graduate of Rachna Sansad’s Academy of
                            Architecture (1999), specializes in delivering innovative architectural solutions to complex
                            planning and regulatory challenges. With a legacy of collaboration with design icons like
                            Hafeez Contractor and Jayesh Shah of JK and RI, Hemal’s experience as an Associate Architect
                            at Sanjay Puri Architects helped shape the firm’s vision of holistic architectural
                            excellence. The firm has transformed spaces across Mumbai, Thane, and beyond, with a diverse
                            portfolio spanning residential, commercial, office, institutional, religious, and interior
                            projects.

                        </p>
                        <p class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="50">
                            With over 100 projects completed in a decade, Horizon Architects stays ahead of emerging
                            trends, ensuring meticulous planning, efficient FSI utilization, and Vastu compliance. The
                            firm has redefined complex SRA, MHADA, and narrow-plot projects by providing seamless design
                            and liaison services. In 2024, Horizon expanded its work with bus terminal and resort
                            projects in Prayagraj, Lucknow, and Lonavala. Through a dedicated team and valued clients,
                            Horizon Architects continues to create functional, innovative, and aesthetically impactful
                            spaces that push the boundaries of architectural excellence

                        </p>

                    </div>
                    <div class="col-lg-4">
                        <div class="aboutUsMission">
                            <div class="aboutUsMVV" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="50">
                                <div class="iconsBackground"><img class="abouticonimg"
                                        src="images/icons/AboutUs_Vision.webp" alt="Our Vision">
                                </div>
                                <div>
                                    <h3>Our Vision</h3>
                                    <p>Sustainability, innovative solutions and superior business performance.</p>
                                </div>
                            </div>
                            <div class="aboutUsMVV" data-aos="fade-left" data-aos-duration="1000" data-aos-dely="10"
                                data-aos-offset="50">
                                <div class="iconsBackground"><img class="abouticonimg"
                                        src="images/icons/AboutUs_Mission.webp" alt="Our Mission"></div>
                                <div>
                                    <h3>Our Mission</h3>
                                    <p>Unlock experiences that engage customers and build loyalty.</p>
                                </div>
                            </div>
                            <div class="aboutUsMVV" data-aos="fade-left" data-aos-duration="1000" data-aos-dely="20"
                                data-aos-offset="50">
                                <div class="iconsBackground"><img class="abouticonimg"
                                        src="images/icons/AboutUs_Values.png" alt="Our Values"></div>
                                <div>
                                    <h3>Our Values</h3>
                                    <p>Integrity, Trust, Respect, Customer Centricity, Environment Stewardship</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="containerFull">
                <video id="videoAbout" class="mx-auto d-block" muted playsinline
                    src="https://videocdn.cdnpk.net/videos/6a9badbb-a5d0-5820-bfdb-1a02a6fbdc37/horizontal/previews/watermarked/large.mp4">
                </video>

            </div>
            <div class="containerFull">

                <div class="row justify-content-center py-5">
                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading">10K</h4>
                            <p>Happy Customers</p>

                        </div>

                    </div>

                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading">30+</h4>
                            <p>Cities</p>

                        </div>

                    </div>

                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading">500+</h4>
                            <p>Design Experts</p>

                        </div>

                    </div>

                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading">3.5K+</h4>
                            <p>Completed Projects</p>

                        </div>

                    </div>

                    <div class="col-lg-2  text-center">
                        <div class="item_states_interior">
                            <h4 class="heading fontHeading">60+</h4>
                            <p>Quality Checks</p>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section>
            <div class="containerFull overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-lg-6 pe-lg-5">
                        <h4 class="fontHeading fontWeight700 heading mt-4  aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-offset="10">
                            Approach Towards Design
                        </h4>

                        <p class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="10">
                            Systematic and programmed approach is followed using project management techniques from
                            design to execution. We also focus on Planning and detailing as per Vaastu i.e., Replanning
                            of layouts, micro and macro level Vastu inputs, Strict and accurate checking of sites,
                            liasoning inputs to finishing accuracy.
                        </p>
                        <div class="ratioBlock mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="10">
                            <div class="itemRatio">
                                <div class="d-flex align-items-center justify-content-between fontHeading">
                                    <p class="title">Designing & Planning</p>
                                    <p class="title">95%</p>
                                </div>
                                <div class="itemBar">
                                    <div class="fillBar" style="width:95%"></div>
                                </div>
                            </div>
                            <div class="itemRatio">
                                <div class="d-flex align-items-center justify-content-between fontHeading">
                                    <p class="title">Execution</p>
                                    <p class="title">90%</p>
                                </div>
                                <div class="itemBar">
                                    <div class="fillBar" style="width:90%"></div>
                                </div>
                            </div>
                            <div class="itemRatio">
                                <div class="d-flex align-items-center justify-content-between fontHeading">
                                    <p class="title">Time Taken</p>
                                    <p class="title">20%</p>
                                </div>
                                <div class="itemBar">
                                    <div class="fillBar" style="width:20%"></div>
                                </div>
                            </div>

                        </div>




                    </div>
                    <div class="col-lg-6 ">
                        <img class="w-100" src="images/about-design-approach.jpg" alt="" data-aos="fade-left"
                            data-aos-duration="1000" data-aos-offset="10" />


                    </div>

                </div>

            </div>
        </section>
        <div class="our_clients">
            <div class="containerFull">
                <?php
                $images = [
                    "laxmi.jpg",
                    "atul.jpg",
                    "logo7.jpg",
                    "logo10.jpg",
                    "logo9.jpg",
                    "logo8.jpg",
                    "logo6.jpg",
                    "logo4.jpg",
                    "logo1.jpg",
                    "woodstock.jpg",
                    "usd.jpg",
                    "sejal.jpg",
                    "s.jpg",
                    "royal.jpg",
                    "nitya.jpg",
                    "modis.jpg",
                    "mehta.jpg",
                    "mark.jpg",
                    "manisha.jpg"
                ];
                ?>


                <div class=" swiper client_slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($images as $image): ?>
                            <div class="swiper-slide">

                                <div class="img_box">

                                    <img src="images/clients/<?= $image; ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->


                </div>

            </div>

        </div>



        <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src=" https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js">
    </script>
    <script>
        var swiper5 = new Swiper(".client_slider", {
            spaceBetween: 20,
            slidesPerView: 6,
            // centeredSlides: true,

            autoplay: {
                delay: 0,


                disableOnInteraction: false,
            },
            speed: 3000,
            loop: true,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
            navigation: false
        });
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.fromTo("#videoAbout",
            { width: "60%", opacity: .5 },
            {
                width: "100%",
                opacity: 1,
                duration: 5, // Smooth transition time
                ease: "power2.out",
                scrollTrigger: {
                    trigger: "#videoAbout",
                    start: "top 80%",
                    end: "top 50%",
                    scrub: 2.3,
                    onEnter: () => {
                        let video = document.getElementById("videoAbout");
                        if (video.paused) {
                            video.play().catch(error => console.log("Autoplay blocked:", error));
                        }
                    },
                    onLeaveBack: () => {
                        let video = document.getElementById("videoAbout");
                        video.pause();
                    },
                }
            }
        );
    </script>



</body>

</html>