<?php
// Database connection
$conn = new mysqli("localhost", "root", "Varsh@24", "student_db",4306);

// Fetch records
$result = $conn->query("SELECT * FROM students");
$students = [];
while ($row = $result->fetch_assoc()) $students[] = $row;

// Selection Sort Logic
for ($i = 0; $i < count($students) - 1; $i++) {
    $minIdx = $i;
    for ($j = $i + 1; $j < count($students); $j++) {
        if ($students[$j]['grade'] < $students[$minIdx]['grade']) {
            $minIdx = $j;
        }
    }
    $temp = $students[$i];
    $students[$i] = $students[$minIdx];
    $students[$minIdx] = $temp;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sorted Student Records</title>
  <style>
    body { font-family: Arial; margin: 20px; }
    table { width: 50%; border-collapse: collapse; margin: 20px auto; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    th { background-color: #f4f4f4; }
  </style>
</head>
<body>
  <h1>Sorted Student Records</h1>
  <table>
    <tr><th>ID</th><th>Name</th><th>Grade</th></tr>
    <?php foreach ($students as $s): ?>
      <tr><td><?= $s['id'] ?></td><td><?= $s['name'] ?></td><td><?= $s['grade'] ?></td></tr>
    <?php endforeach; ?>
  </table>
</body>
</html>