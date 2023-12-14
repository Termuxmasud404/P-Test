<?php

function birthday_wish($name, $dob) {
    $today = date('Y-m-d');
    $next_birthday = date('Y-m-d', strtotime($dob));
    
    if (strtotime($today) > strtotime($next_birthday)) {
        $next_birthday = date('Y-m-d', strtotime($dob . ' +1 year'));
    }
    
    $days_left = (strtotime($next_birthday) - strtotime($today)) / (60 * 60 * 24);
    $wish = "Hey $name! There are only $days_left days left until your birthday on $next_birthday. Don't forget to make your birthday plans!";
    
    return $wish;
}

// Replace 'your_name' and 'your_birthday' with your actual name and birthday
$your_name = 'your_name';
$your_birthday = '2000-01-01'; // Example: January 1, 2000

// Calculate the birthday wish
$wish = birthday_wish($your_name, $your_birthday);

// Print the birthday wish
echo $wish;
?>
