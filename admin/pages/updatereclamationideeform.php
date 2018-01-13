<?php
include 'header.php';
?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">CONTACT</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Liste des contacts
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <form role="form" action="updatereclamationsidee.php" method="POST">
                                <div class="col-lg-6">

                                    <input type="text" name="id"  value="<?php echo $_GET['id_reclmationidee']; ?>" hidden >


                                    <label for="disabledSelect">Nom</label>
                                    <input class="form-control" name="nom" type="text" value="<?php echo $_GET['nom']; ?>" disabled>




                                    <label for="disabledSelect">Etat</label>
                                    <input class="form-control" name="etat" type="text"  value="<?php echo $_GET['statut']; ?>" disabled>


                                    <label for="disabledSelect">Sujet</label>
                                    <input class="form-control" name="sujet" type="text"  value="<?php echo $_GET['type']; ?>" disabled>


                                    <label>Reponse</label>
                                    <textarea class="form-control" type="text" name="reponse" ></textarea>

                                </div>

                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-6">

                                    <label for="disabledSelect">Prenom</label>
                                    <input class="form-control" name="prenom" type="text"  value="<?php echo $_GET['prenom']; ?>" disabled>


                                    <label for="disabledSelect">Date de contact</label>
                                    <input class="form-control" name="&datereclamation" type="date" value="<?php echo $_GET['datereclamation']; ?>" disabled>


                                    <label for="disabledSelect">Contenu</label>
                                    <input class="form-control" name="contenu" type="text" value="<?php echo $_GET['contenu']; ?>"  disabled>
                                    <br>
                                    <br>

                                    <div class="form-group">
                                        <button class="btn btn-default hvr-bounce-to-right" type="submit" value="Valider" id="button" name="button"> Traiter </button>

                                    </div>

                                </div>
                            </form>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    </body>

    </html>
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/01/2018
 * Time: 03:37
 */