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
                        get_template_part( 'template-parts/side_barcontent');
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
