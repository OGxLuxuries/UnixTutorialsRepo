<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>WFS - Step 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>  
    <body class="wfs-bkgd">

        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title wfs-bkgd">Step 4 <br> Moving Files</h1>
        </main>
        <main>
            <section class="intro">
                <h2>NOTE</h2>
                <p>We will move the files with the <span>mv</span> command into their respective folders. </p>
               
                <section class="video-container-wfs">
                <h2>Tutorial</h2>
                <video controls>
                    <source src="../media/videos/step4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
                
            </section>
        </main>
        <main class="prev-next">
        <button onclick="window.location.href = 'step-3.php';">Previous</button>
        <button onclick="window.location.href = 'step-5.php';">Next</button>
        </main>
    </body>

    <?php include('../pinclude/footer.php'); ?>
    </body>
</html>