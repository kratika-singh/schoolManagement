<?php
// Include the database connection file
include 'connection.php';

// Handle fetching events
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'fetch') {
    $result = $conn->query("SELECT * FROM events");

    $events = [];
    while ($row = $result->fetch_assoc()) {
        $events[] = [
            'title' => $row['title'],
            'start' => $row['start_date'],
            'end' => $row['end_date']
        ];
    }

    echo json_encode($events);
}
