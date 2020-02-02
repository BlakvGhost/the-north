<?php
session_start();
function connect($dbname='north',$user= 'north',$pass = 'passme#')
  {
    try {
    $db = new PDO("mysql:host=localhost;dbname=$dbname","$user","$pass" );
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
    }
    catch (\Exception $e) {
      echo "<div class='form_check fail'> Erreur de connexion à la Base de Données !</div> ";
      die();
    }
  }
function ajouter($nom,$prenom,$email,$mdp)
{
  $db = connect();
  $query = $db->prepare("INSERT INTO users(nom,prenom,email,mdp ) VALUES (:a,:b,:c,:d ) ");
  $exec = $query->execute(array(
    'a' => htmlentities($nom),
    'b' => htmlentities($prenom),
    'c' => htmlentities($email),
    'd' => password_hash(htmlentities($mdp),PASSWORD_DEFAULT )
  ));
  if($exec){
    $_SESSION['online'] = true;
    $_SESSION['photo'] = 'profile/user.jpg';
    $_SESSION['nom'] = htmlentities($nom);
    $_SESSION['prenom'] = htmlentities($prenom);
    $_SESSION['date'] = date('Y-m-d H-i-s');
    $_SESSION['role'] = 'student';
    return true;
  }else{
    return false;
  }
}
function verify($q)
{
  $db = connect();
  $query = $db->prepare("SELECT * FROM users WHERE email = ? ");
  $query->execute(array(htmlentities($q)));
  $data = $query->fetch();
  return $data['email'];
}
function login($email,$mdp)
{
  $db = connect();
  $query = $db->prepare("SELECT * FROM users WHERE email = ? ");
  $query->execute(array(htmlentities($email)));
  $data = $query->fetch();
  if (password_verify(htmlentities($mdp),$data['mdp']) ){
    $_SESSION['online'] = true;
    $_SESSION['photo'] = $data['photo'];
    $_SESSION['nom'] = $data['nom'];
    $_SESSION['prenom'] = $data['prenom'];
    $_SESSION['date'] = $data['eng'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['id'] = $data['id'];
    return true;
  }else {
    return false;
  }
}
