<?php 

if (isset($_GET['id'])) {
    $submission_id = $_GET['id'];

 
    $sql = "SELECT * FROM submissions WHERE id = :id";
    
    try {
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $submission_id, PDO::PARAM_INT);
        $stmt->execute();

        
        $submission = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$submission) {
            echo "Submission not found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No submission ID provided.";
    exit;
}