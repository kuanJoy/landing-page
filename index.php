    <?php include "./src/layout/nav.php" ?>

    <body>
      <div class="wrapper">
        <header class="header container-main">
          <a class="logo">
            <svg class="icon">
              <use href="./src/assets/img/icon/svg-sprite.svg#logo" />
            </svg>
            Proxylab
          </a>
          <div class="nav-collapse">
            <nav class="nav">
              <a href="#" class="nav__link">Features</a><a href="#" class="nav__link">Pricing & Plans</a><a href="#" class="nav__link">Support</a><a href="#" class="nav__link">About Us</a>
            </nav>
            <button class="btn">Contact Us</button>
          </div>
          <button class="hamburger--slider" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </header>
        <div class="banner container-main">
          <di class="banner__content">
            <h2 class="banner__title">
              Best <span class="orange-text">Marketing</span> Digital Agency
            </h2>
            <p class="banner__desc">
              Various versions have evolved over the years, sometimes by accident,
              sometimes on purpose
            </p>
            <div class="banner__actions">
              <button class="btn banner__btn">Get Started</button>
              <a class="banner__watch">
                <div class="watch-btn">
                  <img src="./src/assets/img/icon/play-solid.svg" alt="" />
                </div>

                <p class="watch-text">Watch Video</p>
              </a>
            </div>
          </di>
          <img class="banner__img" src="./src/assets/img/banner.png" alt="" />
        </div>
        <div class="clients container-main">
          <h3 class="clients__title">OUR TRUSTED CLIENTS</h3>
          <div class="clients__gal">
            <div class="gal__row">
              <svg class="gal_item slack">
                <use href="./src/assets/img/icon/svg-sprite.svg#slack_cli" />
              </svg>
              <svg class="gal_item descript">
                <use href="./src/assets/img/icon/svg-sprite.svg#descript_cli" />
              </svg>
              <svg class="gal_item etsy">
                <use href="./src/assets/img/icon/svg-sprite.svg#etsy_cli" />
              </svg>
            </div>
            <div class="gal__row">
              <svg class="gal_item spotify">
                <use href="./src/assets/img/icon/svg-sprite.svg#spotify_cli" />
              </svg>
              <svg class="gal_item logitech">
                <use href="./src/assets/img/icon/svg-sprite.svg#logitech_cli" />
              </svg>
            </div>
          </div>
        </div>
        <div class="what container-main">
          <div class="what__content">
            <h3 class="what__title">What we do</h3>
            <h3 class="what__info">
              We Are Here To Help You Build Your Business 🚀
            </h3>
            <p class="what__desc">
              Sed ut perspiciatis unde omnis iste natus error sit of the
              voluptatem accusantium lorem sit doloremque, totam rem aperiam,
              eaque ipsa quae ab illo invento veritatis quasi architecto beatae
              vitae dicta.
            </p>
            <button class="btn what__btn">Explore all service</button>
          </div>
          <div class="what__gal">
            <div class="what__card">
              <div class="what__card-content">
                <img class="what__card-img" src="./src/assets/img/icon/dm.svg" alt="" />
                <h3 class="what__card-title">Digital Marketing</h3>
                <p class="what__card-desc">
                  That is the simply dummy text the printing and typesetting
                  industry.
                </p>
                <a href="" class="what__card-more">Read more</a>
              </div>
            </div>
            <div class="what__card">
              <div class="what__card-content">
                <img class="what__card-img" src="./src/assets/img/icon/seo.svg" alt="" />
                <h3 class="what__card-title">SEO</h3>
                <p class="what__card-desc">
                  That is the simply dummy text the printing and typesetting
                  industry.
                </p>
                <a href="" class="what__card-more">Read more</a>
              </div>
            </div>
            <div class="what__card">
              <div class="what__card-content">
                <img class="what__card-img" src="./src/assets/img/icon/ui.svg" alt="" />
                <h3 class="what__card-title">UI UX Design</h3>
                <p class="what__card-desc">
                  That is the simply dummy text the printing and typesetting
                  industry.
                </p>
                <a href="" class="what__card-more">Read more</a>
              </div>
            </div>
            <div class="what__card">
              <div class="what__card-content">
                <img class="what__card-img" src="./src/assets/img/icon/web.svg" alt="" />
                <h3 class="what__card-title">Web Development</h3>
                <p class="what__card-desc">
                  That is the simply dummy text the printing and typesetting
                  industry.
                </p>
                <a href="" class="what__card-more">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="about container-main">
          <div class="what__content">
            <h3 class="what__title">About Us</h3>
            <h3 class="what__info">
              We're More Than Digital Agency in the World
            </h3>
            <p class="what__desc">
              Sed ut perspiciatis unde omnis iste natus error sit of the
              voluptatem accusantium lorem sit doloremque, totam rem aperiam,
              eaque ipsa quae ab illo invento veritatis quasi architecto beatae
              vitae dicta.
            </p>
            <button class="btn what__btn">Get in touch</button>
          </div>
          <img class="about_img" src="./src/assets/img/about-us.png" alt="" />
        </div>
        <div class="work container-main">
          <div class="work__content">
            <h3 class="work__title">Our Work</h3>
            <p class="work__desc">See Our Recent Case Studies</p>
            <div class="controls">
              <button type="button" class="control" data-filter="all">All</button>
              <button type="button" class="control" data-toggle=".UI">
                UI/UX
              </button>
              <button type="button" class="control" data-toggle=".Development">
                Development
              </button>
              <button type="button" class="control" data-toggle=".Graphic">
                Graphic Design
              </button>
              <button type="button" class="control" data-toggle=".Motion">
                Motion
              </button>
              <button type="button" class="control" data-toggle=".Branding">
                Branding
              </button>
              <button type="button" class="control" data-toggle=".Business">
                Business Development
              </button>
              <a class="work__action" href="">Explore all ➜ </a>
            </div>
            <div class="container">
              <div class="mix UI">
                <img class="work__img" src="./src/assets/img/work/work_1.png" alt="" />
              </div>
              <div class="mix Development">
                <img class="work__img" src="./src/assets/img/work/work_2.png" alt="" />
              </div>
              <div class="mix Graphic">
                <img class="work__img" src="./src/assets/img/work/work_3.png" alt="" />
              </div>
              <div class="mix Motion">
                <img class="work__img" src="./src/assets/img/work/work_4.png" alt="" />
              </div>
              <div class="mix Branding">
                <img class="work__img" src="./src/assets/img/work/work_5.png" alt="" />
              </div>
              <div class="mix Business">
                <img class="work__img" src="./src/assets/img/work/work_6.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- ==================== REVIEWS ==================== -->
        <?php include "./src/layout/reviews.php" ?>
        <div class="project container-main">
          <img class="project-img" src="./src/assets/img/project.png" alt="" />
          <div class="project__info">
            <h3 class="project__title">
              Have A Project In Mind? Let's Get To Work.
            </h3>
            <button class="btn project__btn">Get in touch</button>
          </div>
        </div>
        <!-- ==================== FOOTER ==================== -->
        <?php include "./src/layout/footer.php" ?>
    </body>

    </html>