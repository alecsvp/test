<?php

class CrossWords 
{
    protected string $answer;
    protected string $clue;
    protected int $length;
    protected string $date;
    protected string $direction;

    public function getAnswer():string {
        return $this->answer;
    }

    public function getclue():string {
        return $this->clue ;
    }

    public function getLength():string {
        return $this->length;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDirection():string {
       return $this->direction;
    }

    public function setAnswer(string $answer) {
        $this->answer = $answer;

        return $this;
    }

    public function setclue(string $clue) {
        $this->clue = strtoupper($clue);

        return $this;
    }

    public function setLength(int $length) {
        $this->length = $length;

        return $this;
    }

    public function setDate(DateTime $date) {
        $this->date = $date->format('Y-m-d');

        return $this;
    }

    public function setDirection(string $direction) {
        $this->direction = $direction;

        return $this;
    }

    public function __toString() {
        $response = [];
        $response['date'] = $this->date;
        $response['length'] = $this->length;
        $response['clue'] = $this->clue;
        $response['answer'] = $this->answer;
        $response['direction'] = $this->direction;

        return json_encode($response);
    }
}


