<nav class="navbar navbar-trans navbar-static-top" role="navigation">
<div class="social-nav">
    <div class="social-media">
        <a class="g_plus1" href="https://plus.google.com/u/0/104348966235887426131/posts" target="_blank"></a>
        <a class="fb1" href="https://www.facebook.com/pages/Lukes-Organic/1389523431308871?ref=hl" target="_blank"></a>
        <a class="in1" href="http://www.linkedin.com/in/goldcoastnaturaldistributing/" target="_blank"></a>
        <a class="yt1" href="https://www.youtube.com/channel/UCIRIwlQEntq8GW2VtHu4uBg" target="_blank"></a>
        <a class="twitter1" href="https://twitter.com/LukesOrganic" target="_blank"></a>
        <a class="flicker1" href="https://www.flickr.com/photos/119781927@N08/" target="_blank"></a>
        <a class="instgram" href="http://instagram.com/lukes_organic#" target="_blank"></a>
    </div>
    <div class="nav-extra">
        <a target="_blank" href="http://www.amazon.com/Lukes-Organic/b/ref=bl_dp_s_web_10160668011?ie=UTF8&node=10160668011&field-lbr_brands_browse-bin=Luke%27s+Organic">Shop Now</a>
     	<a class="open-modal" id="modal-faq" href="#">FAQ</a>
        <a class="open-modal" id="modal-fans" href="#">What Our Fans Say</a>
        <a class="open-modal" id="modal-ingredients" href="#">Our Ingredients</a>
    </div>
</div>
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'nav-container collapse navbar-collapse',
            'container_id'      => 'navbar-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
    ?>


  </div>
</nav>
