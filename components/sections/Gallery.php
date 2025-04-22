<?php
$galleryItems = [
    ['name' => 'BEL 2024.jpg', 'alt' => 'Photo 1'],
    ['name' => 'CMR.jpg', 'alt' => 'Photo 2'],
    ['name' => 'DSC_1831.JPG', 'alt' => 'Photo 3'],
    ['name' => 'Federal Bank.JPG', 'alt' => 'Photo 4'],
    ['name' => 'Honda cars.jpg', 'alt' => 'Photo 4'],
    ['name' => 'Hughes systique.jpg', 'alt' => 'Photo 4'],
    ['name' => 'IMG-20220919-WA0026 (1).jpg', 'alt' => 'Photo 4'],
    ['name' => 'JBM.jpg', 'alt' => 'Photo 4'],
    ['name' => 'Lumax Industry.jpg', 'alt' => 'Photo 4'],
    ['name' => 'Maruti Suzuki.jpg', 'alt' => 'Photo 4'],
    ['name' => 'wipro.jpg', 'alt' => 'Photo 4'],
    // [ 'name' => 'Yahama.HEIC', 'alt' => 'Photo 4' ],
];

function renderGallery($gItems)
{
    foreach ($gItems as $img) {
        echo '<div>';
        $src = "data/Photographs/" . $img['name'];
        $alt = htmlspecialchars($img['alt']); // Safe for HTML
        echo "<img src='$src' alt='$alt' height='auto'>";
        echo $img['name'];
        echo '</div>';
    }
}

?>

<div style="display: flex; flex-direction: column; width: 100%; height:100%; align-items: center;">
    <h1>Gallery</h1>
    <div id="Gallery">
        <?php
    renderGallery($galleryItems)
    ?>
    </div>
</div>

<style>
    h1{
        background-color: rgb(31, 65, 185);
        color: aliceblue;
        width: 100%; 
        padding: 10px;
        text-align: center;
        font-size: 50px;
    }
    #Gallery {
        display: flex;
        width: 100%;
        flex-direction: column;
        overflow: auto;
        max-height: 100%;

        align-items: center;

        gap: 20px;
        padding: 10px 0;

        div {
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;

            img {
                width: 100%;
                border-radius: 20px;
            }
        }
    }
</style>