<?PHP
include "../core/categorieC.php";
include "../core/produitC.php";

                    $produit1C=new ProduitC();
                    $listeproduits=$produit1C->afficherproduits();

$categorie1C=new CategorieC();
$listecategories=$categorie1C->affichercategories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript"  src="controlesaisie.js"></script>
<script type="text/javascript" src="nizar.js"></script>
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
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Gestions Produits</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
              <div class="table-responsive">
                <!-- table de produit fel back -->

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>id</th>
                    <th>Nom de produit</th>
                    <th>quantité</th>
                    <th>description</th>
                    <th>prix</th>
                    <th>image</th>
                  </tr>
<?PHP

foreach($listeproduits as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idP']; ?></td>
  <td><?PHP echo $row['nomP']; ?></td>
  <td><?PHP echo $row['quantiteP']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><a><img class="" src="images/portfolio/<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>
  <td><form method="POST" action="supprimerproduit.php">
  <button class="btn btn-danger btn-circle" name="supprimer">
                    <i class="fas fa-trash"></i>
                  </button>
  <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
  </form>
  </td>
  <td><a href="modifierproduit.php?idP=<?PHP echo $row['idP']; ?>" class="btn btn-info ">MODIFER</a></td>
  </tr>
  <?PHP
}
?>

                
                
                </table>
                

                <button id="positionajouter" class="ajouter" href="#modalSubscriptionForm"
                  data-toggle="modal">Ajouter</button>
                  
                  <form method="POST" action="rechercherProduit.php">
                    <table>
                        <tr>
                        
                        <td><input type="text" name="idP" placeholder="donner l'id:"></td>
                          <td><input type="submit" name="rechercher" value="rechercher" class="btn btn-success "></td>
                      </tr>              
                    </table>
                  </form>

                  <form method="POST" action="pdf.php"> 
                                <button data-toggle="tooltip" title="pdf" class="pd-setting-ed btn btn-success"><i class="fa fa-print" aria-hidden="true"></i></button>
                                <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP" >
                            </form>

                  <!-- table categorie fel back -->

                  

               <!--
                <button id="positionajouter" class="ajouter" href="#modalSubscriptionForm"
                  data-toggle="modal">Ajouter</button>
                   -->

                   
                         

<br>

<a href="mail.php">envoyer mail</a>

                <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <!-- tethal formulaire ta3 produit -->
                        <h4 class="modal-title w-100 font-weight-bold">Ajouter Produits</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
                       

                        <form name="f1"  action="ajouterproduit.php" method="POST">
                          <table>
                            <tr>
                              <td >
                                <input type="text" id="nomprenom" class="nomprenom" name="idP" required >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td id="aa">
                                    <label>id</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="specialite" class="specialite" name="nomP" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Nom de produits</label> </td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="number" id="age"  class="age" name="quantiteP"  >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Quantité</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="specialite"  class="specialite" name="description" >
  
                              </td>
  
                            </tr>
                            <tr>
                               
                                    <td>
                                        <label>Description</label></td>
  
                            </tr>
                            <tr>
                              <td>
                                <input type="text" id="experience" class="experience" name="prix" >
  
                              </td>
  
                            </tr>
                            <tr>
                                <td>
                                    <label>Prix</label></td>
  
                            </tr>
                            
                             <tr>
                                <td>
                                    <label>Image</label>
                                  </td>
  
                            </tr>
                                     <tr>
                              <td>
                                <select name="idc" id="pet-select">
                                    <?PHP foreach($listecategories as $row){ ?>
    <option value="<?PHP echo $row['idC']; ?>"><?PHP echo $row['nomC']; ?></option>
  <?PHP } ?>

</select>
                              </td>
  
                            </tr>
                                   <tr>
                                <td>
                                    <label>categorie</label>
                                  </td>
  
                            </tr>
                            <tr>
                                  <td>
                                      <input type="file" name="image">
  
                              </td>
  
                            </tr> 
                            <tr>
                              <td>
                                <input type="submit" name="ajouter" value="ajouter" onclick="verifier()" , enctype="multipart/form-data" >
                              </td>
                            </tr>             
</table>
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