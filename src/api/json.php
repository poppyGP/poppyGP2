<?php




/* Configuration & Initialisation
–––––––––––––––––––––––––––––––––––––––––––––––––– */

$track_list = array();


//  Require Resources
// ------------------------------

require 'util/TrackJson.php';


//  DateTime
// ------------------------------

date_default_timezone_set('America/New_York');
$date_current = date_create('now', timezone_open('America/New_York'));


//  Playlist File
// ------------------------------

$filename = 'playlist.xspf';
$filepath = 'storage/' . $filename;

if (file_exists($filepath)) {
  $playlist = XML2JSON(file_get_contents($filepath));
  print_r($playlist);
} else {
  exit('Failed to open ' . $filepath);
}