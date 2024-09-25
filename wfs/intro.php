<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>WFS - Introduction</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>  
    <body class="wfs-bkgd">

        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title wfs-bkgd">Introduction</h1>
        </main>
        <main>
            <section class="intro">
                <h2>What is a web file structure & Why is it needed?</h2>
                <h3>What</h3>
                <p>A web file structure refers to the organization of files and
                     folders within a website's directory. It dictates how various files, 
                     such as HTML, CSS, JavaScript, images, and other assets, are arranged.</p>
                <hr>
                <h3>Why</h3>
                <p>In web file structure, grouping files by their extensions into distinct 
                    folders significantly streamlines development. For instance, placing HTML 
                    files in a "pages" folder, CSS files in a "styles" folder, JavaScript files
                     in a "scripts" folder, PHP files in a "backend" folder, and images in an "images"
                      folder organizes assets logically. This arrangement simplifies the process of
                       locating and editing specific components during development. Developers can 
                       quickly navigate through relevant files, reducing the time spent searching 
                       through a cluttered directory. Additionally, this structure promotes modularization,
                        allowing developers to focus on individual aspects of the project without interference 
                        from unrelated files. Overall, organizing files by extension enhances efficiency, 
                        accelerates development workflows, and contributes to the creation of well-structured 
                        and maintainable web projects.</p>
                
            </section>
        </main>
        <main class="prev-next">
        <button onclick="window.location.href = 'intro.php';">Previous</button>
        <button onclick="window.location.href = 'step-1.php';">Next</button>
        </main>
    </body>

    <?php include('../pinclude/footer.php'); ?>
    </body>
</html>