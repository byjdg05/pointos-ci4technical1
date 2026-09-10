<?php $current = uri_string(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS System') ?> &mdash; POS System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a href="<?= site_url('/') ?>" class="brand">
            <span class="brand-mark">P</span>
            <span class="brand-text">Point<strong>OS</strong></span>
        </a>

        <nav class="main-nav" aria-label="Main navigation">
            <a href="<?= site_url('/') ?>" class="<?= $current === '' ? 'active' : '' ?>">Home</a>
            <a href="<?= site_url('about') ?>" class="<?= $current === 'about' ? 'active' : '' ?>">About</a>
            <a href="<?= site_url('customers') ?>" class="<?= $current === 'customers' ? 'active' : '' ?>">Customers</a>
            <a href="<?= site_url('users') ?>" class="<?= $current === 'users' ? 'active' : '' ?>">Users</a>
        </nav>
    </div>
</header>

<main>
