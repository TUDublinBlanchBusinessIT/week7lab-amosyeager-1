<?php
class Team {
    private $teamName;
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;

    public function __construct($teamName) {
        $this->teamName = $teamName;
        $this->totalpoints = 0
        $this->totalgoals = 0
        $this->totalgames = 0 
            
    }

    public function finalScore($homeScore, $opposingScore) {
        $this->totalGoals += $homeScore;
        $this->totalGames += 1;

        if ($homeScore > $opposingScore) {
            
            $this->totalPoints += 3; // home team won
        } elseif ($homeScore === $opposingScore) {
            
            $this->totalPoints += 1; // its a draw
            
        }
         this->totalgoals +=$homescore;
      
    }

    public function getTeamName()  {
            return $this->teamName;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }
}