<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <?= $this->include('components/hero-secs/landing_hero_section') ?> -->

<div class="flightsearchcontainer">  
    <h2>Flight Search</h2>
    
    <div class="latestFlights">
        <a href="latestFlights" class="btn btn-primary">Latest Flights</a>
    </div>
    
    <div class="findFlightNumber">
        <h3>Find Flight Number</h3>
        <form action="findFlightNum" method="get">
            <div class="form-group">
                <label for="flightNumber">Flight Number:</label>
                <input type="text" id="flightNumber" name="flightNumber" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>