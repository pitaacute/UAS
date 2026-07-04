<div class="page-title">Daftar Kamar</div>
<div class="page-sub">Lihat ketersediaan dan pesan kamar kos</div>

<div class="kamar-grid">
<?php $myKamar = $this->session->userdata('id_kamar'); ?>
<?php foreach ($kamar as $k): ?>
<div class="kamar-card <?= strtolower($k->status) ?>">
  <div style="display:flex;justify-content:space-between;align-items:start;margin-bottom:4px">
    <div class="kamar-nomor">Kamar <?= $k->nomor_kamar ?></div>
    <span class="badge <?= $k->status === 'Kosong' ? 'badge-green' : 'badge-gray' ?>"><?= $k->status ?></span>
  </div>
  <div class="kamar-tipe"><?= $k->tipe ?></div>
  <div class="kamar-harga">Rp <?= number_format($k->harga,0,',','.') ?><span style="font-size:11px;color:#aaa"> /bulan</span></div>
  <div class="kamar-fasilitas"><?= $k->fasilitas ?></div>
  <div style="margin-top:8px">
    <?php if ($k->id_kamar == $myKamar): ?>
      <span class="badge badge-blue"><i class="fas fa-home"></i> Kamar Saya</span>
    <?php elseif ($k->status === 'Kosong'): ?>
      <a href="<?= base_url('penghuni/pesan/'.$k->id_kamar) ?>" class="btn btn-sm btn-primary"
         onclick="return confirm('Pesan kamar <?= $k->nomor_kamar ?>?')">
        <i class="fas fa-calendar-plus"></i> Pesan Kamar
      </a>
    <?php else: ?>
      <span style="font-size:12px;color:#aaa">Tidak tersedia</span>
    <?php endif; ?>
  </div>
</div>
<?php endforeach; ?>
</div>
