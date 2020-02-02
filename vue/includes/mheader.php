<header class="">
  <section class="h2 relative">
    <div class="under-h2 flex justify-sb trans">
      <div class="logo">
        <a href="index.php"><img src="<?php echo $info->image('logo.png') ?>" alt=""></a>
      </div>
      <div class="menu w10 pd2">
        <nav class="m"></nav>
        <nav class="m"></nav>
        <nav class="m"></nav>
      </div>
    </div>
    <?php include 'middle.php'; ?>
    <div class="absolute panel hidden_pan trans">
      <div class="close absolute">
        <i class="fa fa-close fa-5x bolder" role="button"></i>
      </div>
      <div class="hct fa-2x">
        <p><i class="fa fa-phone lightgreen"></i> <a href="#"> +229 95181019 </a> </p>
        <p><i class="fa fa-envelope lightgreen"></i> <a href="#">kabirou2001@gmail.com </a> </p>
      </div>
      <div class="login">
        <button type="button" name="button"><a href="<?php echo $info->root_url('login.php');?>">Sign In</a> </button>
        <button type="button" name="button"><a href="<?php echo $info->root_url('inscription.php');?>">Sign Up</a></button>
      </div>
      <div class="div-ul">
        <ul class="list">
          <li><a href="?page=home">Home</a> </li>
          <li><a href="?page=cours">Musique</a> </li>
          <li><a href="?page=blog">Videos</a> </li>
          <li><a href="?page=cours">Steaming</a> </li>
          <li><a href="?page=home">Actualites</a> </li>
          <li><a href="?page=forum">Forum</a> </li>
        </ul>
      </div>
      <div class="hrs txtcenter">
        <a href="#"><i class="fa fa-facebook-square"></i> </a>
        <a href="#"><i class="fa fa-twitter-square"></i> </a>
        <a href="#"><i class="fa fa-linkedin-square"></i> </a>
        <a href="#"><i class="fa fa-dribbble"></i> </a>
      </div>
    </div>
  </section>

</header>
