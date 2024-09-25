//validation for basic commands quiz
function validate_basicCommandsForm() {


    question_id = ["MCQ1", "MCQ2", "ShortAnswer", "TF1", "TF2", "TF3", "MCQ3"];
    answers = ["ls", "pwd", "cd", "true", "true", "false", "chmod"];
    // gets users selected answers
    var q1 = document.forms["basicCommandsForm"]["question1"].value;
    var q2 = document.forms["basicCommandsForm"]["question2"].value;
    var q3 = document.forms["basicCommandsForm"]["shortanswer"].value.trim();
    var q4 = document.forms["basicCommandsForm"]["cdquestion"].value;
    var q5 = document.forms["basicCommandsForm"]["lsquestion"].value;
    var q6 = document.forms["basicCommandsForm"]["lslaquestion"].value;
    var q7 = document.forms["basicCommandsForm"]["chkbxanswer1"].checked;
    var q8 = document.forms["basicCommandsForm"]["chkbxanswer2"].checked;
    var q9 = document.forms["basicCommandsForm"]["chkbxanswer3"].checked;
    var q10 = document.forms["basicCommandsForm"]["question3"].value;

    console.log(q7)

    // checks if ansers are empty
    if (q1 == null | q2 == null) {
        document.getElementById("FormErrorMsg").innerText = "PLEASE ANSWER ALL QUESTIONS FOR GRADING! Thx :)";
        return false
    }
    //stores answers in array
    user_attempt = [q1, q2, q3, q4, q5, q6, q10];


    let incorrect_answers = 0;
    //grading system and highlight response
    for (let a = 0; a < answers.length; a++) {

        if (user_attempt[a] == answers[a]) {
            // if correct the background lights up green
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(144, 238, 144, 0.705)";
            incorrect_answers--;
        }
        else
            // if incorrect the background lights up red
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(238, 144, 144, 0.705)";
        incorrect_answers++;
    }


    if (JSON.stringify(user_attempt) === JSON.stringify(answers)) {
        document.getElementById("FormErrorMsg").innerText = "Good job! Move on to advanced: Here is the code: 'LightsaberFencing' ";
        return true;
    } else {
        document.getElementById("FormErrorMsg").innerText = "You got " + incorrect_answers + " questions wrong. Try again. ";
        return false;
    }

}
//validation for file operations page

function validate_fileOpsForm() {

    question_id = ["MCQ1", "MCQ2", "shortAnswer1", "shortAnswer2"];
    answers = ["basename", "rsync", "find", "ln"];
    // gets users selected answers
    var q1 = document.forms["fileOpsForm"]["question1"].value;
    var q2 = document.forms["fileOpsForm"]["question2"].value;
    var q3 = document.forms["fileOpsForm"]["shortanswer1"].value.trim();
    var q4 = document.forms["fileOpsForm"]["shortanswer2"].value.trim();

    // checks if ansers are empty
    if (q1 == null | q2 == null) {
        document.getElementById("FormErrorMsg").innerText = "PLEASE ANSWER ALL QUESTIONS FOR GRADING! Thx :)";
        return false
    }
    //stores answers in array
    user_attempt = [q1, q2, q3, q4];


    let incorrect_answers = 0;
    //grading system and highlight response
    for (let a = 0; a < answers.length; a++) {

        if (user_attempt[a] == answers[a]) {
            // if correct the background lights up green
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(144, 238, 144, 0.705)";
            incorrect_answers--;
        }
        else
            // if incorrect the background lights up red
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(238, 144, 144, 0.705)";
        incorrect_answers++;
    }


    if (JSON.stringify(user_attempt) === JSON.stringify(answers)) {
        document.getElementById("FormErrorMsg").innerHTML = "Good job! Move onto <a href = \"../advanced/system-status-checks.php\">System Status Checks</a>";
        return true;
    } else {
        document.getElementById("FormErrorMsg").innerText = "You got " + incorrect_answers + " questions wrong. Try again. ";
        return false;
    }
}

//validation for system status check page

function validate_sysStatusCheckForm() {



    question_id = ["MCQ1", "MCQ2", "MCQ3"];
    answers = ["who -r", "uname", "last"];
    // gets users selected answers
    var q1 = document.forms["systemStatusCheckForm"]["question1"].value;
    var q2 = document.forms["systemStatusCheckForm"]["question2"].value;
    var q3 = document.forms["systemStatusCheckForm"]["question3"].value;

    // checks if ansers are empty
    if (q1 == null | q2 == null) {
        document.getElementById("FormErrorMsg").innerText = "PLEASE ANSWER ALL QUESTIONS FOR GRADING! Thx :)";
        return false
    }
    //stores answers in array
    user_attempt = [q1, q2, q3];


    let incorrect_answers = 0;
    //grading system and highlight response
    for (let a = 0; a < answers.length; a++) {

        if (user_attempt[a] == answers[a]) {
            // if correct the background lights up green
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(144, 238, 144, 0.705)";
            incorrect_answers--;
        }
        else
            // if incorrect the background lights up red
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(238, 144, 144, 0.705)";
        incorrect_answers++;
    }


    if (JSON.stringify(user_attempt) === JSON.stringify(answers)) {
        document.getElementById("FormErrorMsg").innerHTML = "Good job! Move onto <a href = \"../advanced/alter-edit-text.php\">Alter/Edit Text</a>";
        return true;
    } else {
        document.getElementById("FormErrorMsg").innerText = "You got " + incorrect_answers + " questions wrong. Try again. ";
        return false;
    }
}

//validation for text quiz
function validate_alterEditTextForm() {


    question_id = ["MCQ1", "MCQ2", "MCQ3"];
    answers = ["sed", "translates a string by characters", "all of the above"];
    // gets users selected answers
    var q1 = document.forms["textForm"]["question1"].value;
    var q2 = document.forms["textForm"]["question2"].value;
    var q3 = document.forms["textForm"]["question3"].value;

    // checks if ansers are empty
    if (q1 == null | q2 == null) {
        document.getElementById("FormErrorMsg").innerText = "PLEASE ANSWER ALL QUESTIONS FOR GRADING! Thx :)";
        return false
    }
    //stores answers in array
    user_attempt = [q1, q2, q3];


    let incorrect_answers = 0;
    //grading system and highlight response
    for (let a = 0; a < answers.length; a++) {

        if (user_attempt[a] == answers[a]) {
            // if correct the background lights up green
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(144, 238, 144, 0.705)";
            incorrect_answers--;
        }
        else
            // if incorrect the background lights up red
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(238, 144, 144, 0.705)";
        incorrect_answers++;
    }


    if (JSON.stringify(user_attempt) === JSON.stringify(answers)) {
        document.getElementById("FormErrorMsg").innerHTML = "Good job! Move onto <a href = \"../advanced/filesystem-commands.php\">Filesystem Commands</a>";
        return true;
    } else {
        document.getElementById("FormErrorMsg").innerText = "You got " + incorrect_answers + " questions wrong. Try again. ";
        return false;
    }

}

//validation for filesystem quiz
function validate_fileSystemForm() {
    console.log("hi");


    question_id = ["shortAnswer1", "shortAnswer2"];
    answers = ["du", "df"];
    // gets users selected answers
    var q1 = document.forms["fileSystemForm"]["shortanswer1"].value.trim();
    var q2 = document.forms["fileSystemForm"]["shortanswer2"].value.trim();

    // checks if ansers are empty
    if (q1 == null | q2 == null) {
        document.getElementById("FormErrorMsg").innerText = "PLEASE ANSWER ALL QUESTIONS FOR GRADING! Thx :)";
        return false
    }
    //stores answers in array
    user_attempt = [q1, q2];


    let incorrect_answers = 0;
    //grading system and highlight response
    for (let a = 0; a < answers.length; a++) {

        if (user_attempt[a] == answers[a]) {
            // if correct the background lights up green
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(144, 238, 144, 0.705)";
            incorrect_answers--;
        }
        else
            // if incorrect the background lights up red
            document.getElementById(question_id[a]).style.backgroundColor = "rgba(238, 144, 144, 0.705)";
        incorrect_answers++;
    }


    if (JSON.stringify(user_attempt) === JSON.stringify(answers)) {
        document.getElementById("FormErrorMsg").innerText = "Good job! Thank you for using our website!";
        return true;
    } else {
        document.getElementById("FormErrorMsg").innerText = "You got " + incorrect_answers + " questions wrong. Try again. ";
        return false;
    }

}
// example
// if (x == null || x == "") {
//     document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
//     return false;
// }


//validation for system status check page

