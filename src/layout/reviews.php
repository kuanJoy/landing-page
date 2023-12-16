<?php
$reviews = [
    'Johne Abram' => [
        "pic" => "./src/assets/img/reviews/rev_1.svg",
        "company" => "SBL Saas Company",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'David Martinez' => [
        "pic" => "./src/assets/img/reviews/rev_2.svg",
        "company" => "SBL Saas Company",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Jackie Welles' => [
        "pic" => "./src/assets/img/reviews/rev_3.svg",
        "company" => "Heywood",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Kiwi' => [
        "pic" => "./src/assets/img/reviews/rev_4.svg",
        "company" => "Edgerunners",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Rebeca Price' => [
        "pic" => "./src/assets/img/reviews/rev_5.svg",
        "company" => "SBL Saas Company",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Syd Mead' => [
        "pic" => "./src/assets/img/reviews/rev_6.svg",
        "company" => "Futurist Artist",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Lucyna Kushinada' => [
        "pic" => "./src/assets/img/reviews/rev_7.svg",
        "company" => "Netrunner",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Johnny Silverhand' => [
        "pic" => "./src/assets/img/reviews/rev_8.svg",
        "company" => "Samurai",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
    'Vincent' => [
        "pic" => "./src/assets/img/reviews/rev_9.svg",
        "company" => "Night City",
        "comment" => " Our website is working well for us. Our website was
                                developed beautifully by the proxylab team. We really
                                appreciated the prompt responses and delivery of exactly
                                what we requested, as per our expectations."
    ],
]
?>

<div class="reviews container-main">
    <div class="reviews__title-info">
        <h3 class="reviews__title">testimonial</h3>
        <div class="reviews__info">What Our Customer Say About Us</div>
    </div>
    <div class="reviews__gal">
        <div class="reviews__slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $author => $info) { ?>
                        <div class="swiper-slide">
                            <div class="slider-card">
                                <div class="card_img-info">
                                    <img src="<?= $info["pic"]; ?>" alt="" class="card_img" />
                                    <div class="card_name-company">
                                        <h3 class="card_name"><?= $author; ?></h3>
                                        <p class="card_company"><?= $info["company"]; ?></p>
                                    </div>
                                </div>
                                <p class="card_desc">
                                    <?= $info["comment"]; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-btns">
                <div class="rev_btn-prev left-arr">
                    ➜
                </div>
                <div class="rev_btn-next">
                    ➜
                </div>
            </div>
        </div>
        <img class="reviews__banner" src="./src/assets/img/reviews/_reviews-banner.png" alt="" class="reviews__pic" />
    </div>
</div>