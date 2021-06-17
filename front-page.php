<?php
    get_header();
?>
<main id="main">
    <section class="inner-page mt-5">
      <div class="container mt-3">
            <?php
	            if(have_posts()){
	            	while(have_posts()){
                        the_post();
                        the_content();
	            	}
	            }
	        ?>
      </div>
    </section>
</main>

<?php
	get_footer();
?>
