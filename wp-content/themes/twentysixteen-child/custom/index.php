<?php
/* Template Name: Custom Page Home
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/custom/css/style.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site custom-site index-background">
    <div class="site-inner">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

        <header id="masthead" class="site-header custom-site-header" role="banner">
            <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
                <button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

                <div id="site-header-menu" class="site-header-menu">
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'primary-menu',
                            ) );
                            ?>
                        </nav><!-- .main-navigation -->
                    <?php endif; ?>

                    <?php if ( has_nav_menu( 'social' ) ) : ?>
                        <nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'social',
                                'menu_class'     => 'social-links-menu',
                                'depth'          => 1,
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>',
                            ) );
                            ?>
                        </nav><!-- .social-navigation -->
                    <?php endif; ?>
                </div><!-- .site-header-menu -->
                <div class="search-input-container">
                    <div class="search-input">
                        <form role="search" method="get" class="search-form" action="http://foodreviews.dev/">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                            </label>
                            <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            <div class="site-header-main">
                <div class="custom-site-branding site-branding">
                    <?php twentysixteen_the_custom_logo(); ?>

                    <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; ?></p>
                    <?php endif; ?>
                </div><!-- .site-branding -->
            </div><!-- .site-header-main -->

            <?php if ( get_header_image() ) : ?>
                <?php
                /**
                 * Filter the default twentysixteen custom header sizes attribute.
                 *
                 * @since Twenty Sixteen 1.0
                 *
                 * @param string $custom_header_sizes sizes attribute
                 * for Custom Header. Default '(max-width: 709px) 85vw,
                 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
                 */
                $custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
                ?>
                <div class="header-image">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
                </div><!-- .header-image -->
            <?php endif; // End header image check. ?>
        </header><!-- .site-header -->

        <div id="content" class="site-content">

<div id="primary" class="content-area custom-content-area">
    <main id="main" class="site-main" role="main">
        <div class="main-tag-line-container">
            <div class="main-tag-line">
                <h1>
                    WE REVIEW WHAT WE EAT. WE EAT WHAT WE REVIEW
                </h1>
            </div>
        </div>
        <div class="main-services-container">
            <div class="main-services">
                <h1>
                    WE DO REVIEW. WE POST AND SPREAD ALL THE GOOD NEWS ON THE PLANET.
                </h1>
            </div>
        </div>
        <div class="main-recent-posts-container">
            <?php
            $aRecentPosts = wp_get_recent_posts();
            var_dump($recent_posts);
            ?>
            <div class="main-recent-posts col-container">
                <?php
                    foreach ($aRecentPosts as $aRecentPost):
                ?>
                        <div class="main-recent-post col-sm-2">
                            <div class="main-recent-post-header">

                            </div>
                            <div class="main-recent-post-body">
                                <h3>
                                    <?php echo $aRecentPost['post_title']?>
                                </h3>
                                <p>
                                    <?php echo $aRecentPost['post_content']?>
                                </p>
                            </div>
                            <div class="main-recent-post-footer">

                            </div>
                        </div>
                <?php
                    endforeach;
                ?>

            </div>
        </div>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End of the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
