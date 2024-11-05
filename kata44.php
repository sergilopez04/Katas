<?php

class TennisMatch {
    private $player1;
    private $player2;
    private $sets;

    public function __construct($player1, $player2, $sets) {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->sets = $sets;
    }

    private function getFullScore() {
        $score = "{$this->player1} vs {$this->player2}\n";
        foreach ($this->sets as $index => $set) {
            $score .= "Set " . ($index + 1) . ": {$set[0]} - {$set[1]}\n";
        }
        return $score;
    }

    private function getWinner() {
        $player1Wins = 0;
        $player2Wins = 0;
        foreach ($this->sets as $set) {
            if ($set[0] > $set[1]) {
                $player1Wins++;
            } else {
                $player2Wins++;
            }
        }
        return $player1Wins > $player2Wins ? $this->player1 : $this->player2;
    }

    private function getSetWithLargestDifference() {
        $maxDifference = 0;
        $setWithMaxDifference = null;
        foreach ($this->sets as $index => $set) {
            $difference = abs($set[0] - $set[1]);
            if ($difference > $maxDifference) {
                $maxDifference = $difference;
                $setWithMaxDifference = $index + 1;
            }
        }
        return "Set " . $setWithMaxDifference . " amb diferència de " . $maxDifference . " jocs.";
    }

    public function displayMatchSummary() {
        echo $this->getFullScore();
        echo "Guanyador/a: " . $this->getWinner() . "\n";
        echo $this->getSetWithLargestDifference() . "\n";
    }

    public static function generateRandomSets($numSets) {
        $sets = [];
        for ($i = 0; $i < $numSets; $i++) {
            $set = self::generateRandomSet();
            $sets[] = $set;
        }
        return $sets;
    }

    private static function generateRandomSet() {
        $player1Games = rand(4, 7);
        $player2Games = rand(4, 7);

        if ($player1Games == $player2Games) {
            $player1Games++;
        }

        if ($player1Games < 6 && $player2Games < 6) {
            $player1Games = rand(0, 5);
            $player2Games = rand(6, 7);
        } 
        
        elseif ($player1Games < 6) {
            $player2Games = rand(6, 7);
        } 
        
        elseif ($player2Games < 6) {
            $player1Games = rand(6, 7);
        }

        return [$player1Games, $player2Games];
    }
}

$player1 = "Roger Federer";
$player2 = "Rafa Nadal";
$sets = TennisMatch::generateRandomSets(5);

$match = new TennisMatch($player1, $player2, $sets);
$match->displayMatchSummary();

?>
