<?php
include('../includes/db_config.php');  
include('../includes/db_submissions.php');
include('../includes/header.php'); 
?>

    <div class="dashboard">
        <h1 id="main">Admin Dashboard</h1>
        <div class="container">
        <!-- Pending Submissions Table -->
        <h3>Pending Admission Requests</h3>
        <table class="table table-hovered table-striped table-bordered">
            <thead>
                <tr>
                    <th>Applicant Name</th>
                    <th>Submission Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($pending_submissions): ?>
                <?php foreach ($pending_submissions as $row): ?>
                    <tr>
                        <td><?php echo $row['applicant_first_name'] . ' ' . $row['applicant_last_name']; ?></td>

                        <td>
                            <?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="view_submission.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View</a> |
                            <a href="../approvals/approve.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Approve</a> |
                            <a href="../rejections/rejections.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Reject</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No pending submissions found.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>

        <!-- Approved Submissions Table -->
        <h3>Approved Admission Requests</h3>
        <table class="table table-hovered  table-striped table-bordered">
            <thead>
                <tr>
                    <th>Applicant Name</th>

                    <th>Submission Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($approved_submissions): ?>
                <?php foreach ($approved_submissions as $row): ?>
                    <tr>
                        <td><?php echo $row['applicant_first_name'] . ' ' . $row['applicant_last_name']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="view_submission.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No approved submissions found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <!-- Approved Submissions Table -->
        <h3>Rejected Admission Requests</h3>
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th>Applicant Name</th>
                    <th>Submission Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($rejected_submissions): ?>
                <?php foreach ($rejected_submissions as $row): ?>
                    <tr>
                        <td><?php echo $row['applicant_first_name'] . ' ' . $row['applicant_last_name']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                            <a href="view_submission.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" >View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No approved submissions found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
