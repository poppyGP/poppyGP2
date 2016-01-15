<?php
/**
 * Track Parser
 */

function parseTrack() {

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