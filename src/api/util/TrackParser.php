<?php
/**
 * Track Parser
 */

function parseXspf($filepath) {

  $xmlReader = new XMLReader();

  $xmlReader->open($filepath);

  //  Move Pointer to first <track>
  // ------------------------------

  while ($xmlReader->read() && $xmlReader->name !== 'track') {
  }


  //  Iterate over <track> elements
  // ------------------------------

  while ($xmlReader->name == 'track') {
    $item = new SimpleXmlElement($xmlReader->reader);
  }

}




/**
 * Function to retrieve title from Metadata
 *
 * @param   String  $track_title
 * @return  String
 */
function getTrackTitle($track_title) {

    if(isset($track_title)) {

      $tracklist[$i]['title']     = $track_title;

    } else {

      $tracklist[$i]['title']     = $track_title;

    }

}




/**
 * Function to retrieve file location from Playlist
 *
 * @param   String  $track_location
 * @return  String
 */
function getTrackLocation($track_location) {

    if (isset($track_location)) {

      return rawurldecode($track_location);

    } else {

      return rawurldecode($track_location);
      
    }

}




/**
 * Function to retrieve track duration from Metadata
 *
 * @param   String  $track_duration
 * @return  String
 */
function getTrackDuration($track_duration) {

    if (isset($track_duration)) {

      return $track_duration;
      
    } else {

      return $track_duration;

    }

}