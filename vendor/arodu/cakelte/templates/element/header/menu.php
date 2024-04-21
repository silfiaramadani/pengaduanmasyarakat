<?php
// Ambil level pengguna dari Identity
$userLevel = $this->Identity->get('level');
$userId = $this->Identity->get('id');
?>

<!-- Navigasi -->
<ul class="navbar-nav">
    <!-- Link Pengaduan -->
    <li class="nav-item d-none d-sm-inline-block">
        <?= $this->Html->link(__('Pengaduan'), ['controller' => 'Pengaduan', 'action' => 'index'], ['class' => 'nav-link']) ?>
    </li>

    <!-- Link Petugas (jika level bukan "masyarakat") -->
    <?php if ($userLevel == 'masyarakat') : ?>
        <li class="nav-item d-none d-sm-inline-block">
            <?= $this->Html->link(__('Profil'), ['controller' => 'Petugas', 'action' => 'view', $userId], ['class' => 'nav-link']) ?>
        </li>
    <?php else: ?>
        <li class="nav-item d-none d-sm-inline-block">
            <?= $this->Html->link(__('Petugas'), ['controller' => 'Petugas', 'action' => 'view', $userId], ['class' => 'nav-link']) ?>
        </li>
    <?php endif; ?>

    <!-- Link Logout -->
    <li class="nav-item d-none d-sm-inline-block">
        <?= $this->Html->link(__('Logout'), ['controller' => 'Petugas', 'action' => 'logout'], ['class' => 'nav-link']) ?>
    </li>
</ul>