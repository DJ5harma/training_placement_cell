<?php
$galleryItems = [
    ['file' => 'Yamaha.jpg', 'alt' => 'Yamaha'],
    ['file' => 'BEL 2024.jpg', 'alt' => 'BEL'],
    ['file' => 'CMR.jpg', 'alt' => 'CMR'],
    ['file' => 'Infosys.JPG', 'alt' => 'Infosys'],
    ['file' => 'Federal Bank.JPG', 'alt' => 'Federal Bank'],
    ['file' => 'wipro.JPG', 'alt' => 'Wipro'],
    ['file' => 'JBM.png', 'alt' => 'JBM'],
    ['file' => 'Honda cars.jpg', 'alt' => 'Honda Cars'],
    ['file' => 'Lumax Industry.jpg', 'alt' => 'Lumax Industry'],
    ['file' => 'Maruti Suzuki.jpg', 'alt' => 'Maruti Suzuki'],
];
?>

<div style="display: flex; flex-direction: column; width: 100%; height: 100%;">
    <h1 class="heading">Gallery</h1>
    <div id="carousel-container">

        <button class="carousel-arrow left" onclick="moveSlide(-1)">&#10094;</button>

        <div id="carousel-track">
            <?php foreach ($galleryItems as $img): ?>
                <div class="carousel-slide">
                    <img src="<?php echo 'data/Photographs/' . $img['file']; ?>" alt="<?php echo htmlspecialchars($img['alt']); ?>">
                    <p><?php echo $img['alt']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-arrow right" onclick="moveSlide(1)">&#10095;</button>
        
    </div>
</div>

<script>
    let currentIndex = 0;
    const track = document.getElementById('carousel-track');
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function moveSlide(direction) {
        currentIndex += direction;
        currentIndex %= totalSlides;
        if (currentIndex < 0) currentIndex = totalSlides - 1;
        if (currentIndex >= totalSlides) currentIndex = totalSlides - 1;

        const offset = -currentIndex * 100;
        track.style.transform = `translateX(${offset}%)`;
    }
</script>

<style>
    #carousel-container {
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    #carousel-track {
        display: flex;
        transition: transform 0.4s ease-in-out;
    }

    .carousel-slide {
        min-width: 100%;
        box-sizing: border-box;
        text-align: center;

        p {
            margin-top: 20px;
        }
    }

    .carousel-slide img {
        width: 100%;
        object-fit: contain;
        overflow: auto;

    }
    .carousel-slide {
        height: 100%;
    }
    
    img {
        height: 80vh;
    }

    .carousel-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        font-size: 2rem;
        padding: 10px 15px;
        cursor: pointer;
        z-index: 2;
    }

    .carousel-arrow.left {
        left: 10px;
    }

    .carousel-arrow.right {
        right: 10px;
    }

    .carousel-arrow:focus {
        outline: none;
    }
</style>
