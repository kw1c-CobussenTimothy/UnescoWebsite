<?php

$questions = array(
    1 => array(
        'question' => 'Hoe vaak ga je naar een kringloopwinkel per jaar?',
        'answers' => array(
            '0 keer' => 0,
            '1-3 keer' => 5,
            '4-8 keer' => 10,
            '9+ keer' => 15
        )
    ),
    2 => array(
        'question' => 'Hoe vaak per maand koop je wel eens iets online?',
        'answers' => array(
            '0 keer' => 0,
            '1-2 keer' => 5,
            '3-4 keer' => 10,
            '5+ keer' => 15
        )
    ),
    3 => array(
        'question' => 'Vind je dat iedereen de zelfde rechten moet krijgen?',
        'answers' => array(
            'Zeker!' => 15,
            'Ja, maar ze moeten wel hun best er voor doen' => 10,
            'Nee, maar sommige mensen wel' => 5,
            'Nee natuurlijk niet' => 0
        )
    ),
    4 => array(
        'question' => 'Wat doe je met eten wat je te veel hebt gemaakt?',
        'answers' => array(
            'Ik gooi het in de afvalbak' => 0,
            'Ik gooi het in de groenbak' => 5,
            'Ik vries het in voor later' => 10,
            'Ik geef het weg aan een ander' => 15
        )
    ),
    5 => array(
        'question' => 'Hoeveel ben jij bezig met andere culturen?',
        'answers' => array(
            'Helemaal niet' => 0,
            'Wel een beetje' => 5,
            'Ik weet best veel' => 10,
            'Ik houd me er veel mee bezig' => 15
        )
    ),
    6 => array(
        'question' => 'Ik maak makkelijk nieuwe vrienden',
        'answers' => array(
            'Nee bedankt' => 0,
            'Nee, maar ik zou het wel willen' => 5,
            'Denk het wel' => 10,
            'Zekers!' => 15
        )
    ),
    7 => array(
        'question' => 'Stel je voor, iemand verrast je',
        'answers' => array(
            'Daar houd ik helemaal niet van' => 0,
            'Uhm… oke bedankt?' => 5,
            'Oh dankje!' => 10,
            'Dat vind ik geweldig' => 15
        )
    ),
    8 => array(
        'question' => 'Wat zou jij doen als je te weten krijgt dat een docent een student die hij/zij minder aardig vind, een lager punt geeft als andere zonder reden?',
        'answers' => array(
            'Ik zou het stom vinden maar er niks aan doen' => 0,
            'Uhm… oke bedankt?' => 5,
            'Oh dankje!' => 10,
            'Dat vind ik geweldig' => 15
        )
    )
);

$currentQuestion = isset($_SESSION['currentQuestion']) ? $_SESSION['currentQuestion'] : 1;
$currentQuestion = max(1, min(count($questions), $currentQuestion));

$points = isset($_SESSION['points']) ? $_SESSION['points'] : 0;

if (isset($_POST['answer'])) {
    $selectedAnswer = $_POST['answer'];
    if (isset($questions[$currentQuestion]['answers'][$selectedAnswer])) {
        $points += $questions[$currentQuestion]['answers'][$selectedAnswer];
    }
    $_SESSION['points'] = $points;
    $currentQuestion++;
    $_SESSION['currentQuestion'] = $currentQuestion;
    if ($currentQuestion > count($questions)) {
        session_destroy();
        echo '<p>You have completed the quiz!</p>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Example</title>
</head>
<body>
<h1>Quiz</h1>
<p>Your total score is: <?php echo $points; ?></p>
<form method="post" action="">
    <p><?php echo $questions[$currentQuestion]['question']; ?></p>
    <?php foreach ($questions[$currentQuestion]['answers'] as $answer => $point): ?>
        <button type="submit" name="answer" value="<?php echo $answer; ?>"><?php echo $answer; ?></button>
    <?php endforeach; ?>
</form>
</body>
</html>