<?php
	$specialty = $_GET['specialty'];
    $mysqli = new mysqli('localhost', 'root', '', 'selection_committee');
    // $sql = 'SELECT * FROM `enrollee` WHERE specialty="" ORDER BY `average_score` DESC';
    $sql = 'SELECT * FROM `enrollee` WHERE specialty="'.$specialty.'" ORDER BY `average_score` DESC';
    $result = $mysqli->query($sql);
    $enrollee = [];
    
    while ($row = $result->fetch_assoc()) {
        array_push($enrollee, $row);
    }

    echo json_encode($enrollee);
?>