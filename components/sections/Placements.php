<?php
$year = $_GET['year'] ?? '2025';
$all_years = range(2018, 2025);
$current_index = array_search($year, array_map('strval', $all_years));
$prev_year = $current_index > 0 ? $all_years[$current_index - 1] : null;
$next_year = $current_index < count($all_years) - 1 ? $all_years[$current_index + 1] : null;
?>
<div id="Placement">
    <h1 class="heading">Placements for the year <?php echo $year; ?></h1>

    <div id="PlacementYearChooser">
        <?php if ($prev_year): ?>
            <a class="arrow" href="?section=Placements&year=<?php echo $prev_year; ?>">&#9664;</a>
        <?php endif; ?>

        <div class="year-buttons">
            <?php foreach ($all_years as $y): ?>
                <a href="?section=Placements&year=<?php echo $y; ?>"
                    class="year-btn <?php echo $y == $year ? 'active' : ''; ?>">
                    <?php echo $y; ?>
                </a>
            <?php endforeach; ?>
        </div>

        <?php if ($next_year): ?>
            <a class="arrow" href="?section=Placements&year=<?php echo $next_year; ?>">&#9654;</a>
        <?php endif; ?>
    </div>

    <?php include 'data/placement_htmls/' . $year . ' passout.php'; ?>
</div>

<style>
    #Placement {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    #PlacementYearChooser {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .year-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .year-btn {
        padding: 8px 16px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        border-radius: 8px;
        text-decoration: none;
        color: #333;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .year-btn:hover {
        background-color: #d0eaff;
        border-color: #007bff;
        color: #007bff;
    }

    .year-btn.active {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }

    .arrow {
        font-size: 24px;
        padding: 0 10px;
        text-decoration: none;
        color: #007bff;
    }

    .arrow:hover {
        color: #0056b3;
    }
</style>


<!-- For table -->
<style>
    table {
      border-collapse: collapse;
      width: 90%;
      max-width: 1000px;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 12px;
      overflow: hidden;
      text-align: center;
    }

    thead {
      background-color: #007bff;
      color: white;
    }

    th, td {
      padding: 14px 20px;
      border: 1px solid #ccc;
    }

    tbody tr:nth-child(even) {
      background-color: #f8faff;
    }

    tbody tr:hover {
      background-color: #e6f0ff;
    }

    th {
      font-size: 1rem;
    }

    td {
      font-size: 0.95rem;
      color: #333;
    }

    
  </style>