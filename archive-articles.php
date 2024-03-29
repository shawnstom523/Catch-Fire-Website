<?php
    /*
    Template Name: Articles Archive
    */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/books-pub-hero'); ?>


<section class="container" style="max-width: 900px">
    <?php
        //get_posts to retrieve an array of posts
        $posts = get_posts( array(
                'post_type'   => 'Articles'      
            ) 
        );   
    ?>
    <?php //loop through each array object to get the thumbnail ?>
    <?php foreach($posts as $post) : ?>
        <div class="row my-5">
            <div class="col-xl-4 text-center mb-5 mb-xl-0">
                <a href="<?php echo get_permalink($post->ID);?>" target="_blank">
                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, '')?>" alt="">
                </a>
            </div>
            <div class="col-xl-8 d-xl-flex flex-column justify-content-xl-center text-xl-start text-center">
                <a href="<?php echo get_permalink($post->ID);?>" target="_blank"><h2><?php echo get_the_title($post->ID); ?></h2></a>
                <p><?php echo get_the_excerpt($post->ID); ?></p>
                <a class="btn my-1 mx-xl-0 mx-auto" style="max-width: 200px;" href="<?php echo get_permalink($post->ID);?>">
                    <?php 
                        if ( sizeof(get_the_category($post->ID)) == 0 ) {
                            echo 'Read More';
                        } else {
                            echo 'View ' . get_the_category($post->ID)[0]->name; 
                        }
                    ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<?php get_template_part('template-parts/contact') ?>
<?php get_template_part('template-parts/cta'); ?>
<?php get_footer(); ?>