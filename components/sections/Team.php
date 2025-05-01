<?php
$team = [
    [
        "name" => "Dr. Nikhil Kumar Marriwala",
        "role" => "Training & Placement Officer,<br />Associate Professor,<br />U.I.E.T., Kurukshetra University Kurukshetra",
        "contact" => "9416668482",
        "email" => "nmarriwala@kuk.ac.in",
        "image" => "images/drnikhil.jpg"
    ],
    [
        "name" => "Dr. Sanjeev Ahuja",
        "role" => "Training & Placement Officer",
        "contact" => "9991385634",
        "email" => "sahuja2015@kuk.ac.in",
        "image" => "images/drsanjeev.jpg"
    ],
    [
        "name" => "Dr. Sunil Dhingra",
        "role" => "Training & Placement Officer",
        "contact" => "9541653750",
        "email" => "sdhingra2020@gmail.com",
        "image" => "images/DrSunilDhingra.jpeg"
    ],
    [
        "name" => "Mr. Ajay Jangra",
        "role" => "Training & Placement Officer",
        "contact" => "7082113149",
        "email" => "er_jangra@yahoo.co.in",
        "image" => "images/ajay_jangra.jpg"
    ],
    [
        "name" => "Dr. Deepak Malik",
        "role" => "Training & Placement Officer",
        "contact" => "9017414672",
        "email" => "deepak111mallick@gmail.com",
        "image" => "images/deepakmalik.jpg"
    ],
    [
        "name" => "Shikha Chaudhry",
        "role" => "Assistant Professor",
        "contact" => "01744239155",
        "email" => "shikhachaudhry107@gmail.com",
        "image" => "images/shikha_cse.jpg"
    ],
    [
        "name" => "Pragya Chandi",
        "role" => "Assistant Professor",
        "contact" => "01744239155",
        "email" => "pragya.cse.uiet@kuk.ac.in",
        "image" => "images/Pragya.jpg"
    ],
    [
        "name" => "Mr. Krishna Pandey",
        "role" => "Assistant Professor",
        "contact" => "9416077614",
        "email" => "kp7636@gmail.com",
        "image" => "images/krishanpandey.jpg"
    ],
    [
        "name" => "Mr. Krishan Gopal",
        "role" => "Assistant Professor",
        "contact" => "9034353879",
        "email" => "kgopal2015@kuk.ac.in",
        "image" => "images/krishangopal.jpg"
    ],
    [
        "name" => "Mr. Vikas",
        "role" => "Assistant Professor",
        "contact" => "9729012010",
        "email" => "nirmaldhotia@gmail.com",
        "image" => "images/Vikas.jpg"
    ],
    [
        "name" => "Mr. Archit Sharma",
        "role" => "Assistant Professor",
        "contact" => "9466814700",
        "email" => "archit.sharma786@gmail.com",
        "image" => "images/Archit-Sharma.jpg"
    ]
];

?>


<style>
    #Team {
        display: flex;
        width: 100%;
        flex-direction: column;
        height: 100%;
        overflow: auto;
        justify-content: start;
        gap: 20px;
        padding: 10px;
    }

    #Team>div {
        display: flex;
        background-color: rgb(31, 65, 185);
        border-radius: 20px;
    }

    #Team img {
        border-radius: 20px;
        width: 300px;
    }

    #Team>div>div {
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        padding: 0 30px;
    }

    #Team p,
    #Team b {
        font-size: larger;
        color: aliceblue;
    }

    .heading {
        text-align: center;
        font-size: 2rem;
    }
</style>

<div style="display: flex; flex-direction: column; width: 100%; height:100%;">
    <h1 class="heading">Our Team</h1>
    <div id="Team">
        <?php foreach ($team as $member): ?>
            <div>
                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
                <div>
                    <b><?= $member['name'] ?></b>
                    <p><?= $member['role'] ?></p>
                    <p>Contact: <?= $member['contact'] ?></p>
                    <p>Email ID: <?= $member['email'] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</html>