<?php

if (isset($_GET['track'])) {
  
}


/* Configuration & Initialisation
–––––––––––––––––––––––––––––––––––––––––––––––––– */

$track_list = array();


//  Require Resources
// ------------------------------

require 'util/TrackParser.php';


//  DateTime
// ------------------------------

date_default_timezone_set('America/New_York');
$date_current = date_create('now', timezone_open('America/New_York'));


//  Playlist File
// ------------------------------

$filename = 'playlist.xspf';
$filepath = 'storage/' . $filename;

if (file_exists($filepath)) {

  $xml = new XMLReader();

  $xml->open($filepath);

} else {

  exit('Failed to open ' . $filepath);
  
}




/* Iteration
–––––––––––––––––––––––––––––––––––––––––––––––––– */

$i = 1;
foreach ($xml->trackList->track as $track) {

  $tracklist[$i]['title']     = getTrackTitle($track->title);
  $tracklist[$i]['location']  = getTrackLocation($track->location);
  $tracklist[$i]['duration']  = getTrackDuration($track->duration);

  $i++;
}
function test($test) {
  echo $test;
  echo '<br/>';
}

print_r($tracklist);