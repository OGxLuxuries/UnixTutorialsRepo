<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    
        <title>File Operations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body class="adv-bkgd">
        <?php include('/home/iste240t89/Sites/pinclude/header.php'); ?>
        <!--CHANGE STYLES LINK TO BE ACCURATELY NAMED-->
         <main>
         <h1 class="page-title adv-bkgd" >Advanced - File Operations</h1>
        <section class="file_ops_commands">
            <h2>Locators</h2>
            <h3 class="commands">find</h3>
            <p>The find command is used to find files or directories. </p>
            <h3 class="commands">rsync</h3>
            <p>The rsync command is used to sync directories on your device with remote directories and/or files. </p>
            <h3 class="commands">basename</h3>
            <p> The basename command can be used to pull a filename from the whole path (it removes the directory names). </p>
            <h2>Shortcuts</h2>
            <h3 class="commands">ln</h3>
            <p> The ln command can be used to make links to files. </p>
        </section>

        <section class="video-container-adv">
                <h2>File Operations</h2>
                <video controls>
                    <source src="../media/videos/file-ops.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>


        <section class="quiz">
            
            <form name="fileOpsForm" method="POST">
            
        
                <fieldset>
                    <legend>Locators QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these is used to pull a filename from the whole path?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="basename"  id="basename"><label for="basename">basename</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="find"  id="find" > <label for="find">find</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="rsync"  id="rsync"> <label for="rsync">rsync</label></br>
                    </div>
                    
                    <!-- MC Quesiton 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p  >Which of these is used to sync directories on your device with remote directories and/or files?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question2" value="rsync"  id="rsync"><label for="rsync">rsync</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="basename"  id="basename" > <label for="basename">basename</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question2" value="find"  id="find"> <label for="find">find</label></br>
                    </div>

                    <!-- ShortAnswer Quesiton -->
                    <div id="shortAnswer1">
                    <p>Type out the command line that is used to locate files or directories. </p><br>
                    <textarea class="textarea" id="shortanswer1" name="shortanswer1"></textarea>
                    </div>
                    
                </fieldset>
                <fieldset>
                    <legend>Shortcuts QUIZ</legend>
                    <!-- ShortAnswer Quesiton -->
                    <div id="shortAnswer2">
                    <p>Type out the command line that is used to make links to files. </p><br>
                    <textarea class="textarea" id="shortanswer2" name="shortanswer2"></textarea>
                    </div>

                </fieldset>
                <p id="FormErrorMsg"></p>
                
                <!-- <input type="submit" onclick= value="submit">  -->
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_fileOpsForm()">SUBMIT</button>
            </div>
        
        </section>

         </main>



    <footer>
<p>&copy <script>document.write( new Date().getFullYear() );</script> Unix Tutorials. All Rights Reserved. </p>
</footer>    </body>
</html>