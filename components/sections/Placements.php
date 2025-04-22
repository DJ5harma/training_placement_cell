<?php
$year = $_GET['year'] ?? '2025';
?>
<div id="Placement">
    <h1 class="heading">Placements for the year
        <?php echo $year; ?>
    </h1>
    <div id="PlacementYearChooser">
        <p>
            Change Year:
        </p>
        <a href="?section=Placements&year=2025">2025</a>
        <a href="?section=Placements&year=2024">2024</a>
        <a href="?section=Placements&year=2023">2023</a>
        <a href="?section=Placements&year=2022">2022</a>
        <a href="?section=Placements&year=2021">2021</a>
        <a href="?section=Placements&year=2020">2020</a>
        <a href="?section=Placements&year=2019">2019</a>
        <a href="?section=Placements&year=2018">2018</a>
    </div>
    <?php
    include 'data/placement_htmls/' . $year . 'passout.php';
    ?>
</div>

<style>
    #Placement {
        display: flex;
        width: 100%;
        flex-direction: column;
        overflow: auto;
        max-height: 100%;

        align-items: center;

        gap: 20px;
    }

    #PlacementYearChooser {
        display: flex;
        width: 100%;

        justify-content: center;

        gap: 20px;
        padding: 10px 0;
        /* border-top: solid; */
    }
</style>