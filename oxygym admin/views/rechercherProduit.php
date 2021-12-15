
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Identifiant</th>
                      <th>Nom produit</th>
                      <th>Quantite</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>image</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <?PHP
                    include "../core/produitC.php";
                    $produit1C=new ProduitC();
                    $listeproduits=$produit1C->rechercherProduit($_POST['idP']);
                    ?>
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
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
  </form>
  </td>
  <td><a href="modifierproduit.php?idP=<?PHP echo $row['idP']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>

               
    
                  </tfoot>
                  <tbody>
                   
                  </tbody>
                </table>
              
         