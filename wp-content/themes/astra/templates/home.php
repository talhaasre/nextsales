<?php

/**
 * Template Name: Homepage
 */
get_header();

?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/home.css" ?>">

<?php $reportsData = [
    [
        "img" => "report-01.jpg",
        "title" => "Leveraging AI in Marketing",
        "desc" => "Dive deep into the future of marketing with this AI-powered report. Uncover hidden trends, optimize campaigns, and gain the edge in a data-driven world.",
    ],
    [
        "img" => "report-02.jpg",
        "title" => "Digital Display Advertising Trends",
        "desc" => "Dive deep into the evolving world of display ads. Uncover cutting-edge formats, immersive experiences, and consumer behavior trends.",
    ],
    [
        "img" => "report-03.jpg",
        "title" => "Demand Generation: Strategy, Tactics & Trends",
        "desc" => "Dive deep into the future of demand generation. Master the art of attracting, engaging, and converting leads in a rapidly evolving landscape.",
    ],
] ?>

<?php $panelistData = [
    [
        "img" => "panelist-01.jpg",
        "name" => "Alissa Fernandez",
        "desg" => "Vice President @Jeera",
        "desc" => "Some campaigns needs are immediate, and we rely on Adept Panel to scale up high quality SQL’s for our BDR’s",
    ],
    [
        "img" => "panelist-02.jpg",
        "name" => "John Evans",
        "desg" => "CEO @Dolby Studios",
        "desc" => "Participating in Adept Panel surveys is a refreshing way to stay ahead of the curve and contribute to meaningful change. The concise surveys fit my busy schedule, and the rewards, like exclusive travel experiences, add a touch of luxury to the process",
    ],
    [
        "img" => "panelist-03.jpg",
        "name" => "David Lee",
        "desg" => "COO @Retlin Chain",
        "desc" => "Adept Panel provided a platform for my voice to be heard beyond the boardroom. Sharing my insights on industry trends not only influenced market decisions but also landed me a top-tier tech gadget. It's a win-win for C-suite leaders and the future of our industry.",
    ],
    [
        "img" => "panelist-01.jpg",
        "name" => "Alissa Fernandez",
        "desg" => "Vice President @Jeera",
        "desc" => "Some campaigns needs are immediate, and we rely on Adept Panel to scale up high quality SQL’s for our BDR’s",
    ],
    [
        "img" => "panelist-02.jpg",
        "name" => "John Evans",
        "desg" => "CEO @Dolby Studios",
        "desc" => "Participating in Adept Panel surveys is a refreshing way to stay ahead of the curve and contribute to meaningful change. The concise surveys fit my busy schedule, and the rewards, like exclusive travel experiences, add a touch of luxury to the process",
    ],
    [
        "img" => "panelist-03.jpg",
        "name" => "David Lee",
        "desg" => "COO @Retlin Chain",
        "desc" => "Adept Panel provided a platform for my voice to be heard beyond the boardroom. Sharing my insights on industry trends not only influenced market decisions but also landed me a top-tier tech gadget. It's a win-win for C-suite leaders and the future of our industry.",
    ],
] ?>

<?php $faqData = [
    [
        "question" => "What is Adept Panel?",
        "answer" => "Adept Panel is a platform where industry leaders like you can share your valuable insights through concise surveys and influence market trends, product development, and industry decisions. Your expertise is rewarded with exciting prizes ranging from top-tier gift cards to tech gadgets and exclusive experiences, sponsored by our partner companies.",
    ],
    [
        "question" => "Who is Adept Panel for?",
        "answer" => "Adept Panel is a platform where industry leaders like you can share your valuable insights through concise surveys and influence market trends, product development, and industry decisions. Your expertise is rewarded with exciting prizes ranging from top-tier gift cards to tech gadgets and exclusive experiences, sponsored by our partner companies.",
    ],
    [
        "question" => "Is it free to participate?",
        "answer" => "Adept Panel is a platform where industry leaders like you can share your valuable insights through concise surveys and influence market trends, product development, and industry decisions. Your expertise is rewarded with exciting prizes ranging from top-tier gift cards to tech gadgets and exclusive experiences, sponsored by our partner companies.",
    ],
    [
        "question" => "What kind of surveys will I be invited to participate in?",
        "answer" => "Adept Panel is a platform where industry leaders like you can share your valuable insights through concise surveys and influence market trends, product development, and industry decisions. Your expertise is rewarded with exciting prizes ranging from top-tier gift cards to tech gadgets and exclusive experiences, sponsored by our partner companies.",
    ],
    [
        "question" => "How do I claim my rewards?",
        "answer" => "Adept Panel is a platform where industry leaders like you can share your valuable insights through concise surveys and influence market trends, product development, and industry decisions. Your expertise is rewarded with exciting prizes ranging from top-tier gift cards to tech gadgets and exclusive experiences, sponsored by our partner companies.",
    ],
] ?>

<main>
    <section class="hero_sec">
        <div class="partial_container hero_container">
            <div class="hero_grid">
                <div class="box box-1">
                    <div class="text_container">
                        <h1 class="hero_title">Earn Rewards<br />for Your Expertise</h1>
                        <p class="hero_desc">Guide industry decisions, unlock exclusive rewards. Your expertise shapes the landscape, your participation gets premium recognition.</p>
                    </div>
                    <div class="cta_wrapper">
                        <a href="" class="common-cta">Sign Up Now!</a>
                    </div>
                </div>
                <div class="box box-2">
                    <img width="685" height="786" src="<?php echo get_template_directory_uri() . "/assets/images/home/hero-img.jpg" ?>" alt="hero banner" class="hero_img">
                </div>
            </div>
        </div>
    </section>

    <section class="svpart_sec">
        <div class="my_container">
            <h2 class="common-title svpart_title">Our survey participants include decision makers from <span class="green-text">Top Companies of the World</span></h2>
            <div class="svpart_slider">
                <div class="swiper svpart_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="part_title">Adobe</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="part_title">Meta</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="part_title">Google</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="part_title">Tesla</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="part_title">Citi Bank</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsor_sec">
        <div class="my_container">
            <h3 class="common-title sponsor_title">Our <span class="green-text">Sponsors Include</span></h3>

            <div class="sponsor_slider">
                <div class="swiper sponsor_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-1.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-4.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-2.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-5.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-3.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-6.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-1.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-4.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-2.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-5.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sponsor_box">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-3.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                                <img width="425" height="160" src="<?php echo get_template_directory_uri() . "/assets/images/home/sponsors/sponsor-6.jpg" ?>" alt="" class="sponsor_img" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reward_sec">
        <div class="my_container reward_container">
            <div class="text_container">
                <h4 class="common-title reward-title">Superfast <span class="green-text">Reward Fulfillment</span></h4>
                <p class="common-desc reward-desc">Experience seamless rewards for your valuable time! At our platform, we understand the importance of your participation, and we're committed to delivering rewards promptly. Our streamlined process ensures that from participating in surveys to receiving your rewards, every step is quick and efficient.</p>
            </div>

            <!-- REWARD BOX 1 -->
            <div class="reward_box reward_box1">
                <div class="box box-1">
                    <div class="text_container">
                        <div class="rd-count-wrap"><span class="rd-count">1</span></div>
                        <h5 class="rd-title">Participate</h5>
                        <p class="rd-desc">Dive into our surveys and share your insights. Your opinions matter, and your participation drives impactful decision-making. Each question you answer brings you closer to earning exciting rewards.</p>
                    </div>
                </div>
                <div class="box box-2">
                    <img width="364" height="489" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/reward-01.jpg" ?>" alt="" class="reward_img" loading="lazy">
                </div>
            </div>
            <div class="reward_direction">
                <img width="721" height="240" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/reward-way-01.svg" ?>" alt="" class="reward_dir_img" loading="lazy">
            </div>

            <!-- REWARD BOX 2 -->
            <div class="reward_box reward_box2">
                <div class="box box-1">
                    <img width="472" height="426" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/reward-02.jpg" ?>" alt="" class="reward_img" loading="lazy">
                </div>
                <div class="box box-2">
                    <div class="text_container">
                        <div class="rd-count-wrap"><span class="rd-count">2</span></div>
                        <h5 class="rd-title">Confirm your Details</h5>
                        <p class="rd-desc">To ensure swift and accurate rewards delivery, we kindly ask you to verify your details. Confirming your information, including your name, contact details, and any specific preferences, helps us tailor your rewards experience to suit you perfectly.</p>
                    </div>
                </div>
            </div>
            <div class="reward_direction">
                <img width="721" height="240" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/reward-way-02.svg" ?>" alt="" class="reward_dir_img" loading="lazy">
            </div>

            <!-- REWARD BOX 3 -->
            <div class="reward_box reward_box3">
                <div class="box box-1">
                    <div class="text_container">
                        <div class="rd-count-wrap"><span class="rd-count">3</span></div>
                        <h5 class="rd-title">Rewards Delivered</h5>
                        <p class="rd-desc">Sit back and enjoy your well-deserved rewards! Once you've participated in surveys and confirmed your details, your rewards will be swiftly delivered to you. Whether it's gift cards, vouchers, or other exciting incentives, your contribution doesn't go unnoticed, and neither do your rewards.</p>
                    </div>
                </div>
                <div class="box box-2">
                    <img width="364" height="489" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/reward-03.jpg" ?>" alt="" class="reward_img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="submit_sec">
        <div class="box box-1">
            <img width="720" height="741" src="<?php echo get_template_directory_uri() . "/assets/images/home/rewards/submit-survey.jpg" ?>" alt="" class="submit_img" loading="lazy">
        </div>
        <div class="box box-2">
            <div class="text_container">
                <h4 class="common-title submit-title">Earn <span class="green-text">Rewards</span> by<br />submitting short surveys</h4>
                <p class="common-desc submit-desc">Earn exciting rewards like Amazon Gift Card, Apple Headphones, Essentials & other accessories by filling short surveys</p>
                <div class="cta_wrapper">
                    <a href="" class="round-cta">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="svcount_sec">
        <div class="my_container">
            <div class="count_box count_box1">
                <div class="counter">
                    <span class="count-up" data-start="220" data-target="250">200</span>K+
                </div>
                <div class="count_title">Surveys Filled</div>
            </div>
            <div class="count_wrap">
                <div class="count_box count_box2">
                    <div class="counter">
                        <span class="count-up" data-start="200" data-target="250">200</span>+
                    </div>
                    <div class="count_title">Surveys Filled</div>
                </div>
                <div class="count_box count_box3">
                    <div class="counter">
                        $<span class="count-up" data-start="400" data-target="500">400</span>K+
                    </div>
                    <div class="count_title">Surveys Filled</div>
                </div>
            </div>
        </div>
    </section>

    <section class="reports_sec">
        <div class="my_container">
            <h6 class="common-title report_title">Download our <span class="green-text">Latest Reports</span></h6>
            <div class="reports_slider">
                <div class="swiper reports_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($reportsData as $report) : ?>
                            <div class="swiper-slide">
                                <div class="report_box">
                                    <div class="img_content">
                                        <div class="img_wrapper">
                                            <img width="377" height="221" src="<?php echo get_template_directory_uri() ?>/assets/images/home/reports/<?php echo $report['img'] ?>" alt="" class="report_img" loading="lazy">
                                        </div>
                                        <h6 class="report_title"><?php echo $report['title'] ?></h6>
                                        <p class="common-desc report_desc"><?php echo $report['desc'] ?></p>
                                    </div>
                                    <div class="cta_wrapper">
                                        <a href="" class="common-cta">Download</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="panelist_sec">
        <div class="my_container">
            <h4 class="common-title panelist_title">What do Panelist Say <span class="green-text">About Us</span></h4>
            <div class="panelist_slider">
                <div class="swiper panelist_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($panelistData as $panelist) : ?>
                            <div class="swiper-slide">
                                <div class="panelist_box">
                                    <div class="quote_wrap">
                                        <div class="quote_sign">“</div>
                                        <p class="common-desc panelist_desc"><?php echo $panelist['desc'] ?></p>
                                    </div>
                                    <div class="panelist_info">
                                        <div class="img_wrapper">
                                            <img width="55" height="55" src="<?php echo get_template_directory_uri() ?>/assets/images/home/panelist/<?php echo $panelist['img'] ?>" alt="" class="panelist_img" loading="lazy">
                                        </div>
                                        <div class="panelist_bio">
                                            <p class="panelist_name"><?php echo $panelist['name'] ?></p>
                                            <p class="panelist_desg"><?php echo $panelist['desg'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="scroll_nav_wrapper">
                        <div class="swiper-scrollbar custom-scrollbar"></div>
                        <div class="nav_arrows">
                            <div class="prev_img">
                                <img width="32" height="32" src="<?php echo get_template_directory_uri() . "/assets/images/home/panelist/nav-arrow.svg" ?>" alt="prev" class="arrow_img">
                            </div>
                            <div class="next_img">
                                <img width="32" height="32" src="<?php echo get_template_directory_uri() . "/assets/images/home/panelist/nav-arrow.svg" ?>" alt="next" class="arrow_img right_arrow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="compliant_sec">
        <div class="my_container">
            <div class="text_container">
                <h4 class="common-title compliant_title">We are <span class="green-text">Data Compliant</span></h4>
                <p class="common-desc">Nexsales is ISO Certified for Data Privacy & Information Security</p>
            </div>
            <div class="iso_wrapper">
                <div class="iso_box">
                    <img width="40" height="30" src="<?php echo get_template_directory_uri() . "/assets/images/home/check.svg" ?>" alt="" class="check_icon" loading="lazy">
                    <p class="iso_title">ISO 27001 for Infosec Privacy</p>
                </div>
                <div class="iso_box">
                    <img width="40" height="30" src="<?php echo get_template_directory_uri() . "/assets/images/home/check.svg" ?>" alt="" class="check_icon" loading="lazy">
                    <p class="iso_title">ISO 27701 for Data Privacy</p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq_sec">
        <div class="my_container">
            <div class="text_container">
                <h4 class="common-title faq_title">Frequently asked questions</h4>
                <p class="common-desc">Everything you need to know about our surveys.</p>
            </div>
            <div class="faq_wrap">
                <?php foreach ($faqData as $faq) : ?>
                    <div class="faq-item">
                        <div class="faq-header">
                            <div class="faq_title"><?php echo $faq['question'] ?></div>
                            <img width="24" height="24" src="<?php echo get_template_directory_uri() . "/assets/images/home/faq/plus-icon.svg" ?>" alt="" class="status_icon" loading="lazy"
                                data-plus-icon="<?php echo get_template_directory_uri() . "/assets/images/home/faq/plus-icon.svg" ?>"
                                data-minus-icon="<?php echo get_template_directory_uri() . "/assets/images/home/faq/minus-icon.svg" ?>">
                        </div>
                        <div class="faq-content"><?php echo $faq['answer'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="more_question">
            <div class="still_box">
                <img width="120" height="56" src="<?php echo get_template_directory_uri() . "/assets/images/home/faq/avatar-group.jpg" ?>" alt="" class="group_img" loading="lazy">
                <div class="text_container">
                    <h6 class="more_title">Still have questions?</h6>
                    <p class="common-desc more_desc">Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
                </div>
                <div class="cta_wrapper">
                    <a href="" class="common-cta">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="perks_sec">
        <img width="1440" height="461" src="<?php echo get_template_directory_uri() . "/assets/images/home/perks-bg.jpg" ?>" alt="" class="perk_bg" loading="lazy">
        <div class="text_container">
            <h5 class="common-title perk_title">Shape Tomorrow's Market. Secure Today's <span class="green-text">Perks</span>.</h5>
            <div class="cta_wrapper">
                <a href="" class="common-cta">Sign Up</a>
            </div>
        </div>
    </section>
</main>

<script>
    var svPartners = new Swiper(".svpart_swiper", {
        spaceBetween: 30,
        speed: 6000,
        slidesPerView: 5,
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
        },
    });

    var sponsors = new Swiper(".sponsor_swiper", {
        spaceBetween: 32,
        slidesPerView: 3,
        loop: true,
        slidesPerGroup: 3,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var reports = new Swiper(".reports_swiper", {
        spaceBetween: 28,
        slidesPerView: 3,
        loop: true,
        speed: 500,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var reports = new Swiper(".panelist_swiper", {
        spaceBetween: 28,
        slidesPerView: 3,
        speed: 500,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        navigation: {
            nextEl: ".panelist_swiper .next_img",
            prevEl: ".panelist_swiper .prev_img",
        },
    });
</script>


<?php get_footer(); ?>