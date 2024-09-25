<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>Managing Directories</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - Managing Directories</h1>

            <section class="file_manipulation_commands">
            <h2>Managing Directories</h2>

                <h3 class="commands">ln</h3>
                <p> ln is used to create links to files or directories. For example: ln sourcefile thelinkname, 
                    will create a link named “thelinkname” to the file named “sourcefile”.</p>

                <h3 class="commands">rmdir</h3>
                <p>The rmdir will remove a directory. For example: rmdir removedirectory will remove the directory 
                   named “removedirectory”. However, the directory must be empty.</p>

                <h3 class="commands">pwd</h3>
                <p> pwd is used to confirm the directory being used.</p>
                
                <h3 class="commands">cd</h3>
                <p>change directory</p>                
                
            </section>

            <section class="video-container">
                <h2>Managing Directories</h2>
                <video controls>
                    <source src="../media/videos/create-dir-file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            

            
            <section class="quiz">
            
            <form name="managingDirectoriesForm" method="POST">
            
        
                <fieldset>
                    <legend>Managing Directories QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p>Which of these will create a link to a file?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="cln"  id="cln"><label for="cln">cln</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="lnk"  id="lnk" > <label for="lnk">lnk</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="ln"  id="ln"> <label for="ln">ln</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command will remove a directory:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="del"  id="del" ><label for="del">del</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="rmdir"  id="rmdir"><label for="rmdir">rmdir</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="rmd"  id="rmd"><label for="rmd">rmd</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line to remove the directory "filedirectory". </p><br>
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'ln' command will create a link and directory.</p>
                        <div><input type="radio" value="true" name="lnquestion"><label for="lnquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lnquestion"><label for="lnquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>My directory has folders holding image files. 'rmdir' will remove the directory.</p>
                        <div><input type="radio" value="true" name="rmdirquestion"><label for="rmdirquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="rmdirquestion"><label for="rmdirquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>'cd' will create a directory.</p>
                        <div><input type="radio" value="true" name="cdquestion"><label for="cdquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="cdquestion"><label for="cdquestion-true">False</label></div>
                    </div>

                    
                    <p> [Still Under Development] Check all that apply. When using the command 'ln', the following is correct :</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">It will create a link to a file or a directory.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">The command line will be: ln myFileName theLinkName. </label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer3">
                    <label for="chkbxanswer3">The command line will be: ln theLinkName.</label></br>
                    
                    
                </fieldset>

                
                <p id="FormErrorMsg"></p>
                
                <!-- <input type="submit" onclick= value="submit">  -->
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_basicCommandsForm()">SUBMIT</button>
            </div>
        
        </section>


        </main>

        <?php include('../pinclude/footer.php'); ?>
    </body>
</html>

