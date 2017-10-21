<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/pages/index/components/Tile.php");

Tile::setInitialId(3);

$tiles = array(
  new Tile(
    "Projects",
    "I have had the pleasure of going through many enlightening experiences in a variety of fields,
      ranging from scripting gamemodes to Web Development. Some of the projects I have made are closed
      source, but you can find my open-source projects on my GitHub account if you click the button below!",
    "Visit Projects",
    "https://github.com/moustafaelsisy",
    "fa-code"
  ),
  new Tile(
    "Education",
    "Practice is great - but even greater things can happen when theory and practice shake hands! You can find
    the courses that I have completed so far here, along with my current academic standing.",
    "See Education",
    "#",
    "fa-certificate"
  ),
  new Tile(
    "Distinctions",
    "You can also find here some of the distinctions that I am extremely humbled to have received.",
    "View Distinctions",
    "#",
    "fa-check-circle"
  ),
  new Tile(
    "Resume",
    "If you are looking for a professional summary of my work history, projects, achievements and academics, this is
    where you will find everything summed up!",
    "Check Resume",
    "#",
    "fa-sticky-note"
  )
);

?>
