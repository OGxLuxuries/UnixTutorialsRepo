<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>WFS - Step 3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>  
    <body class="wfs-bkgd">

        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title wfs-bkgd">Step 3 <br> Changing Permissions</h1>
        </main>
        <main>
            <section class="intro">
                <h2>NOTE</h2>
                <p>We will edit permissions with the <span>chmod</span> command. Folders will have <span>755</span> and files will have <span>644</span> </p>
               
                <section class="video-container-wfs">
                <h2>Folder Tutorial</h2>
                <video controls>
                    <source src="../media/videos/step3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
                
            </section>
        </main>
        <main class="prev-next">
        <button onclick="window.location.href = 'step-2.php';">Previous</button>
        <button onclick="window.location.href = 'step-4.php';">Next</button>
        </main>
    </body>

    <?php include('../pinclude/footer.php'); ?>
    </body>
</html>