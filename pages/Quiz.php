<?php
// Define the questions and their corresponding points for each category
$categories = [
    '1' => [
        [
            'question' => 'Hoe vaak ga je naar een kringloopwinkel per jaar?',
            'options' => [
                '0 keer' => 10,
                '1-3 keer' => 5,
                '4-8 keer' => 3,
                '9+ keer' => 1
            ],
        ],
        [
            'question' => 'Hoe vaak per maand koop je iets online?',
            'options' => [
                '0 keer' => 10,
                '1-2 keer' => 5,
                '3-4 keer' => 3,
                '5+ keer' => 1
            ],
        ],
    ],
    '2' => [
        [
            'question' => 'Vind je dat iedereen dezelfde rechten moet krijgen?',
            'options' => [
                'Zeker!' => 10,
                'Ja, maar ze moeten wel hun best ervoor doen' => 5,
                'Nee, maar sommige mensen wel' => 3,
                'Nee, natuurlijk niet' => 1
            ],
        ],
        [
            'question' => 'Wat doe je met eten wat je te veel hebt gemaakt?',
            'options' => [
                'Ik gooi het in de afvalbak' => 10,
                'Ik gooi het in de groenbak' => 5,
                'Ik vries het in voor later' => 3,
                'Ik geef het weg aan een ander' => 1
            ],
        ],
    ],
    '3' => [
        [
            'question' => 'Hoeveel ben jij bezig met andere culturen?',
            'options' => [
                'Helemaal niet' => 10,
                'Wel een beetje' => 5,
                'Ik weet best veel' => 3,
                'Ik houd me er veel mee bezig' => 1
            ],
        ],
        [
            'question' => 'Ik maak makkelijk nieuwe vrienden',
            'options' => [
                'Nee bedankt' => 10,
                'Nee, maar ik zou het wel willen' => 5,
                'Denk het wel' => 3,
                'Zekers!' => 1
            ],
        ],
    ],
    '4' => [
        [
            'question' => 'Stel je voor, iemand verrast je',
            'options' => [
                'Daar houd ik helemaal niet van' => 10,
                'Uhm... oke bedankt?' => 5,
                'Oh dankje!' => 3,
                'Dat vind ik geweldig' => 1
            ],
        ],
        [
            'question' => 'Wat zou jij doen als je te weten krijgt dat een docent een student die hij/zij minder aardig vindt, een lager punt geeft dan anderen zonder reden?',
            'options' => [
                'Ik zou het stom vinden maar er niks aan doen' => 10,
                'Ik zou naar de docent toegaan en het bespreken' => 5,
                'Ik zou het melden bij de directie of andere docenten' => 3,
                'Het zou mij niet boeien, ik ben gelukkig niet die student' => 1
            ],
        ],
    ]
    // Add more categories and questions here...
];

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

    // Get the current category, question, and the options
    $category = array_keys($categories)[$categoryIndex];
    $question = $categories[$category][$questionIndex]['question'];
    $options = $categories[$category][$questionIndex]['options'];

    // Get the points for the selected option
    $points = $options[$selectedAnswer];

    // Update the category points and total points
    $_SESSION['categoryPoints'][$category] += $points;
    $_SESSION['totalPoints'] += $points;

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
print_r($categoryPoints);

// Find the category with the highest points
$highestPoints = max($categoryPoints);
$winningCategory = array_search($highestPoints, $categoryPoints);

$_SESSION["held"] = $winningCategory;
?>

<!-- Quiz form -->
<!DOCTYPE html>
<html>
<head>
    <title>Quiz System</title>
</head>
<body>
<?php if ($quizEnded): header("Location: WinningHeld"); ?>
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
        foreach ($options as $option => $points) {
            echo "<input type='radio' name='answer' value='$option'> $option<br>";
        }
        ?>

        <input type="submit" value="Next">
    </form>
<?php endif; ?>
</body>
</html>
