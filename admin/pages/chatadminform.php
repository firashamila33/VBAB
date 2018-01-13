<?php
include ('header.php');
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

                                <div class="col-lg-6">

                                    <input type="text" name="id"  value="<?php echo $_GET['id_contact']; ?>" hidden >


                                    <label for="disabledSelect">Nom</label>
                                    <input class="form-control" name="nom" type="text" value="<?php echo $_GET['nom']; ?>">


                                    <label for="disabledSelect"> Prenom</label>
                                    <input class="form-control" name="numtelephone" type="text" value="<?php echo $_GET['prenom']; ?>" >


                                    <label for="disabledSelect">CIN</label>
                                    <input class="form-control" name="etat" type="text"  value="<?php echo $_GET['cin']; ?>" >


                                    <label for="disabledSelect">Email</label>
                                    <input class="form-control" name="sujet" type="text"  value="<?php echo $_GET['email']; ?>" >



                                </div>

                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-6">

                                    <div class='messages' style="overflow-y:scroll;"></div>
                                    <textarea class='entree'></textarea>
                                    <textarea class='idmembre' hidden><?php echo $_GET['id_membre'];?></textarea>


                                    <script src="jquery-3.2.1.min.js"></script>
                                    <script src="chat.js"></script>

                                </div>

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
