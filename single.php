<?php get_header();?>
<div id="background-page">

    <div class="container pt-5 pb-5" >

        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content();?>
        
        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer();?>