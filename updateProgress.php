<?php
include_once 'dbConnection.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['materi']) && isset($data['nisn'])) {
    $nisn = $data['nisn'];
    $materi = $data['materi'];

    // Check if progress already exists
    $query = "SELECT * FROM progress WHERE nisn='$nisn' AND materi='$materi'";
    $result = mysqli_query($con, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // Update progress if it already exists
        $update_query = "UPDATE progress SET status='Selesai' WHERE nisn='$nisn' AND materi='$materi'";
        if (mysqli_query($con, $update_query)) {
            http_response_code(200);
            echo json_encode(["message" => "Progress updated successfully"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Failed to update progress"]);
        }
    } else {
        // Insert new progress record
        $insert_query = "INSERT INTO progress (nisn, materi, status) VALUES ('$nisn', '$materi', 'Selesai')";
        if (mysqli_query($con, $insert_query)) {
            http_response_code(200);
            echo json_encode(["message" => "Progress recorded successfully"]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Failed to record progress"]);
        }
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Invalid input"]);
}
?>
