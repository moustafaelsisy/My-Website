<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/Block.php");

$blocks = array(
  new Block(
    "COMP 4780: Honours Project",
    "Proposed an ensemble of a Random Forest and a Recurrent Neural "
    ."Network, which has been observed to yield an Average Precision score "
    ."x1.3 closer to a perfect classifier than the literature "
    ."(<a href='/assets/docs/4780_Honours_Thesis.pdf'>PDF</a>)"
  ),
  new Block(
    "COMP 4770: Team Project",
    "Created a Newfoundland-themed game: <a href='https://github.com/moustafaelsisy/COMP4770'>Need for Screech</a>"
  ),
  new Block("COMP 4766: Introduction to Autonomous Robotics". ""),
  new Block("COMP 4750: Introduction to Natural Language Processing", ""),
  new Block("COMP 3201: Nature-Inspired Computing", "Evolutionary Computing + ANNs"),
  new Block("COMP 3202: Introduction to Machine Learning", ""),
  new Block("COMP 3200: Algorithmic Techniques for AI", ""),
  new Block("COMP 3301: Introduction to Visual Computing", ""),
  new Block("COMP 3731: Introduction to Scientific Computing", ""),
  new Block("COMP 2500: Data Analysis in Python", ""),
  new Block("COMP 2005: Software Engineering", ""),
  new Block("COMP 2004: Operating Systems", ""),
  new Block("COMP 2003: Computer Architecture", ""),
  new Block("COMP 2002: Data Structures and Algorithms", ""),
  new Block("COMP 2001: OOP and Human-Computer Interaction", ""),
  new Block("COMP 1002: Introduction to Logic for CS", ""),
  new Block("COMP 1001: Introduction to Programming", ""),
  new Block("COMP 1000: Introduction to CS", "")
)

?>
