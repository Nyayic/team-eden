<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>What Sumatran Rhino Are You? Quiz Results</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
   
</head>
<body>
    <div id="page-wrap">
        <h1 class="transparent index-headline" >Here’s What Sumatran Rhino You Are</h1>
        <?php
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;
            $totalD = 0;

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer1 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }
            if ($answer2 == "D") { $totalD = $totalD + 1.16; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }
            if ($answer3 == "D") { $totalD = $totalD + 1.16; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }
            if ($answer4 == "D") { $totalD = $totalD + 1.16; $totalB = $totalB + .04; $totalA = $totalA + .045; $totalC = $totalC + .034; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            if ($answer5 == "D") { $totalD = $totalD + 1.16; $totalC = $totalC + .04; }

            if ($answer6 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer6 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer6 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer6 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer7 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer7 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer7 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer7 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            if ($answer8 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer8 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer8 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }
            if ($answer8 == "D") { $totalD = $totalD + 1.16; $totalA = $totalA + .07; }

            ?>
            
            <div class="results-overlay">

<?php
if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
      echo '<div class="quiz-overlay result priest"></div>
      <div class="results-text">
      <p class="you-chose">You are :</p>
      <img src="../images/Andalas-2018.jpg" alt="Andalas" class="results-img" />
      <div class="results test-results2">
      <p class="score">Andalas</p>
      <p class="score-details">
      Andalas, the first Sumatran rhino (Dicerorhinus sumatrensis) born in captivity in more than 112 years, 
      is the living, breathing result of a ground-breaking research and breeding effort undertaken by American zoos, 
      the Indonesian government, and the Sumatran Rhino Sanctuary. Andalas, whose name is the ancient Indonesian word for the island of Sumatra, was born September 13, 2001, at the Cincinnati Zoo. 
      This little male rhino weighed 70 pounds at birth, and immediately became a worldwide news sensation.
      </p>
      <a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
      </div>';
}
elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
      echo '<div class="quiz-overlay result megadeth">
      </div><div class="results-text">
      <p class="you-chose">You Are:</p>
      <img src="../images/Delilah-2018.jpg" alt="Delilah" class="results-img" />
      <div class="results test-results2">
      <p class="score">Delilah</p>
      <p class="score-details">
      Delilah was born in the early morning hours of Thursday, May 12th, 2016 at the Sumatran Rhino Sanctuary in Way 
      Kambas National Park, Indonesia. Her father, Andalas, was born at the Cincinnati Zoo on September 13, 2001 and came to Indonesia when he was six years old. Andatu’s mother, Ratu, was born in Way Kambas National Park, but wandered outside the park’s boundaries in 2005. Fortunately, she was rescued and brought to the Sanctuary for protection. Delilah is Ratu’s second calf and the second rhino ever born in captivity in Indonesia. 
      She weighed approximately 45 pounds at birth, slightly less than her brother, Andatu, who weighed 60lbs. </p>
      <a id="replay" class="take-quiz-btn" href="test.php">Play Again?</a>
      </div>';
}
elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
      echo '<div class="quiz-overlay result maiden">
      </div><div class="results-text">
      <p class="you-chose">You Are:</p>
      <img src="../images/Harapan-2018.jpg" alt="Harapan" class="results-img">
      <div class="results test-results2">
      <p class="score">Harapan</p>
      <p class="score-details">
      Harapan, a young male Sumatran rhino, was born at the Cincinnati Zoo in 2007 to mother Emi and father Ipuh. 
      His parents were part of an international breeding program developed to increase the population of the critically endangered Sumatran rhino – now numbering no more than 100 individuals in the wild. Harapan was the third and final calf for Emi and Ipuh; 
      his big brother, Andalas, born in 2001, was the first Sumatran rhino born in a zoo in 112 years.
      </p>
      <a id="replay" class="take-quiz-btn" href="test.php">Play Again</a>
      </div>';
}
elseif ($totalD > $totalA && $totalD > $totalB && $totalD > $totalC) {
      echo '<div class="quiz-overlay result dio"></div>
      <div class="results-text">
      <p class="you-chose">You Are:</p>
      <img src="../images/Andatu-2018.jpg" alt="Andatu" class="results-img">
      <div class="results test-results2">
      <p class="score">Andatu</p>
      <p class="score-details">
      Andatu was born early in the morning on Saturday, June 23, 2012 at the Sumatran Rhino Sanctuary in Way Kambas 
      National Park, Indonesia. His father, Andalas, 
      was born at the Cincinnati Zoo on September 13, 2001 and came to Indonesia when he was six years old.
      Andatu’s mother, Ratu, was born in Way Kambas National Park, but wandered outside the park’s boundaries in 
      2005. Fortunately, she was rescued and brought to the Sanctuary for protection. 
      Andatus name is a combination of his mothers and fathers names, 
      but it is also short for an Indonesian term that means a <b>Gift from God.</b>
      </p>
      <a id="replay" class="take-quiz-btn" href="test.php">Play Again</a></div>';
}   
else if($totalA > $totalB && $totalB > $totalC && $totalC > $totalD) {
      echo '<div class="quiz-overlay result dio"></div>
      <div class="results-text">
      <p class="you-chose">You Are:</p>
      <img src="../images/Rosa-2018.jpg" alt="Rosa" class="results-img">
      <div class="results test-results2">
      <p class="score">Rosa</p>
      <p class="score-details">
      Unlike most Sumatran rhinos, Rosa, a young female, exhibits none of the shy, solitary behavior normally 
      associated with her species. Beginning in late 2003, Rhino Protection Units (RPUs) working in Bukit 
      Barisan Selatan National Park began receiving reports from local villagers that a young Sumatran rhino had 
      frequently been observed walking along one of the main roads crisscrossing the park and browsing for 
      vegetation in villages around the park boundaries.
      </p>
      <a id="replay" class="take-quiz-btn" href="test.php">Play Again</a></div>';
}
?>     
    </div>
</div>

    
</body>
</html>