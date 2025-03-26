<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- Input backend stuff here ($_POST) -->




<!-- After each td, input the echo stuff -->

<table>
    <tr>
        <th>Item</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td>Base Fare</td>
        <td>            ?></td>
    </tr>
    <tr>
        <td>Taxes and Fees</td>
        <td>            ?></td>
    </tr>
    <tr>
        <td>Baggage Fees</td>
        <td>            ?></td>
    </tr>
    <tr class="totalRow">
        <td>Total Cost</td>
        <td>            ?></td>
    </tr>
</table>

    <div class="payment-buttons">
        <a href="<?= base_url() ?>" class="btn btn-success">Confirm Payment</a>
        <a href="<?= base_url() ?>" class="btn btn-secondary">Skip Payment</a>
    </div>

<?= $this->endsection('contents') ?>