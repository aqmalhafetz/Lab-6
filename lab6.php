<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name   = "AQMAL HAFETZ BIN AMRAN";
        $matric = "CI240101";
        $course = "BIS - SECURITY";
        $year   = "YEAR 3 SEMESTER 1";
        $address = "Persiaran Tun Dr. Ismail, 86400 Parit Raja, Batu Pahat, Johor, Malaysia";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>