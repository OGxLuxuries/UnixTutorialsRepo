<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>WFS - Step 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>  
    <body class="wfs-bkgd">

        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title wfs-bkgd">Step 1 <br> Creating Files & Folders</h1>
        </main>
        <main>
            <section class="intro">
                <h2>FILES</h2>
                <p>This is a list of all the files we will be working with. All these files must be created from stratch with the <span>touch</span> command.</p>
                <ul>
                    <li>index.html</li>
                    <li>suv.html</li>
                    <li>sports-car.html</li>
                    <li>styles.css</li>
                    <li>form-validation.js</li>
                    <li>camaro.png</li>
                    <li>donuts.mp4</li>
                </ul>
                
                <hr>
                <h2>FOLDERS</h2>
                <p>This is a list of all the folders we will be working with. All these folders must be created from stratch with the <span>mkdir</span> command.</p>
                <ul>
                    <li>css/</li>
                    <li>scripts/</li>
                    <li>media/</li>
                    <li>images/</li>
                    <li>videos/</li>
                </ul>
                <hr>
                <h3>Command Sequence</h3>
                <ul class="cmd-seq">
                    <li><span>$ touch index.html</span></li>
                    <li><span>$ touch suv.html</span></li>
                    <li><span>$ touch sports-car.html</span></li>
                    <li><span>$ touch styles.css</span></li>
                    <li><span>$ touch form-validation.js</span></li>
                    <li><span>$ touch camaro.png</span></li>
                    <li><span>$ touch donuts.mp4</span></li>
                    <li><span>$ mkdir css</span></li>
                    <li><span>$ mkdir scripts</span></li>
                    <li><span>$ mkdir media</span></li>
                    <li><span>$ mkdir images</span></li>
                    <li><span>$ mkdir videos</span></li>
                </ul>
                <h3>Sample Output</h3>
                <div>
                    <img class="center" style= "width: 65vw;"src="../media/images/step1.png" alt="output">
                </div>
                
            </section>
        </main>
        <main class="prev-next">
        <button onclick="window.location.href = 'intro.php';">Previous</button>
        <button onclick="window.location.href = 'step-2.php';">Next</button>
        </main>
    </body>

    <?php include('../pinclude/footer.php'); ?>
    </body>
</html>