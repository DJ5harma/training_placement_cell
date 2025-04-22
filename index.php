<?php
$section = $_GET['section'] ?? 'Home';
?>

<!DOCTYPE html>
<html>

<head>
  <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div style="display: flex;">
    <div style="width: 10vw; height:100vh;">
      <?php
      include 'components/Sidebar.php';
      ?>
    </div>
    <div style="width: 90vw; height:100vh;">
      <?php
      include 'components/sections/' . $section . '.php';
      ?>
    </div>
  </div>
  <!-- <div class="logo-image">
    <img src="images/logo.png" alt="Cover Image">
     <div id="placements">
        <a  href="data/year22&2.xlsx"> <button type="button" class="btn btn-success"></button></div></a>

  </div>
  <div class="background-image">
    <div class="overlay"></div>
    <h1>Training & Placement Cell</h1>
  </div>
  </br>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="https://docs.google.com/spreadsheets/d/1j2FMdLiV2LxFi32IpBIXK1aUnmChpZhp6hiPu0gjFRo/edit?usp=sharing"> Past Placement Record</a></p>
  <h4>Placement for year 2022-2023 </h4>
  </br>
  <table class="placement-table">
    <thead>
      <tr>
        <th>Branch</th>
        <th>No of Placements</th>
        <th>Highest Package</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Computer Science</td>
        <td>113</td>
        <td>20 LPA</td>

      </tr>
      <tr>
        <td>Electronics & Communication</td>
        <td>62</td>
        <td>8.52 LPA</td>

      </tr>
      <tr>
        <td>Mechanical Engineering</td>
        <td>43</td>
        <td>10.34 LPA</td>

      </tr>
      <tr>
        <td>Biotechnology</td>
        <td>4</td>
        <td>4.1 LPA</td>

      </tr>
      <tr>
        <td>M.Tech. Defence Technology</td>
        <td>1</td>
        <td>13 LPA</td>

      </tr>
    </tbody>
  </table>
  <div>
    </br>
    </br>
    <h4>Placement for year 2021-2022</h4>
    </br>
    <table class="placement-table">
      <thead>
        <tr>
          <th>Branch</th>
          <th>No of Placements</th>
          <th>Highest Package</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Computer Science</td>
          <td>163</td>
          <td>44 LPA</td>

        </tr>
        <tr>
          <td>Electronics & Communication</td>
          <td>65</td>
          <td>6.5 LPA</td>

        </tr>
        <tr>
          <td>Mechanical Engineering</td>
          <td>52</td>
          <td>14 LPA</td>

        </tr>
        <tr>
          <td>Biotechnology</td>
          <td>9</td>
          <td>3.6 LPA</td>

        </tr>

      </tbody>
    </table>
    </br>


    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeqFQA5io7A-bdR2x7EJnRqxnxUwqkSfiLFSruSFmFZo1MSqg/viewform?c=0&amp;w=1">Alumni Database</a></li>
    <li><a href="/pdf/milaap_report.pdf">Report Alumni Meet MILAAP 2022</a></li>
    <li><a href="pdf/NotedAlumni.pdf">Noted Alumni's of UIET</a></li>




    <h4>Our Team</h4>
    </br>
    <div class="container">
      <div class="tpo">
        <div class="image-frame">
          <img src="images/drnikhil.jpg" alt="Dr. Nikhil Marriwala">
        </div>
        <div class="name">Dr. Nikhil Marriwala</div>
        <div class="designation">Training & Placement Officer</div>
        <div class="Phone No.">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Contact No. 9416668482</div>
      </div>
      <div class="tpo">
        <div class="image-frame">
          <img src="images/drsanjeev.jpg" alt="Dr. Sanjeev Ahuja">
        </div>
        <div class="name">Dr. Sanjeev Ahuja</div>
        <div class="designation">Training & Placement Officer</div>
        <div class="Phone No."> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Contact No. 9991385634</div>
      </div>
      <div class="tpo">
        <div class="image-frame">
          <img src="images/DrSunilDhingra.jpeg" alt="Dr. Sunil Dhingra">
        </div>
        <div class="name">Dr. Sunil Dhingra</div>
        <div class="designation">Training & Placement Officer</div>
        <div class="Phone No."> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Contact No. 9541653750</div>
      </div>

    </div>
  </div>
  </br>
  </br>
  <div class="contactus">
    <h4>Contact us</h4>
    <h4>Dr. Nikhil Marriwala, Dr. Sanjeev Ahuja & Dr. Sunil Dhingra</h4>
    <p>Mobile: 97299 99805 ,9541653750(Dr. Sunil Dhingra)</p>
    <p>
      Office : 01744-238967 (Direct)</p>
    <p>E-mail: tpouiet@kuk.ac.in</p>
  </div>
  </br>
  <div class="footer">
    <p>UIET KUK | Developed by Parul Gupta</p>
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>