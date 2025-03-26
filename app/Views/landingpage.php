<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- HERO SECTION -->
<section class="hero">
    <img src="<?= base_url('public/img/hero.png') ?>" alt="Aqua Regia">
</section>

<!-- ABOUT SECTION -->
<section class="about">
    <h2>A THIRD PERSON 3D ROGUELITE GAME ABOUT RAISING AWARENESS FOR WATER POLLUTION IN THE RIVERS OF THE PHILIPPINES</h2>
    <p>
    Aqua Regia is a single-player 3D roguelite where players control Vac, who is mysteriously shrunk by a laser while walking home and falls into a river. A portal transports them to an abandoned lab filled with equipment and a cryptic AI. As they progress, players uncover the lab's history, rebuild it, cleanse the environment, and work to restore a particle machine to return to normal size. Each run unlocks new items, weapons, and playable characters, offering diverse playstyles and keeping gameplay engaging. The main character has five weapons, while each unlockable character has three.
    </p>
</section>

<!-- DEVELOPMENT MEDIA SECTION -->
<div class="recommendedFlights-container">
    <h2 class="center-text">Development Progress Images</h2>
    <div id="recommendedCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Carousel Items -->
            <div class="carousel-item active">
                <img src="<?= base_url('public/img/progress1.png') ?>" class="d-block w-100" alt="Flight 1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('public/img/progress2.png') ?>" class="d-block w-100" alt="Flight 2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('public/img/progress3.png') ?>" class="d-block w-100" alt="Flight 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#recommendedCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#recommendedCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?= $this->endSection() ?>