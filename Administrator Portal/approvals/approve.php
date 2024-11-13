<?php
include('../includes/db_config.php'); 


if (isset($_GET['id'])) {
    $submission_id = $_GET['id'];


    $sql = "UPDATE submissions SET submission_status = 'Approved' WHERE id = :id";

    try {
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $submission_id, PDO::PARAM_INT);

        
        if ($stmt->execute()) {
            echo "Submission approved successfully!";
        } else {
            echo "Error: Could not approve the submission.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
    header("Location: ../admin/admin_dashboard.php");
    exit();
} else {
    echo "No submission ID provided.";
}

