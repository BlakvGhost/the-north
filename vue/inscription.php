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
            <h1 class="relative">Enregistrer vous <span class="lightgreen ">Maintenant</span><img src="<?php echo $info->image('shape/shape-6.png') ?>" class="absolute"> </h1>
            <form class="" action="<?php echo $info->control('form.php');?>" method="post">
              <p class="form-check fail box" <?php if(isset($get['error'])){echo " style=\"opacity:1!important\"";} ?>><?php if(isset($get['error'])){echo "Erreur d'enregistrement";} ?> </p>
              <input type="text" name="name" placeholder="Nom" autocomplete="off" data-name="nom" required>
              <p class="form-check fail box"></p>
              <input type="text" name="prenom" placeholder="Prenom" autocomplete="off" data-name="nom" required>
              <p class="form-check fail box pa"></p>
              <input type="email"name="email" placeholder="Email" autocomplete="off" data-name="email" required onchange="verify(this.value,'ins')" class="email">
              <p class="form-check fail box"></p>
              <label for="" class="flex vi">
                <input type="password" name="mdp" placeholder="Mot de passe" class="mdp" data-name="mdp" required>
                <i class="fa fa-eye"> </i>
              </label>
              <p class="form-check fail box"></p>
              <label for="" class="flex vi">
                <input type="password" name="pswd" placeholder="Confirmer le mot de passe" data-name="pswd" required>
                <i class="fa fa-eye"> </i>
              </label>
              <input type="submit" name="create" value="Creer un compte" data-name="submit" class="create" disabled>
              <input type="submit" name="submitgoogle" value="Enregistrez-vous avec compte Google" disabled>
            </form>
          </div>
        </section>
      </div>
    </section>
  </section>
