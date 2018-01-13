<?php
include 'header.php';
include "Idee/crudIdee.php";


$crudIdee=new crudIdee();

$list=$crudIdee->afficher();
$i=0;
?>
<section class="contact_header top">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2>Prenom Nom</h2>
            </div>
        </div>
    </div>
</section>
<section class="our-blogs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <h2>Mes idées</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php foreach($list as $k): ?>
                <?php if ($i==3) {

                        echo'</div>
                                <hr>
                             <div class="row">';
                        $i=1;


                      }
                      else if($i<3){
                          $i++;
                      }
                ?>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-wraper">

                        <div class="img-box">
                            <div class="date">
                                <p>
                                    21
                                    <br>
                                    Aug
                                </p>
                            </div>
                            <a href=""> <img src="img/blog1.jpg" alt=""></a>
                        </div>
                        <div class="text-box">
                            <div class="text">
                                <h4><?php echo $k[2]; ?></h4>
                                <p>
                                    <?php echo $k[4]; ?>
                                </p>
                            </div>
                            <form method="POST" action ="Idee/supimerIdee.php" id="formI_Delete">
                                <input type="text" name="id_to_delete" value=<?php echo $k[0]; ?> hidden>
                                <button type="submit" value="<?php echo $k[0]; ?>" id="id_to_delete" name="id_to_delete"
                                        class="btn btn-danger pull-right">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </form>
                            <form method="GET" action ="IdeeEdit.php" id="formI_Find">
                                <input type="text" name="id_to_edit" value=<?php echo $k[0]; ?> hidden>
                                <button type="submit" value="<?php echo $k[0]; ?>"  name="id_to_find" class="btn btn-success"
                                        data-toggle="modal" data-target="#myModalEdit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                                <input type="text" name="idee_title" value=<?php echo $k[2]; ?> hidden>
                                <input type="text" name="id_ddto_edit" value=<?php echo $k[1]; ?> hidden>
                                <input type="text" name="id_ddto_edit" value=<?php echo $k[2]; ?> hidden>
                                <input type="text" name="domaine_to_edit" value=<?php echo $k[3]; ?> hidden>
                                <input type="text" name="description_to_edit" value=<?php echo $k[4]; ?> hidden>
                                <input type="text" name="prix_to_edit" value=<?php echo $k[6]; ?> hidden>
                            </form>


                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <div class="row">
        </div>
    </div>
</section>
<!--FLOAT BUTTON ADD-->
<a id="myBtn" href="#" style="position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	left:40px;
	background-color:rgba(72, 199, 236, 0.9);
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;">
    <i class="fa fa-plus my-float" style="margin-top:22px;"></i>
</a>
<!-- MODAL ADD -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" id="formID">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Titre</label>
                        <input type="text" class="form-control" placeholder="Entrer le titre" name="titre" id="titre">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Domaine</label>
                        <input type="text" class="form-control" placeholder="Entrer le domaine" name="domaine"
                               id="domaine">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Description</label>
                        <input type="text" class="form-control" placeholder="Entrer la description" name="description"
                               id="description">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Document</label>
                        <input type="file" class="form-control" name="pathDoc" id="pathDoc" accept=".pdf">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Image</label>
                        <input type="file" class="form-control" name="pathImg" id="pathImg" accept=".jpg , .png">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Date</label>
                        <input type="date" class="form-control" name="dateAjout" id="dateAjout">
                    </div>
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Prix</label>
                        <input type="number" class="form-control" placeholder="Entrer le prix" name="prix" id="prix">
                    </div>
                    <button type="submit" class="btn btn-success btn-default" ><span
                                class="glyphicon glyphicon-off" ></span> Ajouter
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Annuler
                </button>
            </div>
        </div>
    </div>
</div>
<!-- last section -->
<section class="get-quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3>Ensemble pour de meilleurs idées</h3>
                <p>
                    Nous sommes toujours là pour vous soutenir
                </p>
            </div>
        </div>
    </div>

</section>
<!-- footer section -->
<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="pull-left">
                <p>
                    Copyright © Finance Pro 2018. All rights reserved.
                </p>
            </div>
            <div class="pull-right">
                <p>
                    Created by: Infini team
                </p>
            </div>
        </div>
    </div>
</section>
<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i> </a>
<!-- Scripts -->
<script src="plugins/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="fancyapps-fancyBox/source/helpers/jquery.fancybox-media.js"></script>
<script src="plugins/wow.min.js"></script>
<script src="plugins/jquery.countTo.js"></script>
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="../../cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.min.js"></script>
<script src="plugins/map-helper.js"></script>
<script src="plugins/jquery.mixitup.min.js"></script>
<script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="plugins/Chart.min.js"></script>
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="plugins/waypoints.min.js"></script>
<script src="plugins/jquery.counterup.min.js"></script>
<script src="js/theme.js"></script>


<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });
    id_to_delete = 0;

    $("#formID").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "Idee/ajoutIdee.php",
            data: $(this).serialize(),
            success: function (data) {
                alert('Idee Ajouter');
                location.reload();
            },
        });
    });

</script>
</body>
<!-- Mirrored from www.mylamarena.com/vermun/Financial planing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 22:17:54 GMT -->
</html>
