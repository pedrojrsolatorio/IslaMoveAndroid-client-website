<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="bg-gray-50 text-gray-800 <?php body_class(); ?>">

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-primary">IslaMove</h1>
            <a href="#download" class="bg-primary text-white px-4 py-2 rounded-lg">Download App</a>
        </div>
    </header>