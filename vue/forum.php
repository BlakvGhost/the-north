  <section>
    <div id="loader"></div>
    <section class="flex bbx mainblog forum" id="main">
      <?php include 'includes/sidebarforum.php' ?>
      <div class="sideright">
        <section class="postforum">
          <div class="answer">
            <div class="" style="margin:6% 2%">
              <h2>Poser une questions ?</h2>
            </div>
            <form class="" action="" method="post">
              <p class="flex"><input type="text" name="yourname" placeholder="Name"><input type="email" name="yourmail" placeholder="Email"> </p>
              <textarea name="msg" placeholder="Message"></textarea>
              <input type="submit" name="send" value="Envoyer">
            </form>
          </div>
        </section>
        <div class="" style="margin:6% 2%">
          <h2>Questions </h2>
        </div>
        <section class="flex fwp" id="blog">
          <?php for ($i=0; $i < 6 ; $i++): ?>
            <article class="bloged brd br15 brx trans">
              <div class="detail detaill">
                <p class="flex">
                  <a href="#" class="flex">
                    <img src="img/author-01.jpg" alt="Photo de Wiliam Jason">
                 </a>
                 <span class="name">Jason William</span>
                <span class="brand"><a href="#" class="cg">Science</a> </span> </p>
                <h2>How Data Science and Machine Learning with Python - Hands On!</h2>
                <p class="flex justify-sb">
                  <span><i class=" fa fa-clock-o lightgreen"></i> &nbsp; 7 hours ago </span>
                  <span><i class="fa fa-comment lightgreen"></i>&nbsp; 7 </span>
                </p>
                <p class="readm mt-40"><a href="#">Details</a></p>
              </div>
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
