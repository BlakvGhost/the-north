<?php
include 'db.php';
$post = $_POST;
$all =$_REQUEST;
if (isset($post['create'])){
  if (!empty($post['name']) && !empty($post['prenom']) && !empty($post['email']) && !empty($post['mdp'])){
    $add = ajouter($post['name'],$post['prenom'],$post['email'],$post['mdp']);
    if ($add){
      header('Location:../index.php?welcome');
    }else {
      header('Location:../inscription.php?error');
    }
  }else {
    header('Location:../inscription.php?error');
  }
}elseif (isset($all['s'])) {
  $data = verify($all['s']);
  echo $data;
}elseif (isset($post['login'])) {
  if (!empty($post['email']) && !empty($post['mdp']) ){
    $add = login($post['email'],$post['mdp']);
    if ($add){
      header('Location:../index.php?welcome');
    }else {
      header('Location:../login.php?error');
    }
  }else {
    header('Location:../login.php?error');
  }
}
