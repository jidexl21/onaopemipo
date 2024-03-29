<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package onaopemipo
 */

get_header();
?>

<?php get_template_part("template-parts/header", "banner") ?>

<?php get_template_part("template-parts/body", "intro") ?>

<?php get_template_part("template-parts/body", "splittext") ?>

<?php get_template_part("template-parts/body", "cards") ?>

<?php get_template_part("template-parts/body", "timeline") ?>

<?php get_template_part("template-parts/body", "contact") ?>



<!--Section: Contact v.2-->

<?php
get_footer();
