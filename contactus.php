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
                                        <label>Numéro de télephone</label>
                                        <input id="name" type="text" name="numtelephone" placeholder="22 22 22 22 ">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-grp">
                                        <label>Prenom</label>
                                        <input id="email" type="text" name="prenom" placeholder="Foulen">
                                      </div>
                                      <div class="form-grp">
                                        <label>Email</label>
                                        <input id="email" type="email" name="email" placeholder="Foulen.Benfoulen@gmail.com">
                                      </div>
                                    </div>
                                  
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label>Sujet</label>
                                        <input id="subject" type="text" name="sujet" placeholder="Indiquer le Sujet">
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-grp">
                                        <label>Message</label>
                                        <textarea id="message" name="message" placeholder="Ecrire votre Message"></textarea>
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit">
                                                        Envoyer Message
                                                    </button>
                                      </div>
                                      <div id="success"></div>
                                    </div>
                                  </div>
                                </form>
						</div>
                       <div class="col-md-4 col-sm-8 col-xs-12 keep-in">

                               <div class="col-md-12">
                                   <h2> Contacter nous maintenant!</h2>
                               </div>


                           <div class='messages' style="overflow-y:scroll;"></div>

                           <textarea class='entree' placeholder="Tapez votre message ici !! "></textarea>
                           <script src="jquery-3.2.1.min.js"></script>
                           <script src="chat.js"></script>
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