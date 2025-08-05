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
  <header class="mx-10 md:mx-24">
    <div class="flex justify-between items-center mt-10">
      <h1 class="text-3xl font-sans font-bold">
        <a href="i<?php echo home_url(); ?>">
          Juki's<br>
          Portfolio  
        </a>
      </h1>

      <!-- PC Menu -->
      <nav class="pc-menu hidden md:block">
        <ul class="flex space-x-6">
        <li><a href="<?php echo home_url(); ?>" class="text-lg font-sans font-bold hover:opacity-50">Home</a></li>
        <li><a href="#section1" class="text-lg font-sans font-bold hover:opacity-50">My Projects</a></li>
        <li><a href="#section2" class="text-lg font-sans font-bold hover:opacity-50">Service</a></li>
          <li><a href="#section3" class="text-lg font-sans font-bold hover:opacity-50">About</a></li>
          <li><a href="#section4" class="text-lg font-sans font-bold hover:opacity-50">お問い合わせ</a></li>
        </ul>
      </nav>
    
      <!-- SP Menu -->
      <div class="sp-menu md:hidden mr-10">
        <span class="material-icons text-2xl cursor-pointer" id="open">menu</span>
      </div>
    </div>
  </header>

  <!-- Overlay Menu -->
  <div class="overlay fixed inset-0 bg-white bg-opacity-100 text-center p-16 opacity-0 pointer-events-none transition-opacity duration-300" id="overlay">
    <span class="material-icons absolute top-10 right-10 text-2xl cursor-pointer" id="close">close</span>
    <nav class="flex justify-center">
      <ul class="space-y-6 text-left">
      <li><a href="<?php echo home_url(); ?>" class="text-xl font-sans font-bold hover:opacity-50">Home</a></li>
      <li><a href="?1#section1" class="text-xl font-sans font-bold hover:opacity-50">My Projects</a></li>
      <li><a href="?2#section2" class="text-xl font-sans font-bold hover:opacity-50">Service</a></li>
        <li><a href="?3#section3" class="text-xl font-sans font-bold hover:opacity-50">About</a></li>
        <li><a href="?4#section4" class="text-xl font-sans font-bold hover:opacity-50">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>