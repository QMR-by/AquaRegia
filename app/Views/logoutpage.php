<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<h1>Logout</h1>
<p>You have been successfully logged out.</p>
<a href="<?= base_url('login') ?>">Login again</a>

<?= $this->endSection() ?>