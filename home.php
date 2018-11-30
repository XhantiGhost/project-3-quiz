<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Quiz</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700|Spicy+Rice" rel="stylesheet"> 
    <style>
        body {
            background-color: ;
            background-repeat: no-repeat;
            background-size: cover;
        }

       </style>
</head>
<body>
<div class="container is-fuild">
    <!--Start of the form containing the actual quiz-->
    <form action="home.php" method="post">
        

        <h2>
            SO YOU WANNA GET QUIZZED!!!???
        </h2>
        
        <?php
            if (!empty($_POST)) {
                $ans1 = $_POST['ans1'];
                $ans2 = $_POST['ans2'];
                $ans3 = $_POST['ans3'];
                $ans4 = $_POST['ans4'];
                $ans5 = $_POST['ans5'];
                $ans6 = $_POST['ans6'];
                $ans7 = $_POST['ans7'];
                $ans8 = $_POST['ans8'];
                $ans9 = $_POST['ans9'];
                $ans10 = $_POST['ans10'];
                $ans11 = $_POST['ans11'];
                $ans12 = $_POST['ans12'];
                $ans13 = $_POST['ans13'];
                $ans14 = $_POST['ans14'];
                $ans15 = $_POST['ans15'];
                $ans16 = $_POST['ans16'];
                $ans17 = $_POST['ans17'];
                $ans18 = $_POST['ans18'];
                $ans19 = $_POST['ans19'];
                $ans20 = $_POST['ans20'];

                $username = $_SESSION['username'];

                //This is the formula I used for calculating the user's final score for the quiz//
                $correct = 0;
                if ($ans1 == 'A) Hypertext Markup Language') {
                    $correct++;
                }
                if ($ans2 == 'D) A stamp') {
                    $correct++;
                }
                if ($ans3 == 15) {
                    $correct++;
                }
                if ($ans4 == 'C)A pencil') {
                    $correct++;
                }
                if ($ans5 == 'B) paper') {
                    $correct++;
                }
                if ($ans6 == 'B) A needle') {
                    $correct++;
                }
                if ($ans7 == 'B) A towel') {
                    $correct++;
                }
                if ($ans8 == 'C) Meat') {
                    $correct++;
                }
                if ($ans9 == 'A) John Milton') {
                    $correct++;
                }
                if ($ans10 == 'B) questionualities on which the person believes himself to be extreme') {
                    $correct++;
                }
                if ($ans11 == 'B) Stalin') {
                    $correct++;
                }
                if ($ans12 == 'D) ‘Khe Sahn’ by Cold Chisel') {
                    $correct++;
                }
            
                if ($ans13 == 'D) 1955') {
                    $correct++;
                }
                

                if ($ans14 == 'B) 29') {
                    $correct++;
                }
                

                if ($ans15 == 'C) Pod') {
                    $correct++;
                }
                

                if ($ans16 == 'A) 12') {
                    $correct++;
                }
                
                if ($ans17 == 'A) Real') {
                    $correct++;
                }

                if ($ans18 == 'A) Alexandra Fleming') {
                    $correct++;
                }
                else {
                    echo "<p></p>";
                }

                if ($ans19 == 'B) Walt Disney') {
                    $correct++;
                }
                if ($ans20 == 'C) is playing monopoly') {
                    $correct++;
                }

                echo "<p>$username You got $correct correct!<br>
                <a href='index.php'>Try again</a></p>";
                $grade = ($correct / 20) * 100;
                

                //This is the formula I used to rate the user's scores//
                //If a user gets a particular score, they will see the following message
                if ($correct == 0) {
                    echo "<p>You are dumb!</p>";
                }
                elseif ($correct <= 10) {
                    echo "<p>bra come on sonny boy  😆</p>";
                }
                elseif ($correct == 19) {
                    echo "<p>awe awe you know your stuff!!!</p>";
                }
                elseif ($correct == 20) {
                    echo "<p>You did it!</p>";
                }
            } 

            else {
                echo "<p></p>";
                //echo $grade=array($correct / 20 * 100);//
            }
        



            //This is where the questions variable starts, it contains the questions for the quiz.
            //I used the "select" tag to create a drop-down effect for the possible answers
            $questions = array("","<h3>Question 1:</h3>
            'HTML stands for. . .'
            <h2>
            <select name=ans1>
                <option value='blank'></option>
                <option value= 'A) Hypertext Markup Language'>Hypertext Markup Language</option>
                <option value= 'B) Hypertext Markup'> Hypertext Markup</option>
                <option value= 'C) Hypertext Programming'>Hypertext Programming</option>
                <option value= 'D) None of the above'>None of the above</option>
            </select>
            </h2><br>",
            "<h3>Question 2:</h3>
            <h2>'What can travel around the world while staying in a corner?' 
            <select name=ans2>
                <option value='blank'></option>
                <option value= 'A) A letter'> A letter </option>
                <option value= 'B) A bird'> A bird </option>
                <option value= 'C) A plane'> A plane </option>
                <option value= 'D) A stamp'> A stamp </option>
            </select></h2><br>",
            "<h3>Question 3:</h3>
            <h2>What is 12 + 3?
            <input type='number' name='ans3'>
            </h2><br>",
            "<h3>Question 4:</h3>
            <h2>' I'm tall when I'm young and I'm short when I'm old. What am I?'
            <select name=ans4>
                <option value='blank'></option>
                <option value= 'A) Human'> Human </option>
                <option value= 'B) Tree'> Tree </option>
                <option value= 'C)A pencil'>A pencil </option>
                <option value= 'D) A clock'> A clock </option>
            </select>
            </h2><br>",
            "<h3>Question 5:</h3>
            <h2>' You can drop me from the tallest building and I'll be fine,
            but if you drop me in water I die. What am I?',
            <select name='ans5'>
                <option value='blank'></option>
                <option value= 'A) A coin'> A coin </option>
                <option value= 'B) paper'> paper </option>
                <option value= 'C) fire '> fire  </option>
                <option value= 'D) ant'> ant </option>
            </select>
            </h2><br>",
            "<h3>Question 6:</h3>
            <h2>' What has an eye but can not see?'
            <select name='ans6'>
                <option value='blank'></option>
                <option value= 'A) A Bat'> A Bat </option>
                <option value= 'B) A needle'> A needle </option>
                <option value= 'C) A Potatoe'> A Potatoe </option>
                <option value= 'D) A mushroom'> A mushroom </option>
            </select>
            </h2><br>",
            "<h3>Question 7:</h3>
            <h2>' What gets wetter and wetter the more it dries?'
            <select name='ans7'>
                <option value='blank'></option>
                <option value= 'A) paper'> paper </option>
                <option value= 'B) A towel'> A towel </option>
                <option value= 'C) Eyes'> Eyes </option>
                <option value= 'D) All of the above'> All of the above </option>
            </select>
            </h2><br>",
            "<h3>Question 8:</h3>
            <h2>'Paul's height is six feet,
            he's an assistant at a butcher's shop, and wears size 9 shoes. What does he weigh?',
            <select name='ans8'>
                <option value='blank'></option>
                <option value= 'A) 200 kg'> 200 kg </option>
                <option value= 'B) 185 kg'> 185 kg </option>
                <option value= 'C) Meat'> Meat </option>
                <option value= 'D) 500 kg'> 500 kg </option>
            </select>
            </h2><br>",
            "<h3>Question 9:</h3>
            <h2>'Which English poet wrote the epic
            'Paradise Lost' and followed it up with the sequestionuel 'Paradise Regained'?
            <select name='ans9'>
                <option value='blank'></option>
                <option value= 'A) John Milton'> John Milton </option>
                <option value= 'B) John Keats'> John Keats </option>
                <option value= 'C) William Blake'> William Blake </option>
                <option value= 'D) S.T Coleridge'>S.T Coleridge </option>
            </select>
            </h2><br>",
            "<h3>Question 10:</h3>
            <h2>' Which questionualities does a person have self-schemas for?'
            <select name='ans10'>
                <option value='blank'></option>
                <option value= 'A) questionualities that are important to the person'> questionualities that are important to the person </option>
                <option value= 'B) questionualities on which the person believes himself to be extreme'> questionualities on which the person believes himself to be extreme </option>
                <option value= 'C)  questionualities on which the person is certain the opposite is not true'>  questionualities on which the person is certain the opposite is not true </option>
                <option value= 'D) All of the above'> D) All of the above </option>
            </select>
            </h2><br>",
            "<h3>Question 11:</h3>
            <h2>'Who took over when Lenin died?'
            <select name='ans11'>
                <option value='blank'></option>
                <option value= 'A) Starr'> Starr </option>
                <option value= 'B) Stalin'> Stalin </option>
                <option value= 'C) Harrison'> Harrison </option>
                <option value= 'D) McCartney'>McCartney </option>
            </select>
            </h2><br>",
            "<h3>Question 12:</h3>
            <h2>' They got married early, never had no money”
            is the first line of which classic Australian song?'
            <select name='ans12'>
                <option value='blank'></option>
                <option value= 'A) 'To Her Door' by Paul Kelly and the Coloured Girls'>'To Her Door' by Paul Kelly and the Coloured Girls </option>
                <option value= 'B) Beds are Burning’ by Midnight Oil'> Beds are Burning’ by Midnight Oil </option>
                <option value= 'C) Listen Like Thieves’ by INXS'> Listen Like Thieves’ by INXS </option>
                <option value= 'D) ‘Khe Sahn’ by Cold Chisel'> ‘Khe Sahn’ by Cold Chisel </option>
            </select>
            </h2><br>",
            "<h3>Question 13:</h3>
            <h2>'What year did Albert Einstein die?'
            <select name='ans13'>
                <option value='blank'></option>
                <option value= 'A) 1954'> 1954 </option>
                <option value= 'B) 1949'> 1949 </option>
                <option value= 'C) 1944> 1944 </option>
                <option value= 'D) 1955'> 1955 </option>
            </select>
            </h2><br>",
            "<h3>Question 14:</h3>
            <h2>'How many Presidents have there been of the USA?'
            <select name='ans14'>
                <option value='blank'></option>
                <option value= 'A) 30'> 30 </option>
                <option value= 'B) 29'> 29 </option>
                <option value= 'C) 49'> 49 </option>
                <option value= 'D) 44'> 44 </option>
            </select>
            </h2><br>",
            "<h3>Question 15:</h3>
            <h2>'What are a group of Dolphins called?'
            <select name='ans15'>
                <option value='blank'></option>
                <option value= 'A) School'> School </option>
                <option value= 'B) Herd'> Herd </option>
                <option value= 'C) Pod'> Pod </option>
                <option value= 'D) Pool'> Pool </option>
            </select>
            </h2><br>",
            "<h3>Question 16:</h3>
            <h2>' How many men have walked on the moon?'
            <select name='ans16'>
                <option value='blank'></option>
                <option value= 'A) 12'> 12 </option>
                <option value= 'B) 5'> 5 </option>
                <option value= 'C) 8'> 8 </option>
                <option value= 'D) 21'> 21 </option>
            </select>
            </h2><br>",
            "<h3>Question 17:</h3>
            <h2>' What is the currency of Brazil?'
            <select name='ans17'>
                <option value='blank'></option>
                <option value= 'A) Real'> Real </option>
                <option value= 'B) Dollar'> Dollar </option>
                <option value= 'C) Krona'> Krona </option>
                <option value= 'D) The Bhat'> The Bhat </option>
            </select>
            </h2><br><br>",
            "<h3>Question 18:</h3>
            <h2>' Who invented Penicillin?'
            <select name='ans18'>
                <option value='blank'></option>
                <option value= 'A) Alexandra Fleming'> Alexandra Fleming </option>
                <option value= 'B) Thomas Edison'> Thomas Edison </option>
                <option value= 'C) Marie Curie'> Marie Curie </option>
                <option value= 'D) George Orwell'> George Orwell </option>
            </select>
            </h2><br>",
            "<h3>Question 19:</h3>
            <h2>' Who has won the most Academy Awards?'
            <select name='ans19'>
                <option value='blank'></option>
                <option value= 'A) James Cameron'> James Cameron </option>
                <option value= 'B) Walt Disney'> Walt Disney </option>
                <option value= 'C) Katherine Hepburn'> Katherine Hepburn </option>
                <option value= 'D) Steven Spielberg'> Steven Spielberg </option>
            </select>
            </h2><br>",
            "<h3>Question 20:</h3>
            <h2>A man is pushing his car along the road when he comes to a hotel.
            He shouts, I'm bankrupt! Why?'
            <select name='ans20'>
                <option value='blank'></option>
                <option value= 'A) he is Bankrupt'> he is Bankrupt </option>
                <option value= 'B) He is mad'> He is mad </option>
                <option value= 'C) is playing monopoly'> is playing monopoly </option>
                <option value= 'D) All of the Above'> All of the Above </option>
            </select>
            </h2><br>",
            '<br><br>
            <div class="text">
                <span>Click</span>
                <span>Submit</span>
                <span>For</span>
                <span>Results</span>
                <div style="clear: both"></div>
            </div>
            <input type="submit">');

            for ($x=1;$x<=21;$x++) { 
                echo $questions[$x];
            }


        ?>

     </div>
    </form>    
</body>
</html>