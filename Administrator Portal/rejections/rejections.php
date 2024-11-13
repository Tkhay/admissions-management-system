<?php
include('../includes/db_config.php'); 


if (isset($_GET['id'])) {
    $submission_id = $_GET['id'];

    try {
        
        $update_sql = "UPDATE submissions SET submission_status = 'rejected' WHERE id = :submission_id";
        $stmt = $pdo->prepare($update_sql);
        $stmt->execute([':submission_id' => $submission_id]);

        
        header("Location: ../admin/admin_dashboard.php");
        exit;

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit;
    }
} else {
    echo "No submission ID provided.";
    exit;
}
