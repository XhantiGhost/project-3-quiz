<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.'answers'">
    <meta http-equestionuiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/index.php" method="post">

<?php 
$max= 20;
 $question = 
 array( 'question1' => "HTML stands for. . .",
   'answer' => array ( 
   0 => "A) Hypertext Markup Language",
   1 => "B) Hypertext Markup",
   2 => "C) Hypertext Programming",
   3 => "D) None of the above",
   'answers' => 0
   )
),
1 => array( 'question2' => "q 2: Who makes it, has no need of it. Who buys it, has no use for it.
Who uses it can neither see nor feel it.  What is it?",
'answer' => array(
0 => "A) A bed",
   1 => "B) A coffin",
   2 => "C) A man",                                  
   3 => "D) None of the above",
   'answers' => 1
)
),
2 => array( 'question3' => "What can travel around the world while staying in a corner?",
'answer' =>  array(
   0 => "A) A letter",
   1 => "B) A bird",
   2 => "C) A plane",
   3 => "D) A stamp",
   'answers' => 3
),
3 => array( 'question4' => "q 4: I'm tall when I'm young and I'm short when I'm old. What am I?",
   'answers' => array(
   0 => "A) Human",
   1 => "B) Tree",
   2 => "C)A pencil",
   3 => "D) A clock",
   'answers' => 2
   )
),
4 =>  array('question5' => "q 5: You can drop me from the tallest building and I'll be fine,
but if you drop me in water I die. What am I?",
   'answers' => array(
   0 => "A) A coin",
   1 => "B) paper",
   2 => "C) fire ",
   3 => "D) ant",
   'answers' => 1
   )
),
 5 => array( 'question6' => "q : What has an eye but can not see?",
   'answers' => array(
   0 => "A) A Bat",
   1 => "B) A needle",
   2 => "C) A Potatoe",
   3 => "D) A mushroom",
   'answers' => 1
   )
),
6 => array('question7' => "q 7: What gets wetter and wetter the more it dries?",
   'answers' => array(
   0 => "A) paper",
   1 => "B) A towel",
   2 => "C) Eyes",
   3 => "D) All of the above",
   'answers' => 1
   )
),
 7 => array( 'question8' => "q 8: Paul's height is six feet,
 he's an assistant at a butcher's shop, and wears size 9 shoes. What does he weigh?",
   'answers' => array(
   0 => "A) 200 kg",
   1 => "B) 185 kg",
   2 => "C) Meat",
   3 => "D) 500 kg",
   'answers' => 2
   )
),
8 => array( 'question9' => "q 9: Which English poet wrote the epic
 'Paradise Lost' and followed it up with the sequestionuel 'Paradise Regained' ?",
   'answers' => array(
   0 => "A) John Milton",
   1 => "B) John Keats",
   2 => "C) William Blake",
   3 => "D) S.T Coleridge",
   'answers' => 0
   )
),
9 => array( 'question10' => "q 10: Which questionualities does a person have self-schemas for?",
   'answers' => array(
   0 => "A) questionualities that are important to the person",
   1 => "B) questionualities on which the person believes himself to be extreme",
   2 => "C)  questionualities on which the person is certain the opposite is not true",
   3 => "D) All of the above",
   'answers' => 1
   )
),
10 => array( 'question11' =>  "q 11:Who took over when Lenin died? ",
   'answers' => array(
   0 => "A) Starr",
   1 => "B) Stalin",
   2 => "C) Harrison",
   3 => "D) McCartney",
   'answers' => 1
   )
),
11 => array( 'question12' => "q 12: “They got married early, never had no money”
is the first line of which classic Australian song?",
   'answers' => array(
   0 => "A) 'To Her Door' by Paul Kelly and the Coloured Girls",
   1 => "B) Beds are Burning’ by Midnight Oil",
   2 => "C) Listen Like Thieves’ by INXS",
   3 => "D) ‘Khe Sahn’ by Cold Chisel",
   'answers' => 3
   )
),
12 => array( 'question13' => "q 13: What year did Albert Einstein die?",
   'answers' => array(
   0 => "A) 1954",
   1 => "B) 1949",
   2 => "C) 19'answers'0",
   3 => "D) 1955",
   'answers' => 3
   )
),
13 => array( 'question14' => "q 14: How many Presidents have there been of the USA?",
   'answers' => array(
   0 => "A) 3'answers'",
   1 => "B) 29",
   2 => "C) 4'answers'",
   3 => "D) 44",
   'answers' => 1
   )
),
14 => array( 'question15' => "q 15: What are a group of Dolphins called?",
   'answers' => array(
   0 => "A) School",
   1 => "B) Herd",
   2 => "C) Pod",
   3 => "D) Pool",
   'answers' => 2
   )
),
15 => array( 'question16' => "q 1'answers': How many men have walked on the moon?",
   'answers' => array(
   0 => "A) 12",
   1 => "B) 5",
   2 => "C) 8",
   3 => "D) 21",
   'answers' => 0
   )
),
16 => array( 'question17' => "q 17: What is the currency of Brazil?",
   'answers' => array(
   0 => "A) Real",
   1 => "B) Dollar",
   2 => "C) Krona",
   3 => "D) The Bhat",
   'answers' => 0
   )
),
17 => array( 'question18' => "q 18: Who invented Penicillin?",
   'answers' => array(
   0 => "A) Alexandra Fleming",
   1 => "B) Thomas Edison",
   2 => "C) Marie Curie",
   3 => "D) George Orwell",
   'answers' => 0
   )
),
18 => array( 'question19' => "q 19: Who has won the most Academy Awards?",
   'answers' => array(
   0 => "A) James Cameron",
   1 => "B) Walt Disney",
   2 => "C) Katherine Hepburn",
   3 => "D) Steven Spielberg",
   'answers' => 1
   )
),
19 => array('question20' => "q 20: A man is pushing his car along the road when he comes to a hotel.
 He shouts, I'm bankrupt! Why?",
   'answers' => array(
   0 => "A) he is Bankrupt",
   1 => "B) He is mad",
   2 => "C) is playing monopoly",
   3 => "D) All of the Above",
   'answers' => 2
   )
),
);

$answers = 0;
if (isset($_POST)) {
   $q1 =$_POST['question1'];
   $q2 =$_POST['question2'];
   $q3 =$_POST['question3'];
   $q4 =$_POST['question4'];
   $q5 =$_POST['question5'];
   $q6 =$_POST['question6'];
   $q7 =$_POST['question7'];
   $q8 =$_POST['question8'];
   $q9 =$_POST['question9'];
   $q10 =$_POST['question10'];
   $q11 =$_POST['question11'];
   $q12 =$_POST['question12'];
   $q13 =$_POST['question13'];
   $q14 =$_POST['question14'];
   $q15 =$_POST['question15'];
   $q16 =$_POST['question16'];
   $q17 =$_POST['question17'];
   $q18 =$_POST['question18'];
   $q19 =$_POST['question19'];
   $q20 =$_POST['question20'];

  

   if ($q1 == 0) {
      $answers++;
   }
   if ($q2 == 1) {
      $answers++;
   }
   if ($q3 == 3) {
      $answers++;
   }
   if ($q4 == 2) {
      $answers++;
   }
   if ($q5 == 1) {
      $answers++;
   }
   if ($q6 == 1) {
      $answers++;
   }
   if ($q7 == 1) {
      $answers++;
   }
   if ($q8 == 2) {
      $answers++;
   }
   if ($q9 == 0) {
      $answers++;
   }
   if ($q10 == 1) {
      $answers++;
   }
   if ($q11 == 1) {
      $answers++;
   }
   if ($q12 == 3) {
      $answers++;
   }
   if ($q13 == 3) {
      $answers++;
   }
   if ($q14 == 1) {
      $answers++;
   }
   if ($q15 == 2) {
      $answers++;
   }
   if ($q16 == 0) {
      $answers++;
   }
   if ($q17 == 0) {
      $answers++;
   }
   if ($q18 == 0) {
      $answers++;
   }
   if ($q19 == 1) {
      $answers++;
   }
   if ($q20 == 2) {
      $answers++;
   }
}
foreach ($_POST as $value){
   if (isset ($value)){
   $done++;
   }
   }
   if ($done !=20)
   print '<input type="submit" name="submit" value="check answers" /><br/><br/>';
   if (($done > 0)&&($done < 20))
   print 'You haven&#8217;t answered all the questions. Please finish the quiz and re-submit your answers.';
   if($done==20){
   if ($answers==0)
   $answers="0";
   print "Your score is $answers/3.<br/><br/>";
 ?>

// <h1> hello <h1>

</body>
</html>
