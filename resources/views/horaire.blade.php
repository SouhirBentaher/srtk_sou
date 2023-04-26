    <?php include('header.php') ?>
    <?php $page_name = "Horaire"  ?>
    <?php $bg_num = 7 ?>
    <?php include('banner.php') ?>
    <!-- --------------------------------------------------------------------------------------------------- -->

    <section class="checkout-area ptb-100">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab quote-list-tab">
                                        <ul class="tabs">
                                            <li>
                                                <a href="#">
                                                    Régional

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">

                                                    Urbain
                                                </a>
                                            </li>


                                        </ul>
                                        <div class="tab_content">
                                            <div class="tabs_item">
                                                <?php include('horaire_form.php') ?>
                                            </div>
                                            <div class="tabs_item">
                                                <?php include('horaire_form.php') ?>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 p-m-a">
                        <div class="order-details">
                            <div class="cart-totals">
                                <h3>Calendrier</h3>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- --------------------------------------------------------------------------------------------------- -->
    <?php include('footer.php') ?>
    <!-- --------------------------------------------------------------------------------------------------- -->