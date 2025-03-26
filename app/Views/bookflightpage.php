<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<div class = "bookflightcontainer"> <div class = "bookformcontainer"> 
        <h2>Passenger Details</h2>
        <form action="<?= base_url().'bookFlightAirport' ?>" method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required><br>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>

            <label for="pob">Place of Birth:</label>
            <input type="text" id="pob" name="pob" required><br>

            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required><br>

            <label for="passportNumber">Passport Number:</label>
            <input type="text" id="passportNumber" name="passportNumber" required><br>
            
            <!-- <form action="useProfileInfo" method="post">
                <button type="submit">Use Profile Info</button>
            </form> -->

        <!-- AUTO FILL SCRIPT -->
            <?php if (isset($profile)) : ?>
                <script>
                    document.getElementById('firstName').value = "<?= $profile['firstName'] ?>";
                    document.getElementById('lastName').value = "<?= $profile['lastName'] ?>";
                    document.getElementById('dateOfBirth').value = "<?= $profile['dateOfBirth'] ?>";
                    document.getElementById('placeOfBirth').value = "<?= $profile['placeOfBirth'] ?>";
                    document.getElementById('nationality').value = "<?= $profile['nationality'] ?>";
                    document.getElementById('gender').value = "<?= $profile['gender'] ?>";
                    document.getElementById('email').value = "<?= $profile['email'] ?>";
                    document.getElementById('phoneNumber').value = "<?= $profile['phoneNumber'] ?>";
                    document.getElementById('passportNumber').value = "<?= $profile['passportNumber'] ?>";
                </script>
            <?php endif; ?>

            <button type="submit">Confirm</button>
        </form>
    </div>    
</div>
   

<?= $this->endsection('contents') ?>