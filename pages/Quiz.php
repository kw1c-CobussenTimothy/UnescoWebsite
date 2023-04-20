<?php

$pointSystems = array(
1 => array(
'questions' => array(
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
)
),
'points' => 0
),
2 => array(
'questions' => array(
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
)
),
'points' => 0
),
3 => array(
'questions' => array(
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
)
),
'points' => 0
),
4 => array(
'questions' => array(
7 => array(
    'question' => 'Wat zou jij doen als je te weten krijgt dat een docent een student die hij/zij minder aardig vind, een lager punt geeft als andere zonder reden?',
'answers' => array(
'Ik zou het stom vinden maar er niks aan doen' => 0,
'Ik zou er met de docent over praten' => 5,
'Ik zou er met de schoolleiding over praten' => 10,
'Ik zou er met de studentenraad over praten' => 15
)
),
8 => array(
'question' => 'Ben jij bereid om iets extras te doen voor het milieu?',
'answers' => array(
'Nee, ik vind het niet belangrijk' => 0,
'Ja, als het niet te veel moeite kost' => 5,
'Ja, ik doe best veel' => 10,
'Ja, ik ben er echt actief mee bezig' => 15
)
)
),
'points' => 0
)
);

$points = isset($_SESSION['points']) ? $_SESSION['points'] : 0;
$currentQuestion = isset($_SESSION['currentQuestion']) ? $_SESSION['currentQuestion'] : 1;
$currentPointSystem = isset($_SESSION['currentPointSystem']) ? $_SESSION['currentPointSystem'] : 1;
$currentQuestion = max(1, min(count($pointSystems[$currentPointSystem]['questions']), $currentQuestion));

if(isset($_POST['answer'])) {
    $answer = (int)$_POST['answer'];
    $points += $pointSystems[$currentPointSystem]['questions'][$currentQuestion]['answers'][$answer];
    $_SESSION['points'] = $points;
    $currentQuestion++;
    $_SESSION['currentQuestion'] = $currentQuestion;
}

if($currentQuestion > count($pointSystems[$currentPointSystem]['questions'])) {
    $pointSystems[$currentPointSystem]['points'] = $points;
    $currentPointSystem++;
    $currentQuestion = 1;
    $_SESSION['currentQuestion'] = $currentQuestion;

    // Add this check to ensure that the current point system is within bounds
    if ($currentPointSystem <= count($pointSystems)) {
        $_SESSION['currentPointSystem'] = $currentPointSystem;
    }
}

if ($currentPointSystem > count($pointSystems)) {
    echo 'Je hebt alle vragen beantwoord!<br>';
    echo 'Hier zijn de punten van elk systeem:<br>';

    foreach($pointSystems as $key => $system) {
        echo 'Systeem ' . $key . ': ' . $system['points'] . '<br>';
    }
} else {
    if (isset($pointSystems[$currentPointSystem]['questions'][$currentQuestion])) {
        $question = $pointSystems[$currentPointSystem]['questions'][$currentQuestion]['question'];
    }
    else {
        echo 'Sorry er zijn niet meer vragen';
    }
$answers = $pointSystems[$currentPointSystem]['questions'][$currentQuestion]['answers'];
echo '<p>' . $question . '</p>';
echo '<form method="post">';
    foreach($answers as $key => $value) {
    echo '<input type="radio" name="answer" value="' . $key . '">' . $key . '<br>';
    }
    echo '<br><input type="submit" value="Volgende vraag">';
    echo '</form>';
}
session_destroy();