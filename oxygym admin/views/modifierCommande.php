










<HTML>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN Oxygym +</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="oxygym.css" rel="stylesheet">

  <script src="coach1.js"></script>

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center">Modifier Commandes</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
			<div >
                  <div>
                    <div >
                      <div >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
					  <div class="modal-body mx-3"><?PHP
ob_start();
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['idcom'])){
	$commandeC=new commandeC();
    $result=$commandeC->recupererCommande($_GET['idcom']);
	foreach($result as $row){
		$idcom=$row['idcom'];
		$id=$row['id'];
		$datecom=$row['datecom'];
		$etatcom=$row['etatcom'];
		$prixcom=$row['prixcom'];
		$idlivreur=$row['idlivreur'];
		$lieucom=$row['lieucom'];
    ?>

    <form name="formmodifiercommande"  method="POST" action="modifierCommande.php?idcom=<?PHP echo $row['idcom']; ?>" >
						
					<div class="form-group">
					<label>ID Commande</label>
					<input type="hcinden" class="form-control" name="idcom_ini" value="<?PHP echo $_GET['idcom'];?>" rows="10" >
					</div>
						  <div class="form-group">
						<label>ID Client</label>
						<input value="<?PHP echo $id?>" class="form-control" name="id" id="id" placeholder="Votre Nom" rows="10" type="number" ></textarea>
          </div>
          <div class="form-group">
						<label>Etat Commande</label>
						<input value="<?PHP echo $etatcom?>" class="form-control" name="etatcom" id="etatcom" placeholder="Votre Age" rows="10" type="text" ></textarea>
					</div>
					<div class="form-group">
						<label>Date Commande</label>
						<input value="<?PHP echo $datecom?>" class="form-control" name="datecom" id="datecom" placeholder="Votre Email" rows="10" type="date" ></textarea>
					</div>

					<div class="form-group">
						<label>Prix Commande</label>
						<input value="<?PHP echo $prixcom?>" class="form-control" name="prixcom" id="prixcom" placeholder="Votre Specialite" rows="10" type="number" ></textarea>
					</div>
					<div class="form-group">
						<label>ID Livreur</label>
						<input value="<?PHP echo $idlivreur?>" class="form-control" name="idlivreur" id="idlivreur" placeholder="Votre Experience" rows="10" type="number" ></textarea>
					</div>
					<div class="form-group">
						<label>Lieux Livraison</label>
						<input value="<?PHP echo $lieucom?>" class="form-control" name="lieucom" id="lieucom" placeholder="Votre Salaire" rows="10" type="text" ></textarea>
					</div>
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
	$commande=new commande($_POST['idcom_ini'],$_POST['id'],$_POST['etatcom'],$_POST['datecom'],$_POST['prixcom'],$_POST['idlivreur'],$_POST['lieucom']);
	$commandeC->modifierCommande($commande,$_POST['idcom_ini']);
	header('Location: Gestions Commandes.php');
} ob_end_flush();?>
</div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>






</body>




