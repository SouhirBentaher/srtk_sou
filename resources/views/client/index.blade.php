    <?php include('header.php') ?>

    <?php include('slider.php') ?>

    <section class="about-us-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-img">
              <img src="assets/img/car/about-img.jpg" alt="Image">
              <div class="experience">
                <div class="">
                  <h2>61 ans d'expérience</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content">
              <span class="top-title">A Propos</span>
              <h2>Nous nous efforçons de fournir des services de transport fiables et efficaces</h2>
              <p>Nous proposons des lignes régulières et des services de transport privés, y compris des
                services de taxi, de minibus et
                de bus. Nous offrons également des services de location de voitures pour répondre aux
                besoins spécifiques de nos
                clients. Nous mettons en œuvre des technologies de pointe pour assurer un service de
                transport de qualité et sûr pour
                nos clients..</p>
              <ul>
                <li>
                  <i class="bx bx-check"></i>
                  Des lignes régulières de transport public et privé.
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Des services de taxi, de minibus et de bus.
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Des services de location de voitures.
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Des technologies de pointe pour assurer la sécurité et la qualité des services.
                </li>
              </ul>
              <a href="presentation.php" class="default-btn">
                <span>A propos</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="counter-area bg-color pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-counter">
              <i class="fa-solid fa-bus"></i>

              <h2>
                <span class="odometer" data-count="950">00</span>
                <span class="target">+</span>
              </h2>
              <p>Bus</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-counter">
              <i class="fa-solid fa-heart"></i>
              <h2>
                <span class="odometer" data-count="100">00</span>
                <span class="target">%</span>
              </h2>
              <p>Passagers satisfait</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-counter">
              <i class="fa-solid fa-users"></i>
              <h2>
                <span class="odometer" data-count="550">00</span>
                <span class="traget">+</span>
              </h2>
              <p>Passagers ravis</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-counter">
              <i class="fa-solid fa-road"></i>
              <h2>
                <span class="odometer" data-count="440">00</span>
                <span class="target">+</span>
              </h2>
              <p>Lignes</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="track-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="tab quote-list-tab">
              <ul class="tabs">
                <li>
                  <a href="#">
                    <i class="fa-solid fa-clock"></i>
                    Horaires régionaux et interurbain
                  </a>
                </li>
                <li>
                  <a href="#">
                    Réserver Ticket
                    <i class="fa-solid fa-ticket"></i>
                  </a>
                </li>
              </ul>
              <div class="tab_content">
                <div class="tabs_item">
                  <?php include('horaire_form.php') ?>
                </div>
                <div class="tabs_item">
                  <?php include('reservation_ticket_form.php') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pricing-area pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span>Abonnements</span>
          <h5>Nous offrons deux types d'abonnements pour nos services de transport : régional et urbain. Chacun de
            ces abonnements est disponible en deux catégories : ordinaire et scolaire.</h5>

        </div>
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="single-pricing-box">
              <h3>Urbain</h3>
              <h2> <sub>A partir de</sub> 30DT</h2>
              <ul>
                <li>
                  <i class="bx bx-check"></i>
                  All-time access on all transports
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Have a good premium on member
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  60% Discount for the basic users
                </li>

              </ul>
              <a href="#" class="default-btn">
                <span>Commander</span>
              </a>
              <span class="quality">Scolaire</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-pricing-box">
              <h3>Urbain</h3>
              <h2> <sub>A partir de</sub> 40DT</h2>
              <ul>
                <li>
                  <i class="bx bx-check"></i>
                  All-time access on all transports
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Have a good premium on member
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  60% Discount for the basic users
                </li>

              </ul>
              <a href="#" class="default-btn">
                <span>Commander</span>
              </a>
              <span class="quality">Ordinaire</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-pricing-box">
              <h3>Régionale</h3>
              <h2> <sub>A partir de</sub> 50DT</h2>
              <ul>
                <li>
                  <i class="bx bx-check"></i>
                  All-time access on all transports
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Have a good premium on member
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  60% Discount for the basic users
                </li>

              </ul>
              <a href="#" class="default-btn">
                <span>Commander</span>
              </a>
              <span class="quality">Scolaire</span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-pricing-box">
              <h3>Régionale</h3>
              <h2> <sub>A partir de</sub> 60DT</h2>
              <ul>
                <li>
                  <i class="bx bx-check"></i>
                  All-time access on all transports
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  Have a good premium on member
                </li>
                <li>
                  <i class="bx bx-check"></i>
                  60% Discount for the basic users
                </li>

              </ul>
              <a href="#" class="default-btn">
                <span>Commander</span>
              </a>
              <span class="quality">Ordinaire</span>
            </div>
          </div>


        </div>
      </div>
    </section>

    <section class="blog-area ptb-100">
      <div class="container">
        <div class="section-title">
          <span>Évenements</span>
          <h2>Lorem ipsum dolor sit, amet.</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit porro, aliquid reprehenderit iusto
            inventore sint beatae ipsum impedit in sit numquam illum distinctio sequi quisquam et hic tempore
          </p>
        </div>
        <div class="row">
          <div class="blog-slider owl-carousel owl-theme">
            <div class="single-blog-post">
              <div class="post-image">
                <a href="#">
                  <img src="assets/img/blog/blog1.jpg" alt="image">
                </a>
              </div>
              <div class="blog-content">
                <div class="date">
                  <i class="bx bx-calendar"></i>
                  <span>06 October 2023</span>
                </div>
                <h3>
                  <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                </h3>
                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel
                  facilisis ultrices Risus ipsum.</p>
                <a href="#" class="default-btn">
                  <span>Voir Plus</span>
                </a>
              </div>
            </div>
            <div class="single-blog-post">
              <div class="post-image">
                <a href="#">
                  <img src="assets/img/blog/blog2.jpg" alt="image">
                </a>
              </div>
              <div class="blog-content">
                <div class="date">
                  <i class="bx bx-calendar"></i>
                  <span>06 October 2023</span>
                </div>
                <h3>
                  <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                </h3>
                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel
                  facilisis ultrices Risus ipsum.</p>
                <a href="#" class="default-btn">
                  <span>Voir Plus</span>
                </a>
              </div>
            </div>
            <div class="single-blog-post">
              <div class="post-image">
                <a href="#">
                  <img src="assets/img/blog/blog4.jpg" alt="image">
                </a>
              </div>
              <div class="blog-content">
                <div class="date">
                  <i class="bx bx-calendar"></i>
                  <span>06 October 2023</span>
                </div>
                <h3>
                  <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                </h3>
                <p>Luis ipsum suspendisse ultrices. Risus commodo viverra maecenas accumsan lacus vel
                  facilisis ultrices Risus ipsum.</p>
                <a href="#" class="default-btn">
                  <span>Voir Plus</span>
                </a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>

    <?php include('partner.php') ?>

    <?php include('footer.php') ?>