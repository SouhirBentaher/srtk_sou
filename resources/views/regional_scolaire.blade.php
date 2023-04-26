@include('header')
<?php $page_name = 'Abonnements regional scolaire'; ?>
<?php $bg_num = 3; ?>
@include('banner')


<!-- --------------------------------------------------------------------------------------------------- -->

<section class="checkout-area ptb-100">
    <div class="">
        <form>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="billing-details">
                        @include('abonnements_tab')
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-m-a">
                    <div class="order-details">
                        <div class="cart-totals">
                            <h3>General Conditions</h3>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur </li>
                                <li>Lorem ipsum dolor sit amet,</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>

                            </ul>
                        </div>
                        <div class="faq-accordion">
                            <h3>Payment Method</h3>
                            <ul class="accordion">
                                <li class="accordion-item active">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Direct Bank Transfer
                                    </a>
                                    <p class="accordion-content show">
                                        Make your payment directly into our bank account. Please use your Order ID
                                        as the payment reference. Your order won’t be shipped until the funds have
                                        our account.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        E-dinar
                                    </a>
                                    <p class="accordion-content">
                                        piciatis deleniti, quod quasi id quae impedit autem libero, dolores
                                        asperissimos veniam maxime..
                                    </p>
                                </li>


                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Credit Card
                                    </a>
                                    <p class="accordion-content">
                                        you can pay with your credit card if you don’t have a PayPal account.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-differents-address">
                                        <label class="form-check-label" for="ship-different-address">I’ve read and
                                            accept the <a href="#">Terms & Conditions</a>*</label>
                                    </div>
                                </li>
                                <li class="place-order">
                                    <a href="#" class="default-btn two">
                                        <span>Commander</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>






<!---------------------------------------------------------------------------------------------------------- -->
@include('footer')
