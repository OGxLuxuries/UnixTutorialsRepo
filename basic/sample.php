<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>Beginner Commands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - Basic Commands</h1>

            <section class="nav_commands">
                <h2>Navigation</h2>
                <h3 class="commands" >ls</h3>
                <p>Provides a list of the directory you're in.; it can also show more directories; it is typically bolded or in different color to distinguish, or a forward slash is placed in front.  
                    To get more detailed information on the files, you can use -l and -a to show the hidden files. </p><br> 
                 
            
                <h3 class="commands">cd</h3>
                <p>The cd command will allow the user to change direction in the current directory or go to a different directory. </p>
            </section>

            <section class="file_manipulation_commands">
            <h2>File Manipulation</h2>
                <h3 class="commands">mkdir</h3>
                <p> The mkdir command is used to make a new directory. </p>
                <h3 class="commands">cp</h3>
                <p>This command copies a file or directory from one place to another.</p> 
                <h3 class="commands">rm</h3>
                <p> This command is used for deleting files or directories. </p>
                <p> Use rm file.txt to delete a file, and rm -r directory to delete a directory recursively. </p>
                <h3 class="commands">touch</h3>
                <p>It is used for creating a file that has no content. The file created with the touch command is empty. This command can be used when the user does not have any data to save at the moment the file is created.</p>
                <h3 class="commands">chmod</h3>
                <p>The chmod will modify the permission. This sets who can read or write on the file. </p>
                <h3 class="commands">cat</h3>
                <p>The cat command in Unix is short for "concatenate" and is primarily used to display the contents of files. Its simple usage involves specifying the name(s) of the file(s) you want to view. </p>
                <h3 class="commands">vim</h3>
                <p>The vim command in Unix is a powerful text editor that allows users to create, edit, and view text files. If the file doesn't exist, Vim will create a new file with that name. </p>
                <p>Once in Vim, you can navigate through the file using keyboard commands, make edits, and save changes. Some basic commands within Vim include:</p>
                

            </section>

            <section class="video-container">
                <h2>Creating new directories and files</h2>
                <video controls>
                    <source src="../media/videos/create-dir-file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            

            
            <section class="quiz">
            
            <form name="basicCommandsForm" method="POST">
            
        
                <fieldset>
                    <legend>Navigation QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these will provide a list of files in a directory that you are currently in?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="ls"  id="ls"><label for="ls">ls</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="cd"  id="cd" > <label for="cd">cd</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="list"  id="list"> <label for="list">list</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command prints out the absoute path back to the root directory:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="touch"  id="touch" ><label for="touch">touch</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="pwd"  id="pwd"><label for="pwd">pwd</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="cd"  id="q2cd"><label for="q2cd">cd</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line to change direction in a directory by two files. </p><br>
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'cd' command will change the directory.</p>
                        <div><input type="radio" value="true" name="cdquestion"><label for="cdquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="cdquestion"><label for="cdquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>The 'ls' command stands for list the system.</p>
                        <div><input type="radio" value="true" name="lsquestion"><label for="lsquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lsquestion"><label for="lsquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>The 'ls-la' command lists files in folder: 'la/'</p>
                        <div><input type="radio" value="true" name="lslaquestion"><label for="lslaquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lslaquestion"><label for="lslaquestion-true">False</label></div>
                    </div>
                    
                    
                    
                    
                 
</div>

                    
                    <p> [Still Under Development] Check all that apply. When using the cd command, a user will be:</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">Trying to access a file that is in the folder one directory above the current folder.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">Trying to access a file that is in the folder one directory below of the current folder.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer3">
                    <label for="chkbxanswer3">Trying to access a file that is in the folder two directories above the current folder.</label></br>
                    
                    
                </fieldset>
                <fieldset>
                    <legend>File Manipulation QUIZ</legend>
                    <div id="MCQ3" style="background-color: inherit;">
                    <p  >Which of these commands will modify the permission of a file or folder?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question3" value="vim"  id="vim"><label for="vim">vim</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question3" value="cat"  id="cat" > <label for="cat">cat</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question3" value="chmod"  id="chmod"> <label for="chmod">chmod</label></br>
                    </div>

                </fieldset>
                <p id="FormErrorMsg"></p>
                
                <!-- <input type="submit" onclick= value="submit">  -->
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_basicCommandsForm()">SUBMIT</button>
            </div>
        
        </section>
        <div id="google_translate_element"></div>
        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement(
                    {pageLanguage: 'en'},
                    'google_translate_element'
                );
            }
        </script>
        <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </main>

        <?php include('../pinclude/footer.php'); ?>
    </body>
</html>

