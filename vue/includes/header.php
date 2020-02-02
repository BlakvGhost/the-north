<header class="relative">
  <section class="flex h1 b  trans">
    <p class="white">Creer un compte <a href="#" class="lightgreen">premium</a> a 1000 FCFA</p>
    <p class="middle">
        <?php if (!$online): ?>
          <a href="?page=connexion">Se connecter</a>
          <a href="?page=inscription">Creer un compte</a>
        <?php else: ?>
          <a href="<?php echo $info->root_url('dashbord/');?>">Admin</a>
        <?php endif; ?>
       </p>
    <p><a href="#"><i class="fa fa-facebook"></i> </a><a href="#"><i class="fa fa-twitter"></i> </a><a href="#"><i class="fa fa-linkedin"></i> </a><a href="#"><i class="fa fa-facebook"></i></a></p>
  </section>
  <section class="h2 relative">
    <div class="under-h2 flex justify-sb trans">
      <div class="logo">
        <a href="index.php"><img src="<?php echo $info->image('logo.png') ?>" alt=""></a>
      </div>
      <div class="div-ul">
        <ul class="list flex justify-sb">
          <li><a href="?page=home">Home</a> </li>
          <li><a href="?page=cours">Musique</a> </li>
          <li><a href="?page=blog">Videos</a> </li>
          <li><a href="?page=cours">Steaming</a> </li>
        </ul>
      </div>
      <div class="">
        <div class="last-ul">
          <ul class="list flex">
            <li><a href="?page=home">Actualites</a> </li>
            <li><a href="?page=forum">Forum</a> </li>
          </ul>
        </div>
      </div>

    </div>
    <?php include 'middle.php'; ?>
  </section>
</header>
