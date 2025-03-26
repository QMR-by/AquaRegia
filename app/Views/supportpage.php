<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <?= $this->include('components/hero-secs/landing_hero_section') ?> -->
<div class="supportcontainer">
    <div class="support-page">
        <h1>Our Causes</h1>
        <div class="sdg-section">
            <div class="sdg-text">
                <h2>Sustainable Development Goal (SDG) 14: "Life Below Water"</h2>
                <p>Aqua Regia is a single-player 3D roguelite where players control Vac, who is mysteriously shrunk by a laser while walking home and falls into a river. A portal transports them to an abandoned lab filled with equipment and a cryptic AI. As they progress, players uncover the lab's history, rebuild it, cleanse the environment, and work to restore a particle machine to return to normal size. Each run unlocks new items, weapons, and playable characters, offering diverse playstyles and keeping gameplay engaging. The main character has five weapons, while each unlockable character has three.</p>
            </div>
            <div class="sdg-image">
                <img src="public/img/sdg14.png" alt="SDG 14: Life Below Water" class="img-fluid">
            </div>
        </div>

        <h2>General Objectives</h2>
        <p>This study aims to create an engaging educational game that raises awareness of the environmental and societal impact of unmaintained rivers. It informs players about the dangers of neglected and polluted rivers on the environment.</p>
        <h3>Aqua Regia advocates for:</h3>
        <ul>
            <li>Responsible waste disposal</li>
            <li>Aquatic diversity</li>
            <li>Environmental protection</li>
        </ul>
        <h3>The game encourages players to take action toward responsible behavior by:</h3>
        <ul>
            <li>Mimicking real-world difficulties and outcomes</li>
            <li>Incorporating a 3D roguelite gameplay for a fun and interactive experience</li>
        </ul>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</div>
<?= $this->endSection() ?>