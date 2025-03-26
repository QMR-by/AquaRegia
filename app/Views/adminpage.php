<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<h1>Admin Page</h1>

<h2>Cancel Flights</h2>
<form method="post" action="/admin/cancelFlight">
    <label for="flightId">Flight ID:</label>
    <input type="text" id="flightId" name="flightId" required>
    <button type="submit">Cancel Flight</button>
</form>

<h2>Current Flights</h2>
        <table>
            <thead>
                <tr>
                    <th>Flight ID</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flights as $flight): ?>
                    <tr>
                        <td><?= $flight['id'] ?></td>
                        <td><?= $flight['origin'] ?></td>
                        <td><?= $flight['destination'] ?></td>
                        <td><?= $flight['departure_time'] ?></td>
                        <td><?= $flight['status'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?= $this->endSection() ?>