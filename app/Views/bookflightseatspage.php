<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<h2>Seat Preference</h2>
    <form action="<?= base_url().'confirmDetails' ?>" method="post">
        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="Economy">Economy</option>
            <option value="Business">Business</option>
            <option value="FirstClass">First Class</option>
        </select><br>

        <label for="seat">Seat:</label>
        <select id="seat" name="seat" required>
            <option value="aisle">Aisle</option>
            <option value="window">Window</option>
            <option value="middle">Middle</option>
        </select><br>

        <button type="submit">Confirm</button>
    </form>

<?= $this->endsection('contents') ?>