<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 4; 
        $width = 2; 
        $area = calculateArea($length, $width);
    ?>
    <b>The area of the rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is <?php echo $area; ?>.</b>
</body>
</html>
