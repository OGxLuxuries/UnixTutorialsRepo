<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    
        <title>Filesystem Commands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body class="adv-bkgd">
        <?php include('/home/iste240t89/Sites/pinclude/header.php'); ?>
        <!--CHANGE STYLES LINK TO BE ACCURATELY NAMED-->
         <main>
         <h1 class="page-title adv-bkgd" >Advanced - Filesystem Commands</h1>
        <section class="file_ops_commands">
            <h2>Filesystem</h2>
            <h3 class="commands">df</h3>
            <p>The df command is used to reveal the usage of a filesystem. </p>
            <h3 class="commands">du</h3>
            <p>The du command is used to see how much disk is used for files and directories. </p>

            <section class="video-container-adv">
                <h2>Checking The Filesystem</h2>
                <video controls>
                    <source src="../media/videos/filesystem-commands-vid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>

        <section class="quiz">
            
            <form name="fileSystemForm" method="POST">
            
        
                <fieldset>
                    <legend>Filesystem QUIZ</legend>
                    
                    

                    <!-- ShortAnswer Quesiton 1 -->
                    <div id="shortAnswer1">
                    <p>Type out the command line to see how much disk is used for files and directories. </p><br>
                    <textarea class="textarea" id="shortanswer1" name="shortanswer1"></textarea>
                    </div>
                    
                    <!-- ShortAnswer Quesiton 2 -->
                    <div id="shortAnswer2">
                    <p>Type out the command line to reveal the usage of a filesystem. </p><br>
                    <textarea class="textarea" id="shortanswer2" name="shortanswer2"></textarea>
                    </div>
                </fieldset>
                <p id="FormErrorMsg"></p>
                
                <!-- <input type="submit" onclick= value="submit">  -->
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_fileSystemForm()">SUBMIT</button>
            </div>
        
        </section>

         </main>



    <footer>
<p>&copy <script>document.write( new Date().getFullYear() );</script> Unix Tutorials. All Rights Reserved. </p>
</footer>    </body>
</html>