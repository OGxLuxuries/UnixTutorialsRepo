<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    
        <title>Alter/Edit Text</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="icon" href="../media/images/favicon.ico" type="image/x-icon">
        <script src="../scripts/form-validation.js"></script>
    </head>
    <body class="adv-bkgd">
        <?php include('/home/iste240t89/Sites/pinclude/header.php'); ?>
        <!--CHANGE STYLES LINK TO BE ACCURATELY NAMED-->
         <main>
         <h1 class="page-title adv-bkgd" >Advanced - Alter/Edit Text</h1>
        <section class="file_ops_commands">
            <h2>Text Commands</h2>
            <h3 class="commands">grep</h3>
            <p>The grep command is used to take out lines from text. </p>
            <h3 class="commands">sed</h3>
            <p>The sed command is used to find and change parts of a string. </p>
            <h3 class="commands">tr</h3>
            <p> The tr command can be used to translate a string (by characters). </p>
        </section>

        <section class="video-container-adv">
                <h2>Altering And Editing Text</h2>
                <video controls>
                    <source src="../media/videos/alter-edit-text-vid.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </section>

        <section class="quiz">
            
            <form name="textForm" method="POST">
            
        
                <fieldset>
                    <legend>Text QUIZ</legend>
                    
                    

                    <!-- MC Quesiton 1 -->
                    <div id="MCQ1" style="background-color: inherit;">
                    <p  >Which of these is used to find and change parts of a string?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question1" value="sed"  id="sed"><label for="sed">sed</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question1" value="tr"  id="tr" > <label for="tr">tr</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question1" value="grep"  id="grep"> <label for="grep">grep</label></br>
                    </div>

                    <!-- MC Quesiton 2 -->
                    <div id="MCQ2" style="background-color: inherit;">
                    <p  >What does the tr command do?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question2" value="takes out lines from text"  id="takes_out_lines_from_text"><label for="takes out lines from text">takes out lines from text</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question2" value="finds and changes parts of a string"  id="finds_and_changes_parts_of_a_string" > <label for="finds and changes parts of a string">finds and changes parts of a string</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question2" value="translates a string by characters"  id="translates_a_string_by_characters"> <label for="translates a string by characters">translates a string by characters</label></br>
                    </div>
                    
                    <!-- MC Quesiton 1 -->
                    <div id="MCQ3" style="background-color: inherit;">
                    <p  >Which of these is used to alter text?</p>

                    <!-- option 1     -->
                    <input type="radio" name="question3" value="tr"  id="tr"><label for="tr">tr</label></br>
                    <!-- option 2 -->
                    <input type="radio" name="question3" value="grep"  id="grep" > <label for="grep">grep</label></br>
                    <!-- option 3 -->
                    <input type="radio" name="question3" value="sed"  id="sed"> <label for="sed">sed</label></br>
                    <!-- option 4 -->
                    <input type="radio" name="question3" value="all of the above"  id="all_of_the_above"> <label for="all of the above">all of the above</label></br>
                    </div>
                    
                </fieldset>

                <p id="FormErrorMsg"></p>
            </form>
            <div class="button-container">
                <button class="submit-button" onclick="validate_alterEditTextForm()">SUBMIT</button>
            </div>
        
        </section>

         </main>



    <footer>
<p>&copy <script>document.write( new Date().getFullYear() );</script> Unix Tutorials. All Rights Reserved. </p>
</footer>    </body>
</html>