<?php
require 'Country.php';
require 'State.php';
class CountryRepository
{
    private static $countries = array();
    protected static function init() {
        $countries = array();
        array_push($countries, new Country('Austria', 'http://w4.vp9kf.com/flags/austria.gif', array(
            new State('Styria'), new State('Tyrol')
        )));
        array_push($countries, new Country('Canada', 'http://realestatelearninglibrary.ca/Content/images/canada_flag.png', array(
            new State('Ontario'), new State('Quebec')
        )));
        array_push($countries, new Country('Luxembourg', 'http://www.energizeyourdevice.com/skin/frontend/energizer/default/images/lu.png'));
        self::$countries = $countries;
    }
    public static function getCountries(){
        if(count(self::$countries) === 0){
            self::init();
        }
        return self::$countries;
    }
    
}