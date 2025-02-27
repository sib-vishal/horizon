<?php $page = 'home';
?>
<?php

$services = [
    [
        "title" => "Architecture Design",
        "description" => "We offer holistic design services including architecture, interior design, site design, planning, and feasibility services.",
        "image" => "icon2-4-2.png"
    ],
    [
        "title" => "Urban Design",
        "description" => "Expertise on shaping character of the neighborhood, connecting places and people.",
        "image" => "icon1-4-2.png"
    ],
    [
        "title" => "Master Planning",
        "description" => "Specially skilled in planning, designing and construction of building projects. Development and implementation of master plans and layouts.",
        "image" => "icon3-4-2.png"
    ],
    [
        "title" => "Institutional",
        "description" => "Expertise in designing immersive institutional experiences integrating technology and various construction methods.",
        "image" => "icon4-2-2.png"
    ],
    [
        "title" => "Hospitality",
        "description" => "Designing and conceptualizing bespoke spaces that communicate a brand's message and curating a memorable space for the consumers.",
        "image" => "icon5-2-2.png"
    ],
    [
        "title" => "Interior Design",
        "description" => "Conceptualizing, creating and executing the interior environment that directly impacts the well-being of the consumers.",
        "image" => "icon6-2-2.png"
    ],
    [
        "title" => "Vastu Consultancy",
        "description" => "Fostering a connection between the science of construction and vedics with the design, we promote blissful living.",
        "image" => "icon2-4-2.png"
    ],
    [
        "title" => "Peer Review",
        "description" => "Consultancy, review, problem-solving of plans and designs is our forte.",
        "image" => "icon1-4-2.png"
    ],
    [
        "title" => "Landscape Design",
        "description" => "Advisory and expertise on the design, planning and creation of recreational spaces.",
        "image" => "icon3-4-2.png"
    ]
];

$experiences = [
    [
        "image" => "experience-1.svg",
        "title" => "Years Of Experience",
        "count" => 15
    ],
    [
        "image" => "experience-2.svg",
        "title" => "Success Projects",
        "count" => 600
    ],
    [
        "image" => "experience-3.svg",
        "title" => "Team Members",
        "count" => 40
    ],
    [
        "image" => "experience-4.svg",
        "title" => "Clients Satisfactions",
        "count" => 500
    ]
];

$whyChhose = [
    [
        'image' => 'design.svg',
        'title' => 'Modern Design',
        'description' => 'Decoral is one of the most popular for those who want to explore the'
    ],
    [
        'image' => 'expert.svg',
        'title' => 'Expert Team',
        'description' => 'Decoral is one of the most popular for those who want to explore the'
    ],
    [
        'image' => 'price.svg',
        'title' => 'Reasonable Price',
        'description' => 'Decoral is one of the most popular for those who want to explore the'
    ]
];

$teamMembers = [
    [
        'image' => 'https://html.rrdevs.net/artima/assets/imgs/our-team/team-2.jpg',
        'name' => 'Daniel Smith',
        'position' => 'Chef Executive'
    ],
    [
        'image' => 'https://html.rrdevs.net/artima/assets/imgs/our-team/team-2.jpg',
        'name' => 'William Lucas',
        'position' => 'Senior Architect'
    ],
    [
        'image' => 'https://html.rrdevs.net/artima/assets/imgs/our-team/team-2.jpg',
        'name' => 'Daniel Jack',
        'position' => 'Designer'
    ],
    [
        'image' => 'https://html.rrdevs.net/artima/assets/imgs/our-team/team-2.jpg',
        'name' => 'Daniel Jack',
        'position' => 'Designer'
    ]
];




?>


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

</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="banner_slider swiper ">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="slide-image" src="images/banner.jpg" alt="">
                    <div class="slide-content">
                        <div class="containerFull">
                            <div class="slide-content-innner">
                                <div class="text-content">
                                    <h1 class="banner_item-title  fontHeading fontWight700 ">
                                        Creating Spaces Through <br /> <span>Innovative Design.</span>
                                    </h1>

                                    <p class="banner_discription title">
                                        Welcome to Horizon Architects, crafting timeless interiors that tell your story.
                                        Discover a
                                        world where design meets emotion.
                                    </p>


                                    <div class="mt-5 ">
                                        <a class="callActionBtn" href="tel: +91-9930911997">
                                            <div class="iconPhone pulse">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="rightIcon">
                                                <p class="fontWeight700  ">Call to our Experts</p>
                                                <h4 class="title mt-1 text-white fontWeight700 fontHeading">
                                                    +91-9930911997</h4>
                                            </div>
                                        </a>

                                        <a href="#" class="d-inline-block btnHeader ms-5"> Know More</a>

                                    </div>


                                </div>
                                <div class="video_btn">
                                    <div class="video_layer_1">
                                        <div class="video_layer_2">
                                            <a href="#" class="icon_play">
                                                <i class="fa-solid fa-play"></i>

                                            </a>

                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="slide-image" src="images/banner.jpg" alt="">
                    <div class="slide-content">
                        <div class="containerFull">
                            <div class="slide-content-innner">
                                <div class="text-content">
                                    <h1 class="banner_item-title  fontHeading fontWight700 ">
                                        Creating Spaces Through <br /> <span>Innovative Design.</span>
                                    </h1>

                                    <p class="banner_discription title">
                                        Welcome to Horizon Architects, crafting timeless interiors that tell your story.
                                        Discover a
                                        world where design meets emotion.
                                    </p>


                                    <div class="mt-5 ">
                                        <a class="callActionBtn" href="tel: +91-9930911997">
                                            <div class="iconPhone pulse">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="rightIcon">
                                                <p class="fontWeight700  ">Call to our Experts</p>
                                                <h4 class="title mt-1 text-white fontWeight700 fontHeading">
                                                    +91-9930911997</h4>
                                            </div>
                                        </a>

                                        <a href="#" class="d-inline-block btnHeader ms-5"> Know More</a>

                                    </div>


                                </div>
                                <div class="video_btn">
                                    <div class="video_layer_1">
                                        <div class="video_layer_2">
                                            <a href="#" class="icon_play">
                                                <i class="fa-solid fa-play"></i>

                                            </a>

                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="slide-image" src="images/banner.jpg" alt="">
                    <div class="slide-content">
                        <div class="containerFull">
                            <div class="slide-content-innner">
                                <div class="text-content">
                                    <h1 class="banner_item-title  fontHeading fontWight700 ">
                                        Creating Spaces Through <br /> <span>Innovative Design.</span>
                                    </h1>

                                    <p class="banner_discription title">
                                        Welcome to Horizon Architects, crafting timeless interiors that tell your story.
                                        Discover a
                                        world where design meets emotion.
                                    </p>


                                    <div class="mt-5 ">
                                        <a class="callActionBtn" href="tel: +91-9930911997">
                                            <div class="iconPhone pulse">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="rightIcon">
                                                <p class="fontWeight700  ">Call to our Experts</p>
                                                <h4 class="title mt-1 text-white fontWeight700 fontHeading">
                                                    +91-9930911997</h4>
                                            </div>
                                        </a>

                                        <a href="#" class="d-inline-block btnHeader ms-5"> Know More</a>

                                    </div>


                                </div>
                                <div class="video_btn">
                                    <div class="video_layer_1">
                                        <div class="video_layer_2">
                                            <a href="#" class="icon_play">
                                                <i class="fa-solid fa-play"></i>

                                            </a>

                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                    </div>
                </div>



            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- about start -->
    <section class="about_home">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6 pe-5">
                    <div class="img_box">
                        <img src="images/about.jpg" alt="">

                    </div>
                    <div class="experience-box">
                        <div class="img_logo">
                            <span> Horizon</span> <br />
                            <span> Architects</span>
                        </div>
                        <div class="exp ">
                            <div class="number fontHeading">
                                19
                            </div>
                            <div class="text-content fontHeading">
                                Years of <br />
                                Experience
                            </div>

                        </div>

                    </div>


                </div>
                <div class="col-lg-6">

                    <h5 class="fontHeading  text_dark_gold title">
                        Welcome To Horizon
                        Architects
                    </h5>

                    <h4 class="fontHeading  fontWeight700 heading mt-4">
                        We Help to Bring Your Dream Home to Reality
                    </h4>

                    <h5 class="text-capitalize fontHeading  text_primary title mt-4">
                        Architecture is a freedom that one should express.
                    </h5>

                    <p class="mt-4">
                        Horizon Architects is one of Mumbai’s leading architectural firms specializing in aspects of
                        Design to Execution. The company was established in 2005 by Ar. Hemal Shah, offering innovative
                        design solutions to a varied scale of projects and developers.
                    </p>

                    <p class="mt-3">With over two decades of experience, Horizon Architects has worked on projects of
                        various
                        scales, including residential, commercial, hospitality, institutional, and industrial
                        developments. The firm is committed to blending creativity with practicality, ensuring that
                        every project reflects a harmonious balance of aesthetics, efficiency, and sustainability.</p>
                    <div class="mt-4">
                        <a class="btnHeader" href="">
                            Know More | <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about end -->

    <section class="specialization">
        <h5 class="text-white-50 text-center fontHeading fontWeight600">
            What We Offer
        </h5>
        <h4 class="mt-3 text-white heading text-center fontHeading fontWeight600">
            We Are Experts In
        </h4>
        <div class="containerFull">

            <div class=" mt-5 position-relative">
                <button class="specialization_slider_prev">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <div class="swiper specialization_slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($services as $service): ?>
                            <div class="swiper-slide ">
                                <div class="specialization_card ">

                                    <div class="">

                                        <img loading="lazy" decoding="async" width="72" height="51"
                                            src="images/icons/<?= $service['image']; ?>" alt="<?= $service['title']; ?>">

                                    </div>
                                    <div class="icon-content">
                                        <h4 class="fontHeading  mt-3"><?= $service['title']; ?></h4>
                                        <p class="mt-2"><?= $service['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="specialization_slider_next">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
                <div class="swiper-pagination2  mt-4  justify-content-center d-flex"></div>
            </div>
        </div>
    </section>
    <!-- specialization -->
    <!-- /* our project */ -->
    <section>
        <div class="our_projects">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="fontHeading text_dark_gold">
                            Recent Project

                        </h5>
                        <h4 class="mt-3 fontHeading heading fontWeight700">
                            Our Featured Projects
                        </h4>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            Sed id lacus volutpat, imperdiet quam a, fermentum mi. Etiam urna sapien, tempor in accumsan
                            eu, consequat sed neque Etiam euismod volutpat lacus fringilla henr.
                        </p>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="item_project">
                            <div class="img_box">
                                <img src="https://html.rrdevs.net/artima/assets/imgs/latest-project/latest-project-1.jpg"
                                    alt="">
                                <a class="icon" href="#">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.3848 4.61475H23.3501V13.58" stroke="#fff" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="p-2">
                                <h4>
                                    D-Orex Home Interior
                                    is one of the most popular for
                                </h4>
                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>
    </section>
    <!-- /* our project */ -->
    <section class="infographics"
        style="background-image: url('https://html.rrdevs.net/artima/assets/imgs/experience/experience-bg.jpg');">
        <div class="containerFull">
            <div class="row">
                <?php foreach ($experiences as $experience): ?>
                    <div class="col-lg-3">
                        <div class="infographics_item">
                            <div class="img_box text-center mb-4">
                                <img src="images/icons/<?= $experience['image']; ?>" alt="image not found">
                            </div>
                            <h6 class="text-center h_underline text-white fontHeading title fontWeight600">
                                <?= $experience['title']; ?>
                            </h6>
                            <h2 class="text-center text-white mt-4 fontWeight700"><span class=""
                                    data-count="<?= $experience['count']; ?>">
                                    <?= $experience['count']; ?>
                                </span>+</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- why  chhose -->
    <section class="whyChoose">
        <div class="containerFull">
            <h5 class="fontHeading  text_dark_gold title text-center">
                Why Choose Us
            </h5>
            <h4 class="fontHeading  fontWeight700 heading mt-4 text-center">
                Why Choose Horizon Architects
            </h4>
            <div class="row mt-5">
                <div class="col-lg-5 pe-5">
                    <section class="experience">
                        <div class="containerFull">
                            <div class="">
                                <?php foreach ($whyChhose as $experience): ?>

                                    <div class="item_why mb-5">
                                        <div class="icon">
                                            <img src="images/icons/<?= $experience['image']; ?>" alt="image not found">
                                        </div>
                                        <div class="content">

                                            <h4 class="fontHeading  fontWeight700"><?= $experience['title']; ?></h4>
                                            <p class="mt-2"><?= $experience['description']; ?></p>
                                        </div>
                                    </div>

                                <?php endforeach; ?>
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

    <!-- cta -->

    <section class="cta2">
        <div class="containerFull">

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3 class="large_heading fontHeading fontWeight500 text-white">


                        Get in Touch <br />
                        <span class="d-inline-block ms-5">and Let's Get it Done</span>
                    </h3>

                </div>
                <div class="col-lg-4">

                    <div class="item_cta">
                        <p class="text-white-50">
                            Give us a call
                        </p>
                        <a href="tel:02226136658" class="d-block text-white sub_heading fontHeading mt-2">
                            022 2613 6658
                        </a>

                    </div>
                    <div class="item_cta mt-4">
                        <p class="text-white-50">
                            Have a project in mind?
                        </p>
                        <a href="mailto:info@horizonarchitects.co.in" class="text-white sub_heading fontHeading mt-2">
                            info@horizonarchitects.co.in
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <?php
    $imagePairs = [
        [
            'before' => 'images/compair1.jpg',
            'after' => 'images/compair2.jpg'
        ],
        [
            'before' => 'images/compair1.jpg',
            'after' => 'images/compair2.jpg'
        ],
        [
            'before' => 'images/compair1.jpg',
            'after' => 'images/compair2.jpg'
        ],
        [
            'before' => 'images/compair1.jpg',
            'after' => 'images/compair2.jpg'
        ],


    ];
    ?>

    <section>
        <div class="containerFull">
            <h5 class="fontHeading fontWeight600 text_dark_gold text-center">
                Our Work
            </h5>
            <h4 class="text-center heading fontWeight700 mt-4">
                See Our Work
            </h4>

            <div class="row  mt-5">
                <?php foreach ($imagePairs as $index => $pair): ?>
                    <div class="col-md-6 mb-4">
                        <div class='item_compair'>
                            <div class='img background-img' style="background:url('<?= $pair['before'] ?>')"></div>
                            <div class='img foreground-img' style="background:url('<?= $pair['after'] ?>')"></div>

                            <span class="mark-label before-label">Before</span>
                            <span class="mark-label after-label">After</span>

                            <input type="range" min="1" max="100" value="50" class="slider" name='slider' id="slider">
                            <div class='slider-button'></div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>




    <!-- team -->
    <section>
        <div class="containerFull">
            <h5 class="fontHeading  fontWeight600 text_dark_gold text-center">
                Our Team

            </h5>
            <h4 class="text-center heading fontWeight700 mt-4 ">
                Meet Our Highly Professional Team
            </h4>


            <div class="row mt-5">

                <?php foreach ($teamMembers as $member): ?>
                    <div class="col-lg-3">


                        <div class="team_item ">
                            <div class="team_image">
                                <img src="<?= $member['image']; ?>" alt="image not found">
                            </div>
                            <div class="team_content">
                                <h4 class="fontHeading text-white"><?= $member['name']; ?></h4>
                                <p class="text-white-50"><?= $member['position']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- testimonial -->
    <section class="testimonial">
        <div class="containerFull">
            <div class="row justify-content-center">

                <div class="col-lg-7 text-center ">
                    <h5 class="fontHeading title text_dark_gold">
                        Testimonial
                    </h5>
                    <h4 class=" text-white heading fontHeading fontWeight700">
                        Our Happy Customer
                    </h4>
                    <p class="mt-3 text-white">
                        Which is the same as saying through shrinking from toil and pain. These cases are perfectly
                        simple
                        and easy to distinguish.
                    </p>
                </div>
            </div>


            <?php
            $testimonials = [
                [
                    "name" => "John Doe",
                    "role" => "Architect",
                    "image" => "images/icons/profile.webp",
                    "review" => "We are an architecture firm with a focus on beautiful but functional design. 
                     At its heart, we believe design is about usability and these are the guiding principles for our work.",
                    "rating" => 5
                ],
                [
                    "name" => "Jane Smith",
                    "role" => "Interior Designer",
                    "image" => "images/icons/profile.webp",
                    "review" => "Our mission is to blend aesthetics with functionality. We ensure our designs reflect 
                     our clients' visions while maximizing usability.",
                    "rating" => 4
                ],
                [
                    "name" => "Michael Johnson",
                    "role" => "Project Manager",
                    "image" => "images/icons/profile.webp",
                    "review" => "With years of experience, we provide top-notch project management services to ensure 
                     smooth execution and on-time delivery.",
                    "rating" => 5
                ]
            ];
            ?>

            <div class="row mt-5">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="col-lg-4">
                        <div class="item_testimonial shadow">
                            <div class="author">
                                <div class="icon">
                                    <img src="<?= $testimonial['image']; ?>" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="fontHeading fontWeight600">
                                        <?= $testimonial['name']; ?>
                                    </h5>
                                    <p class="fontHeading mt-1 text-gray-50">
                                        <?= $testimonial['role']; ?>
                                    </p>
                                </div>
                            </div>

                            <p class="mt-4"><?= $testimonial['review']; ?></p>

                            <hr />
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                        <img width="20px" src="images/icons/star.svg" alt="Image not found">
                                    <?php endfor; ?>
                                </div>
                                <img src="https://html.rrdevs.net/artima/assets/imgs/update/client-slider/quite.png" alt="">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
    <!-- blog -->

    <section class="blog">
        <div class="containerFull">

            <h5 class="fontHeading fonmtWeight600 text-center text_dark_gold ">
                News & Articles
            </h5>
            <h4 class="fontHeading fontWeight700 heading text-center mt-3 ">

                Our Latest Blog Posts
            </h4>
            <?php
            $blogs = [
                [
                    "title" => "The Future of Architecture: Trends to Watch",
                    "author" => "John Doe",
                    "date" => "February 25, 2025",
                    "image" => "https://html.rrdevs.net/artima/assets/imgs/blog/blog-1.jpg",
                    "excerpt" => "Discover the latest architectural trends that will shape the industry in the coming years.",
                    "link" => "blog-details.php?id=1"
                ],
                [
                    "title" => "Sustainable Design: Building for a Greener Tomorrow",
                    "author" => "Jane Smith",
                    "date" => "February 20, 2025",
                    "image" => "https://html.rrdevs.net/artima/assets/imgs/blog/blog-1.jpg",
                    "excerpt" => "Explore innovative eco-friendly designs that are changing the way we build and live.",
                    "link" => "blog-details.php?id=2"
                ],
                [
                    "title" => "Interior Design Tips for a Modern Home",
                    "author" => "Michael Johnson",
                    "date" => "February 15, 2025",
                    "image" => "https://html.rrdevs.net/artima/assets/imgs/blog/blog-1.jpg",
                    "excerpt" => "Upgrade your home with modern interior design ideas that blend style and functionality.",
                    "link" => "blog-details.php?id=3"
                ]
            ];
            ?>

            <div class="row mt-5">
                <?php foreach ($blogs as $blog): ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="img_box">

                                <img src="<?= $blog['image']; ?>" alt="Blog Image" class="img-fluid">
                            </div>
                            <div class="blog-content py-2">
                                <p class="author_date"><strong><i class="fa-solid fa-user me-1"></i> </strong>
                                    <?= $blog['author']; ?> |
                                    <strong><i class="fa-solid fa-calendar me-1"></i></strong>
                                    <?= $blog['date']; ?>
                                </p>
                                <hr />

                                <h4 class="fontHeading fontWeight600 "><?= $blog['title']; ?></h4>
                                <p class="mt-2"><?= $blog['excerpt']; ?></p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="" style="background-color:#a19c9c12;">
        <div class="containerFull">
            <h4 class="fontHeading fontWeight700 heading text-center mt-3 ">


                Our Frequently Asked Questions
            </h4>

            <div class="row mt-5">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    Can I trial block before paying?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quae harum adipisci
                                    possimus et. Iusto pariatur iste nam
                                    incidunt ratione modi.
                                </div>
                            </div>
                        </div>

                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo">
                                    How are additional plan billed?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Sed urna felis, dapibus quis leo nec, luctus
                                    auctor augue. Nam gravida placerat sem vitae
                                    rutrum. Integer accumsan, enim et facilisis
                                    eleifend, ante ligula
                                    ornare nulla, sed pharetra tortor diam eget
                                    magna.
                                </div>
                            </div>
                        </div>
                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    When should I change my plan?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Inventore tenetur cum
                                    doloremque iusto molestiae. Minus beatae
                                    quam cumque modi quidem asperiores
                                    aliquam pariatur in iste.
                                </div>
                            </div>
                        </div>
                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    What payment methods do you offer?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Inventore tenetur cum
                                    doloremque iusto molestiae. Minus beatae
                                    quam cumque modi quidem asperiores
                                    aliquam pariatur in iste.
                                </div>
                            </div>
                        </div>
                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    What is your refund policy?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Inventore tenetur cum
                                    doloremque iusto molestiae. Minus beatae
                                    quam cumque modi quidem asperiores
                                    aliquam pariatur in iste.
                                </div>
                            </div>
                        </div>
                        <div class="border mb-2 rounded-3 p-3">
                            <h2 class="h5 mb-0">
                                <a href="#" class="text-reset d-flex justify-content-between align-items-center"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseSix">
                                    How are paid plans billed when moving other
                                    plan?
                                    <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="mt-3">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Inventore tenetur cum
                                    doloremque iusto molestiae. Minus beatae
                                    quam cumque modi quidem asperiores
                                    aliquam pariatur in iste.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>


    <section class="contact_form">
        <div class="containerFull">
            <h4 class="fontHeading heading text-center text-white ">Send A Request To Us</h4>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            required placeholder="First Name*">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" name="last_name" id="last_name" class="form-control" required
                                            placeholder="Last Name*">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" name="email_address" id="email_address" class="form-control"
                                            required placeholder="Email Address*">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-comment-dots"></i></span>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required placeholder="Your Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-group mb-3">

                                        <textarea name="message" class="form-control" id="message" rows="5" required
                                            placeholder=" Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center mt-3">
                                    <button type="submit" class="btnHeader">
                                        Send Your Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>






    <?php include 'include/footer.php'; ?>

    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $("input[name='slider']").on("input change", function () {
                const sliderPos = $(this).val();
                const parent = $(this).closest('.item_compair');
                parent.find('.foreground-img').css('width', `${sliderPos}%`);
                parent.find('.slider-button').css('left', `calc(${sliderPos}% - 18px)`);

                if (sliderPos >= 99) {
                    parent.find('.after-label').fadeOut();
                } else {
                    parent.find('.after-label').fadeIn();
                }

                if (sliderPos <= 1) {
                    parent.find('.before-label').fadeOut();
                } else {
                    parent.find('.before-label').fadeIn();
                }

            });
        });
    </script>


    <script>
        var swiper = new Swiper(".banner_slider", {
            // spaceBetween: 30,
            // centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        var swiper2 = new Swiper(".specialization_slider", {
            spaceBetween: 30,
            slidesPerView: 3,
            // centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
            navigation: {
                nextEl: ".specialization_slider_next",
                prevEl: ".specialization_slider_prev",
            },
        });
    </script>
    <script>
        var swiper3 = new Swiper(".client_slider", {
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


</body>

</html>