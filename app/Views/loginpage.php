<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <?= $this->include('components/hero-secs/landing_hero_section') ?> -->

<div class="lpcontainer">
    <img src="public\img\Logo.png" alt="Logo" width="150" class="d-inline-block align-middle">
    <h2>Login as Admin</h2>
    <?php if (isset($message)) echo $message; ?>
    <form action="<?= base_url().'login/account' ?>" method="post">
        <div class="formGroup">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="formGroup">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <button type="button" onclick="window.location.href='<?= base_url().'signup' ?>'">Sign Up</button>
    </form>
</div>

<?= $this->endSection() ?>