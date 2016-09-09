    <?php global $wp_customize; ?>

    <!-- About Section
    ================================================== -->
    <section id="bsocials">
      <div class="container wow bounceIn" data-wow-delay="0.8s">
        <?php
          $socialtext = get_theme_mod('rokophoto_social_text', __( 'Follow Me', 'rokophoto' ));
          $sociallabel = get_theme_mod('rokophoto_social_label', __( 'To get the latest update of me and my works', 'rokophoto' ));
	  if(!empty($sociallabel)) {
              echo '<p class="social-label"> '.$sociallabel.' </p>';
	  }
	  if(!empty($socialtext)) {
              echo '<p class="social-text">  <span class="follow"> '.$socialtext.' </span>  </p>';
	  }
        ?>
        <ol class="social">
        <?php
          $rokophoto_link_tab = get_theme_mod('rokophoto_link_tab');
          $facebookurl = get_theme_mod('rokophoto_facebook_link', '#');
          $twitterurl = get_theme_mod('rokophoto_twitter_link', '#');
          $behanceurl = get_theme_mod('rokophoto_behance_link', '#');
          $dribbbleurl = get_theme_mod('rokophoto_dribbble_link', '#');
          $flickrurl = get_theme_mod('rokophoto_flickr_link', '#');
          $googleplusurl = get_theme_mod('rokophoto_googleplus_link', '#');
          $instagramurl = get_theme_mod('rokophoto_instagram_link', '#');
          $linkedinurl = get_theme_mod('rokophoto_linkedin_link');
          $mailurl = get_theme_mod('rokophoto_mail_link');
          if( isset($rokophoto_link_tab) && $rokophoto_link_tab == 1 ) {
			  $target = "_blank";
          } else {
			  $target = "_self";
          }
           if( !empty($facebookurl) || isset($wp_customize) ) {
              if( empty($facebookurl) && isset($wp_customize) ) {
                echo '<li class="social-fa rokophoto_only_customizer">';
              } else {
                echo '<li class="social-fa">';
              }
              echo '<a target="'.$target.'" href="'.$facebookurl.'"><i class="fa fa-facebook fa-2x"></i></a></li>';
          }

          if(!empty($twitterurl) || isset($wp_customize) ) {
              if( empty($twitterurl) && isset($wp_customize) ) {
                echo '<li class="social-tw rokophoto_only_customizer">';
              } else {
                echo '<li class="social-tw">';
              }
              echo '<a target="'.$target.'" href="'.$twitterurl.'"><i class="fa fa-twitter fa-2x"></i></a></li>';
          }

          if(!empty($behanceurl) || isset($wp_customize) ) {
              if( empty($behanceurl) && isset($wp_customize) ) {
                echo '<li class="social-be rokophoto_only_customizer">';
              } else {
                echo '<li class="social-be">';
              }
              echo '<a target="'.$target.'" href="'.$behanceurl.'"><i class="fa fa-behance fa-2x"></i></a></li>';
          }

          if(!empty($dribbbleurl) || isset($wp_customize) ) {
              if( empty($dribbbleurl) && isset($wp_customize) ) {
                echo '<li class="social-dr rokophoto_only_customizer">';
              } else {
                echo '<li class="social-dr">';
              }
              echo '<a target="'.$target.'" href="'.$dribbbleurl.'"><i class="fa fa-dribbble fa-2x"></i></a></li>';
          }

          if(!empty($flickrurl) || isset($wp_customize) ) {
              if( empty($flickrurl) && isset($wp_customize) ) {
                echo '<li class="social-fl rokophoto_only_customizer">';
              } else {
                echo '<li class="social-fl">';
              }
              echo '<a target="'.$target.'" href="'.$flickrurl.'"><i class="fa fa-flickr fa-2x"></i></a></li>';
          }
          
          if(!empty($googleplusurl) || isset($wp_customize) ) {
              if( empty($googleplusurl) && isset($wp_customize) ) {
                echo '<li class="social-go rokophoto_only_customizer">';
              } else {
                echo '<li class="social-go">';
              }
              echo '<a target="'.$target.'" href="'.$googleplusurl.'"><i class="fa fa-google-plus fa-2x"></i></a></li>';
          }
          
          if(!empty($instagramurl) || isset($wp_customize) ) {
              if( empty($instagramurl) && isset($wp_customize) ) {
                echo '<li class="social-in rokophoto_only_customizer">';
              } else {
                echo '<li class="social-in">';
              }
              echo '<a target="'.$target.'" href="'.$instagramurl.'"><i class="fa fa-instagram fa-2x"></i></a></li>';
          }
          
          if(!empty($linkedinurl) || isset($wp_customize) ) {
              if( empty($linkedinurl) && isset($wp_customize) ) {
                echo '<li class="social-li rokophoto_only_customizer">';
              } else {
                echo '<li class="social-li">';
              }
              echo '<a target="'.$target.'" href="'.$linkedinurl.'"><i class="fa fa-linkedin fa-2x"></i></a></li>';
          }
          
          if(!empty($mailurl) || isset($wp_customize) ) {
              if( empty($mailurl) && isset($wp_customize) ) {
                echo '<li class="social-em rokophoto_only_customizer">';
              } else {
                echo '<li class="social-em">';
              }
              echo '<a href="mailto:'.$mailurl.'"><i class="fa fa-envelope fa-2x"></i></a></li>';
          }
         ?>
        </ol>
      </div>
    </section>

    <div id="footer-nav">  <!-- Copyright notice on the bottom -->
      <span>
        <?php $copyright = get_theme_mod('rokophoto_footer_copyrights', __( 'Awesome Photography. All Rights Reserved', 'rokophoto' )); 
        if(!empty($copyright)) { 
          echo '<span class="cprts">' . $copyright . '</span>';
          } 
        ?> 
        <br/> 
        <?php $powered = get_theme_mod('rokophoto_footer_powerdby',__('<a href="https://themeisle.com/themes/rokophoto/" target="_blank" rel="nofollow">RokoPhoto</a> powered by <a href="https://wordpress.org/" target="_blank" rel="nofollow">WordPress</a>','rokophoto')); 
        if(!empty($powered)) 
          echo '<span class="pwred">' . $powered . '</span>'; 
        ?>
      </span>
    </div>

<?php wp_footer(); ?>

  </body>
</html>
