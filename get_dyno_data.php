<?php
header('Content-Type: application/json');
require_once 'koneksi.php';

$query = "SELECT rpm, hp_before, hp_after FROM dyno_results ORDER BY rpm ASC";
$result = mysqli_query($conn, $query);

$labels = [];
$before = [];
$after  = [];

while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['rpm'] . " RPM";
    $before[] = (float)$row['hp_before'];
    $after[]  = (float)$row['hp_after'];
}

echo json_encode([
    'labels' => $labels,
    'before' => $before,
    'after'  => $after
]);
?>