<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Lunch Meals</h1>
    <ul>
        <?php
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $meals = ["Sandwich", "Rice & Chicken", "Pasta", "Burger", "Steak", "Pizza", "Sushi"];

        for ($i = 0; $i < count($days); $i++) {
            if ($days[$i] === "Saturday" || $days[$i] === "Sunday") {
              echo "<li style='color:red; font-weight:bold'>{$days[$i]}: {$meals[$i]}</li>";
            } else {
              echo "<li style='color:green;'>{$days[$i]}: {$meals[$i]}</li>";
            }
          }
        ?>
    </ul>

</body>
</html>