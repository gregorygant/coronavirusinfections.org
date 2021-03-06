<?php

/**
 * This file is part of the coronavirusinfections.org project.
 * 
 * @author Valentino Pesce
 * @copyright (c) Valentino Pesce <valentino@iltuobrand.it>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$host = "https://coronavirusinfections.org";

$updateDate = '17 March 2020';

$nextUpdate = '10 AM CET 19 March 2020'; 

$reportFolder = glob('data/csv/reports/*.csv');

$contagionDays = count($reportFolder);