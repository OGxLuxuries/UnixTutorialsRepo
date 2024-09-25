<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>Managing Processes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
    
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - Managing A Process</h1>

            <section class="nav_commands">

                <h2>Managing A Process</h2>

                <h3 class="commands" >kill</h3>
                <p>The kill command is used to end processes by their PID (Process ID) or by their name. 
                   By default, kill sends the SIGTERM signal to terminate a process gracefully, but it can 
                   also send other signals for specific purposes. </p><br> 
                 
            
                <h3 class="commands">top</h3>
                <p>The top command provides a real-time view of system resource usage. It displays information about 
                   CPU, memory, and processes. It allows users to monitor system performance and manage processes. </p>

                <h3 class="commands">ps</h3>
                <p>The ps command is used to display information about processes currently running on the system. 
                   It provides a snapshot of active processes and their attributes, such as PID, CPU usage, 
                   memory usage, command name, etc.</p>
            </section>

            
            <section class="video-container">
                <h2>Managing Processes</h2>
                <video controls>
                    <source src="../media/videos/create-dir-file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>          

            <section class="quiz">
            
            <form name="managingProcessesForm" method="POST">
            
        
                <fieldset>
                    <legend>Managing Processes QUIZ</legend>                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p>Which of these will end a process?</p>

                    <!-- option 1  CORRECT ANSWER   -->
                    <input type="radio" name="question1" value="kill"  id="kill"><label for="kill">kill</label></br> 
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="end"  id="end" > <label for="end">end</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="ps"  id="ps"> <label for="ps">ps</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command can print out information about CPU usage during an active process:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="actp"  id="actp" ><label for="actp">actp</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="cpu"  id="cpu"><label for="cpu">cpu</label></br>
                    <!-- option 2 CORRECT ANSWER-->
                    <input type="radio" name="question2" value="ps"  id="ps"><label for="ps">ps</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line to terminate a process that has a Process ID of process1. </p><br>
                    <!-- ANSWER: kill process1 -->
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'top' command will display a view of current system resource usage like memory.</p> <!-- ANSWER: true -->
                        <div><input type="radio" value="true" name="topquestion"><label for="topquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="topquestion"><label for="topquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>The 'kill' command will end a process.</p> <!-- ANSWER: true -->
                        <div><input type="radio" value="true" name="killquestion"><label for="killquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="killquestion"><label for="killquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>The 'ps' command can display the Process ID (PID) of the process that is currently active.</p><!-- ANSWER: true -->
                        <div><input type="radio" value="true" name="psquestion"><label for="psquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="psquestion"><label for="psquestion-true">False</label></div>
                    </div>                    
                    
                    <p> [Still Under Development] Check all that apply. When using the 'top' command, a user will be able to see:</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">Real-time view of system resource usage.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">Trying to access a file that is in the folder one directory below of the current folder.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer3">
                    <label for="chkbxanswer3">Information about CPU</label></br>                    
                    
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

