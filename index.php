<?php
// Sample data for timetable (you can replace this with your dynamic data)
$timetable = [
    'Monday' => [
        '09:00 - 10:00' => 'Mathematics',
        '10:00 - 11:00' => 'Physics',
        '11:00 - 12:00' => 'Chemistry'
    ],
    'Tuesday' => [
        '09:00 - 10:00' => 'Biology',
        '10:00 - 11:00' => 'Geography',
        '11:00 - 12:00' => 'History'
    ],
    'Wednesday' => [
        '09:00 - 10:00' => 'English',
        '10:00 - 11:00' => 'Physical Education',
        '11:00 - 12:00' => 'Music'
    ],
    'Thursday' => [
        '09:00 - 10:00' => 'Art',
        '10:00 - 11:00' => 'Computer Science',
        '11:00 - 12:00' => 'Drama'
    ],
    'Friday' => [
        '09:00 - 10:00' => 'Mathematics',
        '10:00 - 11:00' => 'Physics',
        '11:00 - 12:00' => 'Chemistry'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f8f9fa;
    }

    .timetable {
        border-collapse: collapse;
        width: 100%;
        margin: 0 auto;
    }

    .timetable th,
    .timetable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .timetable th {
        background-color: #4CAF50;
        color: white;
    }

    .timetable td {
        background-color: #e2e3e5;
    }

    .timetable tr:hover {
        background-color: #ddd;
    }

    .timetable td.time-slot {
        background-color: #ffffff;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <h1>Weekly Timetable</h1>
    <table class="timetable">
        <thead>
            <tr>
                <th>Day / Time</th>
                <th>09:00 - 10:00</th>
                <th>10:00 - 11:00</th>
                <th>11:00 - 12:00</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timetable as $day => $slots): ?>
            <tr>
                <td class="time-slot"><?php echo $day; ?></td>
                <?php foreach (['09:00 - 10:00', '10:00 - 11:00', '11:00 - 12:00'] as $time): ?>
                <td><?php echo isset($slots[$time]) ? $slots[$time] : ''; ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>