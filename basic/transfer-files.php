<?php 

?> 

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
    
        <title>Transfer Files</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body>
        <?php include('../pinclude/header.php'); ?>
        <main>
            <h1 class="page-title green">Beginners - Transfer Files</h1>

            <section class="retrieval_commands">
                <h2>Content Retrieval</h2>
                <h3 class="commands" >wget</h3>
                <p>The wget command is used to retrieve content from web servers. It downloads friles from the internet using HTTP
                    HTTPS, or FTP protocols. It is often used for non-interactive downloads of files.
                </p><br>
            </section>

            <section class="file_transfer_commands">
            <h2>File Transfer</h2>
                <h3 class="commands">sftp</h3>
                <p> The sftp command is used for file transfer and creates shells for file transfer. It creates
                    a shell that is encrypted and secure. </p>
                <h3 class="commands">ftp</h3>
                <p>This command is used for file transfer and creates shells for file transfer. It creates
                    a shell that is NOT encrypted and secure..</p> 
                <h3 class="commands">scp</h3>
                <p> This command is used for secure file transfer and works via ssh. It is especially 
                    useful for transferring files securely between local and remote machines. </p>
                
            </section>

            <section class="video-container">
                <h2>Transfer Files</h2>
                <video controls>
                    <source src="../media/videos/transfer-files.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>
            

            
            <section class="quiz">
            
            <form name="basicCommandsForm" method="POST">
            
        
                <fieldset>
                    <legend>Transfer Files QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these can retrieve a file from a web server?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="wget"  id="wget"><label for="wget">wget</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="sftp"  id="sftp" > <label for="sftp">sftp</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="scp"  id="scp"> <label for="scp">scp</label></br>
                    </div>
                    

                    <!-- MC Question 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p >This command creates a shell that is encrypted and secured:</p>
                    <!-- option 1 -->
                    <input type="radio" name="question2" value="wget"  id="wget" ><label for="wget">wget</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="sftp"  id="sftp"><label for="sftp">sftp</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="scp"  id="scp"><label for="scp">scp</label></br>
                    </div>
                    
                    
                    <div id="ShortAnswer">
                    <p>Type out the command line to download the file named file.zip from the URL https://example.com and save it in the current directory. </p><br>
                    <textarea class="textarea" id="shortanswer" name="shortanswer"></textarea>
                    </div>
                   
                    <div id= "TF1" class="true-false">
                        <p>The 'ftp' command will create a shell.</p>
                        <div><input type="radio" value="true" name="cdquestion"><label for="cdquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="cdquestion"><label for="cdquestion-true">False</label></div>
                    </div>
                    <div id= "TF2" class="true-false">
                        <p>The 'ftp' command will create an encrpyted shell.</p>
                        <div><input type="radio" value="true" name="lsquestion"><label for="lsquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lsquestion"><label for="lsquestion-true">False</label></div>
                    </div>
                    <div id= "TF3" class="true-false">
                        <p>The 'scp' command is best for local to remote machine connections</p>
                        <div><input type="radio" value="true" name="lslaquestion"><label for="lslaquestion-true">True</label></div>                    
                        <div><input type="radio" value="false" name="lslaquestion"><label for="lslaquestion-true">False</label></div>
                    </div>
                    
                    
                    
                    
                    
                 
</div>

                    
                    <p> [Still Under Development] Check all that apply. When using the sftp command, a user will be:</p>
                    <input type="checkbox" id="CB1" name="chkbxanswer1">
                    <label for="chkbxanswer1">Forming a connection between two servers.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer2">
                    <label for="chkbxanswer2">Maintining a level of security with encrpytion.</label></br>
                    <input type="checkbox" id="CB2" name="chkbxanswer3">
                    <label for="chkbxanswer3">Requesting to download files from a host.</label></br>
                    
                    
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