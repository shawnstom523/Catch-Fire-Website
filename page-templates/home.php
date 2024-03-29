<?php
   /*
    Template Name: Home
    */
    if ( ! defined( 'ABSPATH' ) ) {
      exit; // Exit if accessed directly.
    }
    ?>
<?php get_header(); ?>

<section id="hero">
    <div class="hero-wrapper">
        <div class="hero-title"><?php
				echo file_get_contents( get_theme_file_uri( '/img/jason.svg' ) );
				?></div>
        <div class="hero-text">Speaking, Writing, <br>Coaching, and ConsuLting<br> for modern-day leaders</div>
        <div class="hero-scroll">
          <a href="#goal">
            <div class="scroll-arrow"><img src="/wp-content/themes/catch-fire/img/scroll-arrow.png" alt=""></div>
            <div class="scroll-text">scroll</div>
          </a>
        </div>
    </div>
</section>

<?php
$goal = get_field('goal');
?>
<section id="goal" class="home">
    <div id="goal-sec"class="page-divider"></div>
        <div class="container goal--wrapper">
            <div class="row goal--inner">
                <div class="number">01 —</div>
                <div class="subtitle"><?php echo $goal['title']; ?></div>
                <div class="title"><?php echo $goal['body']; ?></div>
            </div>
        </div>
    <div class="page-divider"></div>
</section>

<?php
$leaders = get_field('leaders');
?>
<section id="leaders" class="home">
    <div class="container leaders--wrapper">
        <div class="row leaders--inner">
            <div class="col-xl-5 leaders--inner__left">
                <div class="title__small"><?php echo $leaders['title']; ?></div>
                <?php echo $leaders['body']; ?>
                <!--img src="/wp-content/themes/catch-fire/img/about-img-2.jpg" alt=""-->
            </div>
            <div class="col-xl-5 offset-lg-2 leaders--inner__right">
                <div class="number">— 02</div>
                <div class="subtitle">for modern-day leaders</div>
                <img src="<?php echo $leaders['image']; ?>" alt="">
            </div>
        </div>
        <div class="row icon-wrapper">
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/guests.svg" alt="">
                    <div class="icon-text">guest<br>experience</div>
                </div>
            </div>
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/team.svg" alt="">
                    <div class="icon-text">team<br>culture</div>
                </div>
            </div>
            <div class="icon">
                <div class="icon-inner">
                    <?php echo file_get_contents(__DIR__ . '/../img/leadership.svg'); ?>
                    <div class="icon-text">leadership<br>development</div>
                </div>
            </div>
            <div class="icon">
                <div class="icon-inner">
                    <img src="/wp-content/themes/catch-fire/img/growth.svg" alt="">
                    <div class="icon-text">organizational<br>growth</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container main-wrapper">
        <div class="row main-row">
            <h1>This is a title.</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ab incidunt ex eius exercitationem sint ipsam optio, possimus, consequatur sunt dignissimos accusamus atque laborum corporis nobis earum quos quisquam. Molestias?</p>
        </div>
    </div>
</section>
<div class="page-divider"></div>

<?php get_template_part('template-parts/covers'); ?>
<?php get_template_part('template-parts/contact') ?>
<?php get_template_part('template-parts/cta') ?>
<?php get_footer(); ?>