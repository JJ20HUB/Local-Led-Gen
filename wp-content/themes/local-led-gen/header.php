<?php
if (!defined('ABSPATH')) {
    exit;
}

$blog_name = get_bloginfo('name');
$site_name = (!empty($blog_name) && $blog_name !== 'My WordPress' && $blog_name !== 'My WordPress Site') ? $blog_name : 'Tree Pros Connect';
$home_url = home_url('/');
$services_url = home_url('/services/');
$contact_url = home_url('/contact/');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main">Skip to content</a>

<header class="site-header">
    <div class="container nav-wrap">
        <a class="logo" href="<?php echo esc_url($home_url); ?>" aria-label="<?php echo esc_attr($site_name); ?> home"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo.png" alt="<?php echo esc_attr($site_name); ?>" width="180" height="52"></a>
        <nav aria-label="Main navigation">
            <ul class="nav-list">
                <li><a <?php echo is_front_page() ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url($home_url); ?>">Home</a></li>
                <li><a <?php echo is_page('services') ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url($services_url); ?>">Services</a></li>
                <li><a <?php echo is_page('contact') ? 'aria-current="page"' : ''; ?> href="<?php echo esc_url($contact_url); ?>">Contact</a></li>
            </ul>
        </nav>
        <a class="btn btn-call" href="tel:+18653906794">Call 865-390-6794</a>
    </div>
</header>
