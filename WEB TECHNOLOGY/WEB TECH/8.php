<?php
// Step 1: Specify the file to store the visitor count
$counterFile = "counter.txt";

// Step 2: Check if the file exists
if (file_exists($counterFile)) {
    // If the file exists, read the current visitor count
    $visitorCount = file_get_contents($counterFile);

    // Increment the visitor count by 1
    $visitorCount++;
} else {
    // If the file does not exist, initialize the visitor count to 1
    $visitorCount = 1;
}

// Step 3: Write the updated visitor count back to the file
file_put_contents($counterFile, $visitorCount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
    <style>
        /* Styling for the page */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .counter-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .counter-box h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .counter-box p {
            font-size: 1.5rem;
            color: #555;
        }
    </style>
</head>
<body>

<div class="counter-box">
    <h1>Visitor Counter</h1>
    <!-- Display the visitor count dynamically -->
    <p>Total Visitors: <?php echo $visitorCount; ?></p>
</div>

</body>
</html>
