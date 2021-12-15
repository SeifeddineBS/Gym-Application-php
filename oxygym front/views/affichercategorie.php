<?PHP
include "../core/categorieC.php";
$categorie1C=new CategorieC();
$listecategories=$categorie1C->affichercategories();
?>
<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Identifiant</th>
                      <th>Nom Catégorie</th>
                      <th>Famille</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <?PHP
foreach($listecategories as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idC']; ?></td>
  <td><?PHP echo $row['nomC']; ?></td>
  <td><?PHP echo $row['Famille']; ?></td>
  <td><form method="POST" action="supprimercategorie.php">
  <input type="submit" name="supprimer" value="Supprimer">
  <input type="hidden" value="<?PHP echo $row['idC']; ?>" name="idC">
  </form>
  </td>
  <td><a href="modifiercategorie.php?idC=<?PHP echo $row['idC']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>

               
    
                  </tfoot>
                  <tbody>
                   
                  </tbody>
                </table>