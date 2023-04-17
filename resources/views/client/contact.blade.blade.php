    <?php include('header.php') ?>
    <?php $page_name = "Contact"  ?>
    <?php $bg_num =  4 ?>
    <?php include('banner.php') ?>
    <!-- --------------------------------------------------------------------------------------------------- -->

    <section class="contact-info-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>Adresse Email :</h3>
                        <a #"><span> contact@srtk.com </span></a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-phone-call"></i>
                        <h3>
                            Appelez-nous:</h3>
                        <a href="#">Tel. 77473600</a>
                        <a href="#">Tel. 77474436</a>


                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>Kasserine</h3>
                        <a href="#">Imm Sprols Fourat 1 Nouvelle Medina 1200</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="fa-solid fa-fax"></i>
                        <h3>Fax</h3>
                        <a href="#">77 474 501
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Envoyez-nous un message pour toute requête</h2>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required placeholder="Nom">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required class="form-control" placeholder="Téléphone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required placeholder="Sujet">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required placeholder=" Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group checkboxs">
                            <input type="checkbox" id="chb2">


                            <p>
                                Acceptez <a href="#">les termes et conditions</a> et <a href="#">la politique de confidentialité.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="default-btn btn-two">
                            <span>Envoyer</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2984.1935827502225!2d-88.54223508432493!3d41.586694691578195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880ebf5c2925d401%3A0x82b679cd7569709f!2s9170%20Millbrook%20Rd%2C%20Newark%2C%20IL%2060541%2C%20USA!5e0!3m2!1sen!2sbd!4v1601810027362!5m2!1sen!2sbd"></iframe>
    </div>

    <!-- --------------------------------------------------------------------------------------------------- -->
    <?php include('footer.php') ?>