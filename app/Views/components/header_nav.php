<!-- Header -->
<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a href="<?= base_url()?>" class="navbar-brand text-uppercase fs-5">
            <img src="public\img\Logo.png" alt="Logo" width="150" class="d-inline-block align-middle">
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="list1">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url().'terms'?>" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'causes' ?>"class="nav-link">Our Causes</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'mediagallery' ?>" class="nav-link">Media Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="https://docs.google.com/forms/d/1Ozur-vISpb2AUSxqkSuESXjScrSsKyueUjwZlHQNYh8/preview" class="btn btn-secondary nav-link">Survey</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url().'login'?>" class="btn btn-secondary nav-link">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>