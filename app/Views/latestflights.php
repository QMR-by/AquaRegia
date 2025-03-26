<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <?= $this->include('components/hero-secs/landing_hero_section') ?> -->
<div class="latestflightcontainer">
    <h1>Latest Flights</h1>
    <p>Welcome to the latest flights page. Here you will find the most recent flight information.</p>
    <p>Stay tuned for updates on flight schedules, destinations, and more.</p>


</div>

<!-- Insert Latest Flights database stuff here. -->

<!-- Do we do this? I feel like this "Latest Flights" will be hard to do for the Backend and Database people hshshshs -->

<?= $this->endsection('contents') ?>