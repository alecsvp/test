<?php

require_once 'CrossWords.php';

$crosswords = (new CrossWords);

header('Content-Type: application/json; charset=utf-8');

$answers = ['SNOB', 'ATONED','PORTER', 'TUTORS', 'STEPS', 'STOUT', 'NORTE', 'ONTOP' ];
$clues = ['Haughty person', 'Luggage carrier at a hotel','One-on-one teachers', 'Studies recommend taking 8,000+ of these each day', 'Sturdy', 'Direction from Mexico to the U.S.', 'Victorious' ];
$directions = ['across', 'across'];

shuffle($answers);
shuffle($clues);
shuffle($directions);

$values= array_values($answers);

try {
    echo  $crosswords
    ->setAnswer(getFirstElement($answers))
    ->setLength(strlen($crosswords->getAnswer()))
    ->setClue(getFirstElement($clues))
    ->setDate(new \DateTime)
    ->setDirection(getFirstElement($directions));

} catch (\Exception $exception) {
    echo json_encode(['error' => $exception->getError()]);
}

function getFirstElement($array) {
    $values= array_values($array);

    return  array_shift($values);
}