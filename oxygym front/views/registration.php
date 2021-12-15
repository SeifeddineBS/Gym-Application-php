<?php 


session_start() ; 
header('location:connexion.html') ; 
$con = mysqli_connect('localhost','root','') ; 
mysqli_select_db($con, 'projet') ; 


 
$email = $_POST['email'];  
$mdp = $_POST['mdp']; 



$s = " select * from client where email = '$email' && mdp = '$mdp' "; 

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result); 

if($num == 1) {
	
    header('location:b.html') ; 
} else{
    header('location:connexion.html') ;
} 



?>
    
    
    
    
    