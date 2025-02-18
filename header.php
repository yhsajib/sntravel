<?php
/**
 * @package Sntravel
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="sntravel-page" class="sntravel-page">
        <div class="sntravel-page-overlay"></div>
        <?php sntravel()->page->get_site_loader(); ?>
        <?php sntravel()->header->getHeader(); ?>
        <?php sntravel()->pagetitle->get_page_title(); ?>
        <div id="sntravel-main" class="sntravel-main">
