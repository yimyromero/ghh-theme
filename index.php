<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   <?php get_header(); ?>
</head>
<body class="bg-slate-950 text-slate-100 antialiased">
  <header class="bg-slate-900/95 border-b border-slate-800">
    <div class="mx-auto max-w-6xl px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <div>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-white text-xl font-semibold">
          <?php bloginfo('name'); ?>
        </a>
        <p class="text-slate-400 mt-1"><?php bloginfo('description'); ?></p>
      </div>
      <nav class="flex gap-4 text-slate-300">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white">Home</a>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-white">About</a>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="hover:text-white">Blog</a>
      </nav>
    </div>
  </header>

  <main class="mx-auto max-w-6xl px-6 py-10">
    <section class="grid gap-8 lg:grid-cols-[1.2fr_0.8fr] items-center">
      <div class="space-y-6">
        <p class="uppercase tracking-[0.4em] text-sky-400 font-semibold">Welcome to <?php bloginfo('name'); ?></p>
        <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight text-white">A modern home page styled with Tailwind CSS.</h1>
        <p class="text-slate-300 max-w-2xl">Build and showcase your content with clean sections, bold typography, and responsive layouts powered by Tailwind.</p>
        <div class="flex flex-wrap gap-3">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 hover:bg-sky-400 transition">View Latest Posts</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="rounded-full border border-slate-700 px-6 py-3 text-sm font-semibold text-slate-200 hover:border-slate-500 hover:text-white transition">Contact Us</a>
        </div>
      </div>
      <div class="rounded-3xl bg-slate-900 ring-1 ring-slate-800 p-8 shadow-2xl shadow-slate-950/40">
        <div class="bg-slate-950 rounded-3xl p-6">
          <p class="text-slate-400 uppercase tracking-[0.3em] text-xs">Featured</p>
          <h2 class="mt-4 text-2xl font-semibold text-white">Designed for all creators.</h2>
          <p class="mt-3 text-slate-300">A lightweight, responsive home page layout that looks great on mobile, tablet, and desktop.</p>
          <div class="mt-6 grid gap-4">
            <div class="rounded-3xl bg-slate-800 p-5">
              <p class="text-slate-400 text-sm">Fast setup</p>
              <p class="mt-2 text-white font-medium">Tailwind CDN included</p>
            </div>
            <div class="rounded-3xl bg-slate-800 p-5">
              <p class="text-slate-400 text-sm">Flexible</p>
              <p class="mt-2 text-white font-medium">Adaptable sections for any brand</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-20">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
          <h2 class="text-3xl font-semibold text-white">Latest articles</h2>
          <p class="text-slate-400 max-w-2xl">Recent stories and updates from the blog. Keep your audience engaged.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-sky-400 hover:text-sky-300 font-semibold">See all posts</a>
      </div>
      <div class="mt-8 grid gap-6 md:grid-cols-2">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="group rounded-3xl border border-slate-800 bg-slate-900 p-8 transition hover:-translate-y-1 hover:border-slate-700">
            <p class="text-slate-400 text-sm uppercase tracking-[0.3em]"><?php echo get_the_date(); ?></p>
            <h3 class="mt-3 text-2xl font-semibold text-white group-hover:text-sky-400"><?php the_title(); ?></h3>
            <p class="mt-4 text-slate-300 line-clamp-3"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="mt-6 inline-flex items-center gap-2 text-sky-400 hover:text-sky-300 font-semibold">Read article</a>
          </article>
        <?php endwhile; else : ?>
          <div class="rounded-3xl border border-slate-800 bg-slate-900 p-12 text-center">
            <p class="text-slate-300">No posts found yet. Add your first post to see it here.</p>
          </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </section>
  </main>

  <footer class="border-t border-slate-800 bg-slate-950 py-8">
    <div class="mx-auto max-w-6xl px-6 text-slate-500 text-sm text-center">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Built with Tailwind CSS.</div>
  </footer>
</body>
</html>
