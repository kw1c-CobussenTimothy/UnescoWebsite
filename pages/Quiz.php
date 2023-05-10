<?php
//// Define the questions and their corresponding points for each category
//$categories = [
//    'Sports' => [
//        [
//            'question' => 'Which country won the FIFA World Cup in 2018?',
//            'options' => ['France', 'Brazil', 'Germany', 'Argentina'],
//            'correct' => 'France',
//            'points' => 10
//        ],
//        [
//            'question' => 'Which sport is associated with Wimbledon?',
//            'options' => ['Tennis', 'Cricket', 'Football', 'Basketball'],
//            'correct' => 'Tennis',
//            'points' => 10
//        ]
//    ],
//    'Geography' => [
//        [
//            'question' => 'What is the capital city of Australia?',
//            'options' => ['Sydney', 'Melbourne', 'Canberra', 'Brisbane'],
//            'correct' => 'Canberra',
//            'points' => 10
//        ],
//        [
//            'question' => 'Which country is home to the Great Barrier Reef?',
//            'options' => ['Australia', 'Brazil', 'Mexico', 'India'],
//            'correct' => 'Australia',
//            'points' => 10
//        ]
//    ]
//    // Add more categories and questions here...
//];
//
//// Initialize the quiz session if it hasn't been started
//if (!isset($_SESSION['quizStarted'])) {
//    $_SESSION['quizStarted'] = true;
//    $_SESSION['categoryPoints'] = array_fill_keys(array_keys($categories), 0);
//    $_SESSION['totalPoints'] = 0;
//}
//
//// Get the current category and question index
//$categoryIndex = isset($_GET['c']) ? $_GET['c'] : 0;
//$questionIndex = isset($_GET['q']) ? $_GET['q'] : 0;
//
//// Check if the quiz has ended
//$quizEnded = ($categoryIndex >= count($categories));
//
//// Process the form submission if the quiz is still ongoing
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$quizEnded) {
//    // Get the selected answer for the current question
//    $selectedAnswer = $_POST['answer'];
//
//    // Get the current category, question, and the correct answer
//    $category = array_keys($categories)[$categoryIndex];
//    $question = array_keys($categories[$category])[$questionIndex];
//    $correctAnswer = $categories[$category][$question]['correct'];
//    $points = $categories[$category][$question]['points'];
//
//    // Check if the selected answer is correct
//    if ($selectedAnswer === $correctAnswer) {
//        $_SESSION['categoryPoints'][$category] += $points; // Increase category points for each correct answer
//        $_SESSION['totalPoints'] += $points; // Increase total points for each correct answer
//    }
//
//    // Redirect to the next question or show the result if there are no more questions
//    if ($questionIndex + 1 < count($categories[$category])) {
//        $nextQuestionIndex = $questionIndex + 1;
//        header("Location: quiz?q=$nextQuestionIndex&c=$categoryIndex");
//        exit();
//    } elseif ($categoryIndex + 1 < count($categories)) {
//        $nextCategoryIndex = $categoryIndex + 1;
//        $nextQuestionIndex = 0;
//        header("Location: quiz?q=$nextQuestionIndex&c=$nextCategoryIndex");
//        exit();
//    } else {
//        // Quiz has ended
//        $quizEnded = true;
//    }
//}
//
//// Retrieve the category points and total points from the session
//$categoryPoints = $_SESSION['categoryPoints'];
//$totalPoints = $_SESSION['totalPoints'];
//
//// Find the category with the highest points
//$highestPoints = max($categoryPoints);
//$winningCategory = array_search($highestPoints, $categoryPoints);
//
//// Reset the quiz session if the quiz has ended
//if ($quizEnded) {
//    unset($_SESSION['quizStarted']);
//    unset($_SESSION['categoryPoints']);
//    unset($_SESSION['totalPoints']);
//}
//?>
<!---->
<!--    <!-- Quiz form -->-->
<!--    <!DOCTYPE html>-->
<!--    <html>-->
<!--    <head>-->
<!--        <title>Quiz System</title>-->
<!--    </head>-->
<!--<body>-->
<?php //if ($quizEnded): ?>
<!--    <h3>Quiz Ended</h3>-->
<!--    <h4>Category Points:</h4>-->
<!--    <ul>-->
<!--        --><?php //foreach ($categoryPoints as $category => $points): ?>
<!--            <li>--><?php //echo $category; ?><!--: --><?php //echo $points; ?><!--</li>-->
<!--        --><?php //endforeach; ?>
<!--    </ul>-->
<!--    --><?php //if ($winningCategory): ?>
<!--        <h4>Winner: --><?php //echo $winningCategory; ?><!--</h4>-->
<!--        <!-- Add your specific text for the winner here -->-->
<!--        --><?php //if ($winningCategory === 'Sports'): ?>
<!--            <p>Congratulations to the Sports category winner!</p>-->
<!--        --><?php //else: ?>
<!--            <form method="post" action="">-->
<!--                --><?php
//                // Get the current category, question, and options
//                $category = array_keys($categories)[$categoryIndex];
//                $question = array_keys($categories[$category])[$questionIndex];
//                $options = $categories[$category][$question]['options'];
//
//                // Display the current category and question
//                echo "<h2>$category</h2>";
//                echo "<p>$question</p>";
//
//                // Generate radio buttons for the question options
//                foreach ($options as $option) {
//                    echo "<input type='radio' name='answer' value='$option'> $option<br>";
//                }
//                ?>
<!---->
<!--                <input type="submit" value="Next">-->
<!--            </form>-->
<!--        --><?php //endif; ?>
<!--    --><?php //endif; ?>
<?php //endif; ?>
<!--</body>-->
<!--</html>-->

<?php
// Define the questions and their corresponding points for each category
$categories = [
    'Sports' => [
        [
            'question' => 'Which country won the FIFA World Cup in 2018?',
            'options' => ['France', 'Brazil', 'Germany', 'Argentina'],
            'correct' => 'France',
            'points' => 10
        ],
        [
            'question' => 'Which sport is associated with Wimbledon?',
            'options' => ['Tennis', 'Cricket', 'Football', 'Basketball'],
            'correct' => 'Tennis',
            'points' => 10
        ]
    ],
    'Geography' => [
        [
            'question' => 'What is the capital city of Australia?',
            'options' => ['Sydney', 'Melbourne', 'Canberra', 'Brisbane'],
            'correct' => 'Canberra',
            'points' => 10
        ],
        [
            'question' => 'Which country is home to the Great Barrier Reef?',
            'options' => ['Australia', 'Brazil', 'Mexico', 'India'],
            'correct' => 'Australia',
            'points' => 10
        ]
    ]
    // Add more categories and questions here...
];

// Initialize the quiz session if it hasn't been started
if (!isset($_SESSION['quizStarted'])) {
    $_SESSION['quizStarted'] = true;
    $_SESSION['categoryPoints'] = array_fill_keys(array_keys($categories), 0);
    $_SESSION['totalPoints'] = 0; // Initialize total points to 0
}

// Get the current category and question index
$categoryIndex = isset($_GET['c']) ? $_GET['c'] : 0;
$questionIndex = isset($_GET['q']) ? $_GET['q'] : 0;

// Check if the quiz has ended
$quizEnded = ($categoryIndex >= count($categories));

// Process the form submission if the quiz is still ongoing
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$quizEnded) {
    // Get the selected answer for the current question
    $selectedAnswer = $_POST['answer'];

    // Get the current category, question, and the correct answer
    $category = array_keys($categories)[$categoryIndex];
    $question = $categories[$category][$questionIndex]['question'];
    $correctAnswer = $categories[$category][$questionIndex]['correct'];
    $points = $categories[$category][$questionIndex]['points'];

    // Check if the selected answer is correct
    if ($selectedAnswer === $correctAnswer) {
        $_SESSION['categoryPoints'][$category] += $points; // Increase category points for each correct answer
        $_SESSION['totalPoints'] += $points; // Increase total points for each correct answer
    }

    // Redirect to the next question or show the result if there are no more questions
    if ($questionIndex + 1 < count($categories[$category])) {
        $nextQuestionIndex = $questionIndex + 1;
        header("Location: quiz?q=$nextQuestionIndex&c=$categoryIndex");
        exit();
    } elseif ($categoryIndex + 1 < count($categories)) {
        $nextCategoryIndex = $categoryIndex + 1;
        $nextQuestionIndex = 0;
        header("Location: quiz?q=$nextQuestionIndex&c=$nextCategoryIndex");
        exit();
    } else {
        // Quiz has ended
        $quizEnded = true;
    }
}

// Retrieve the category points from the session
$categoryPoints = $_SESSION['categoryPoints'];
$totalPoints = $_SESSION['totalPoints'];

// Find the category with the highest points
$highestPoints = max($categoryPoints);
$winningCategory = array_search($highestPoints, $categoryPoints);

var_dump($categoryPoints)   ;
var_dump($winningCategory);
////if welke cateorie de meeste punten eeft
//
//
$_SESSION["held"] = $winningCategory;
?>

<!-- Quiz form -->
<!DOCTYPE html>
<html>
<head>
    <title>Quiz System</title>
</head>
<body>
<?php if ($quizEnded): ?>
    <h3>Quiz Ended</h3>
    <h4>Category Points:</h4>
    <ul>
        <?php foreach ($categoryPoints as $category => $points): ?>
            <li><?php echo $category; ?>: <?php echo $points; ?></li>
        <?php endforeach; ?>
    </ul>
    <h4>Total Points: <?php echo $totalPoints; ?></h4>
<?php else: ?>
    <form method="post" action="">
        <?php
        // Get the current category, question, and options
        $category = array_keys($categories)[$categoryIndex];
        $question = $categories[$category][$questionIndex]['question'];
        $options = $categories[$category][$questionIndex]['options'];

        // Display the current category and question
        echo "<h2>$category</h2>";
        echo "<p>$question</p>";

        // Generate radio buttons for the question options
        foreach ($options as $option) {
            echo "<input type='radio' name='answer' value='$option'> $option<br>";
        }
        ?>

        <input type="submit" value="Next">
    </form>
<?php endif; ?>
</body>
</html>
