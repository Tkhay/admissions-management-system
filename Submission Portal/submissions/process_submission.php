<?php
include '../db_config.php';
include '../assets/header.php';
include '../assets/footer.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create new information fields if required
    $indexNumber = $_POST['indexNumber'];
    $applicantFirstName = $_POST['applicantFirstName'];
    $applicantLastName = $_POST['applicantLastName'];
    $otherNames = $_POST['otherNames'] ?? null;
    $school = $_POST['school'];

    // Update here with the Subjects
    $english_language = $_POST['english_language'] ?? 0;
    $mathematics = $_POST['mathematics'] ?? 0;
    $socialStudies = $_POST['socialStudies'] ?? 0;
    $generalScience = $_POST['generalScience'] ?? 0;
    $rme = $_POST['rme'] ?? 0;
    $careerTechnology = $_POST['careerTechnology'] ?? 0;
    $creativeArtsAndDesign = $_POST['creativeArtsAndDesign'] ?? 0;
    $ghanaianLanguage = $_POST['ghanaianLanguage'] ?? 0;
    $french = $_POST['french'] ?? 0;
    $arabic = $_POST['arabic'] ?? 0;
    $computing = $_POST['computing'] ?? 0;

    // Validate index number length, max 12
    if (strlen($indexNumber) !== 12) {
        die("Error: $indexNumber must be 12 digits");
    }


    $targetDir = "../uploads/";
    $fileName = basename($_FILES["credentialsFile"]["name"]);
    $targetFilePath = $targetDir . uniqid() . "_" . $fileName;

    if (move_uploaded_file($_FILES["credentialsFile"]["tmp_name"], $targetFilePath)) {
        
        $sql = "INSERT INTO submissions (
            applicant_first_name, applicant_last_name, other_names, child_index_number, jhs_attended, 
            english_language, mathematics, social_studies, general_science, RME, career_technology, creative_arts_and_design, ghanaian_language, french, arabic, computing,
            credentials_file_path, submission_status
        ) VALUES (
            :applicantFirstName, :applicantLastName, :otherNames, :indexNumber, :school, 
            :english_language, :mathematics, :socialStudies, :generalScience, :rme, 
            :careerTechnology, :creativeArtsAndDesign, :ghanaianLanguage, :french, :arabic, :computing,
            :filePath, 'Pending'
        )";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':indexNumber' => $indexNumber,
            ':applicantFirstName' => $applicantFirstName,
            ':applicantLastName' => $applicantLastName,
            ':otherNames' => $otherNames,
            ':school' => $school,
            ':english_language' => $english_language ?? 0,
            ':mathematics' => $mathematics ?? 0,
            ':socialStudies' => $socialStudies ?? 0,
            ':generalScience' => $generalScience ?? 0,
            ':rme' => $rme ?? 0,
            ':careerTechnology' => $careerTechnology ?? 0,
            ':creativeArtsAndDesign' => $creativeArtsAndDesign ?? 0,
            ':ghanaianLanguage' => $ghanaianLanguage ?? 0,
            ':french' => $french ?? 0,
            ':arabic' => $arabic ?? 0,
            ':computing' => $computing ?? 0,
            ':filePath' => $targetFilePath
        ]);

        // Working on getting this to be a popup
        echo "Sucessfully uploaded file.";
        exit();
    } else {
        echo "Failed to upload file.";
    }
}

