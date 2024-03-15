<?php
//Require functions for actions
//require_once "includes/rockets.php";
/** @var $db mysqli */
require_once "includes/database.php";

function getRockets($db): array {
    $query = "SELECT id, name, max_payload, image_lowres FROM rockets";
    $result = mysqli_query($db, $query) or die('Error ' . mysqli_error($db) . 'with query' . $query);
    $rockets = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rockets[] = $row;
    }
    return $rockets;
}

function getRocketDetails($db, $id): array {
    $escapedId = mysqli_escape_string($db, $id);
    $query = "
    SELECT
        rockets.id,
        rockets.name,
        rockets.image_lowres,
        rockets.image_highres,
        rockets.description,
        rockets.origin,
        rockets.height,
        rockets.max_payload,
        rockets.total_launches,
        rockets.successful_launches,
        rockets.failed_launches,
        rockets.partially_failed_launches,
        status_names.name AS status,
        manufacturers.name AS manufacturer
    FROM rockets
        LEFT JOIN status_names ON status_names.id = rockets.status_id
        LEFT JOIN manufacturers ON manufacturers.id = rockets.manufacturer_id
    WHERE rockets.id = '$escapedId' LIMIT 1;";
    $results = mysqli_query($db, $query) or die ('Error ' . mysqli_error($db) . 'with query' . $query);
    return mysqli_fetch_assoc($results);
}

if (!isset($_GET['id'])) {
    $data = getRockets($db);
} else {
    $data = getRocketDetails($db, $_GET['id']);
}

//Set the header & output JSON so the client will know what to expect.
header("Content-Type: application/json");
echo json_encode($data);
exit;
