# Student Admissions Portal

This is a web-based admissions management system that allows administrators to review and manage admissions requests. The portal provides functionality to approve, reject, and view submissions, with a streamlined UI for easy tracking of submission statuses.

## Features

- **Admin Dashboard**: Overview of all pending and approved admission requests.
- **Status Update**: Approve or reject submissions with a simple click.
- **Submission Tracking**: Monitor admissions requests by status—Pending, Approved, or Rejected.
- **User Authentication**: Access control for the submission management dashboard.

## Table of Contents

- [Installation](https://www.notion.so/My-Github-Project-13dc3c4d39948085a359e923c690df2a?pvs=21)
- [Database Schema](https://www.notion.so/My-Github-Project-13dc3c4d39948085a359e923c690df2a?pvs=21)
- [Usage](https://www.notion.so/My-Github-Project-13dc3c4d39948085a359e923c690df2a?pvs=21)
- [Contributing](https://www.notion.so/My-Github-Project-13dc3c4d39948085a359e923c690df2a?pvs=21)
- [License](https://www.notion.so/My-Github-Project-13dc3c4d39948085a359e923c690df2a?pvs=21)

## Installation

1. **Clone the Repository**
    
    ```bash
    bash
    Copy code
    git clone https://github.com/your-username/protocol-admissions-portal.git
    cd protocol-admissions-portal
    
    ```
    
2. **Install Dependencies**
Install any necessary PHP dependencies (if using Composer, for example).
3. **Database Setup**
    - Create a MySQL database and import your database schema.
    - Update the database credentials in `includes/db_config.php`.
4. **Run Locally**
    - Start a local server using PHP or use an Apache server to test the application.
    - Access the application at `http://localhost/your-folder-name`.

## Database Schema

The table structure for admissions requests includes the following columns:

| Column | Type | Description |
| --- | --- | --- |
| `id` | INT | Unique ID for each submission |
| `applicant_first_name` | VARCHAR | First name of the applicant |
| `applicant_last_name` | VARCHAR | Last name of the applicant |
| `created_at` | DATETIME | Date and time of submission |
| `submission_status` | ENUM | Status of submission ('pending', 'approved', 'rejected') |
| Other fields as needed for applicant data... |  |  |

## Usage

1. **Admin Dashboard**:
    - View pending, approved, and rejected submissions.
    - Click "Approve" or "Reject" to update the status of each submission.
2. **Submission Status Tracking**:
    - Pending submissions show in the "Pending Admission Requests" section.
    - Approved and rejected submissions are displayed in their respective sections.

## Contributing

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Submit a pull request describing your changes.

## License

This project is licensed under the MIT License.
