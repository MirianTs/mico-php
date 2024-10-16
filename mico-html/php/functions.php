<?php 

// h1 
function h1($value,$class = ''){
    echo '<h1 class="'.$class.'">' . $value . "</h1>";
}

// h2
function h2($value,$class = ''){
  echo '<h2 class="'.$class.'">' . $value . "</h2>";
}

// h3
function h3($value,$class = ''){
    echo '<h3 class="'.$class.'">' . $value . "</h3>";
}

// h4 
function h4($value,$class = ''){
    echo '<h4 class="'.$class.'">' . $value . "</h4>";
}

// a 
function a($value, $link = "#", $class = ''){    echo '<a href="'.$link.'" class="'.$class.'">' . $value . "</a>";
}

// p
function p($value,$class = ''){  echo '<p class="'.$class.'">' . $value . "</p>";
}

// img 
function img($value,$class = ''){
    echo '<img src="'.$value.'" class="'.$class.'">' ;
}


// span 
function span($value,$class = ''){   echo '<span class="'.$class.'">' . $value . "</span>";
}


// i 
function i($class){
    echo '<i class="'.$class.'">'."</i>";
}

