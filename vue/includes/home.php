  <section class="index">
    <div id="loader"></div>
    <section class="bbx" id="main">
      <div class="sideright full-wi">
        <section class="ind1">
          <div class="flex in-s">
            <div class="half-w">
              <h1 class="fa-2x">All <span class="lightgreen">Courses</span> of Edule</h1>
              <img src="img/shape/shape-6.png" class="sh60">
            </div>
            <div class="half-w">
              <form class="ajax-s" action="" method="get">
                <p class="input flex"><input type="text" name="s" placeholder="Enter a keyword" autocomplete="off" class="do full-size"><input type="submit" name="chercher" class="dnone s"> <i class="fa fa-search fa-2x darkgeen trans" onclick="document.querySelector('.s').click()"></i> </p>
              </form>
            </div>
          </div>
          <div class="table br15 slider relative">
            <p class="flex swiper-container">
              <a href="#" class="prev .swiper-button-prev"><i class="fa fa-caret-left"></i> </a>
              <a href="#" class="next .swiper-button-next"><i class="fa fa-caret-right"></i></a>
              <a href="#" class="df">Francais</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Informatique</a>
              <a href="#" class="df">Anglais</a>
            </p>
          </div>
        </section>
        <section class="" id="blog">
          <div class="flex fwp">
            <?php for ($i=1;$i<=5;$i++): ?>
              <article class="bloged brd br15 trans w-25">
                <nav class="logo">
                  <img src="img/courses-0<?php echo $i; ?>.jpg" alt="photo ..." class="br15">
                </nav>
                <nav class="detail">
                  <p class="flex">
                    <a href="#" class="flex">
                      <img src="img/author-01.jpg" alt="Photo de Wiliam Jason">
                   </a>
                   <span class="name">Jason William</span>
                  <span class="brand"><a href="#" class="cg">Science</a> </span> </p>
                  <h2>Data Science and Machine Learning with Python - Hands On!</h2>
                  <p class="flex justify-sb">
                    <span><i class=" fa fa-clock-o lightgreen"></i> &nbsp; 8h 15min </span>
                    <span><i class="fa fa-book lightgreen"></i>&nbsp;29 Lectures  </span>
                  </p>
                  <div class=" pricbar mt-40 flex justify-sb">
                    <p>$380,50</p>
                    <p><span>4,9</span><span class="rose ml-10"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </p>
                   </div>
                </nav>
              </article>
            <?php endfor; ?>
          </div>
          <p class="ot"> <a href="cours.php">Other Courses</a> </p>
        </section>
        <section class="sec---lg relative">
          <div class="">
            <img src="img/shape/shape-12.png" class="ch21 animation-round">
            <img src="img/shape/shape-12.png" class="ch22 animation-round">
            <img src="img/shape/shape-13.svg" class="ch13">
          </div>
          <div class="flex w-80 mg-auto lg-d">
            <div class="half-w">
              <h2 class="lightgreen">Become A Instructor</h2>
              <h1 class="relative">You can join with Edule as a instructor?
                <img src="img/shape/shape-6.png" class="sh6"></h1>
            </div>
            <div class="half-w">
              <p class="if right"> <a href="cours.php" class="white bolder">Drop Informations</a> </p>
            </div>
          </div>
        </section>
        <section class="lsnw">
          <div class="txtcenter underlsnw">
            <h1 class="lightgreen mb">Latest News</h1>
            <h2 class="">Educational Tips & Tricks</h2>
          </div>
          <section class="flex fwp" id="blog">
            <?php for ($i=1;$i<=6;$i++): ?>
            <article class="bloged brd br15 trans">
              <nav class="logo">
                <img src="img/blog-01.jpg" alt="photo ..." class="br15">
              </nav>
              <nav class="detail">
                <p class="flex">
                  <a href="#" class="flex">
                    <img src="img/author-01.jpg" alt="Photo de Wiliam Jason">
                 </a>
                 <span class="name">Jason William</span>
                <span class="brand"><a href="#" class="cg">Science</a> </span> </p>
                <h2>Data Science and Machine Learning with Python - Hands On!</h2>
                <p class="flex justify-sb">
                  <span><i class=" fa fa-clock-o lightgreen"></i> &nbsp; 21 March 2021 </span>
                  <span><i class="fa fa-heart lightgreen"></i>&nbsp; 2049+ </span>
                </p>
                <p class="readm mt-40"><a href="#">Read More</a></p>
              </nav>
            </article>
            <?php endfor; ?>
          </section>
          <p class="ifx"> <a href="blog.php" class="white bolder">See More</a> </p>
        </section>
        <section class="lsnw">
          <div class="txtcenter underlsnw">
            <h1 class="lightgreen mb">Latest Forum News</h1>
            <h2 class="">Educational Tips & Tricks</h2>
          </div>
          <section class="flex fwp" id="blog">
          <?php for ($i=0; $i <4 ; $i++): ?>
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
          <p class="ifx"> <a href="blog.php" class="white bolder">See More</a> </p>
        </section>
      </div>
    </section>
  </section>
