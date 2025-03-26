<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- Input backend stuff here ($_POST) -->




<!-- After each td, input the echo stuff -->

<h2>Review Your Details</h2>

    <!-- Passenger Details -->
    <h3>Passenger Details</h3>
    <table>
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr><td>Firts Name </td><td>             </td></tr>
        <tr><td>Last Name </td><td>              </td></tr>
        <tr><td>Date of Birth </td><td>          </td></tr>
        <tr><td>Gender </td><td>                 </td></tr>
        <tr><td>Email </td><td>                  </td></tr>
        <tr><td>Phone Number </td><td>           </td></tr>
        <tr><td>Passport Number</td><td>         </td></tr>
    </table>

    <!-- Flight Details -->
    <h3>Flight Details</h3>
    <table>
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr><td>Current Country</td><td>            </td></tr>
        <tr><td>Destination</td><td>                </td></tr>
        <tr><td>Departure Date</td><td>             </td></tr>
        <tr><td>Departure Time</td><td>             </td></tr>
        <tr><td>Arrival Date</td><td>               </td></tr>
        <tr><td>Arrival Time</td><td>               </td></tr>
        <tr><td>Class</td><td>                      </td></tr>
        <tr><td>Seat</td><td>                       </td></tr>
        <tr><td>Seat Number</td><td>                </td></tr>
        <tr><td>Flight Number</td><td>              </td></tr>
        <tr><td>Airport Name</td><td>               </td></tr>
        <tr><td>City Destination</td><td>           </td></tr>
    </table>

    <!-- Button -->
    <div class="payment"></div>
        <a href="<?= base_url().'reviewCosts' ?>" class="btn btn-primary">Proceed to Payment</a>
    </div>

<?= $this->endsection('contents') ?>