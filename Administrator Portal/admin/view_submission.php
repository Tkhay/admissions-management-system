<?php
include('../includes/db_config.php'); 
include('../includes/query_submissions.php'); 
include('../includes/header.php'); 

?>

<body>
<div class="container">
    <div class="submission-details">
        <h1>Submission Details</h1>
        <?php if ($submission): ?>
            <table class="table table-sm table-striped" >
                <tr>
                    <th>Ward Name:</th>
                    <td><?php echo $submission['applicant_first_name'] . ' ' . $submission['applicant_last_name']; ?></td>
                </tr>

                <tr>
                    <th>Child School:</th>
                    <td><?php echo $submission['jhs_attended']; ?></td>
                </tr>
                <tr>
                    <th>English:</th>
                    <td><?php echo $submission['english_language']; ?></td>
                </tr>
                <tr>
                    <th>Mathematics:</th>
                    <td><?php echo $submission['mathematics']; ?></td>
                </tr>
                <tr>
                    <th>Social Studies:</th>
                    <td><?php echo $submission['social_studies']; ?></td>
                </tr>
                <tr>
                    <th>General Science:</th>
                    <td><?php echo $submission['general_science']; ?></td>
                </tr>
                <tr>
                    <th>RME:</th>
                    <td><?php echo $submission['RME']; ?></td>
                </tr>
                <tr>
                    <th>Career Technology:</th>
                    <td><?php echo $submission['career_technology']; ?></td>
                </tr>
                <tr>
                    <th>Creative Arts and Design:</th>
                    <td><?php echo $submission['creative_arts_and_design']; ?></td>
                </tr>
                <tr>
                    <th>Ghanaian Language:</th>
                    <td><?php echo $submission['ghanaian_language']; ?></td>
                </tr>
                <tr>
                    <th>French:</th>
                    <td><?php echo $submission['french']; ?></td>
                </tr>
                <tr>
                    <th>Arabic:</th>
                    <td><?php echo $submission['arabic']; ?></td>
                </tr>
                <tr>
                    <th>Computing:</th>
                    <td><?php echo $submission['computing']; ?></td>
                </tr>
                <tr>
                    <th>Credentials File:</th>
                    <td><a href="<?php echo $submission['credentials_file_path']; ?>" class= "link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover " target="_blank">Download</a></td>
                </tr>
                <tr>
                    <th>Submission Status:</th>
                    <td><?php echo $submission['submission_status']; ?></td>
                </tr>
                <tr>
                    <th>Submission Date:</th>
                    <td><?php echo $submission['created_at']; ?></td>
                </tr>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="admin_dashboard.php" class="btn btn-primary" type="button">Back to Dashboard</a>
            </div>
        <?php else: ?>
            <p>Submission not found.</p>
        <?php endif; ?>
    </div>
    </div>

</body>
</html>
