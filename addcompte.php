<?php
include 'header.php';

?>
    <section class="contact_header top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_us-second">
        <div class="container">
            <div class="row">


                <div class="col-md-8 col-sm-12 col-xs-12">
                    <header>
                        <h2>Contact us today</h2>
                        <p>
                            For more information contact Rapid Nutrition’s Investor Relations team. We value your feedback and will respond to your question as quickly as possible. Alternatively click on the ‘chat box’ at the bottom right corner of your computer.
                        </p>
                    </header>
                    <form action="addContact.php" method="POST" class="contact-formm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>Nom</label>
                                    <input id="name" type="text" name="nom" placeholder="Ben Foulen">
                                </div>
                                <div class="form-grp">
                                    <label>Prenom</label>
                                    <input id="name" type="text" name="prenom" placeholder="22 22 22 22 ">
                                </div>
                                <div class="form-grp">
                                    <label>Numero_telephone</label>
                                    <input id="name" type="number" name="num_tel" placeholder="Ben Foulen">
                                </div>
                                <div class="form-grp">
                                    <label>Numero compte</label>
                                    <input id="name" type="number" name="num_compte" placeholder="Ben Foulen">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-grp">
                                    <label>CIN</label>
                                    <input id="email" type="number" name="cin" placeholder="Foulen">
                                </div>
                                <div class="form-grp">
                                    <label>Email</label>
                                    <input id="email" type="email" name="mail" placeholder="Foulen.Benfoulen@gmail.com">
                                </div>

                                <div class="form-grp">
                                    <label>Date de naissance</label>
                                    <input id="name" type="text" name="date_naissance" placeholder="Ben Foulen">
                                </div>
                                <div class="form-grp">
                                    <label>Adresse</label>
                                    <input id="name" type="text" name="adresse" placeholder="Ben Foulen">
                                </div>
                                <div class="form-grp">
                                    <label>solde</label>
                                    <input id="name" type="text" name="solde" placeholder="Ben Foulen">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-grp">

                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                        ajouter
                                    </button>
                                </div>
                                <div id="success"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 keep-in">
                    <header>
                        <h2>Keep In Touch!</h2>
                    </header>

                    <ul class="social-icons">
                        <li>
                            <a href="#" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <div class="contact-box">
                        <h3>Locations</h3>

                        <div class="address-box">
                            <div class="icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></div>

                            <p class="address-text">For more information contact Rapid Nutrition’s Investor Relations team.</p>
                        </div>
                        <div class="address-box">
                            <div class="icon-box"><i class="fa fa-phone" aria-hidden="true"></i></div>

                            <p class="address-text"> 1-888-123-4567 </p>
                        </div>
                        <div class="address-box">
                            <div class="icon-box"><i class="fa fa-envelope" aria-hidden="true"></i></div>

                            <p class="address-text"> info@structure.com </p>
                        </div>
                        <div class="address-box">
                            <div class="icon-box"><i class="fa fa-clock-o" aria-hidden="true"></i></div>

                            <p class="address-text">Mon - Sat: 09.00am to 18.00pm</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>




    <section class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="contact-google-map"
                         data-map-lat="-38.038489"
                         data-map-lng="145.119687"
                         data-map-zoom="12"
                         data-icon-path="img/map-marker.png"
                         data-map-title="Hanoi"
                         data-markers="{	&quot;marker-1&quot;: [-38.038489, 145.119687, &quot;&lt;h4&gt;Main Head Office&lt;/h4&gt;&lt;p&gt;31 South Australia&lt;/p&gt;&quot;],		&quot;marker-2&quot;: [-38.021469, 145.118023, &quot;&lt;h4&gt;Branch Office&lt;/h4&gt;&lt;p&gt;31 Main Boulevar 33154&lt;/p&gt;&quot;]		}" class="google-map"></div>

                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';

?>