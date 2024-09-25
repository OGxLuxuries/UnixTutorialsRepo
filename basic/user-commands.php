<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>User Commands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - User Commands</h1>

            <section class="nav_commands">
                <h2>User Commands</h2>
                <h3 class="commands" >id</h3>
                <p>id prints the user's identity. It will show which user 
                   and will show the group IDs connected with the current user. 
                   The monitor will show the users ID, uid or the group ID, gid. </p><br> 
                 
            
                <h3 class="commands">passwd</h3>
                <p>A user can change their password using passwd command. 
                   The monitor will show a prompt for the new password.</p>

                <h3 class="commands">last</h3>
                <p>To monitor activity, user activity and system login history, 
                   the last command will show the information related to user 
                   login, logout times, and system reboots. The monitor will 
                   also show the username, IP address.</p>
            </section>
            

            <section class="video-container">
                <h2>Creating new directories and files</h2>
                <video controls>
                    <source src="../media/videos/create-dir-file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            

            
            <section class="quiz">
            
            <form name="userCommandsForm" method="POST">
            
        
                <fieldset>
                    <legend>User Commands QUIZ</legend>                   
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p>Which of these will show a users ID?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="id"  id="id"><label for="id">id</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="passwd"  id="passwd" > <label for="passwd">passwd</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="last"  id="last"> <label for="last">last</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command shows the user activity and system login history:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="touch"  id="touch" ><label for="touch">touch</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="last"  id="last"><label for="last">last</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="cd"  id="cd"><label for="cd">cd</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line to show the user id. </p><br>
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'passwd' will allow the user to change their password.</p>
                        <div><input type="radio" value="true" name="passwdquestion"><label for="passwdquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="passwdquestion"><label for="passwdquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>The 'last' command stands for list the system.</p>
                        <div><input type="radio" value="true" name="lastquestion"><label for="lastquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lastquestion"><label for="lastquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>The 'id' command will identify the last folder opened.</p>
                        <div><input type="radio" value="true" name="idquestion"><label for="idquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="idquestion"><label for="idquestion-true">False</label></div>
                    </div>
                    
                    
                    
                    
                 
</div>

                    
                    <p> [Still Under Development] Check all that apply. When using the last command, a user will:</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">See the user activity.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">See the log in history</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer3">
                    <label for="chkbxanswer3">Mark the current folder as "last".</label></br>
                    
                    
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

