<!DOCTYPE html>
<html lang="<?= ($this->session->userdata('site_lang') == 'english') ? 'en' : 'th' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('site_brand_name') ?> | PICO Finance</title>
    
    <!-- Bootstrap 5.3 & Font Awesome 6.4 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom 3D Fintech Stylesheet -->
    <link rel="stylesheet" href="<?= site_assets_url('css/style.css') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png') ?>">
</head>
<body>
<div class="main-wrapper">

<!-- Redesigned Futuristic Floating Navbar -->
<nav class="navbar navbar-expand-lg futuristic-nav" id="mainNavbar">
    <div class="container-fluid p-0">
        
        <!-- Brand Logo -->
        <a href="<?= site_root_url() ?>" class="navbar-brand d-flex align-items-center me-4">
            <img src="<?= base_url('assets/images/logo.png') ?>" alt="INFINITE FINTECH" class="nav-brand-logo">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0 text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fs-4"></i>
        </button>

        <!-- Navigation Links & Actions -->
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 flex-nowrap">
                <!-- Home -->
                <li class="nav-item">
                    <a href="<?= site_root_url() ?>" class="nav-link-custom <?= ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') ? 'active' : '' ?>">
                        <i class="fas fa-home me-1"></i> <?= $this->lang->line('nav_home'); ?>
                    </a>
                </li>
                <!-- About -->
                <li class="nav-item">
                    <a href="<?= site_root_url('about') ?>" class="nav-link-custom <?= ($this->uri->segment(1) == 'about') ? 'active' : '' ?>">
                        <i class="fas fa-building me-1"></i> <?= $this->lang->line('nav_about'); ?>
                    </a>
                </li>
                <!-- Products & Services -->
                <li class="nav-item">
                    <a href="<?= site_root_url('services') ?>" class="nav-link-custom <?= ($this->uri->segment(1) == 'services') ? 'active' : '' ?>">
                        <i class="fas fa-hand-holding-dollar me-1"></i> <?= $this->lang->line('nav_services'); ?>
                    </a>
                </li>
                <!-- Application Steps -->
                <li class="nav-item">
                    <a href="<?= site_root_url('apply') ?>" class="nav-link-custom <?= ($this->uri->segment(1) == 'apply') ? 'active' : '' ?>">
                        <i class="fas fa-list-check me-1"></i> <?= $this->lang->line('nav_apply'); ?>
                    </a>
                </li>
                <!-- Company Policy -->
                <li class="nav-item">
                    <a href="<?= site_root_url('policy') ?>" class="nav-link-custom <?= ($this->uri->segment(1) == 'policy') ? 'active' : '' ?>">
                        <i class="fas fa-shield-halved me-1"></i> <?= $this->lang->line('nav_policy'); ?>
                    </a>
                </li>
                <!-- Contact -->
                <li class="nav-item">
                    <a href="<?= site_root_url('contact') ?>" class="nav-link-custom <?= ($this->uri->segment(1) == 'contact') ? 'active' : '' ?>">
                        <i class="fas fa-headset me-1"></i> <?= $this->lang->line('nav_contact'); ?>
                    </a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                <!-- 3D Language Switcher Pill -->
                <?php $current_lang = $this->session->userdata('site_lang'); ?>
                <div class="lang-toggle-pill <?= ($current_lang == 'english') ? 'en' : 'th' ?>">
                    <div class="slider"></div>
                    <a href="<?= site_root_url('lang/switch/en') ?>" class="<?= ($current_lang == 'english') ? 'active' : '' ?>">EN</a>
                    <a href="<?= site_root_url('lang/switch/th') ?>" class="<?= ($current_lang != 'english') ? 'active' : '' ?>">TH</a>
                </div>

                <!-- Apply Loan CTA Button -->
                <a href="<?= $this->lang->line('app_download_url'); ?>" target="_blank" class="btn-primary-3d text-nowrap py-2 px-3 fs-6">
                    <i class="fas fa-paper-plane"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                </a>
            </div>
        </div>
    </div>
</nav>