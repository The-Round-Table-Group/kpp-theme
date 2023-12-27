<?php
// Template Name: Home Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['recent_news'] = Timber::get_posts([
    'post_type' => 'news',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date'
]);

$context['featured_events'] = Timber::get_posts([
    'post_type' => 'event',
    'posts_per_page' => 3,
    'meta_key' => 'feature_event_on_homepage',
    'meta_value' => true,
    'order' => 'DESC',
    'orderby' => 'date'
]);

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );