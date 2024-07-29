<!DOCTYPE html>
<html>
<body>
<?php
function checkDayType($day) {
    // Convert the input day to lowercase to make the comparison case-insensitive
    $day = strtolower($day);

    // Determine if the day is a weekday or a weekend using a switch-case statement
    switch ($day) {
        case "monday":
        case "tuesday":
        case "wednesday":
        case "thursday":
        case "friday":
            return "It's a weekday.";
        case "saturday":
        case "sunday":
            return "It's a weekend.";
        default:
            return "Invalid day.";
    }
}

// Example usage:
echo checkDayType("Monday") . "\n"; // Output: It's a weekday.
echo checkDayType("saturday") . "\n"; // Output: It's a weekend.
echo checkDayType("Friday") . "\n"; // Output: It's a weekday.
echo checkDayType("SunDay") . "\n"; // Output: It's a weekend.
echo checkDayType("Funday") . "\n"; // Output: Invalid day.
?>
</body>
</html>






