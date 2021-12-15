<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT idcom,datecom,etatcom,prixcom,idlivreur,lieucom FROM commande ORDER BY datecom ASC ');
  $executeIsOK = $pdoStat->execute();
  $listecommande= $pdoStat->fetchAll();

 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anti-Gaspenisie</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Commande
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        From
        <address>
          <strong>Cours De Jour</strong><br>
          Tunis<br>
          Phone: (+216) 25227514<br>
          Email: adem.gaied@gmail.com

        </address>
      </div>
      <br>
      <!-- /.col -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
  <thead>
    <tr>
      <th scope="col"> identifiant commande</th>
      <th scope="col"> date commande</th>
      <th scope="col"> etat commande</th>
      <th scope="col"> Prix commande</th>
      <th scope="col"> identifiant livreur</th>
      <th scope="col"> lieux commande</th>


      

    </tr>
  </thead>
  <tbody>
          <?php foreach ($listecommande as $listecommande): ?> 
              <tr>
              
                <td><?PHP echo $listecommande['idcom']; ?></td>
              	<td><?PHP echo $listecommande['datecom']; ?></td>
              	<td><?PHP echo $listecommande['etatcom']; ?></td>
               	<td><?PHP echo $listecommande['prixcom']; ?></td>
              	<td><?PHP echo $listecommande['idlivreur']; ?></td>
              	<td><?PHP echo $listecommande['lieucom']; ?></td>

                <td>
      
                </td>
                
              </tr>
                  <?php endforeach; 
                  ?>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
