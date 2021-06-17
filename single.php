<?php
    get_header();
?>
<main id="main">
    <section >
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col">
	            <?php
	            	if(have_posts()){
	            		while(have_posts()){
	            			the_post();
	            			the_content();
	            		}
	            	}
	            ?>
            </div>
        </div>
     </div>
    </section>
</main>

<?php
	get_footer();
?>
