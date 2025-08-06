<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>" class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!-- material-icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <?php wp_head(); ?>
</head>
<body>
  <header class="max-w-6xl mx-auto px-5">
    <div class="flex justify-between items-center py-6 relative">
      <h1 class="text-3xl font-sans font-bold">
        <a href="<?php echo home_url(); ?>">
          Juki's Portfolio  
        </a>
      </h1>

      <!-- PC Menu -->
      <nav class="pc-menu hidden md:block">
        <ul class="flex space-x-6">
          <li><a href="<?php echo home_url(); ?>" class="text-lg font-sans hover:opacity-50">Home</a></li>
          <li><a href="#section1" class="text-lg font-sans hover:opacity-50">Works</a></li>
          <li><a href="#section2" class="text-lg font-sans hover:opacity-50">Service</a></li>
          <li><a href="#section3" class="text-lg font-sans hover:opacity-50">About</a></li>
          <li><a href="#section4" class="text-lg font-sans hover:opacity-50">Contact</a></li>
        </ul>
      </nav>

      <!-- SP Menu Button (Hamburger) -->
      <div class="sp-menu md:hidden">
        <span class="material-icons text-3xl cursor-pointer absolute top-6 right-5 z-50" id="open">menu</span>
      </div>
    </div>
  </header>

  <!-- Overlay Menu -->
  <div class="overlay fixed inset-0 bg-white text-center opacity-0 pointer-events-none transition-opacity duration-300 z-40" id="overlay">
    <!-- Close Button -->
    <span class="material-icons text-3xl cursor-pointer absolute top-6 right-5 z-50" id="close">close</span>

    <!-- Overlay Nav -->
    <nav class="flex justify-center items-center h-full">
      <ul class="space-y-8 text-left text-xl font-sans font-bold">
        <li><a href="<?php echo home_url(); ?>" class="hover:opacity-50">Home</a></li>
        <li><a href="?1#section1" class="hover:opacity-50">Works</a></li>
        <li><a href="?2#section2" class="hover:opacity-50">Service</a></li>
        <li><a href="?3#section3" class="hover:opacity-50">About</a></li>
        <li><a href="?4#section4" class="hover:opacity-50">Contact</a></li>
      </ul>
    </nav>
  </div>