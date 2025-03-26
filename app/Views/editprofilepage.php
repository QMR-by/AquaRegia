<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- Backend stuff after value= -->

<form action="<?= base_url().'profile/update' ?>" method="post">
    <h2>Edit Profile</h2>
    <?php echo $message ?>
    <div>
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fname" value="" required>
    </div>
    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="" required>
    </div>
    <div>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" value="" required>
    </div>
    
    <div>
        <label for="oldPassword">Old Password:</label>
        <input type="password" id="oldPassword" name="oldpassword" value="" required>
    </div>
    <div>
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newpassword" value="" required>
    </div>
    <div>
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phoneNumber" value="" required>
    </div>

    <div>
        <button type="submit">Update Profile</button>
    </div>
</form>

<?= $this->endsection('contents') ?>