<?php
    get_header();
    pageBanner(array(
      'title' => 'All Events',
      'subtitle' => 'See whats going on in our World!'
    ));
?>
    
    <div class="container container--narrow page-section">

        <?php
            while(have_posts()) {
                the_post(); 
                get_template_part('template-parts/content-event', get_post_type());

          }
        //  refer to settings under reading goto blog pages
         echo paginate_links();
        ?>
        
  <hr class="section-break">
  <p >Looking for a recap of past evenst? <a href="<?php echo site_url('/past-events'); ?>">Check our past events archive</a></p>

  </div>
  
  
<?php
    get_footer();
?>
