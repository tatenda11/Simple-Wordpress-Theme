<?php
    get_header();
?>
<main id="main">
    <section class="inner-page">
      <div class="container">
        <p>
            <?php
	            if(have_posts()){
	            	while(have_posts()){
	            		the_post();
	            		the_content();
	            	}
	            }
	        ?>
        </p>
      </div>
    </section>
</main>

<?php
	get_footer();
?>
