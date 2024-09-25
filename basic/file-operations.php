<?php 
    
    
?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>Basic File Operations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - Basic File Operations</h1>

            <section class="nav_commands">
                <h2>File Operations</h2>
                <h3 class="commands" >chown</h3>
                <p> The chown command 
                    can be used to change ownership of files or directories. 
                    This refers to any user or group that is assigned to a file or directory. 
                    For example: chown user1: group2 will now assign “user1” and “group2” as 
                    owners of the file of directory.</p><br> 
                 
            
                <h3 class="commands">chmod</h3>
                <p>Used to change access permission to files(directory). 
                   The chmod will modify the permission. This sets who can read or write on the file.</p>

                <h3 class="commands">rm</h3>
                <p>rm can delete files or directories. For example: rm file1, removes the file named “file1”. </p>

                <h3 class="commands">mv</h3>
                <p>mv can do a couple of different things: 1. Move files or directories to different locations. 
                   2. it can rename files/directories. For example: mv file1.png   /difffolder/diffdirectory/ 
                   will move the “file1” to a different directory. Also, mv file1.png changedname.png will 
                   rename the “file1” to “changedname”.</p>

                <h3 class="commands">cp</h3>
                <p>cp will copy files/directories. For example: cp file1.png /newplace/newdirectory will 
                   copy “file1” and place it in the “newdirectory”.</p>  
            </section>

           

            <section class="video-container">
                <h2>Creating new directories and files</h2>
                <video controls>
                    <source src="../media/videos/create-dir-file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            

            
            <section class="quiz">
            
            <form name="basicFileOperationsForm" method="POST">
            
        
                <fieldset>

                    <legend>File Operations QUIZ</legend>                  
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these can delete files or directories?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="rmv"  id="rmv"><label for="rmv">rmv</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="rm"  id="rm" > <label for="rm">rm</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="r"  id="r"> <label for="r">r</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command will copy files/directories:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="cpy"  id="cpy" ><label for="cpy">cpy</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="c"  id="c"><label for="c">c</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="cp"  id="cp"><label for="cp">cp</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line that will place file "rose.png" in a different folder ("myImages") in the directory ("allImages"). </p><br>
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'cp' command will copy files.</p>
                        <div><input type="radio" value="true" name="cpquestion"><label for="cpquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="cpquestion"><label for="cpquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>The 'rm' command stands for re-make a file directory.</p>
                        <div><input type="radio" value="true" name="rmquestion"><label for="rmquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="rmquestion"><label for="rmquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>The 'mv' command can move a file to a different directory.</p>
                        <div><input type="radio" value="true" name="mvquestion"><label for="mvquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="mvquestion"><label for="mvquestion-true">False</label></div>
                    </div>                 
                 
                   
                    <p> [Still Under Development] Check all that apply. When using the mv command, a user will be:</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">Moving a file to a new directory.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">Moving a file into a different folder.</label></br>
                    <input type="checkbox" id="CB3" name="chkbxanswer3">
                    <label for="chkbxanswer3">Deleting a file.</label></br>
                    
                    
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

