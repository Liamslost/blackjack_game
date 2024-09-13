<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>


</html>


<?php

$cards = [
        'A' => 11,
        '2' => 2,
        '3' => 3,
        '4' => 4,
        '5' => 5,
        '6' => 6,
        '7' => 7,
        '8' => 8,
        '9' => 9,
        '10' => 10,
        'J' => 10,
        'Q' => 10,
        'K' => 10,
];

$suits = [
        'Clubs' => 1,
        'Hearts'=> 2,
        'Spades'=> 3,
        'Diamonds' => 4,
];

//dealer

$dealer_card_1 = array_rand($cards);
$dealer_card_1_suit = ' of ' . array_rand($suits);
$dealer_score_1 = $cards[$dealer_card_1];

$dealer_card_2 = array_rand($cards);
$dealer_card_2_suit = ' of ' . array_rand($suits);
$dealer_score_2 = $cards[$dealer_card_2];

$dealer_score = $dealer_score_1 + $dealer_score_2;

// if dealer hand <14 then deal another card
if($dealer_score < 14) {
    $dealer_card_3 = array_rand($cards);
    $dealer_card_3_suit = ' of ' . array_rand($suits);
    $dealer_score_3 = $cards[$dealer_card_3];
    $dealer_score += $dealer_score_3;
}

// if dealer hand over 21 turn aces to 1



    var_dump ($dealer_card_1, $dealer_card_2,$dealer_card_3);

   //else ($dealer_score > 21)[$cards [0] = ['A'=> 1,];]





//player
$player_card_1 = array_rand($cards);
$player_score_1 = $cards [$player_card_1];
$player_card_1_suit =  ' of ' . array_rand($suits);

$player_card_2 = array_rand($cards);
$player_score_2 = $cards [$player_card_2];
$player_card_2_suit =  ' of ' . array_rand($suits);

$player_score = $player_score_1 + $player_score_2;

if ($player_score < 14) {
    $player_card_3 = array_rand($cards);
    $player_card_3_suit = ' of ' . array_rand($suits);
    $player_score_3 = $cards[$player_card_3];
    $player_score += $player_score_3;
}


function outcome ($player_score, $dealer_score)
{
    if ($dealer_score > 21 ){
        echo 'Dealer bust - Player wins!';}
    elseif ($player_score > 21 ){
        echo 'Player bust - Dealer wins!';}
    elseif ($dealer_score > $player_score ){
        echo 'Dealer wins!';}
    elseif ($dealer_score < $player_score){
        echo 'Player wins!';}
    elseif ($dealer_score == $player_score){
        echo 'Its a draw!';}

}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<div class="container">
<div class="dealer-box">
<h1>Dealer cards</h1>
<h2 class="card"><?php echo $dealer_card_1 . $dealer_card_1_suit  ?></h2>
<h2 class="card"><?php echo $dealer_card_2 . $dealer_card_2_suit ?></h2>
<h2 class="card"><?php if (isset ($dealer_card_3)) {
        /** @noinspection PhpUndefinedVariableInspection */
        echo $dealer_card_3 . $dealer_card_3_suit;} ?></h2>
<h2><?php echo "Dealer score: ". $dealer_score ?></h2>
</div>
 <div class="outcome-container">
        <h1> <?php echo outcome ($player_score, $dealer_score) ?></h1>
 </div>

<div class="player-box">
<h1>Player cards</h1>
<h2 class="card"><?php echo $player_card_1 . $player_card_1_suit ?></h2>
<h2 class="card"><?php echo $player_card_2 . $player_card_2_suit ?></h2>
<h2 class="card"><?php if (isset ($player_card_3)) {
        /** @noinspection PhpUndefinedVariableInspection */
        echo $player_card_3 . $player_card_3_suit;} ?></h2>
<h2><?php echo "Player score: ". $player_score ?></h2>
</div>
</div>


</body>
</html>

<?php









