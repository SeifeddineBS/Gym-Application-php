<!DOCTYPE html>
<html lang="en">

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

  <script src="coach.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Oxygym+ </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->


      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gestions
      </div>



      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="Gestions Produits.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Produits</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions Categorie.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions categorie</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions Commandes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Commandes</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions fournisseurs.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Fournisseurs</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestionclient.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions clients</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="GestionAbonnement.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions abonnements</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions Coachs.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Coachs</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions cours.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Cours</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gestions salles.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestions Salles</span></a>
      </li>
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">




          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">





            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                <img class="img-profile rounded-circle" src="carrelage-scrabble-lettre-a-10-x-10-cm-le0804001.jpg">
              </a>

            </li>
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Se deconnecter</span>
            </a>

          </ul>

        </nav>
        <?PHP
        include "../core/coursC.php";
          $cours1C=new CoursC();
          $listeCours=$cours1C->afficherCours();
          ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Gestions Cours</h1>
          <a href="tri_heure.php">Tri Par Heure</a>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                    <th>ID</th>
                      <th>Nom</th>
                      <th>Categorie</th>
                      <th>Nombre Min </th>
                      <th>Nombre Max</th>
                      <th>Date</th>
                      <th>Heure</th>
                      <th>idcoach</th>
                      <th>idsalle</th>

                    </tr>
                    <?PHP
foreach($listeCours as $row){
  ?>
	<tr>
  <td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><?PHP echo $row['nombremin']; ?></td>
	<td><?PHP echo $row['nombremax']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
  <td><?PHP echo $row['idcoach']; ?></td>
	<td><?PHP echo $row['idsalle']; ?></td>

  <td><form method="POST" action="supprimercours.php">
  
  <button type="submit" name="supprimer" value="supprimer" class="ajouter">Supprimer</button>
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
  <td><a href="modifierCours.php?id=<?PHP echo $row['id']; ?>"> 
	<button class="ajouter">Modifier</button></a></td>

</tr>
<?PHP
}
?>                </table>


       
                <button id="positionajouter" class="ajouter" href="#modalSubscriptionForm"
                  data-toggle="modal">Ajouter</button>
                <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Ajouter Cours</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                      
                  
                   

                        <form name="formajoutcours" onsubmit="return ajouter_cours()" method="POST" action="ajoutercours.php">
                          
                          <table>
                          <tr>
                              <td>
                                <input type="number" id="id"  name="id" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>ID</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="nom"  name="nom" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Nom</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="categorie" name="categorie" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Categorie</label> </td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="nombremin"  name="nombremin" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Nombre Min</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="nombremax" name="nombremax" >
  
                              </td>
  
                            </tr>
                            <tr>
                               
                                    <td>
                                        <label>Nombre Max</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="date" id="date"  name="date" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Date</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="heure"  name="heure" >

                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Heure</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="idcoach"  name="idcoach" >

                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>idcoach</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="idsalle"  name="idsalle" >

                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>idsalle</label></td>
  
                            </tr>
                           
                          </table>
                          <button class="btn btn-indigo"  >
                            Ajouter </button>
                        </form>


                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                      </div>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


</body>

</html>
