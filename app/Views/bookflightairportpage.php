<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<h2>Flight Details</h2>
    <form action="<?= base_url().'bookFlightFlyDetails' ?>" method="post">
        <label for="airportName">Airport Name:</label>
        <select id="airportName" name="airportName" required>
            <option value="JFK">John F. Kennedy International Airport</option>
            <option value="LAX">Los Angeles International Airport</option>
            <option value="ORD">O'Hare International Airport</option>
            <option value="DFW">Dallas/Fort Worth International Airport</option>
            <option value="DEN">Denver International Airport</option>
        </select><br>

        <label for="countryOrigin">Origin:</label>
        <input type="text" id="countryOrigin" name="countryOrigin" value="Philippines" readonly><br>

        <label for="countryDestination">Country Destination:</label>
        <select id="countryDestination" name="countryDestination" required><br>
            <option value="PH">Philippines</option>
            <option value="US">United States of America</option>
            <option value="UAE">United Arab Emirates</option>
            <option value="GBR">United Kingdom</option>
            <option value="CN">China</option>
            <option value="JP">Japan</option>
        </select><br>

        <button type="submit">Confirm</button>
    </form>

<?= $this->endsection('contents') ?>