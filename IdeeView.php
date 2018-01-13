<?php
include 'header.php';

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
                            <h4>Retail banks wake up to digital</h4>
                            <p>
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis
                                civelit sed quia non qui dolorem
                            </p>
                        </div>
                        <form method="POST" id="formI_Delete">
                            <input type="text" name="id_to_delete" value=<?php echo 20; ?> hidden>
                            <button type="submit" value="id_to_delete" id="id_to_delete" name="id_to_delete"
                                    class="btn btn-danger pull-right">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                        <form method="POST" id="formI_Find">
                            <input type="text" name="id_to_find" value=<?php echo 20; ?> hidden>
                            <button type="submit" value="id_to_find" id="id_to_find" name="id_to_find" class="btn btn-success"
                                    data-toggle="modal" data-target="#myModalEdit">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        </div>
    </div>
</section>
<!--FLOAT BUTTON-->
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

<!-- MODAL Modifier -->
<div class="modal fade" id="myModalEdit" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body" style="padding:40px 50px;" >
                <form role="form" id="formI_Edit">
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Titre</label>-->
<!--                        <input type="text" class="form-control" id="title" placeholder="Enter title"-->
<!--                               value='<script type="text/javascript">document.write(dato)</script>'>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Domaine</label>-->
<!--                        <input type="text" class="form-control" id="domaine" placeholder="Enter domain"-->
<!--                               value="'+data.domaine+'">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Description</label>-->
<!--                        <input type="text" class="form-control" id="description" placeholder="Enter description"-->
<!--                               value="'+data.description+'">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Document</label>-->
<!--                        <input type="file" class="form-control" id="description" placeholder="Enter description"-->
<!--                               value="'+data.path_doc+'">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Image</label>-->
<!--                        <input type="file" class="form-control" id="description" placeholder="Insert image"-->
<!--                               value="'+data.path_img+'">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Date</label>-->
<!--                        <input type="date" class="form-control" id="description" placeholder=""-->
<!--                               value="'+data.date_ajout+'">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Prix</label>-->
<!--                        <input type="number" class="form-control" id="prix" placeholder="Enter price"-->
<!--                               value="'+data.prix+'">-->
<!--                    </div>-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Annuler
                </button>
<!--                <button type="submit" class="btn btn-warning btn-default  pull-right" data-dismiss="modal"><span-->
<!--                            class="glyphicon glyphicon-off"></span> Modifier-->
<!--                </button>-->

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
<!--MOAL SCRIPT-->
<script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });
    });

</script>
<script>

    id_to_delete = 0;
    $("#formID").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "Idee/ajoutIdee.php",
            data: $(this).serialize(),
            success: function (data) {
                alert('Idee Ajouter');
            },
        });
    });
    $("#formI_Find").on("submit", function (event) {
        console.log("je suis là chercher");
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "Idee/chercher.php",
            data: $(this).serialize(),
            success: function (data) {
                dato=JSON.parse(data);
                console.log(JSON.parse(data));
                str='';
                str+='<div style="display:none" class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Titre</label><input type="text" class="form-control" name="id" id="id" placeholder="Enter title" value='+dato.id+' ></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Titre</label><input type="text" class="form-control" name="titre" id="titre" placeholder="Enter title" value='+dato.titre+'></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Domaine</label><input type="text" class="form-control" name="domaine" id="domaine" placeholder="Enter domain" value="'+dato.domaine+'"></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Description</label><input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value="'+dato.description+'"></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Document</label><input type="file" class="form-control" name="pathDoc" id="pathDoc" placeholder="Enter description" accept=".pdf" value="'+dato.path_doc+'"></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Idea Image</label><input type="file" class="form-control" name="pathImg" id="pathImg" placeholder="Insert image" accept=".jpg , .png" value="'+dato.path_img+'"></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Date</label><input type="date" class="form-control" name="dateAjout" id="dateAjout" placeholder="" value="'+dato.date_ajout+'"></div>';
                str+='<div class="form-group"><label for="usrname"><span class="glyphicon glyphicon-user"></span> Prix</label><input type="number" class="form-control" name="prix" id="prix" placeholder="Enter price" value="'+dato.prix+'"></div>';
                str+='<button type="submit" class="btn btn-warning btn-default  pull-right"  ><span class="glyphicon glyphicon-off" ></span> Modifier</button>';
                document.getElementById('formI_Edit').innerHTML=str;
                console.log(str);
            },
        });
    });
    $("#formI_Edit").on("submit", function (event) {
        console.log("je suis là modifier idee");
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "Idee/modifierIdee.php",
            data: $(this).serialize(),
            success: function (data) {
                //dato=JSON.parse(data);
                alert('yeees idee modifié');
            },
            error: function() {
                console.log('nnnnnnn  nnnnn');
            }
        });
    });
    $("#formI_Delete").on("submit", function (event) {
        console.log("je suis là");
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "Idee/supimerIdee.php",
            data: $(this).serialize(),
            success: function (data) {
                alert("Sa7itk SUpprimerrrrrr");
            },
        });
    });

</script>
</body>
<!-- Mirrored from www.mylamarena.com/vermun/Financial planing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Nov 2017 22:17:54 GMT -->
</html>
