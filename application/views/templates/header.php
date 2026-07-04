<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?? 'KosKu' ?> - KosKu</title>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
  <a href="<?= ($role = $this->session->userdata('role')) === 'admin' ? base_url('admin/dashboard') : base_url('penghuni/dashboard') ?>" class="topbar-brand">
    <div class="brand-logo"><i class="fas fa-building"></i></div>
    KosKu
  </a>
  <div class="topbar-right">
    <span class="user-badge">
      <i class="fas fa-user-circle"></i>
      <?= $this->session->userdata('nama') ?>
      (<?= ucfirst($this->session->userdata('role')) ?>)
    </span>
    <a href="<?= base_url('logout') ?>" class="btn btn-sm" onclick="return confirm('Yakin logout?')">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>
</div>

<!-- SIDEBAR -->
<div class="sidebar">
<?php if ($this->session->userdata('role') === 'admin'): ?>
  <div class="sidebar-section">Utama</div>
  <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= uri_string() === 'admin/dashboard' ? 'active' : '' ?>">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </a>
  <div class="sidebar-section">Kelola</div>
  <a href="<?= base_url('admin/kamar') ?>" class="nav-link <?= strpos(uri_string(),'admin/kamar') !== false ? 'active' : '' ?>">
    <i class="fas fa-door-open"></i> Data Kamar
  </a>
  <a href="<?= base_url('admin/penghuni') ?>" class="nav-link <?= strpos(uri_string(),'admin/penghuni') !== false ? 'active' : '' ?>">
    <i class="fas fa-users"></i> Data Penghuni
  </a>
  <a href="<?= base_url('admin/pemesanan') ?>" class="nav-link <?= strpos(uri_string(),'admin/pemesanan') !== false ? 'active' : '' ?>">
    <i class="fas fa-calendar-check"></i> Pemesanan
  </a>
  <div class="sidebar-section">Keuangan</div>
  <a href="<?= base_url('admin/pembayaran') ?>" class="nav-link <?= strpos(uri_string(),'admin/pembayaran') !== false ? 'active' : '' ?>">
    <i class="fas fa-credit-card"></i> Pembayaran
  </a>
  <a href="<?= base_url('admin/laporan') ?>" class="nav-link <?= strpos(uri_string(),'admin/laporan') !== false ? 'active' : '' ?>">
    <i class="fas fa-chart-bar"></i> Laporan
  </a>
<?php else: ?>
  <div class="sidebar-section">Menu</div>
  <a href="<?= base_url('penghuni/dashboard') ?>" class="nav-link <?= uri_string() === 'penghuni/dashboard' ? 'active' : '' ?>">
    <i class="fas fa-home"></i> Dashboard
  </a>
  <a href="<?= base_url('penghuni/kamar') ?>" class="nav-link <?= strpos(uri_string(),'penghuni/kamar') !== false ? 'active' : '' ?>">
    <i class="fas fa-door-open"></i> Lihat Kamar
  </a>
  <a href="<?= base_url('penghuni/pemesanan') ?>" class="nav-link <?= strpos(uri_string(),'penghuni/pemesanan') !== false ? 'active' : '' ?>">
    <i class="fas fa-calendar-check"></i> Pemesanan Saya
  </a>
  <a href="<?= base_url('penghuni/pembayaran') ?>" class="nav-link <?= strpos(uri_string(),'penghuni/pembayaran') !== false ? 'active' : '' ?>">
    <i class="fas fa-credit-card"></i> Riwayat Bayar
  </a>
<?php endif; ?>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success"><i class="fas fa-check-circle"></i> <?= $this->session->flashdata('success') ?></div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
<div class="alert alert-danger"><i class="fas fa-exclamation-circle"></i> <?= $this->session->flashdata('error') ?></div>
<?php endif; ?>
