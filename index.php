<?php
$section = $_GET['section'] ?? 'Home';
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div style="display: flex; height: 100vh;">
    <!-- Sidebar -->
    <div style="width: 10vw; min-width: 150px;">
      <?php include 'components/Sidebar.php'; ?>
    </div>

    <!-- Main Content -->
    <div style="flex: 1;">
      <?php include 'components/sections/' . $section . '.php'; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>