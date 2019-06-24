<?php


class Auto
{
    public $brand;
    public $model;
    public $year;
    public $color;
    public $speed;

    public function setCar($b,$m,$y,$c,$s)
    {
        $this->brand=$b;
        $this->model=$m;
        $this->speed=$s;
        $this->year=$y;
        $this->color=$c;
    }
}