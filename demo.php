<?php
/**
 * Created by PhpStorm.
 * User: sowwy
 * Date: 05.09.16
 * Time: 16:52
 */

//require_once 'autoload.php';

require_once 'City.php';
require_once 'ClimateInfo.php';
require_once 'IPrintable.php';
require_once 'ITripAdvisor.php';
require_once 'MajorCity.php';
require_once 'TouristsGuide.php';
require_once 'TraitGet.php';
require_once 'HotMegapolisAdvisor.php';

$city1 = new City('Veliko Tarnovo', 'ASD', 1, new ClimateInfo(-10, 20));
$city2 = new MajorCity('Sofia', 'DSA', 1, new ClimateInfo(25, 30), '2000000');

$touristGuide = new TouristsGuide(5);

$touristGuide->addCity($city1);
$touristGuide->addCity($city2);

$advisor = new HotMegapolisAdvisor();
$bestCity = $touristGuide->getBest($advisor);
echo $bestCity;

