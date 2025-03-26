<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <?= $this->include('components/hero-secs/landing_hero_section') ?> -->
<div class="registercontainer"> 
         <h2>Register</h2>
        <?php echo $message?>
        <form action="<?= base_url().'signup/register' ?>" method="post">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="pob">Place of Birth:</label>
                <input type="text" class="form-control" id="pob" name="pob" required>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password: </label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passportNumber">Passport Number:</label>
                <input type="text" class="form-control" id="passportNumber" name="passportNumber" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        <button type="button" class="btn btn-info" onclick="window.location.href='<?= base_url().'login' ?>'">Login</button>
        </form>
</div>

<?= $this->endSection() ?>