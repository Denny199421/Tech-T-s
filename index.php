<!DOCTYPE html>
<html>
<body>
<?php
function calculateTriangleArea($base, $height) {
    return ($base * $height) / 2;
}

// Example usage:
$base = 5;
$height = 10;
echo "The area of the triangle is: " . calculateTriangleArea($base, $height);
?>
</body>
</html>