<?php




//*************************************************
// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
function get_input($upper = FALSE) 
{
    // Return filtered STDIN input
    $result = trim(fgets(STDIN));
    
    if ($upper) 
    {
        return strtoupper($result);
    } 

      else 

      {
        return $result;
      }
}
//********************************************

//********CODE STARTS HERE********************
  // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(true);

    $sum = array_sum(str_split($input));

    echo $sum;












