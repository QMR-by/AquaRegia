<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<div class="container">
    <div class="mediacontainer">
        <img src="<?= base_url('public/img/Logo.png') ?>" alt="Aqua Regia Logo" class="logo">
        <h1>Media Gallery</h1>
        <div class="gallery">
            <?php
            $galleryPath = FCPATH . 'public/img/gallery/';
            $images = glob($galleryPath . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            if (!empty($images)) :
                $index = 1;
                foreach ($images as $img) :
                    $imgUrl = base_url('public/img/gallery/' . basename($img));
            ?>
                    <div class="gallery-item">
                        <img src="<?= $imgUrl ?>" alt="Media Image" onclick="openModal();currentSlide(<?= $index ?>)" class="hover-shadow">
                    </div>
            <?php
                    $index++;
                endforeach;
            else :
            ?>
                <p>No images available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <?php
        if (!empty($images)) :
            $index = 1;
            foreach ($images as $img) :
                $imgUrl = base_url('public/img/gallery/' . basename($img));
        ?>
                    <div class="mySlides">
                        <div class="numbertext"><?= $index ?> / <?= count($images) ?></div>
                        <img src="<?= $imgUrl ?>" style="width:100%">
                    </div>
        <?php
                    $index++;
            endforeach;
        endif;
        ?>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>
    </div>
</div>

<!-- Include the custom JavaScript file -->
<script src="<?= base_url('public/js/lightbox.js') ?>"></script>

<?= $this->endSection() ?>