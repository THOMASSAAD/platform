<?php
header('Content-Type: application/json');
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}

// Include database connection and crud class
include 'database/conn.php';

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['flag_value']) || empty($input['flag_value'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Flag value is required']);
    exit;
}

$flag_value = trim($input['flag_value']);
$user_id = $_SESSION['user_id'];

try {
    // Check if flag exists in the database
    $flag = $crud->getFlagByValue($flag_value);

    if (!$flag) {
        echo json_encode(['status' => 'incorrect', 'message' => 'The flag is incorrect']);
        exit;
    }

    // Flag exists, add it to user_flags table
    $result = $crud->addUserFlag($user_id, $flag['flag_id']);

    if ($result['status'] === 'success') {
        echo json_encode([
            'status' => 'success',
            'message' => 'Flag submitted successfully!',
            'flag_id' => $flag['flag_id'],
            'level' => $flag['level'],
            'hint' => $flag['hint']
        ]);
    } else if ($result['status'] === 'duplicate') {
        echo json_encode([
            'status' => 'duplicate',
            'message' => 'You have already found this flag'
        ]);
    } else {
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'An error occurred']);
    }
} catch (Exception $e) {
    http_response_code(500);
    error_log($e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'An error occurred: ' . $e->getMessage()]);
}

?>
