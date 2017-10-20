<?php
include_once(dirname(__DIR__).'/components/Tile.php');

const FIRST_TILE_ID = 3;

$tiles = array(
  new Tile(
    FIRST_TILE_ID,
    "Projects",
    "I have had a few enlightening experiences in a variety of fields,
      ranging from desktop gamemode scripting to web development. Some of
      the projects I have made are closed source, but a preview of these
      programs is available over at my projects webpage, along with other
      open source projects and their GitHub repositories :)",
    "See Projects",
    "#",
    "fa-code"
  ),
  new Tile(
    FIRST_TILE_ID+1,
    "Education",
    "I have had a few enlightening experiences in a variety of fields,
      ranging from desktop gamemode scripting to web development. Some of
      the projects I have made are closed source, but a preview of these
      programs is available over at my projects webpage, along with other
      open source projects and their GitHub repositories :)",
    "See Education",
    "#",
    "fa-graduation-cap"
  )
);

?>
