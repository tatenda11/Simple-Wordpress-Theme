<?php
    get_header();
?>
<main id="main">
    <section class="inner-page mt-5">
      <div class="container mt-3">
           <div class="row">
               <div class="col-9">
               <?php
	                if(have_posts()){
	                	while(have_posts()){
                            the_post();
                            the_content();
	                	}
	                }
	            ?>
               </div>
               <div class="col-3">
                    <?php get_sidebar();?>
               </div>
           </div>
      </div>  
    </section>
</main>

<?php
	get_footer();
?>
