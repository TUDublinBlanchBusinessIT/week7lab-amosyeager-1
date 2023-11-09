<?php
include 'team.php';

$teamA = new Team('Team A');
$teamB = new Team('Team B');

$teamA->finalScore(2, 1); // Team A won, should add 3 points
$teamB->finalScore(1, 2); // Team B won, should add 3 points
$teamA->finalScore(1, 1); // It's a draw, should add 1 point
$teamB->finalScore(0, 3); // Team B won, should add 3 points

echo $teamA->getTeamName() . " Points: " . $teamA->getTotalPoints() . ", Goals: " . $teamA->getTotalGoals() . ", Games: " . $teamA->getTotalGames() . "\n";
echo $teamB->getTeamName() . " Points: " . $teamB->getTotalPoints() . ", Goals: " . $teamB->getTotalGoals() . ", Games: " . $teamB->getTotalGames() . "\n";