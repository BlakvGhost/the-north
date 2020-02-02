  <section class="sign-m index">
    <div id="loader"></div>
    <section class="flex bbx" id="main">
      <div class="sideright full-wi">
        <section class="flex sign">
          <div class="signav relative">
            <div class="shape26">
              <img src="<?php echo $info->image('shape/shape-26.png') ?>" alt="">
            </div>
            <div class="logo">
              <img src="<?php echo $info->image('register-login.png') ?>" alt="registration">
            </div>
          </div>
          <div class="signfm">
            <h1 class="relative">Connectez-vous <span class="lightgreen ">Maintenant</span><img src="<?php echo $info->image('shape/shape-6.png') ?>" class="absolute"> </h1>
            <form class="" action="<?php echo $info->control('form.php');?>" method="post">
              <p class="form-check fail box pa" <?php if(isset($get['error'])){echo " style=\"opacity:1!important\"";} ?>><?php if(isset($get['error'])){echo "Mot de Passe Incorrect";} ?> </p>

              <input type="email"name="email" placeholder="Email" autocomplete="off" data-u="email" onchange="verify(this.value,'conn')" required class="email">
              <label for="" class="flex vi">
                <input type="password" name="mdp" placeholder="Mot de passe" class="mdp" data-u="mdp" required>
                <i class="fa fa-eye"></i>
              </label>
              <input type="submit" name="login" value="Connectez-vous" class="create" disabled>
              <input type="submit" name="submitgoogle" value="Connectez-vous avec compte Google">
            </form>
          </div>
        </section>
      </div>
    </section>
  </section>
