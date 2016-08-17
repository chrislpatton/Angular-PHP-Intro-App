<?php
class Country
{
    public $name;
    public $flag;
    public $states;
    public function __construct($name = '',$flag = '', $states = []){
        $this->name = $name;
        $this->flag = $flag;
        $this->states = $states;
    }
}