  <section>
    <div id="loader"></div>
    <section class="flex bbx mainblog" id="main">
      <?php include 'includes/sidebarblog.php' ?>
      <div class="sideright">
        <section class="flex fwp" id="blog">
          <?php for ($i=0; $i < 6 ; $i++): ?>
            <article class="bloged brd br15 trans">
              <nav class="logo">
                <img src="<?php echo $info->image('blog-01.jpg') ?>" alt="photo ..." class="br15">
              </nav>
              <nav class="detail">
                <p class="flex">
                  <a href="#" class="flex">
                    <img src="<?php echo $info->image('author-01.jpg')?>" alt="Photo de Wiliam Jason">
                 </a>
                 <span class="name">Jason William</span>
                <span class="brand"><a href="#" class="cg">Science</a> </span> </p>
                <h2>Data Science and Machine Learning with Python - Hands On!</h2>
                <p class="flex justify-sb">
                  <span><i class=" fa fa-clock-o lightgreen"></i> &nbsp; 21 March 2021 </span>
                  <span><i class="fa fa-heart lightgreen"></i>&nbsp; 2049+ </span>
                </p>
                <p class="readm mt-40"><a href="<?php echo $info->root_url('blogdetail.php');?>">Read More</a></p>
              </nav>
            </article>
          <?php endfor; ?>
        </section>
        <div class="dots flex justify-sb">
          <p><a href="#" class="fa fa-caret-left"></a></p>
          <p><a href="#">1</a> </p>
          <p><a href="#">3</a> </p>
          <p><a href="#">4</a> </p>
          <p><a href="#">5</a> </p>
          <p><a href="#" class="fa fa-caret-right"></a></p>
        </div>
      </div>
    </section>
  </section>
