<?php

class Cars {
    public $wheel_count=4;
    private $door_count=4;
    protected $seat_count=2;

    function car_detail() {
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }

}

$bmw = new Cars();

//echo $bmw->wheel_count; ispiše ga
//echo $bmw->door_count; ne ispiše ga (privatan)
//echo $bmw->seat_count; ne ispiše ga (zaštičen)

$bmw->car_detail();

