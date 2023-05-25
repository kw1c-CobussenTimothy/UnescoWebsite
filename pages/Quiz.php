<?php
// Define the questions and their corresponding points for each category
$categories = [
    'RaeveHeld' => [
        [
            'question' => 'Hoe vaak per jaar koop jij iets in een kringloopwinkel?',
            'options' => [
                '0 keer' => 0,
                '1-3 keer' => 1,
                '4-8 keer' => 2,
                '9+ keer' => 3
            ],
        ],
        [
            'question' => 'Hoe vaak per maand shop je online?',
            'options' => [
                '0 keer' => 3,
                '1-2 keer' => 2,
                '3-4 keer' => 1,
                '5+ keer' => 0
            ],
        ],
    ],
    'TianatHeld' => [
        [
            'question' => 'Vind je dat iedereen dezelfde rechten moet hebben?',
            'options' => [
                'Zeker!' => 3,
                'Ja, maar ze moeten er wel hun best voor doen.' => 2,
                'Nee, maar sommige mensen wel.' => 1,
                'Nee, natuurlijk niet.' => 0
            ],
        ],
        [
            'question' => 'Wat doe je wanneer je gekookt hebt en er eten overblijft?',
            'options' => [
                'Boeie, ik gooi het in de afvalbak.' => 0,
                'Dat hoort in de groenbak.' => 1,
                'Freezzzz.' => 2,
                'Ik geef het weg aan een ander.' => 3
            ],
        ],
    ],
    'BohrHeld' => [
        [
            'question' => 'Ben je into andere culturen?',
            'options' => [
                'Nah!' => 0,
                'Mwah!' => 1,
                'Duh!' => 2,
                'Yessir!!' => 3
            ],
        ],
        [
            'question' => 'Ik maak makkelijk nieuwe vrienden.',
            'options' => [
                'Niet mijn ding.' => 0,
                'Nee, maar ik zou het wel willen.' => 1,
                'Denk het wel.' => 2,
                'Zekers!' => 3
            ],
        ],
    ],
    'LimeyHeld' => [
        [
            'question' => 'Stel je voor, iemand verrast je',
            'options' => [
                'Daar houd ik helemaal niet van' => 0,
                'Uhm... oke bedankt?' => 1,
                'Oh dankje!' => 2,
                'Daar mag je me voor wakker maken.' => 3
            ],
        ],
        [
            'question' => 'Wat zou jij doen wanneer een klasgenoot zonder goede reden een slechte beoordeling krijgt?',
            'options' => [
                'Jammer, maar niet mijn probleem.' => 0,
                'Ik spreek de docent erop aan.' => 3,
                'Ik zou het bespreken met andere docenten.' => 2,
                'Ik ben blij dat ik het niet ben.' => 1
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

// Find the category with the highest points
$highestPoints = max($categoryPoints);
$winningCategory = array_search($highestPoints, $categoryPoints);

$_SESSION["held"] = $winningCategory;
?>

<!-- Quiz form -->
<body>
<div class="col-12 quiz" style="position: relative;">
    <div class="image-wrapper" style="position: relative; overflow: hidden; pointer-events: none;">
        <img src="./images/Overgang.png" class="quiz-image" style="width: 100%; height: auto;">
    </div>
    <?php if ($quizEnded): header("Location: $winningCategory"); ?>
        <ul>
            <?php foreach ($categoryPoints as $category => $points): ?>
                <li><?php echo $category; ?>: <?php echo $points; ?></li>
            <?php endforeach; ?>
        </ul>
        <h4>Total Points: <?php echo $totalPoints; ?></h4>
    <?php else: ?>
        <form method="post" action="">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            <?php
            // Get the current category, question, and options
            $category = array_keys($categories)[$categoryIndex];
            $question = $categories[$category][$questionIndex]['question'];
            $options = $categories[$category][$questionIndex]['options'];

            // Display the current category and question
            echo "<p class='quiz-vraag'>$question</p>";

            // Generate radio buttons for the question options
            foreach ($options as $option => $points) {
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='radio' name='answer' value='$option' id='$option' required>";
                echo "<label class='form-check-label button' for='$option'>$option</label>";
                echo "</div>";
            }
            ?>
                <div style="text-align: center;">
                    <button class="button2 form-check" type="submit">Next</button>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>
</body>