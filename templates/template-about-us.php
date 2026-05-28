<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>
<section class="@container py-20">
  <div class="text-center max-w-3xl mx-auto">
    <h1 class="text-6xl font-bold mb-4">About Us</h1>
    <p class="text-slate-400 text-lg">Learn more about our mission, values, and the team behind <?php bloginfo('name'); ?>.</p>
  </div>
  <div class="mt-12 grid gap-8 md:grid-cols-2">
    <div class="rounded-3xl bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
      <h3 class="text-2xl font-semibold text-white mb-4">Our Mission</h3>
      <p class="text-slate-300">At <?php bloginfo('name'); ?>, our mission is to provide high-quality content and resources to our audience. We strive to inspire, educate, and entertain through our articles, videos, and community engagement.</p>
    </div>
    <div class="rounded-3xl bg-slate-900 p-8 shadow-lg shadow-slate-950/40">
      <h3 class="text-2xl font-semibold text-white mb-4">Our Team</h3>
      <p class="text-slate-300">Our team is made up of passionate individuals who are experts in their fields. From writers and designers to developers and marketers, we work together to create content that resonates with our audience and helps them achieve their goals.</p>
    </div>
  </div>
  
</section>

<p>Test <?php echo get_template_directory_uri(); ?>
<?php echo get_stylesheet_uri() ?> more <?php echo get_theme_file_uri('/dist/app.css') ?></p>