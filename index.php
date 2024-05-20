<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <section class="menu_section">
        <div class="menu">
            <div class="mid">
                <div class="logo">
                    <!-- Static Logo -->
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""> -->

                    <!-- Dynamic Logo -->
                    <?php the_custom_logo(); ?>
                </div>

                <!-- Static Menu -->
                <!--
                <ul>
                    <li><a href="#"></a>Home</li>
                    <li><a href="#"></a>About</li>
                    <li><a href="#"></a>Blog</li>
                    <li><a href="#"></a>Info</li>
                    <li><a href="#"></a>Contact</li>
                </ul>
                -->

                <!-- Dynamic Menu -->
                <?php 
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container_id' => '',
                    'container_class' => '',
                    'menu_id' => '',
                    'menu_class' => '',
                ]);
                ?>
            </div>
        </div>
    </section>

    <section class="header_image">
        <img src="<?php header_image(); ?>" alt="">
    </section>

    <section class="posts">
        <div class="post">
            <h2 style="text-align: center; font-size: 36px;">Latest Posts</h2>
            <hr>
            <div class="post_mid">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post1">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>
</html>
