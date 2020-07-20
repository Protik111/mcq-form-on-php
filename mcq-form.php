<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Question Form</title>
    <style type="text/css">
        #results{
        
            font-size: 70px;
            color:white;
            background-color: green;
            text-align: center;
        }

        .btn{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
        }
        .h1{
            text-align: center;
        }

    </style>
</head>
<body>


    <!-- php part start -->

    <?php

   if(isset($_POST['submit'])){
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    
    $total = 0;
    if($answer1 == "b") { $total =$total+5 ;}
    if($answer2 == "d") { $total =$total+5 ;}
    if($answer3 == "a") { $total =$total+5 ;}
    if($answer4 == "b") { $total =$total+5 ;}
    if($answer5 == "a") { $total =$total+5 ;}


    echo "<div id='results'>You've got $total / Out of 25 </div>";
   }

    ?>

    <!-- php part end -->

    
    <form method="POST" action="mcq-form.php">
    <h1 class="h1">A Quiz Form</h1><hr>
    <div class="question1">
        <h3>1. What does Php stand for?</h3>
        <p><label for="homepage"><input type="radio" name="question-1-answers" id="homepage" value="a">i) Personal Home Page</label></p>
        <p><label for="hypertext"><input type="radio" name="question-1-answers" id="hypertext" value="b">ii) Hypertext Preprocessor</label></p>
        <p><label for="Pretext"><input type="radio" name="question-1-answers" id="Pretext" value="c">iii) Pretext Hypertext Processor</label></p>
        <p><label for="home"><input type="radio" name="question-1-answers" id="home" value="d">iv) Preprocessor Home Page</label></p>
    </div>
    <div class="question2">
        <h3>2. Php file has a default file extension of :</h3>
        <p><label for="html"><input type="radio" name="question-2-answers" id="html" value="a">i) .html</label></p>
        <p><label for="c"><input type="radio" name="quequestion-2-answerss2" id="c" value="b">ii) .c</label></p>
        <p><label for="xml"><input type="radio" name="question-2-answers" id="xml" value="c">iii) .xml</label></p>
        <p><label for="ph"><input type="radio" name="question-2-answers" id="ph" value="d">iv) .php</label></p>
    </div>
    <div class="question3">
        <h3>3. Which of the following must be installed to run php script?</h3>
        <p><label for="xampp"><input type="radio" name="question-3-answers" id="xampp" value="a">i) Xampp</label></p>
        <p><label for="apache"><input type="radio" name="question-3-answers" id="apache" value="b">ii) Apache & Mysql</label></p>
        <p><label for="iis"><input type="radio" name="question-3-answers" id="iis" value="c">iii) IIS</label></p>
        <p><label for="adobe"><input type="radio" name="question-3-answers" id="adobe" value="d">iv) Adobe Dreamweaver</label></p>
    </div>

    <div class="question4">
        <h3>4. Correct html tag for the largest heading is :</h3>
        <p><label for="h6"><input type="radio" name="question-4-answers" id="h6" value="a">i) h6</label></p>
        <p><label for="h1"><input type="radio" name="question-4-answers" id="h1" value="b">ii) h1</label></p>
        <p><label for="head"><input type="radio" name="question-4-answers" id="head" value="c">iii) head</label></p>
        <p><label for="body"><input type="radio" name="question-4-answers" id="body" value="d">iv) body</label></p>
    </div>

    <div class="question5">
        <h3>5. Html stands for :</h3>
        <p><label for="html2"><input type="radio" name="question-5-answers" id="html2" value="a">i) Hyper Text Markeup Language</label></p>
        <p><label for="highhtml"><input type="radio" name="question-5-answers" id="highhtml" value="b">ii) Hight Text Markeup Language</label></p>
        <p><label for="hypertebular"><input type="radio" name="question-5-answers" id="hypertebular" value="c">iii) Hyper Tabular Markeup Language</label></p>
        <p><label for="none"><input type="radio" name="question-5-answers" id="none" value="d">iv) None of this</label></p>
    </div>

    <button class="btn" type="submit" name="submit">Submit Your Answear</button>
    </form>
</body>
</html>