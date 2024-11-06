<?php

const PLAYER_X = 'X';
const PLAYER_O = 'O';
const UNUSED = '-';

function getWinningLines($board) {
    return [
        // Filas
        [$board[0][0], $board[0][1], $board[0][2]],
        [$board[1][0], $board[1][1], $board[1][2]],
        [$board[2][0], $board[2][1], $board[2][2]],
        // Columnas
        [$board[0][0], $board[1][0], $board[2][0]],
        [$board[0][1], $board[1][1], $board[2][1]],
        [$board[0][2], $board[1][2], $board[2][2]],
        // Diagonales
        [$board[0][0], $board[1][1], $board[2][2]],
        [$board[0][2], $board[1][1], $board[2][0]],
    ];
}

function checkWinner($board) {
    $lines = getWinningLines($board);

    foreach ($lines as $line) {
        if (isWinningLine($line)) {
            return $line[0];
        }
    }

    return null;
}

function isWinningLine($line) {
    return $line[0] !== UNUSED && $line[0] === $line[1] && $line[1] === $line[2];
}

function evaluateGame($board) {
    $winner = checkWinner($board);
    
    if ($winner) {
        return "Guanyen les \"$winner\"!";
    }

    foreach ($board as $row) {
        if (in_array(UNUSED, $row)) {
            return "Partida en curs!";
        }
    }

    return "Empat!";
}

$games = [
    [
        ['X', 'O', 'O'],
        ['O', 'X', 'O'],
        ['-', 'O', 'X'],
    ],
    [
        ['O', 'X', 'O'],
        ['X', 'O', 'X'],
        ['X', 'O', 'O'],
    ],
    [
        ['X', 'O', 'X'],
        ['O', 'X', 'O'],
        ['O', 'X', 'O'],
    ],
];

foreach ($games as $game) {
    echo evaluateGame($game) . "\n";
}

?>
