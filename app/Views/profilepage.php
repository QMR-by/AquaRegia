<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- Backend stuff after /strong tag -->

<div class="profile-details"></div>
    <h2>Profile Details</h2>
    <p><strong>First Name:</strong> <?php echo $firstname; ?></p>
    <p><strong>Last Name:</strong> <?php echo $lastname; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $dateofbirth; ?></p>
    <p><strong>Place of Birth:</strong> <?php echo $placeofbirth; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <p><strong>Password:</strong> 
        <span id="password" style="display:none;"><?php echo $password ?></span>
        <button type="button" onclick="togglePassword()">View</button>
    </p>

    <script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        if (passwordField.style.display === "none") {
            passwordField.style.display = "inline";
        } else {
            passwordField.style.display = "none";
        }
    }
    </script>
    
    <p><strong>Phone Number:</strong> <?php echo $phonenumber; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Passport Number:</strong> <?php echo $passportnumber; ?></p>

    <div class="profile-actions">
        <div class="profile-actions">
            <a href="editProfile" class="btn btn-primary">Edit Profile Settings</a>
            <a href="<?= base_url().'logout'?>" class="btn btn-secondary">Logout</a>
        </div>
    </div>

</div>
<?= $this->endsection('contents') ?>