<p class="bar full-w darkgeen mg-none" style="height:10px;"></p>
<footer class="relative">
  <section class="flex justify-sb footer">
    <div class="">
      <p><a href="<?php echo $info->root_url('index.php');?>"><img src="<?php echo $info->image('logo.png') ?>" alt=""> </a> </p>
      <p><a href="#"><i class="fa fa-phone">  +229 95181019</i></a>
      </p>
      <p class="middle"><a href="#"><i class="fa fa-envelope">  kabirou2001@gmail.com</i></a></p>
      <p class="rs"><a href="#"><i class="fa fa-facebook"></i> </a><a href="#"><i class="fa fa-twitter"></i> </a><a href="#"><i class="fa fa-linkedin"></i> </a><a href="#"><i class="fa fa-facebook"></i></a></p>
    </div>
    <div class="ct">
      <h2>Category</h2>
      <ul class="list">
        <li><a href="#">Rap </a></li>
        <li><a href="#">Urban Music </a> </li>
        <li><a href="#">AfroTrack</a></li>
        <li><a href="#">Raggae</a></li>
        <li><a href="#">RNB </a> </li>
      </ul>
    </div>
    <div class="">
      <h2>Quick Links</h2>
      <ul class="list">
        <li><a href="<?php echo $info->root_url('blog.php');?>">Blog </a></li>
        <li><a href="<?php echo $info->root_url('forum.php');?>">Forum </a> </li>
        <li><a href="#">Publier</a></li>
        <li><a href="<?php echo $info->root_url('inscription.php');?>">Sign In</a></li>
        <li><a href="#">Logout </a> </li>
      </ul>
    </div>
    <div class="sbp">
      <h2>Inscrivez-vous</h2>
      <?php
        if (isset($_POST['submit'])){
          mail('Kabirou2001@gmail.com','Test','Je suis entrain de tester');
        }
       ?>
      <p>Inscrivez-vous à la newletters de vos artistes preférés </p>
      <form class="" action="" method="post">
        <input type="email" name="email" placeholder="Email ici ">
        <input type="submit" name="submit" value="Subscript Now" class="half-wi mg-none">
      </form>
    </div>
  </section>
  <section class="flex justify-sb lst-f">
    <ul class="list flex justify-sb">
      <li><a href="#"> Terms of services *</a></li>
      <li><a href="#"> Privacy Policy *</a></li>
      <li><a href="#">Sitemap * </a></li>
      <li><a href="#">Security </a> </li>
    </ul>
    <p>2021 - <?php echo date('Y') ?> Designed by <a href="#">Kabir</a> </p>
  </section>
</footer>
<div class="up" style="display:none">
  <a href="#" class="fa fa-caret-up full"></a>
</div>
