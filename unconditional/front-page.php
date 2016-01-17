<?php

get_header();
$unconditional_feed_header = esc_html(get_theme_mod( 'unconditional_feed_header_title' ));
if ( get_theme_mod( 'unconditional_services_visibility' ) != 1 ) { ?>


<section class="container-fluid" id="section2">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-2">
      <div class="lukes-about">
        <div class="inner-text">
          <?php
            query_posts(array ( 'category_name' => 'about' ));
            while (have_posts()) : the_post();
            the_content();
            endwhile;
            ?>
        </div>
        <div class="carousel">
          <div class="jcarousel-wrapper">
            <!-- Carousel -->
            <div class="jcarousel">
              <ul>
                <li><img src="/wordpress/wp-content/uploads/2015/09/carousel-peanut.png"></li>
                <li><img src="/wordpress/wp-content/uploads/2015/09/carousel-usda.png"></li>
                <li><img src="/wordpress/wp-content/uploads/2015/09/carousel-verified.png"></li>
                <li><img src="/wordpress/wp-content/uploads/2015/09/carousel-vegan.png"></li>
                <li><img src="/wordpress/wp-content/uploads/2015/09/carousel-gluten.png"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <?php // get_template_part( 'parts/boxes' ); ?>
	<div class="clearfix"></div>
</section>
<section class="container-fluid" id="section3">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="snack-text">
        <img src="/wordpress/wp-content/uploads/2015/09/snaks_text1.png">
      </div>
      <div class="snack-image right">
        <img src="/wordpress/wp-content/uploads/2015/09/beans1.png">
      </div>
    </div>
  </div>
</section>
<section class="container-fluid" id="section4">
  <div class="row">
    <div class="col-sm-11 col-sm-offset-1">
      <div class="snack-image">
        <img src="/wordpress/wp-content/uploads/2015/09/spinach.png">
      </div>
      <div class="lukes-mailing">
        <div class="text-left">
          <h1>Keeping up with Luke</h1>
          <a class="open-modal" id="modal-emailForm" href="#"><img src="/wordpress/wp-content/uploads/2015/09/mailing_list.png"></a>
        </div>
        <div class="lukes-mailing-box">
          <img src="/wordpress/wp-content/uploads/2015/09/mail.png">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid chip-left salt-right" id="our-products">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="snack-selector">
            <ul id="tabs">
              <li class="active"><a href="#multi"><img src="/wordpress/wp-content/uploads/2015/09/multigrain_text.png"></a></li>
              <li><a href="#clouds"><img src="/wordpress/wp-content/uploads/2015/09/clouds1img.png"></a></li>
              <li><a href="#crackers"><img src="/wordpress/wp-content/uploads/2015/09/crackers_text.png"></a></li>
              <li><a href="#potatos"><img src="/wordpress/wp-content/uploads/2015/09/chips_text.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid corn-left chip-right">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="snack-viewer">
        <div id="multi" class="tab-content">
          <div class="gallery-wrapper">
            <div class="controls"></div>
            <div class="gallery-container">
              <div class="gallery-all-btn">
                <!-- <h1><a href="">View All Products!</a></h1> -->
              </div>
              <div class="gallery-multi">
                <ul>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_Superfood2.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Superfood_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (CORN, BROWN RICE, MILLET, QUINOA, AMARANTH), LUKE’S ORGANC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC SESAME SEEDS, ORGANIC SWEET POTATO, ORGANIC BUCKWHEAT GROATS, ORGANIC HEMP SEED, SEA SALT</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_Ancient_Grain2.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Ancient_Grain_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS:  LUKE’S ORGANIC GRAIN & SEED BLEND (CORN, BROWN RICE, MILLET, QUINOA, AMARANTH), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC FLAX SEEDS, ORGANIC SESAME SEEDS, SEA SALT</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_Brown_Rice_Chips.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Brown_Rice_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (WHOLE GRAIN BROWN RICE, BROWN RICE FLOUR, MILLET FLOUR, QUINOA FLOUR AMARANTH FLOUR), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND /OR RED PALM OLEIN), ORGANIC SESAME SEEDS, SEA SALT, ORGANIC NATURAL COLOR</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/11/Lukes-ChiaChips-NEW-US-NoWt-Faux.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Cha_Cha_Cha_Chia_Seed_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (CORN, BROWN RICE, MILLET, QUINOA, AMARANTH), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC FLAX SEEDS, ORGANIC CHIA SEEDS, SEA SALT</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_Kale2.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Kale_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (CORN, BROWN RICE, MILLET, QUINOA, AMARANTH), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN) ORGANIC KALE, SEA SALT</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_Protein2.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/Protein_Ing.jpg" height="330" width="214">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (CORN, BROWN RICE, MILLET, QUINOA, AMARANTH), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC RED LENTILS, SEA SALT</p>
                  </li>
                  <li>
                    <img src="/wordpress/wp-content/uploads/2015/09/mi_ProteinFiber.png" height="378" width="255">
                    <img class="facts" src="/wordpress/wp-content/uploads/2015/09/ProteinFiber_NF.png" height="330" width="214">
                    <p>INGREDIENTS:  LUKE’S ORGANIC GRAIN & SEED BLEND (WHOLE GRAIN BROWN RICE, BROWN RICE FLOUR, QUINOA, AMARANTH, MILLET), ORGANIC BLACK BEANS, LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER AND/OR SAFFLOWER OIL AND/OR RED PALM OLEIN), ORGANIC PSYLLIUM, SEA SALT</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="clouds" class="tab-content">
          <div class="gallery-wrapper">
            <div class="controls"></div>
            <div class="gallery-container">
              <div class="gallery-all-btn">
                <!-- <h1><a href="">View All Products!</a></h1> -->
              </div>
              <div class="gallery-multi">
                <ul>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Fire-Clouds.jpg.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Fire-Clouds-NutsFacts.jpg1_.png">
                    <p>INGREDIENTS: LUKE’S ORGANIC MULTIGRAIN BLEND (WHOLE GRAIN CORN, WHOLE GRAIN RICE), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER OIL, SAFFLOWER OIL AND/OR RED PALM OLEIN), ORGANIC SEASONING (ORGANIC BUTTERMILK, ORGANIC CREAM, MAY CONTAIN ONE OR MORE OF THE FOLLOWING (ORGANIC NONFAT MILK, ORGANIC WHEY, CULTURES), SEA SALT, ORGANIC SPICES, ORGANIC GARLIC POWDER, ORGANIC ONION POWDER, ORGANIC MALTODEXTRIN, ORGANIC BUTTERMILK FLAVOR, ORGANIC TOMATOR POWER, ORGANIC PARSLEY, ORGANIC VINEGAR, CITRIC ACID, ORGANIC HABANERO PEPPER, NATURAL EXTRACTIVES OF PAPRIKA, NATURAL FLAVOR)
                      <strong>ALLERGENS: CONTAINS MILK</strong>
                    </p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Cheddar-Clouds_1.jpg1_.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Cheddar-Clouds-NutsFact.png">
                    <p>INGREDIENT: ORGANIC WHOLE GRAIN CORN, ORGANIC RICE, LUKE’S ORGANIC
                      SUSTAINABLE OIL BLEND (SUNFLOWER OIL, SAFFLOWER OIL AND/OR RED PALM
                      OLIEN), ORGANIC CHEDDAR CHEESE (ORGANIC CULTURED PASTEURIZED MILK, SALT,
                      ENZYMES), AND/OR ORGANIC NONFAT MILK, ORGANIC LACTOSE, ORGANIC WHEY,
                      ORGANIC BUTTERMILK, SALT, DISODIUM PHOSPHATE)
                      <strong>CONTAINS: MILK INGREDIENTS</strong></p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Butter-Clouds.jpg.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_mi_Butter-Clouds-NutsFacts_1.jpg.png">
                    <p>INGREDIENTS: LUKE’S ORGANIC MULTIGRAIN BLEND (WHOLE GRAIN CORN, WHOLE
                      GRAIN RICE), LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER OIL, SAFFLOWER
                      OIL AND/OR RED PALM OLEIN), ORGANIC BUTTER FLAVOR (SEA SALT, ORGANIC
                      TAPIOCA MALTODEXTRIN, ORGANICBUTTER FLAVOR, NATURAL FLAVOR), SALT

                      <strong>ALLERGENS: CONTAINS MILK</strong>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="crackers" class="tab-content">
          <div class="gallery-wrapper">
            <div class="controls"></div>
            <div class="gallery-container">
              <div class="gallery-all-btn">
                <!-- <h1><a href="">View All Products!</a></h1> -->
              </div>
              <div class="gallery-multi">
                <ul>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Bean__Seed1.jpg">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Bean__Seed_Ing1.jpg">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (BROWN RICE
                      FLOUR, MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC
                      POTATO STARCH, LUKE’S ORGANIC SUSTAINABLE OIL BLEND
                      (SUNFLOWER, SAFFLOWER AND/OR RED PALM OLEIN), ORGANIC BLACK
                      BEANS, SEA SALT, ORGANIC SESAME SEEDS</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Black_Pepper1.jpg">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Black_Pepper_Ing1.jpg">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (BROWN RICE
                      FLOUR, MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC
                      POTATO STARCH, LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER,
                      SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC BLACK PEPPER, SEA
                      SALT ORGANIC SESAME SEEDS</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Chia_Seed1.jpg">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/Chia_Seed_Ing1.jpg">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (BROWN RICE
                      FLOUR, MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC
                      POTATO STARCH, LUKE’S ORGANIC SUSTAINABLE OIL BLEND
                      (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC CHIA
                      SEEDS, ORGANIC RED QUINOA, SEA SALT</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Garden_Vegetable1.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Garden_Vegetable_Ing1.png">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (BROWN RICE FLOUR,
                      MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC POTATO
                      STARCH, LUKE’S ORGANIC VEGETABLE BLEND (SPINACH, RED BELL PEPPERS),
                      LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER,
                      AND/OR RED PALM OLEIN), ORGANIC SESAME SEEDS, SEA SALT, ORGANIC
                      GARLIC POWDER</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Multi_Seed1.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Multi_Seed_Ing1.png">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND (BROWN RICE
                      FLOUR, MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC
                      POTATO STARCH, LUKE’S ORGANIC SUSTAINABLE OIL BLEND
                      (SUNFLOWER, SAFFLOWER, AND/OR RED PALM OLEIN), ORGANIC
                      SESAME SEEDS, SEA SALT, ORGANICE RED QUINOA SEEDS</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Sea_Salt1.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/mi_Sea_Salt_Ing1.png">
                    <p>INGREDIENTS: LUKE’S ORGANIC GRAIN & SEED BLEND ( BROWN RICE FLOUR,
                      MILLET FLOUR, QUINOA FLOUR, AMARANTH FLOUR), ORGANIC POTATO
                      STARCH, LUKE’S ORGANIC SUSTAINABLE OIL BLEND (SUNFLOWER, SAFFLOWER
                      AND/OR RED PALM OLEIN), ORGANIC SESAME, SEA SALT</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="potatos" class="tab-content">
          <div class="gallery-wrapper">
            <div class="controls"></div>
            <div class="gallery-container">
              <div class="gallery-all-btn">
                <!-- <h1><a href="">View All Products!</a></h1> -->
              </div>
              <div class="gallery-multi">
                <ul>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/WAVY-POTATO-CHIPS.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/WAVY-POTATO-CHIPS-NF.png">
                    <p>INGREDIENTS:  LUKE’S ORGANIC POTATOES, LUKEL’S ORGANIC SUSTAINABLE OIL
                      BLEND (SUNFLOWER OIL, SAFFLOWER OIL AND/OR RED PALM OLEIN), SEA SALT</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/SOUR-CREAM-AND-ONION-POTATO-CHIPS.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/SOUR-CREAM-AND-ONION-POTATO-CHIPS-NF.png">
                    <p>INGREDIENTS:  LUKE’S ORGANIC POTATOES, LUKE’S ORGANIC SUSTAINABLE OIL BLEND
                      (SAFFLOWER OIL, SUNFLOWER AND/OR RED PALM OLEIN), ORGANIC SOUR CREAM &
                      ONION SEASONING (ORGANIC NONFAT MILK, LESS THAN 2% OF THE FOLLOWING:
                      ORGANIC TAPIOCA MALTODEXTRIN, ORGANIC ONION, ORGANIC WHEY, SALT ORGANIC
                      SOUR CREAM [ORGANIC CREAM, ORGANIC NONFAT MILK, ORGANIC CULTURES],
                      ORGANIC SUSTAINABLE PALM OIL, ORGANIC PARSLEY, ORGANIC LACTOSE, ORGANIC
                      BUTTERMILK, CITRIC ACID, ORGANIC NATURAL FLAVORS, ORGANIC LACTIC ACID), SEA
                      SALT.
                      <strong>CONTAINS: MILK INGREDIENTS</strong></p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/SEA-SALT-POTATO-CHIPS.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/SEA-SALT-POTATO-CHIPS-NF.png">
                    <p>INGREDIENTS:  LUKE’S ORGANIC POTATOES, LUKE’S ORGANIC SUSTAINANBLE OIL
                      BLEND (SUNFLOWER OIL, SAFFLOWER OIL AND/OR RED PALM OLEIN), SEA SALT</p>
                  </li>
                  <li>
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/BBQ-POTATO-CHIPS.png">
                    <img src="http://lukesorganic.com/wordpress/wp-content/uploads/2015/09/BBQ-POTATO-CHIPS-NF.png">
                    <p>INGREDIENTS:  LUKE’S ORGANIC POTATOES, LUKE’S ORGANIC SUSTAINABLE OIL BLEND
                      (SUNFLOWER OIL, SAFFLOWER OIL AND/OR RED PALM OLEIN), ORGANIC BARBECUE
                      SEASONING (ORGANIC TAPIOCA MALTODEXTRIN, SEA SALT, ORGANIC TOMATO,
                      ORGANIC PAPRIKA, ORGANIC ONION, ORGANIC GARLIC, NATURAL SMOKE FLAVOR,
                      ORGANIC VINEGAR, CITRIC ACID, ORGANIC SPICES, ORGANIC STEVIA)</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid" id="ingredients">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
         <div class="col-sm-8">
          <div class="snack-image">
            <img src="/wordpress/wp-content/uploads/2015/09/ingredients_text.png">
            <img src="/wordpress/wp-content/uploads/2015/09/carousel-gluten.png">
          </div>
          <div class="snack-image">
            <img src="/wordpress/wp-content/uploads/2015/09/carousel-verified.png">
            <img src="/wordpress/wp-content/uploads/2015/09/carousel-usda.png">
            <img src="/wordpress/wp-content/uploads/2015/09/carousel-vegan.png">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="snack-image">
            <img src="/wordpress/wp-content/uploads/2015/09/bowl.png">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-7 col-sm-offset-5">
          <div class="snack-image">
            <img src="/wordpress/wp-content/uploads/2015/09/so_good.png">
          </div>
        </div>
      </div>
      <div class="row" id="news">
        <div class="col-sm-6">
          <div class="pinterest-find-out">
            <a href="http://www.pinterest.com/lukesorganics/" target="_blank"><img src="/images/printest.png"></a>
            <h2>Find out what people are pairing Luke’s products with</h2>
          </div>
          <div class="pinterest-read-more">
            <div class="arow-left"><img src="/images/aerow_left.png"></div>
            <a href="http://www.pinterest.com/lukesorganics/" target="_blank">READ MORE</a>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumb"><img src="/images/thumb.png"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="container-fluid" id="news">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-sm-6">
          <div class="pinterest-find-out">
            <a href="http://www.pinterest.com/lukesorganics/" target="_blank"><img src="/images/printest.png"></a>
            <h2>Find out what people are pairing Luke’s products with</h2>
          </div>
          <div class="pinterest-read-more">
            <div class="arow-left"><img src="/images/aerow_left.png"></div>
            <a href="http://www.pinterest.com/lukesorganics/" target="_blank">READ MORE</a>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumb"><img src="/images/thumb.png"></div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="container-fluid" id="contact">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
          <!-- Contact Us -->
          <div class="lukes-contact">
            <h1>CONTACT US</h1>
            <div class="lukes-contact-box">
            <?php
              query_posts(array ( 'category_name' => 'contactUsForm' ));
              while (have_posts()) : the_post();
              the_content();
              endwhile;
            ?>
              <!-- <form id="frm_contact" name="frm_contact" action="/form/form-action.php" method="post">
                <input type="hidden" name="tableName" value="frm_contactus">
                <input type="hidden" name="formID" value="1">
                <input type="hidden" name="createdDate" value="2015-09-07 20:36:29">
                <input type="hidden" name="method" value="contactus">
                <input type="hidden" name="subject" value="Contact us Information">

                <input class="text_area" type="text" name="firstName" value="" placeholder="Name*">
                <input class="text_area" type="text" name="email" value="" placeholder="Email*">
                <textarea class="text_area" name="comment" placeholder="Comments*"></textarea>
                <input class="submit_btn" type="submit" name="" value="SUBMIT">
                <input class="submit_btn" type="button" name="" value="SUBMIT" onclick="alert('Coming soon...')">
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="overlay-modal">
  <div class="overlay-container">
    <div class="close-modal"></div>
    <div class="overlay-contents"></div>
    <!-- Load Correct Modal Content -->
  </div>
</div>
<?php }

?>
