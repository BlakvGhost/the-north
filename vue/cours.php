  <section>
    <div id="loader"></div>
    <section class="flex bbx" id="main">
      <div class="sideright full-wi cours">
        <div class="table br15 slider relative">
          <p class="flex swiper-container">
            <a href="#" class="prev .swiper-button-prev"><i class="fa fa-caret-left"></i> </a>
            <a href="#" class="next .swiper-button-next"><i class="fa fa-caret-right"></i></a>
            <a href="#" class="df">RapRap</a>
            <a href="#" class="df">ZoukZouk</a>
            <a href="#" class="df">Raggae</a>
            <a href="#" class="df">RNB</a>
            <a href="#" class="df">AfroTrack</a>
            <a href="#" class="df">Folk</a>
            <a href="#" class="df">UrbanUrban</a>
            <a href="#" class="df">Anglais</a>
          </p>
        </div>
        <section class="flex fwp" id="blog">
          <?php for ($i = 0; $i <= 5; $i++ ): ?>
            <article class="bloged brd br15 trans w-25">
              <nav class="logo relative">
                <img src="img/h1.jpeg" alt="photo ..." class="br15">
                <div class="option absolute">
                  <nav class="opt-btn flex justify-sb" data-role="btn-view-cours">
                    <p data-role="btn-view-cours"></p>
                    <p data-role="btn-view-cours"></p>
                    <p data-role="btn-view-cours"></p>
                  </nav>
                  <ul class="list opt absolute" style="display:none">
                    <li><a href="#"><i class="fa fa-share"></i> Share</a> </li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i> Create Collections</a> </li>
                    <li><a href="#"><i class="fa fa-star"></i> Fovorite</a> </li>
                    <li><a href="#"><i class="fa fa-archive"></i> Archive</a> </li>
                  </ul>
                </div>
              </nav>
              <nav class="detail">
                <p class="flex">
                  <a href="#" class="flex">
                    <img src="img/h2.jpeg" alt="Photo de Wiliam Jason">
                 </a>
                 <span class="name">SESSIME</span>
                <span class="brand"><a href="#" class="cg">Benin</a> </span> </p>
                <h2>Album - Sessime </h2>
                <p class="flex justify-sb">
                  <span><i class=" fa fa-clock-o lightgreen"></i> &nbsp; 3 min 15s</span>
                  <span><i class="fa fa-download lightgreen"></i>&nbsp;29 Telechargement  </span>
                </p>
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
