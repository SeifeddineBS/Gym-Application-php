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
        <!-- End of Topbar -->
        <?PHP
        include "../core/coachC.php";
          $coach1C=new CoachC();
          $listeCoach=$coach1C->afficherCoach();
          ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Gestions Coachs</h1>
          <a href="tri_parsalaire.php">Tri Par SALAIRE</a>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>Cin</th>
                    <th>Nom</th>
                    <th>E-Mail</th>
                    <th>Age</th>
                    <th>Specialité</th>
                    <th>Experience</th>
                    <th>Salaire DT/H</th>
                    <th>Date de debut</th>
                    <th>Image_Name</th>
                      

                  </tr>
                  <?PHP
foreach($listeCoach as $row){
  ?>
	<tr>
  <td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nomprenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['age']; ?></td>
	<td><?PHP echo $row['specialite']; ?></td>
	<td><?PHP echo $row['experience']; ?></td>
	<td><?PHP echo $row['salaire']; ?></td>
  <td><?PHP echo $row['date']; ?></td>
  <td><?PHP echo $row['image']; ?></td>
  <td><a href="mail_coach.php?email=<?php echo $row['email']; ?>">ENVOYER MAIL</a> </td>
  <td><form method="POST" action="supprimerCoach.php">
  <button type="submit" name="supprimer" value="supprimer" class="ajouter">Supprimer</button>
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
  

	 <td><a href="modifierCoach.php?cin=<?PHP echo $row['cin']; ?>"> 
	<button class="ajouter">Modifier</button></a></td>

</tr>
<?PHP
}
?>
                
                
                </table>
                <button id="positionajouter" class="ajouter" href="#modalSubscriptionForm"
                  data-toggle="modal">Ajouter</button>
                <form method="POST" action="pdff.php">
                  <button id="positionajouter" class="ajouter" name="create_pdf">PDF</button>
                  </form>
                  <form method="POST" action="stat_coach.php">
                  <button id="positionajouter" class="ajouter">STAT</button>
                  </form>
                 
                      <div class="modal-body mx-3">
                        <form name="formajoutcoach" onsubmit="return ajouter_coach()" method="POST" action="ajoutercoach.php">
                                   
                          
                          
                          <table>
                          <tr>
                              <td>
                                <input type="number" id="cin" class="cin" name="cin" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Cin</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="nomprenom" class="nomprenom" name="nomprenom" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Nom et Prenom</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="email" id="email"  name="email" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>E-mail</label> </td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="age" class="age" name="age" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Age</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="specialite" class="specialite" name="specialite" >
  
                              </td>
  
                            </tr>
                            <tr>
                               
                                    <td>
                                        <label>Specialité</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="experience" class="ecperience" name="experience" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Experience</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="salaire" class="salaire" name="salaire" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Salaire</label></td>
  
                            </tr>
                            <tr>
                                  <td>
                                      <input type="date" id="date" class="date" name="date" ></td>
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Date De Debut</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                  <label>FILE:</label><input type="file" name="image" />  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Image</label></td>
  
                            </tr>
                            <tr>
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

</html>