<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>About Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
        <style>
            .team-member img {
                width: 50%; 
                height: auto;
                display: block; 
                margin: 0 auto 15px; 
                border-radius: 50%; 
            }
            @media screen and (max-width: 600px) {
                .team-member img {
                    width: 80%; 
                }
            }
            .team-image img {
                width: 100%; 
                height: auto; 
                max-width: 100%; 
                max-height: 400px; 
                object-fit: cover; 
                border-radius: 10px; 
                margin-bottom: 15px; 
            }
        </style>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">About Us</h1>
            <section class="meet-the-team">
                <h2>Meet the Team</h2>
                <div class="team-member">
                    <h3>Hector Rivera</h3>
                    <p>Major: Mobile App Development</p>
                    <p>Year: 4nd year</p>
                    <p>Email: hr6049@rit.edu </p>
                    <img src="../media/images/hector.jpg" alt="Hector Rivera">
                </div>
                <div class="team-member">
                    <h3>Ian Torres</h3>
                    <p>Major: Humanities, Computation and Design/ Digital Humanities and Social Sciences</p>
                    <p>Year: 2nd year</p>
                    <p>Email: ilt5440@g.rit.edu</p>
                    <img src="../media/images/ian.png" alt="Ian Torres">
                </div>
                <div class="team-member">
                    <h3>Jack Ramin</h3>
                    <p>Major: Human Centered Computing</p>
                    <p>Year: 2nd year</p>
                    <p>Email: jgr3607@g.rit.edu</p>
                    <img src="../media/images/jack.png" alt="Jack Ramin">
                </div>
                <div class="team-member">
                    <h3>Manaswini Singh</h3>
                    <p>Major: Computing and Information Technology</p>
                    <p>Year: 3rd year</p>
                    <p>Email: ms9647@rit.edu</p>
                    <img src="../media/images/manaswini.jpg" alt="Manaswini Singh">
                </div>
                <div class="team-member">
                    <h3>Oliver Gomes</h3>
                    <p>Major: Computing and Information Technology</p>
                    <p>Year: 2nd year</p>
                    <p>Email: odg1896@rit.edu</p>
                    <img src="../media/images/oliver.jpg" alt="Oliver Gomes">
                </div>
            </section>

            <section class="team-images">
                <h2>Our Team</h2>
                <div class="team-image">
                    <img src="../media/images/teampicture.jpg" alt="Team Picture">
                </div>
               
            </section>
        </main>

        <?php include('../pinclude/footer.php'); ?>
    </body>
</html>

