<?php
// retrieve the user's answers from the form submission
$answers = $_POST['answers'];

// define the correct answers
$correctAnswers = array(
    1 => 'b',
    2 => 'a',
    3 => 'c',
    4 => 'd',
    5 => 'b'
);

// initialize the score
$score = 0;

// check each answer against the correct answer and update the score
foreach ($answers as $questionNumber => $answer) {
    if ($answer == $correctAnswers[$questionNumber]) {
        $score++;
    }
}

// calculate the percentage score
$percentageScore = round(($score / count($correctAnswers)) * 100);

// display the results
echo "<h2>Your Quiz Results:</h2>";
echo "<p>You scored $score out of " . count($correctAnswers) . " questions.</p>";
echo "<p>Your percentage score is $percentageScore%.</p>";
?>
