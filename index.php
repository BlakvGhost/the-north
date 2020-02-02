<?php include 'meta.php';?>
<?php $online = (isset($_SESSION['online'])) ? true : false ; ?>
<?php if($info->isMobile()){ include 'vue/includes/mheader.php';}else {include 'vue/includes/header.php';} ?>

<?php if (isset($get['page'])): ?>
  <?php

  if ($get['page'] == 'home' )

  {
    include 'vue/home.php';

  }elseif ( $get['page'] == 'inscription')
  {
    if (!$online)
    {
        include 'vue/inscription.php';

    }else
    {
        header('Location:?page=home');
    }
  }elseif ( $get['page'] == 'connexion')
  {
    if (!$online)
    {
        include 'vue/login.php';

    }else
    {
        header('Location:?page=home');
    }
  }elseif ($get['page'] == 'forum')

   {
    include 'vue/forum.php';

  }elseif ($get['page'] == 'cours')

  {
    include 'vue/cours.php';
  }
  elseif ($get['page'] == 'blog')

  {
    include 'vue/blog.php';
  }
  elseif ($get['page'] == 'bye')

  {
    include 'vue/logout.php';
  }

  else {


    include 'vue/404.php';

  }



  ?>

<?php else: ?>
  <?php include 'vue/home.php'; ?>

<?php endif; ?>
<?php include 'vue/includes/footer.php' ?>
