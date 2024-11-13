document.getElementById("submissionForm").onsubmit = function(event) {
    const fileInput = document.getElementById("credentialsFile");
    const fileSize = fileInput.files[0].size;

    // Check if file size is below 2MB
    if (fileSize > 2 * 1024 * 1024) {
        alert("File size must be less than 2MB");
        event.preventDefault();
    }
};

