<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/pages/common/Block.php");

$blocks = array(
  new Block(
    "Memorial University International Undergraduate Academic Award 2017-2018",
     "This award is given to the top achieving international undergraduate students across all faculties, in the previous academic year"
   ),
  new Block(
    "Faculty of Science Dean's List 2016-2017",
    "The top achieving 10% of the Faculty of Science are named to the Faculty's Dean's List, in order to be awarded at a ceremony by the Dean."
  ),
  new Block(
    "Winning Team at Hacking Health, St. John's 2017",
    "Hacking Health is a global annual Hackathon, and it made its first significant visit to the city of St. John's in 2017.
    For 48 hours, I worked along with my team on PatientMe: A web-app that we had the honour to present to Newfoundland's Minister of Health after his invitation.
    PatientMe focuses on helping the public find their healthcare through smart matchmaking with available Doctors.
    The demo also utilized tools such as the Google Maps API and Google Translate, to allow patients to easily find and navigate to their desired doctor, while eliminating linguistic boundaries."),
  new Block(
    "Memorial University International Student Entrance Academic Scholarship",
    "This scholarship is given to highly achieving entering International undergraduate students in light of their high school achievements and engagement")
);

 ?>
