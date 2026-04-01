<?php

if (!defined('ABSPATH')) {
    exit;
}

function local_led_gen_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'local-led-gen'),
    ]);
}
add_action('after_setup_theme', 'local_led_gen_setup');

function local_led_gen_enqueue_assets(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'local-led-gen-theme',
        get_stylesheet_uri(),
        [],
        $theme_version
    );

    $styles_path = get_template_directory() . '/assets/styles.css';
    $styles_ver = file_exists($styles_path) ? (string) filemtime($styles_path) : $theme_version;

    wp_enqueue_style(
        'local-led-gen-styles',
        get_template_directory_uri() . '/assets/styles.css',
        ['local-led-gen-theme'],
        $styles_ver
    );

    $script_path = get_template_directory() . '/assets/script.js';
    $script_ver = file_exists($script_path) ? (string) filemtime($script_path) : $theme_version;

    wp_enqueue_script(
        'local-led-gen-script',
        get_template_directory_uri() . '/assets/script.js',
        [],
        $script_ver,
        true
    );
}
add_action('wp_enqueue_scripts', 'local_led_gen_enqueue_assets');

function local_led_gen_create_pages(): void
{
    $pages = [
        'home'     => 'Home',
        'services' => 'Services',
        'contact'  => 'Contact',
    ];

    $home_id = 0;

    foreach ($pages as $slug => $title) {
        $existing = get_page_by_path($slug, OBJECT, 'page');
        if ($existing) {
            if ($slug === 'home') {
                $home_id = (int) $existing->ID;
            }
            continue;
        }

        $id = wp_insert_post([
            'post_title'   => $title,
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ]);

        if (!is_wp_error($id) && $slug === 'home') {
            $home_id = $id;
        }
    }

    if ($home_id && (int) get_option('page_on_front') !== $home_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
    }
}
add_action('after_switch_theme', 'local_led_gen_create_pages');

function local_led_gen_schema_json_ld(): void
{
    $business = [
        '@context'    => 'https://schema.org',
        '@type'       => 'LandscapingBusiness',
        'name'        => 'Tree Pros Connect',
        'description' => 'Trusted tree service in Knoxville, TN. Tree removal, trimming, stump grinding, storm cleanup, and emergency calls.',
        'image'       => home_url('/assets/hero-tree.jpg'),
        'url'         => home_url('/'),
        'telephone'   => '+18653906794',
        'email'       => 'TreeProsConnect@gmail.com',
        'priceRange'  => '$$',
        'areaServed'  => 'Knoxville, TN',
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Knoxville',
            'addressRegion'   => 'TN',
            'postalCode'      => '37902',
            'addressCountry'  => 'US',
        ],
        'openingHours' => ['Mo-Fr 08:00-18:00', 'Sa 09:00-15:00'],
        'sameAs'       => [
            'https://g.page/r/Ccs2_3aNAoinEBM/review',
        ],
    ];

    if (is_page('services')) {
        $schema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                $business,
                [
                    '@type'           => 'ItemList',
                    'name'            => 'Tree Services in Knoxville, TN',
                    'itemListElement' => [
                        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Tree Removal'],
                        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Tree Trimming and Pruning'],
                        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Stump Grinding and Removal'],
                        ['@type' => 'ListItem', 'position' => 4, 'name' => 'Emergency Storm Cleanup'],
                        ['@type' => 'ListItem', 'position' => 5, 'name' => 'Lot Clearing and Land Preparation'],
                        ['@type' => 'ListItem', 'position' => 6, 'name' => 'Cabling and Bracing'],
                    ],
                ],
            ],
        ];
    } else {
        $schema = $business;
    }

    echo '<script type="application/ld+json">'
        . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>' . "\n";
}
add_action('wp_head', 'local_led_gen_schema_json_ld');

function local_led_gen_seo_meta(): void
{
    $site_name   = 'Tree Pros Connect';
    $image_url   = esc_url(home_url('/assets/hero-tree.jpg'));
    $current_url = esc_url(home_url(add_query_arg([], $GLOBALS['wp']->request)));

    if (is_front_page()) {
        $og_title = 'Tree Pros Connect | Safe, Professional Tree Care';
        $og_desc  = 'Trusted tree service in Knoxville, TN. Tree removal, trimming, stump grinding, storm cleanup, and emergency calls.';
    } elseif (is_page('services')) {
        $og_title = 'Tree Services in Knoxville, TN | Tree Pros Connect';
        $og_desc  = 'Professional tree services in Knoxville, Tennessee. Removal, trimming, stump grinding, emergency storm cleanup, and lot clearing.';
    } elseif (is_page('contact')) {
        $og_title = 'Contact Tree Pros Connect | Free Tree Service Estimate';
        $og_desc  = 'Contact Tree Pros Connect for tree removal, trimming, stump grinding, and storm cleanup in Knoxville, TN.';
    } else {
        $og_title = wp_get_document_title();
        $og_desc  = get_bloginfo('description');
    }

    $og_title = esc_attr($og_title);
    $og_desc  = esc_attr($og_desc);
    ?>
    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:image" content="<?php echo $image_url; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $og_title; ?>">
    <meta name="twitter:description" content="<?php echo $og_desc; ?>">
    <meta name="twitter:image" content="<?php echo $image_url; ?>">
    <link rel="icon" href="<?php echo esc_url(home_url('/favicon.ico')); ?>" sizes="any">
    <link rel="apple-touch-icon" href="<?php echo esc_url(home_url('/assets/apple-touch-icon.png')); ?>">
    <?php
}
add_action('wp_head', 'local_led_gen_seo_meta', 1);
