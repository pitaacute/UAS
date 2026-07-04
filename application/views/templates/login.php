<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - KosKu</title>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="login-wrap">
<div class="login-box">
  <div class="login-logo">
    <div class="login-logo-icon"><i class="fas fa-building"></i></div>
    <h2>KosKu</h2>
    <p>Sistem Informasi Kos Online</p>
  </div>

  <?php if ($this->session->flashdata('error')): ?>
  <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
  <?php endif; ?>

  <div class="login-tabs">
    <button class="login-tab active" onclick="setRole('admin',this)">Admin</button>
    <button class="login-tab" onclick="setRole('penghuni',this)">Penghuni</button>
  </div>

  <?= form_open('auth/proses_login') ?>
    <input type="hidden" name="role" id="roleInput" value="admin">
    <div class="form-group">
      <label class="form-label">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
    </div>
    <div class="form-group">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
    </div>
    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;padding:10px;">
      <i class="fas fa-sign-in-alt"></i> Masuk
    </button>
  <?= form_close() ?>

  <p style="font-size:11px;color:#aaa;text-align:center;margin-top:14px">
    Admin: <b>admin</b> / admin123 &nbsp;|&nbsp; Penghuni: <b>budi</b> / admin123
  </p>
</div>
</div>
<script>
function setRole(role, el) {
  document.getElementById('roleInput').value = role;
  document.querySelectorAll('.login-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}
</script>
</body>
</html>
