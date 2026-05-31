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

if (!isset($input['level']) || empty($input['level'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Level is required']);
    exit;
}

$level = intval($input['level']);
$user_id = $_SESSION['user_id'];

if ($level < 1 || $level > 3) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid level']);
    exit;
}

try {
    // Get all flags for this level
    $flags = $crud->getFlagsByLevel($level);
    
    if (empty($flags)) {
        echo json_encode(['status' => 'no_hints', 'message' => 'No flags available for this level']);
        exit;
    }

    // Get user's found flags for this level
    $user_found_flags = $crud->getUserFlagsByLevel($user_id, $level);
    $user_found_flag_ids = array_column($user_found_flags, 'flag_id');

    // Filter out already found flags
    $available_hints = array_filter($flags, function($flag) use ($user_found_flag_ids) {
        return !in_array($flag['flag_id'], $user_found_flag_ids);
    });

    if (empty($available_hints)) {
        echo json_encode(['status' => 'no_hints', 'message' => 'You have already found all available flags for this level']);
        exit;
    }

    // Get a random hint from available flags
    $random_hint = $available_hints[array_rand($available_hints)];

    if (!$random_hint['hint'] || empty(trim($random_hint['hint']))) {
        echo json_encode(['status' => 'no_hint', 'message' => 'No hint available for the selected flag']);
        exit;
    }

    echo json_encode([
        'status' => 'success',
        'hint' => $random_hint['hint'],
        'flag_id' => $random_hint['flag_id']
    ]);

} catch (Exception $e) {
    http_response_code(500);
    error_log($e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'An error occurred']);
}
?>
