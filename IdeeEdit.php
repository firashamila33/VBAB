<?php
include 'header.php';
?>
    <section class="contact_header top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Modifications</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact_us-second">
        <div class="container">
            <div class="row">


                <div class="col-md-8 col-sm-12 col-xs-12">
                    <header>
                        <h2>Edit your Idea</h2>
                        <p>
                            For more information contact Rapid Nutrition’s Investor Relations team. We value your
                            feedback and will respond to your question as quickly as possible. Alternatively click on
                            the ‘chat box’ at the bottom right corner of your computer.
                        </p>
                    </header>
                    <form action="Idee/modifierIdee.php" method="POST" class="contact-formm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grp" hidden>
                                    <label>ID</label>
                                    <input id="subject" type="text" class="form-control" name="id_to_edit" value="<?php echo $_GET['id_to_edit'] ?>" placeholder="Indiquer le Sujet" >
                                </div>
                                <div class="form-grp">
                                    <label>Titre</label>
                                    <input id="subject" type="text" class="form-control" name="idee_title" value="<?php echo $_GET['idee_title'] ?>" placeholder="Indiquer le Sujet">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label>Domaine</label>
                                    <input id="domaine" type="text" class="form-control" name="domaine_to_edit" value="<?php echo $_GET['domaine_to_edit'] ?>" placeholder="Domaine">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label>Description</label>
                                    <input id="subject" type="text" class="form-control" name="description" value="<?php echo $_GET['description_to_edit'] ?>"   placeholder="description">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="usrname"><span class="fa fa-photo"></span> Idea
                                        Image</label>
                                    <input type="file" class="form-control" name="pathImg" id="pathImg"
                                           accept=".jpg , .png">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="usrname"><span class="fa fa-file"></span> Idea
                                        Document</label>
                                    <input type="file" class="form-control" name="pathDoc" id="pathDoc" accept=".pdf">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-grp">
                                    <label for="usrname"><span class="fa fa-dollar"></span> Prix</label>
                                    <input type="number" class="form-control" placeholder="Entrer le prix" name="prix_to_edit" value="<?php echo $_GET['prix_to_edit'] ?>"  id="prix">
                                    <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                        Modifier
                                    </button>
                                </div>
                                <div id="success"></div>
                            </div>
                        </div>
                    </form>
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
                         data-markers="{	&quot;marker-1&quot;: [-38.038489, 145.119687, &quot;&lt;h4&gt;Main Head Office&lt;/h4&gt;&lt;p&gt;31 South Australia&lt;/p&gt;&quot;],		&quot;marker-2&quot;: [-38.021469, 145.118023, &quot;&lt;h4&gt;Branch Office&lt;/h4&gt;&lt;p&gt;31 Main Boulevar 33154&lt;/p&gt;&quot;]		}"
                         class="google-map"></div>

                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';

?>