<?php include "../assets/header.php"; ?>

<h1 id="main_title">Admissions Portal</h1>

<div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #ffe6e6;">
    <div>
        <form id="submissionForm" action="process_submission.php" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-lg" style="width: 100%; max-width: 600px;">
            <h2>Personal Information</h2>

            <div class="row">
                <!-- Personal Information Fields -->
                <div class="col-md-6 form-group">
                    <label for="applicantFirstName">Applicant's First Name:</label>
                    <input type="text" name="applicantFirstName" id="applicantFirstName" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="applicantLastName">Applicant's Last Name:</label>
                    <input type="text" name="applicantLastName" id="applicantLastName" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="otherNames">Other Names (optional):</label>
                    <input type="text" name="otherNames" id="otherNames" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="school">Applicant's School (JHS):</label>
                    <input type="text" name="school" id="school" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="indexNumber">Applicant's Index Number:</label>
                    <input type="number" name="indexNumber" id="indexNumber" class="form-control" required>
                </div>
            </div>

            <h2>Grades</h2>

            <h3>Core Subjects</h3>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="english_language">English Language:</label>
                    <select name="english_language" class="form-control" id="english_language" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="mathematics">Mathematics:</label>
                    <select name="mathematics" class="form-control" id="mathematics" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="socialStudies">Social Studies:</label>
                    <select name="socialStudies" class="form-control" id="socialStudies" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="generalScience">General Science:</label>
                    <select name="generalScience" class="form-control" id="generalScience" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>

                </div>

            </div>

            <h3>Elective Subjects</h3>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="rme">Religious and Moral Education:</label>
                    <select name="rme" class="form-control" id="rme" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="careerTechnology">Career Technology:</label>
                    <select name="careerTechnology" class="form-control" id="careerTechnology" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="creativeArtsAndDesign">Creative Arts and Design:</label>
                    <select name="creativeArtsAndDesign" class="form-control" id="creativeArtsAndDesign" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <div class="col-md-6 form-group">
                    <label for="ghanaianLanguage">Ghanaian Language:</label>
                    <select name="ghanaianLanguage" class="form-control" id="ghanaianLanguage" required>
                        <option value="0" selected>Select Grade</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>

                <h3>Optional Subjects</h3>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="french">French:</label>
                        <select name="french" id="french" class="form-control">
                            <option value="0" selected>0 (Not selected)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="computing">Computing:</label>
                        <select name="computing" id="computing" class="form-control">
                            <option value="0" selected>0 (Not selected)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="arabic">Arabic:</label>
                        <select name="arabic" id="arabic" class="form-control">
                            <option value="0" selected>0 (Not selected)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="credentialsFile">Upload Credentials:</label>
                    <input type="file" name="credentialsFile" id="credentialsFile" class="form-control-file" accept=".pdf" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-4">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php include "../assets/footer.php"; ?>
