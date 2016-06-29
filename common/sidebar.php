<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 //phpinfo() 
/*          <div class="box">
          <div class="box_top"></div>
          <div class="box_middle">
            <h4>Random Site Fact</h4>
            <?php $random_site_fact = array(
              "This page now supports the Konami Code",
              "This site uses Google Analytics",
              "Currently there are 2 themes");
              echo $random_site_fact[(rand()%3)] . "\n";?>
          </div>
          <div class="box_bottom"></div>
          </div>*/?>

<?php if ($_SERVER['PHP_SELF'] == "/about/default.php") { ?>
          <div id="box_profile" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Profile</h4>
              I'm a web developer.<br /><br />

              I watch anime, sitcoms, and cartoons.<br />
              I read manga and comic books.<br />
              I play video games.<br />
              I listen to anime music &amp; pop.<br />
              I blog. <br />
              I doodle anime and comic book characters.<br /><br />

              My life is average.
            </div>
            <div class="box_bottom"></div>
          </div>

<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/default.php") { ?>
          <div id="box_twitter" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Twitter</h4>
              <div id="twitter_update_list"></div>
              <div class="center"><br /><a href="http://twitter.com/warrenshea" target="_blank">Follow me on Twitter</a></div>
            </div>
            <div class="box_bottom"></div>
          </div>

<?php /*          <div id="box_facebook" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Facebook</h4>
              <div id="facebook_update_list"></div>
              <div class="center"><br /><a href="http://www.facebook.com/warren.shea" target="_blank">Find me on Facebook</a></div>
            </div>
            <div class="box_bottom"></div>
          </div>*/?>
       
          <div id="box_search" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Search worldofwarren.com</h4>
<?php get_search_form(); ?>
<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) {?>
            <?php /* If this is a 404 page */ if (is_404()) { ?>
            <?php /* If this is a category archive */ } elseif (is_category()) { ?>
            <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
            for the day <?php the_time('l, F jS, Y'); ?>.</p>

            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
            for <?php the_time('F, Y'); ?>.</p>

            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
            for the year <?php the_time('Y'); ?>.</p>

            <?php /* If this is a search result */ } elseif (is_search()) { ?>
            <p>You have searched the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

            <?php /* If this set is paginated */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives.</p>
<?php } ?>
<?php }?>
            </div>
            <div class="box_bottom"></div>
          </div>

          <? /*<div id="box_comments" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Comments</h4>
              <div id="comments_inactive">
                <div class="center"><a href="javascript:showComments();">See most recent</a></div>
              </div>
              <div id="comments_active"></div>
            </div>
            <div class="box_bottom"></div>
          </div>*/?>

          <div id="box_blogs_daily" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Daily Readings</h4>
              <div id="blog_html5weekly"></div>
              <div id="blog_javascriptweekly"></div>
              <div id="blog_arstechnica"></div>
              <div id="blog_geekologie"></div>
              <div id="blog_toplessrobot"></div>
              <div id="blog_newsarama"></div>
              <div id="blog_tomopop"></div>
              <div id="blog_plastikitty"></div>
              <div id="blog_kotaku"></div>
            </div>
            <div class="box_bottom"></div>
          </div>

          <div id="box_archives" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Archives</h4>
              <ul>            
<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>

          <div id="box_categories" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Categories</h4>
              <ul class="box_ul">
<?php wp_list_categories('show_count=1&depth=2'); ?>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>

          <div id="box_friends" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Friends</h4>
              <ul class="box_ul">
               <li><a href="http://www.jennyelle.com" target="_blank">Jenny Elle</a></li>
               <li><a href="http://www.5phl.com/" target="_blank">Sophia Liu</a></li>
               <li><a href="http://www.jamiemaing.com" target="_blank">Jamie Maing</a></li>
               <li><a href="http://www.foodberry.com" target="_blank">Foodberry</a></li>
               <li><a href="http://www.storefrontlife.com" target="_blank">Storefront Life</a></li>
               <li><a href="http://www.thedreamhouseproject.ca" target="_blank">The Dreamhouse Project</a></li>
               <li><a href="http://www.anthonycameron.com/" arget="_blank">Anthony Cameron</a></li>
               <li><a href="http://www.elgranto.com/" target="_blank">El Granto</a></li>
               <li><a href="http://www.coreyblenkarn.com/" target="_blank">Corey Blenkarn</a></li>
               <li><a href="http://www.wix.com/alexleend/nd/" target="_blank">Alex Lee, ND</a></li>
               <li><a href="http://www.corduroymag.com/" target="_blank">Corduroy Magazine</a></li>
               <li><a href="http://clint-dsouza.com/" target="_blank">Clint D'Souza</a></li>
               <li><a href="http://bonfireconsulting.ca/" target="_blank">Bonfire Consulting</a></li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>     
          
<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/achievements/default.php") { ?>
          <div class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Sort Complete Section<br>by Tags</h4>
              <div id="options" class="clearfix">
                <ul id="filters" data-option-key="filter" class="option-set clearfix box_ul">
                  <li><a data-option-value="*" href="#show-all" class="show-all selected">Show All</a></li>
                  <li><a data-option-value=".life" href="#life" class="life">Life</a></li>
                  <li><a data-option-value=".design" href="#design" class="design">Design</a></li>
                  <li><a data-option-value=".development" href="#development" class="development">Development</a></li>
                  <li><a data-option-value=".worldofwarren" href="#worldofwarren" class="worldofwarren">worldofwarren.com</a></li>
                  <li><a data-option-value=".warrenshea" href="#warrenshea" class="warrenshea">warrenshea.com</a></li>
                  <li><a data-option-value=".kotobishoujo" href="#kotobishoujo" class="kotobishoujo">kotobishoujo.com</a></li>
                  <li><a data-option-value=".show" href="#show" class="show">Show</a></li>
                  <li><a data-option-value=".cartoon" href="#cartoon" class="cartoon">Cartoon</a></li>
                  <li><a data-option-value=".anime" href="#anime" class="anime">Anime</a></li>
                  <li><a data-option-value=".movie" href="#movie" class="movie">Movie</a></li>
                  <li><a data-option-value=".book" href="#book" class="book">Book</a></li>
                  <li><a data-option-value=".manga" href="#manga" class="manga">Manga</a></li>
                  <li><a data-option-value=".gaming" href="#gaming" class="gaming">Gaming</a></li>
                  <li><a data-option-value=".musical" href="#musical" class="musical">Musical</a></li>
                  <li><a data-option-value=".photography" href="#photography" class="photography">Photograpy</a></li>
                  <li><a data-option-value=".video" href="#video" class="video">Video</a></li>
                  <li><a data-option-value=".food" href="#food" class="food">Food</a></li>
                </ul>
              </div>
            </div>
            <div class="box_bottom"></div>
          </div>

<style>
  #options li{list-style:disc;margin-left:15px;}
  #content_secondary #options li a{text-decoration:none;}
  .isotope-item{z-index:2}
  .isotope,.isotope .isotope-item{-webkit-transition-duration:0.8s;-moz-transition-duration:0.8s;-o-transition-duration:0.8s;transition-duration:0.8s}
  .isotope{-webkit-transition-property:height,width;-moz-transition-property:height,width;-o-transition-property:height,width;transition-property:height,width}
  .isotope .isotope-item{-webkit-transition-property:-webkit-transform,opacity;-moz-transition-property:-moz-transform,opacity;-o-transition-property:top,left,opacity;transition-property:transform,opacity}
  #isotope-container{width:100%;}
  .element{clear:both;width:100%;border-bottom:1px solid #EEE;padding:5px 0;}
  .element li{list-style:none;margin:0;}
  .element .date{float:left;width:14%;}
  .element .details{float:right;width:86%;}
</style>
<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/hobbies/default.php") { ?>         
          <div id="box_complete" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Complete</h4>
              <ul class="box_ul">
                <li><a href="default.php?category=completelivereal">Watched - Live / Real</a></li>
                <li><a href="default.php?category=completeanime">Watched - Anime</a></li>
                <li><a href="default.php?category=completecartoons">Watched - Cartoons</a></li>
                <li><a href="default.php?category=completegames">Games</a></li>
                <li><a href="default.php?category=completeread">Read</a></li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>
          
<? /*          <div id="box_wtb" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Things I Own - Things I WTB</h4>
              <ul class="box_ul">
                <li><a href="/?p=2477">List</a></li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>*/?>
<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/figure-review/default.php") { ?>
          <div id="box_games" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Games</h4>
              <ul class="box_ul">
                <li><a href="default.php?figure=link">Link</a></li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>
          
          <div id="box_anime" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Anime</h4>
              <ul class="box_ul">
                <li><a href="default.php?figure=catherine">Catherine</a></li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>
<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/gallery/default.php") { ?>
          <div class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Album - Art Gallery</h4>
              <ul class="box_ul">
                <li><a href="default.php?album=2010_art_gallery&album_num=7">2010 Art Gallery</a> (7)</li>
                <li><a href="default.php?album=2009_art_gallery&album_num=3">2009 Art Gallery</a> (3)</li>
                <li><a href="default.php?album=2008_art_gallery&album_num=3">2008 Art Gallery</a> (3)</li>
                <li><a href="default.php?album=2007_art_gallery&album_num=5">2007 Art Gallery</a> (5)</li>
                <li><a href="default.php?album=2004_art_gallery&album_num=4">2004 Art Gallery</a> (4)</li>
                <li><a href="default.php?album=2003_art_gallery&album_num=1">2003 Art Gallery</a> (1)</li>
                <li><a href="default.php?album=2002_art_gallery&album_num=8">2002 Art Gallery</a> (8)</li>
                <li><a href="default.php?album=asian_avenue&album_num=4">2002 Asian Avenue</a> (4)</li>
                <li><a href="default.php?album=2001_art_gallery&album_num=5">2001 Art Gallery</a> (5)</li>
                <li><a href="default.php?album=2000_art_gallery&album_num=1">2000 Art Gallery</a> (1)</li>
                <li><a href="default.php?album=1999_art_gallery&album_num=1">1999 Art Gallery</a> (1)</li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>
          
          <div class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Album - Commission</h4>
              <ul class="box_ul">
                <li><a href="default.php?album=marcus_to&album_num=1">Marcus To</a> (1)</li>
                <li><a href="default.php?album=arnistotle&album_num=4">Arnistotle (Arnold Tsang)</a> (4)</li>
                <li><a href="default.php?album=christine_choi&album_num=2">Christine Choi</a> (2)</li>
                <li><a href="default.php?album=omar_dogan&album_num=2">Omar Dogan</a> (2)</li>
                <li><a href="default.php?album=alvin_lee&album_num=1">Alvin Lee</a> (1)</li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>

<?php } ?>
<?php if ($_SERVER['PHP_SELF'] == "/resume/default.php") { ?>
          <div id="box_other_versions" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Other Versions</h4>
              <ul class="box_ul">
                <li><a href="related_files/warren_shea_resume.pdf" target="_blank">PDF</a> (abridged)</li>
                <li><a href="javascript:popup('related_files/warren_shea_resume.html',850,750);">HTML</a> (abridged)</li>
                <li><a href="related_files/warren_shea_resume.doc" target="_blank">WORD</a> (abridged)</li>
                <li><a href="related_files/warren_shea_resume.docx" target="_blank">WORDX</a> (abridged)</li>
              </ul>
            </div>
            <div class="box_bottom"></div>
          </div>
          
          <div id="box_contact_information" class="box">
            <div class="box_top"></div>
            <div class="box_middle">
              <h4>Contact Information</h4>
              <ul class="box_ul">
                <li>
                  Email me at<br />
                  <a href="mailto: warren.shea@gmail.com">warren.shea[at]gmail.com</a><br />
                </li>
              </ul>              
            </div>
            <div class="box_bottom"></div>
          </div>

<?php } ?>