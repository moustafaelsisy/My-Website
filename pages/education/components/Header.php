<?php

class Header{

  public function view(){
    return '
    <div class="section">
      <h2 class="text-center">Memorial University of Newfoundland</h2>
      <h4 class="text-center">B.Sc in Computer Science, Sophomore</h4>
      <div class="text-center">
        <h6 class="inline-subheading" style="margin-right: 1rem;">GPA: 4.0</h6>
        <h6 class="inline-subheading" style="margin-left: 1rem;">Expected Graduation: December 2019</h6>
      </div>
      <p class="brief">
        I strongly believe that successful learning does not depend on one method or resource -
        I have found it extremely helpful so far to mix between formal education,
        heuristic self-driven learning and tech-talks/events where people in the industry share some really unique tips.
        With that said, you can find below the relevant courses that I have completed so far!
      </p>
    </div>';
  }
}

 ?>
