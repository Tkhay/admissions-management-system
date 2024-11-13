<?php 

$pending_sql = "SELECT * FROM submissions WHERE submission_status = 'Pending'";
$approved_sql = "SELECT * FROM submissions WHERE submission_status = 'Approved'";
$rejected_sql = "SELECT * FROM submissions WHERE submission_status = 'Rejected'";


try {
    
    $pending_stmt = $pdo->query($pending_sql);
    $approved_stmt = $pdo->query($approved_sql);
    $rejected_stmt = $pdo->query($rejected_sql);

    
    $pending_submissions = $pending_stmt->fetchAll(PDO::FETCH_ASSOC);
    $approved_submissions = $approved_stmt->fetchAll(PDO::FETCH_ASSOC);
    $rejected_submissions = $rejected_stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}


