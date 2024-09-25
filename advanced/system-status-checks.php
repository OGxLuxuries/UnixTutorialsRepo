<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    
        <title>System Status checks</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body class="adv-bkgd">
        <?php include('/home/iste240t89/Sites/pinclude/header.php'); ?>
        <!--CHANGE STYLES LINK TO BE ACCURATELY NAMED-->
         <main>
         <h1 class="page-title adv-bkgd" >Advanced - System Status Checks</h1>
        <section class="file_ops_commands">
            <h2>system status commands</h2>
            <h3 class="commands">uname</h3>
            <p>The uname command outputs the system info like the hostname. </p>
            <h3 class="commands">who -r</h3>
            <p>The who -r command is used to confirm the run-level of the system. </p>
            <h3 class="commands">last</h3>
            <p> The last command is used to output the history of users that have logged in. </p>
        </section>

        <section class="video-container-adv">
                <h2>Checking The System Status</h2>
                <video controls>
                    <source src="../media/videos/sys-status-checks-vid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>

        <section class="quiz">
            
            <form name="systemStatusCheckForm" method="POST">
            
        
                <fieldset>
                    <legend>Status Commands QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these will confirm the run level of the system?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="last"  id="last"><label for="last">last</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="uname"  id="uname" > <label for="uname">uname</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="who -r"  id="who -r"> <label for="who -r">who -r</label></br>
                    </div>
                    
                    <!-- MC Quesiton 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p  >Which of these will output system info like the hostname?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question2" value="who -r"  id="who -r"><label for="who -r">who -r</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="uname"  id="uname" > <label for="uname">uname</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question2" value="last"  id="last"> <label for="last">last</label></br>
                    </div>

                    <!-- MC Quesiton 3 -->
                    <div id="MCQ3" style="background-color: inherit;">
                    <p  >Which of these will output the history of users that have logged in?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question3" value="uname"  id="uname"><label for="uname">uname</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question3" value="who -r"  id="who -r" > <label for="who -r">who -r</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question3" value="last"  id="last"> <label for="last">last</label></br>
                    </div>
                </fieldset>
                <p id="FormErrorMsg"></p>
                
                <!-- <input type="submit" onclick= value="submit">  -->
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_sysStatusCheckForm()">SUBMIT</button>
            </div>
        </section>

         </main>



    <footer>
<p>&copy <script>document.write( new Date().getFullYear() );</script> Unix Tutorials. All Rights Reserved. </p>
</footer>    </body>
</html>