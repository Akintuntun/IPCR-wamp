<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\IPCR-faculty.css">
    <title>IPCR</title>
</head>

<style>
    input{
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        text-align: center;
        border: none;
    }

    .top{

        border: none;
        border-bottom: 1px solid black;
        outline: none;
        text-align: center;

    }

    table, th, td, tr {
        border: 2px solid black;
        border-collapse: collapse;
    }

    p {
        margin-left: 35px;
        margin-right: 35px;
        text-indent: 30px;
        text-align: center;
    }
</style>

<body>

<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "Akisophiekingking";
    $database = "login_credentials";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the session variable is set
    if (!isset($_SESSION['faculty_username'])) {
        // Redirect to the login page if the session variable is not set
        header("Location: login-page.php");
        exit();
    }

    // Retrieve the username from the session variable
    $faculty_username = $_SESSION['faculty_username'];

    // Retrieve the ID where faculty_username matches
    $query = "SELECT ID FROM faculty_credentials WHERE username = '$faculty_username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the row and retrieve the ID value
        $row = mysqli_fetch_assoc($result);
        $ID = $row['ID'];

        // Use the ID value as needed
        echo "The ID for faculty_username '$faculty_username' is: $ID";
    } else {
        // No matching row found
        echo "No matching faculty_username found.";
    }


  // Retrieve form data
  $name = $_POST['name'];
  $academicRank = $_POST['academic_rank'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $conforme = $_POST['conforme'];
  $reviewedBy = $_POST['reviewed_by'];
  $approvedBy = $_POST['approved_by'];
  $discussedWith = $_POST['discussed_with'];
  $dateDiscussedWith = $_POST['date_discussed_with'];
  $assessedBy = $_POST['assessed_by'];
  $dateAssessedBy = $_POST['date_assessed_by'];
  $checkedBy = $_POST['checked_by'];
  $dateCheckedBy = $_POST['date_checked_by'];
  $finalRating = $_POST['final_rating'];
  $dateFinalRating = $_POST['date_final_rating'];

  $query = "UPDATE faculty_credentials 
              SET name = '$name', academic_rank = '$academicRank', semester = '$semester', year = '$year', conforme = '$conforme', reviewed_by = '$reviewedBy', approved_by = '$approvedBy', 
              discussed_with = '$discussedWith', date_discussed_with = '$dateDiscussedWith', assessed_by = '$assessedBy', date_assessed_by = '$dateAssessedBy',
               checked_by = '$checkedBy', date_checked_by = '$dateCheckedBy', final_rating = '$finalRating', date_final_rating = '$dateFinalRating' WHERE ID = $ID";



if ($conn->query($query) === TRUE) {
        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


      // Insert data into the ipcr_answers table
      $target = $_POST['target1'];
      $accomplished = $_POST['accomplished1'];
      $dateOfSubmissionCompletion = $_POST['submissionDate1'];
      $dateSubmittedCompleted = $_POST['completionDate1'];

      $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
              VALUES ('$ID', 'a) No. of Syllabus prepared instruction', '$target', '$accomplished', '$dateOfSubmissionCompletion', '$dateSubmittedCompleted')";

      if ($conn->query($sql) === TRUE) {
        
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  

    // Insert data into the ipcr_answers table
    $target2 = $_POST['target2'];
    $accomplished2 = $_POST['accomplished2'];
    $dateOfSubmissionCompletion2 = $_POST['submissionDate2'];
    $dateSubmittedCompleted2 = $_POST['completionDate2'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) No. of Course Guide instruction', '$target2', '$accomplished2', '$dateOfSubmissionCompletion2', '$dateSubmittedCompleted2')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target3 = $_POST['target3'];
    $accomplished3 = $_POST['accomplished3'];
    $dateOfSubmissionCompletion3 = $_POST['submissionDate3'];
    $dateSubmittedCompleted3 = $_POST['completionDate3'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c) No. of SLM instruction', '$target3', '$accomplished3', '$dateOfSubmissionCompletion3', '$dateSubmittedCompleted3')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target4 = $_POST['target4'];
    $accomplished4 = $_POST['accomplished4'];
    $dateOfSubmissionCompletion4 = $_POST['submissionDate4'];
    $dateSubmittedCompleted4 = $_POST['completionDate4'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'd) No. of subject areas with community immersion/involvement component 3 instruction', '$target4', '$accomplished4', '$dateOfSubmissionCompletion4', '$dateSubmittedCompleted4')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target5 = $_POST['target5'];
    $accomplished5 = $_POST['accomplished5'];
    $dateOfSubmissionCompletion5 = $_POST['submissionDate5'];
    $dateSubmittedCompleted5 = $_POST['completionDate5'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance Sheet instruction', '$target5', '$accomplished5', '$dateOfSubmissionCompletion5', '$dateSubmittedCompleted5')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target6 = $_POST['target6'];
    $accomplished6 = $_POST['accomplished6'];
    $dateOfSubmissionCompletion6 = $_POST['submissionDate6'];
    $dateSubmittedCompleted6 = $_POST['completionDate6'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) Class Records instruction', '$target6', '$accomplished6', '$dateOfSubmissionCompletion6', '$dateSubmittedCompleted6')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target7 = $_POST['target7'];
    $accomplished7 = $_POST['accomplished7'];
    $dateOfSubmissionCompletion7 = $_POST['submissionDate7'];
    $dateSubmittedCompleted7 = $_POST['completionDate7'];
  
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Evaluation of Teaching Effectiveness (CQA-SF-012) instruction', '$target7', '$accomplished7', '$dateOfSubmissionCompletion7', '$dateSubmittedCompleted7')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target8 = $_POST['target8'];
    $accomplished8 = $_POST['accomplished8'];
    $dateOfSubmissionCompletion8 = $_POST['submissionDate8'];
    $dateSubmittedCompleted8 = $_POST['completionDate8'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) Class Observation (CQA-SF-012) instruction', '$target8', '$accomplished8', '$dateOfSubmissionCompletion8', '$dateSubmittedCompleted8')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target9 = $_POST['target9'];
    $accomplished9 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion9 = $_POST['submissionDate9'];
    $dateSubmittedCompleted9 = $_POST['completionDate9'];
    
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a.1) TOS/Rubrics(Mid Term) instruction', '$target9', '$accomplished9', '$dateOfSubmissionCompletion9', '$dateSubmittedCompleted9')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target10 = $_POST['target10'];
    $accomplished10 = $_POST['accomplished10'];
    $dateOfSubmissionCompletion10 = $_POST['submissionDate10'];
    $dateSubmittedCompleted10 = $_POST['completionDate10'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a.2) TOS/Rubrics(Final Term) instruction', '$target10', '$accomplished10', '$dateOfSubmissionCompletion10', '$dateSubmittedCompleted10')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target11 = $_POST['target11'];
    $accomplished11 = $_POST['accomplished11'];
    $dateOfSubmissionCompletion11 = $_POST['submissionDate11'];
    $dateSubmittedCompleted11 = $_POST['completionDate11'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
      VALUES ('$ID', 'b.1) Test questions(term exams)/Performance\\'s based activities (Mid Term) instruction', '$target11', '$accomplished11', '$dateOfSubmissionCompletion11', '$dateSubmittedCompleted11')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target12 = $_POST['target12'];
    $accomplished12 = $_POST['accomplished12'];
    $dateOfSubmissionCompletion12 = $_POST['submissionDate12'];
    $dateSubmittedCompleted12 = $_POST['completionDate12'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
        VALUES ('$ID', 'b.2) Test questions(term exams)/Performance\\'s based activities (Final Term) instruction', '$target12', '$accomplished12', '$dateOfSubmissionCompletion12', '$dateSubmittedCompleted12')";


    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target13 = $_POST['target13'];
    $accomplished13 = $_POST['accomplished13'];
    $dateOfSubmissionCompletion13 = $_POST['submissionDate13'];
    $dateSubmittedCompleted13 = $_POST['completionDate13'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c.1) Answer Keys (Mid Term) instruction', '$target13', '$accomplished13', '$dateOfSubmissionCompletion13', '$dateSubmittedCompleted13')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target14 = $_POST['target14'];
    $accomplished14 = $_POST['accomplished14'];
    $dateOfSubmissionCompletion14 = $_POST['submissionDate14'];
    $dateSubmittedCompleted14 = $_POST['completionDate14'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c.2) Answer Keys (Final Term) instruction', '$target14', '$accomplished14', '$dateOfSubmissionCompletion14', '$dateSubmittedCompleted14')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target15 = $_POST['target15'];
    $accomplished15 = $_POST['accomplished15'];
    $dateOfSubmissionCompletion15 = $_POST['submissionDate15'];
    $dateSubmittedCompleted15 = $_POST['completionDate15'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) No. of grading sheets submitted and encoded instruction', '$target15', '$accomplished15', '$dateOfSubmissionCompletion15', '$dateSubmittedCompleted15')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target16 = $_POST['target16'];
    $accomplished16 = $_POST['accomplished16'];
    $dateOfSubmissionCompletion16 = $_POST['submissionDate16'];
    $dateSubmittedCompleted16 = $_POST['completionDate16'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) No. of faculty & students seek advices (LSPU-ACAD-011) instruction', '$target16', '$accomplished16', '$dateOfSubmissionCompletion16', '$dateSubmittedCompleted16')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target17 = $_POST['target17'];
    $accomplished17 = $_POST['accomplished17'];
    $dateOfSubmissionCompletion17 = $_POST['submissionDate17'];
    $dateSubmittedCompleted17 = $_POST['completionDate17'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Accomplishment Report instruction', '$target17', '$accomplished17', '$dateOfSubmissionCompletion17', '$dateSubmittedCompleted17')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target18 = $_POST['target18'];
    $accomplished18 = $_POST['accomplished18'];
    $dateOfSubmissionCompletion18 = $_POST['submissionDate18'];
    $dateSubmittedCompleted18 = $_POST['completionDate18'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Research proposal submitted/Activity conducted research', '$target18', '$accomplished18', '$dateOfSubmissionCompletion18', '$dateSubmittedCompleted18')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target19 = $_POST['target19'];
    $accomplished19 = $_POST['accomplished19'];
    $dateOfSubmissionCompletion19 = $_POST['submissionDate19'];
    $dateSubmittedCompleted19 = $_POST['completionDate19'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) Research implemented and/or Completed within the timeframe research', '$target19', '$accomplished19', '$dateOfSubmissionCompletion19', '$dateSubmittedCompleted19')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target20 = $_POST['target20'];
    $accomplished20 = $_POST['accomplished20'];
    $dateOfSubmissionCompletion20 = $_POST['submissionDate20'];
    $dateSubmittedCompleted20 = $_POST['completionDate20'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c) Research Presenterd in Regional/National/International Comferences research', '$target9', '$accomplished20', '$dateOfSubmissionCompletion20', '$dateSubmittedCompleted20')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $target21 = $_POST['target21'];
    $accomplished21 = $_POST['accomplished21'];
    $dateOfSubmissionCompletion21 = $_POST['submissionDate21'];
    $dateSubmittedCompleted21 = $_POST['completionDate21'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'd) Research Published in Peer-reviewed Journals research', '$target21', '$accomplished21', '$dateOfSubmissionCompletion21', '$dateSubmittedCompleted21')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target22 = $_POST['target22'];
    $accomplished22 = $_POST['accomplished22'];
    $dateOfSubmissionCompletion22 = $_POST['submissionDate22'];
    $dateSubmittedCompleted22 = $_POST['completionDate22'];
  
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'e) Filed/Published/Approved Intellectual Property Right research', '$target22', '$accomplished22', '$dateOfSubmissionCompletion22', '$dateSubmittedCompleted22')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target23 = $_POST['target23'];
    $accomplished23 = $_POST['accomplished23'];
    $dateOfSubmissionCompletion23 = $_POST['submissionDate23'];
    $dateSubmittedCompleted23 = $_POST['completionDate23'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'f) Research Utilized/Deployed through Commercialization/Extension/Policy research', '$target23', '$accomplished23', '$dateOfSubmissionCompletion23', '$dateSubmittedCompleted23')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target24 = $_POST['target24'];
    $accomplished24 = $_POST['accomplished24'];
    $dateOfSubmissionCompletion24 = $_POST['submissionDate24'];
    $dateSubmittedCompleted24 = $_POST['completionDate24'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'g) Number of cirtation in journal/books research', '$target24', '$accomplished24', '$dateOfSubmissionCompletion24', '$dateSubmittedCompleted24')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target25 = $_POST['target25'];
    $accomplished25 = $_POST['accomplished25'];
    $dateOfSubmissionCompletion25 = $_POST['submissionDate25'];
    $dateSubmittedCompleted25 = $_POST['completionDate25'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Extension proposal submiitted/activity conducted extension', '$target25', '$accomplished25', '$dateOfSubmissionCompletion25', '$dateSubmittedCompleted25')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target26 = $_POST['target26'];
    $accomplished26 = $_POST['accomplished26'];
    $dateOfSubmissionCompletion26 = $_POST['submissionDate26'];
    $dateSubmittedCompleted26 = $_POST['completionDate26'];
  
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) EPersons trained/provided with technical advise extension', '$target26', '$accomplished26', '$dateOfSubmissionCompletion26', '$dateSubmittedCompleted26')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target27 = $_POST['target27'];
    $accomplished27 = $_POST['accomplished27'];
    $dateOfSubmissionCompletion27 = $_POST['submissionDate27'];
    $dateSubmittedCompleted27 = $_POST['completionDate27'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c) Persons who avail the service who rated the service as good or better extension', '$target27', '$accomplished27', '$dateOfSubmissionCompletion27', '$dateSubmittedCompleted27')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target28 = $_POST['target28'];
    $accomplished28 = $_POST['accomplished28'];
    $dateOfSubmissionCompletion28 = $_POST['submissionDate28'];
    $dateSubmittedCompleted28 = $_POST['completionDate28'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'd) Persons given training or advisory who rated the timeliness of service delivery as good or better extension', '$target28', '$accomplished28', '$dateOfSubmissionCompletion28', '$dateSubmittedCompleted28')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target29 = $_POST['target29'];
    $accomplished29 = $_POST['accomplished29'];
    $dateOfSubmissionCompletion29 = $_POST['submissionDate29'];
    $dateSubmittedCompleted29 = $_POST['completionDate29'];
  
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'e) Technical advice responded within 3 days upon request extension', '$target29', '$accomplished29', '$dateOfSubmissionCompletion29', '$dateSubmittedCompleted29')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target30 = $_POST['target30'];
    $accomplished30 = $_POST['accomplished30'];
    $dateOfSubmissionCompletion30 = $_POST['submissionDate30'];
    $dateSubmittedCompleted30 = $_POST['completionDate30'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Accomplishment Report support', '$target30', '$accomplished30', '$dateOfSubmissionCompletion30', '$dateSubmittedCompleted30')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target31 = $_POST['target31'];
    $accomplished31 = $_POST['accomplished31'];
    $dateOfSubmissionCompletion31 = $_POST['submissionDate31'];
    $dateSubmittedCompleted31 = $_POST['completionDate31'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance raising support', '$target31', '$accomplished31', '$dateOfSubmissionCompletion31', '$dateSubmittedCompleted31')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target32 = $_POST['target32'];
    $accomplished32 = $_POST['accomplished32'];
    $dateOfSubmissionCompletion32 = $_POST['submissionDate32'];
    $dateSubmittedCompleted32 = $_POST['completionDate32'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance lowering support', '$target32', '$accomplished32', '$dateOfSubmissionCompletion32', '$dateSubmittedCompleted32')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target33 = $_POST['target33'];
    $accomplished33 = $_POST['accomplished33'];
    $dateOfSubmissionCompletion33 = $_POST['submissionDate33'];
    $dateSubmittedCompleted33 = $_POST['completionDate33'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof wellness', '$target9', '$accomplished33', '$dateOfSubmissionCompletion33', '$dateSubmittedCompleted33')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target34 = $_POST['target34'];
    $accomplished34 = $_POST['accomplished34'];
    $dateOfSubmissionCompletion34 = $_POST['submissionDate34'];
    $dateSubmittedCompleted34 = $_POST['completionDate34'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof allied', '$target34', '$accomplished34', '$dateOfSubmissionCompletion34', '$dateSubmittedCompleted34')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target35 = $_POST['target35'];
    $accomplished35 = $_POST['accomplished35'];
    $dateOfSubmissionCompletion35 = $_POST['submissionDate35'];
    $dateSubmittedCompleted35 = $_POST['completionDate35'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Training/Seminar/Conference certificate of attendance/participation support', '$target35', '$accomplished35', '$dateOfSubmissionCompletion35', '$dateSubmittedCompleted35')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target36 = $_POST['target36'];
    $accomplished36 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion36 = $_POST['submissionDate36'];
    $dateSubmittedCompleted36 = $_POST['completionDate36'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance meeting', '$target36', '$accomplished36', '$dateOfSubmissionCompletion36', '$dateSubmittedCompleted36')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target37 = $_POST['target37'];
    $accomplished37 = $_POST['accomplished37'];
    $dateOfSubmissionCompletion37 = $_POST['submissionDate37'];
    $dateSubmittedCompleted37 = $_POST['completionDate37'];
    
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance related', '$target37', '$accomplished37', '$dateOfSubmissionCompletion37', '$dateSubmittedCompleted37')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target38 = $_POST['target38'];
    $accomplished38 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion38 = $_POST['submissionDate38'];
    $dateSubmittedCompleted38 = $_POST['completionDate38'];
    
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof spiritual', '$target38', '$accomplished38', '$dateOfSubmissionCompletion38', '$dateSubmittedCompleted38')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target39 = $_POST['target39'];
    $accomplished39 = $_POST['accomplished39'];
    $dateOfSubmissionCompletion39 = $_POST['submissionDate39'];
    $dateSubmittedCompleted39 = $_POST['completionDate39'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'a) Prepare.... administrative', '$target39', '$accomplished39', '$dateOfSubmissionCompletion39', '$dateSubmittedCompleted39')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target40 = $_POST['target40'];
    $accomplished40 = $_POST['accomplished40'];
    $dateOfSubmissionCompletion40 = $_POST['submissionDate40'];
    $dateSubmittedCompleted40 = $_POST['completionDate40'];
    
    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'b) Submit.... administrative', '$target40', '$accomplished40', '$dateOfSubmissionCompletion40', '$dateSubmittedCompleted40')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target41 = $_POST['target41'];
    $accomplished41 = $_POST['accomplished41'];
    $dateOfSubmissionCompletion41 = $_POST['submissionDate41'];
    $dateSubmittedCompleted41 = $_POST['completionDate41'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'c) Increase.... administrative', '$target41', '$accomplished41', '$dateOfSubmissionCompletion41', '$dateSubmittedCompleted41')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target42 = $_POST['target42'];
    $accomplished42 = $_POST['accomplished42'];
    $dateOfSubmissionCompletion42 = $_POST['submissionDate42'];
    $dateSubmittedCompleted42 = $_POST['completionDate42'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'd) .... administrative', '$target42', '$accomplished42', '$dateOfSubmissionCompletion42', '$dateSubmittedCompleted42')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target43 = $_POST['target43'];
    $accomplished43 = $_POST['accomplished43'];
    $dateOfSubmissionCompletion43 = $_POST['submissionDate43'];
    $dateSubmittedCompleted43 = $_POST['completionDate43'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed)
            VALUES ('$ID', 'e) .... administrative', '$target43', '$accomplished43', '$dateOfSubmissionCompletion43', '$dateSubmittedCompleted43')";

    if ($conn->query($sql) === TRUE) {
      
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    

  $conn->close();
}

?>

<h3 style="text-align: center;">INDIVIDUAL PERFORMANCE COMMITMENT and REVIEW (IPCR)</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
        I, <b><input type="text" id="name-input" name="name" placeholder="NAME" class="top">,
        <input type="text" id="academic_rank" name="academic_rank" placeholder="ACADEMIC Rank" class="top"></b> of the Laguna State
        Polytechnic University, commit to deliver and agree to be rated on the attainment of the following in accordance
        with the indicated measures for the <input type="text" id="semester" name="semester" placeholder="SEM"
                                                    style="width: 50px;" class="top"> Semester of the academic year <input
                type="text" id="year" name="year" placeholder="YEAR" style="width: 100px;" class="top">.
    </p>
    <table style="width:100%;">
        <tr>
            <th id="name">Conforme:<br><br><input type="text" name="conforme"  requiredclass="top" ></th>
            <th colspan="4" id="assoc_dean">Reviewed By:<br><br><input type="text" name="reviewed_by" required class="top"></th>
            <th colspan="5" id="director">Approved By:<br><br><input type="text" name="approved_by"  required class="top"></th>
        </tr>
        <tr>
            <td style="text-align:center;">RATEE</td>
            <td colspan="4" style="text-align:center;">Dean/Assoc.Dean</td>
            <td colspan="5" style="text-align:center;">Campus Director</td>
        </tr>
        <tr style="height:50px; text-align: center;">
          <td rowspan="2" style="background-color: rgb(211,211,211);">Performance Indication</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">Target</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Accomplished</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Date of Submission/Completion (Deadline)</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Date Submitted/Completed</td>
          <td colspan="4" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Rating</td>
          <td rowspan="2" style="background-color: rgb(211,211,211); padding-left:10px; padding-right:10px;">Remarks</td>
        </tr>
        <tr>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">QTY</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">QL/E</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px; text-align:center;">T</td>
          <td style="background-color: rgb(211,211,211); padding-left:20px; padding-right:20px;">A</td>
        </tr>
        <tr style="text-align:left; background-color: #f0ed61;">
          <td colspan="10">INSTRUCTION</td>
        </tr>
        <tr>
          <td colspan="10"><b>
            1. Plan and prepare instructional materials to enhance instructions.
          </b></td>
        </tr>
        <tr>
          <td>
            a) No. of Syllabus prepared
          </td> 
            <td><input type="number" name="target1" required></td>
            <td><input type="number" name="accomplished1" required></td>
            <td><input type="date" name="submissionDate1" required></td>
            <td><input type="date" name="completionDate1" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            b) No. of Course Guide
          </td>
            <td><input type="number" name="target2" required></td>
            <td><input type="number" name="accomplished2" required></td>
            <td><input type="date" name="submissionDate2" required></td>
            <td><input type="date" name="completionDate2" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            c) No. of SLM
          </td>
            <td><input type="number" name="target3" required></td>
            <td><input type="number" name="accomplished3" required></td>
            <td><input type="date" name="submissionDate3" required></td>
            <td><input type="date" name="completionDate3" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            d) No. of subject areas with community immersion/involvement component
        3</td>
            <td><input type="number" name="target4" required></td>
            <td><input type="number" name="accomplished4" required></td>
            <td><input type="date" name="submissionDate4" required></td>
            <td><input type="date" name="completionDate4" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            2. Organizes Classroom instructions.
          </b></td>
        <tr>
          <td>
            a) Attendance Sheet
          </td>
            <td><input type="number" name="target5" required></td>
            <td><input type="number" name="accomplished5" required></td>
            <td><input type="date" name="submissionDate5" required></td>
            <td><input type="date" name="completionDate5" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            b) Class Records
          </td>
            <td><input type="number" name="target6" required></td>
            <td><input type="number" name="accomplished6" required></td>
            <td><input type="date" name="submissionDate6" required></td>
            <td><input type="date" name="completionDate6" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            3. Teaching Effectiveness.
          </b></td>
        <tr>
          <td>
            a) Evaluation of Teaching Effectiveness (CQA-SF-012)
          </td>
            <td><input type="number" name="target7" required></td>
            <td><input type="number" name="accomplished7" required></td>
            <td><input type="date" name="submissionDate7" required></td>
            <td><input type="date" name="completionDate7" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>  
          <td>
            b) Class Observation (CQA-SF-012)
          </td>
            <td><input type="number" name="target8" required></td>
            <td><input type="number" name="accomplished8" required></td>
            <td><input type="date" name="submissionDate8" required></td>
            <td><input type="date" name="completionDate8" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            4. Prepare and Check Summative/Evaluative/Formative Tests.
          </b></td>
        <tr>
          <td>
            a.1) TOS/Rubrics(Mid Term)
          </td>
            <td><input type="number" name="target9" required></td>
            <td><input type="number" name="accomplished9" required></td>
            <td><input type="date" name="submissionDate9" required></td>
            <td><input type="date" name="completionDate9" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            a.2) TOS/Rubrics(Final Term)
          </td>
            <td><input type="number" name="target10" required></td>
            <td><input type="number" name="accomplished10" required></td>
            <td><input type="date" name="submissionDate10" required></td>
            <td><input type="date" name="completionDate10" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            b.1) Test questions(term exams)/Performance's based activities (Mid Term)
          </td>
            <td><input type="number" name="target11" required></td>
            <td><input type="number" name="accomplished11" required></td>
            <td><input type="date" name="submissionDate11" required></td>
            <td><input type="date" name="completionDate11" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            b.2) Test questions(term exams)/Performance's based activities (Final Term)
          </td>
            <td><input type="number" name="target12" required></td>
            <td><input type="number" name="accomplished12" required></td>
            <td><input type="date" name="submissionDate12" required></td>
            <td><input type="date" name="completionDate12" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            c.1) Answer Keys (Mid Term)
          </td>
            <td><input type="number" name="target13" required></td>
            <td><input type="number" name="accomplished13" required></td>
            <td><input type="date" name="submissionDate13" required></td>
            <td><input type="date" name="completionDate13" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            c.2) Answer Keys (Final Term)
          </td>
            <td><input type="number" name="target14" required></td>
            <td><input type="number" name="accomplished14" required></td>
            <td><input type="date" name="submissionDate14" required></td>
            <td><input type="date" name="completionDate14" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            5. Compute and Evaluate Grades.
          </b></td>
        <tr>
          <td>
            a) No. of grading sheets submitted and encoded
          </td>
            <td><input type="number" name="target15" required></td>
            <td><input type="number" name="accomplished15" required></td>
            <td><input type="date" name="submissionDate15" required></td>
            <td><input type="date" name="completionDate15" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            6. Consultation services to faculty and students.
          </b></td>
        <tr>
          <td>
            a) No. of faculty & students seek advices (LSPU-ACAD-011)
          </td>
            <td><input type="number" name="target16" required></td>
            <td><input type="number" name="accomplished16" required></td>
            <td><input type="date" name="submissionDate16" required></td>
            <td><input type="date" name="completionDate16" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            7. Prepare accomplishment report.
          </b></td>
        <tr>
          <td>
            a) Accomplishment Report
          </td>
            <td><input type="number" name="target17" required></td>
            <td><input type="number" name="accomplished17" required></td>
            <td><input type="date" name="submissionDate17" required></td>
            <td><input type="date" name="completionDate17" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr style="text-align:left; background-color: #f0ed61;">
          <td colspan="10">RESEARCH</td>
        </tr>
        <tr>
          <td colspan="10"><b>
            8. Research program/projects/studies.
          </b></td>
        <tr>
          <td>
            a) Research proposal submitted/Activity conducted
          </td>
            <td><input type="number" name="target18" required></td>
            <td><input type="number" name="accomplished18" required></td>
            <td><input type="date" name="submissionDate18" required></td>
            <td><input type="date" name="completionDate18" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td>
            b) Research implemented and/or Completed within the timeframe
          </td>
            <td><input type="number" name="target19" required></td>
            <td><input type="number" name="accomplished19" required></td>
            <td><input type="date" name="submissionDate19" required></td>
            <td><input type="date" name="completionDate19" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <td>
          c) Research Presenterd in Regional/National/International Comferences
        </td>
            <td><input type="number" name="target20" required></td>
            <td><input type="number" name="accomplished20" required></td>
            <td><input type="date" name="submissionDate20" required></td>
            <td><input type="date" name="completionDate20" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
      </tr>
      <td>
      d) Research Published in Peer-reviewed Journals
    </td>
            <td><input type="number" name="target21" required></td>
            <td><input type="number" name="accomplished21" required></td>
            <td><input type="date" name="submissionDate21" required></td>
            <td><input type="date" name="completionDate21" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
  </tr>
  <td>
    e) Filed/Published/Approved Intellectual Property Right
  </td>
            <td><input type="number" name="target22" required></td>
            <td><input type="number" name="accomplished22" required></td>
            <td><input type="date" name="submissionDate22" required></td>
            <td><input type="date" name="completionDate22" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  f) Research Utilized/Deployed through Commercialization/Extension/Policy
</td>
            <td><input type="number" name="target23" required></td>
            <td><input type="number" name="accomplished23" required></td>
            <td><input type="date" name="submissionDate23" required></td>
            <td><input type="date" name="completionDate23" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  g) Number of cirtation in journal/books
</td>
            <td><input type="number" name="target24" required></td>
            <td><input type="number" name="accomplished24" required></td>
            <td><input type="date" name="submissionDate24" required></td>
            <td><input type="date" name="completionDate24" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>

<tr style="text-align:left; background-color: #f0ed61;">
  <td colspan="10">EXTENSION</td>
</tr>
<tr>
  <td colspan="10"><b>
    9. Extension projects.
  </b></td>
<tr>
  <td>
    a) Extension proposal submiitted/activity conducted
  </td>
            <td><input type="number" name="target25" required></td>
            <td><input type="number" name="accomplished25" required></td>
            <td><input type="date" name="submissionDate25" required></td>
            <td><input type="date" name="completionDate25" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  b) EPersons trained/provided with technical advise
</td>
            <td><input type="number" name="target26" required></td>
            <td><input type="number" name="accomplished26" required></td>
            <td><input type="date" name="submissionDate26" required></td>
            <td><input type="date" name="completionDate26" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  c) Persons who avail the service who rated the service as good or better
</td>
            <td><input type="number" name="target27" required></td>
            <td><input type="number" name="accomplished27" required></td>
            <td><input type="date" name="submissionDate27" required></td>
            <td><input type="date" name="completionDate27" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  d) Persons given training or advisory who rated the timeliness of service delivery as good or better
</td>
            <td><input type="number" name="target28" required></td>
            <td><input type="number" name="accomplished28" required></td>
            <td><input type="date" name="submissionDate28" required></td>
            <td><input type="date" name="completionDate28" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<td>
  e) Technical advice responded within 3 days upon request
</td>
            <td><input type="number" name="target29" required></td>
            <td><input type="number" name="accomplished29" required></td>
            <td><input type="date" name="submissionDate29" required></td>
            <td><input type="date" name="completionDate29" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
</tr>
<tr style="text-align:left; background-color: #f0ed61;">
  <td colspan="10">SUPPORT FUNCTION</td>
</tr>
<tr>
  <td colspan="10"><b>
    10. Perform Officially-Deligated Assignments
  </b></td>
</tr>
<tr>
  <td>
    a) Accomplishment Report
  </td>
            <td><input type="number" name="target30" required></td>
            <td><input type="number" name="accomplished30" required></td>
            <td><input type="date" name="submissionDate30" required></td>
            <td><input type="date" name="completionDate30" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
  </tr>
  <tr>
    <td colspan="10"><b>
      11. Perticipated in the Flag Raising Ceremony
    </b></td>
  </tr>
  <tr>
    <td>
      a) Attendance
    </td>
            <td><input type="number" name="target31" required></td>
            <td><input type="number" name="accomplished31" required></td>
            <td><input type="date" name="submissionDate31" required></td>
            <td><input type="date" name="completionDate31" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
    </tr>
    <tr>
      <td colspan="10"><b>
        12. Participate in the Flag lowering
      </b></td>
    </tr>
    <tr>
      <td>
        a) Attendance
      </td>
            <td><input type="number" name="target32" required></td>
            <td><input type="number" name="accomplished32" required></td>
            <td><input type="date" name="submissionDate32" required></td>
            <td><input type="date" name="completionDate32" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
      </tr>
      <tr>
        <td colspan="10"><b>
          13. Participate in the health and wellness program
        </b></td>
      </tr>
      <tr>
        <td>
          a) Attendance sheet/Program of activities/other document as proof
        </td>
            <td><input type="number" name="target33" required></td>
            <td><input type="number" name="accomplished33" required></td>
            <td><input type="date" name="submissionDate33" required></td>
            <td><input type="date" name="completionDate33" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            14. Perticipated in school celebration and other allied activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance sheet/Program of activities/other document as proof
          </td>
            <td><input type="number" name="target34" required></td>
            <td><input type="number" name="accomplished34" required></td>
            <td><input type="date" name="submissionDate34" required></td>
            <td><input type="date" name="completionDate34" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          15. Attend training/conferences/seminars
          </b></td>
        </tr>
        <tr>
          <td>
            a) Training/Seminar/Conference certificate of attendance/participation
          </td>
            <td><input type="number" name="target35" required></td>
            <td><input type="number" name="accomplished35" required></td>
            <td><input type="date" name="submissionDate35" required></td>
            <td><input type="date" name="completionDate35" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          16. Attend Faculty Meeting
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance
          </td>
            <td><input type="number" name="target36" required></td>
            <td><input type="number" name="accomplished36" required></td>
            <td><input type="date" name="submissionDate36" required></td>
            <td><input type="date" name="completionDate36" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          17. Involvement in accrelitation/ISO and other related activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance
          </td>
            <td><input type="number" name="target37" required></td>
            <td><input type="number" name="accomplished37" required></td>
            <td><input type="date" name="submissionDate37" required></td>
            <td><input type="date" name="completionDate37" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="10"><b>
          18. Perticipate in the spiritual activities
          </b></td>
        </tr>
        <tr>
          <td>
            a) Attendance sheet/Program of activities/other document as proof
          </td>
            <td><input type="number" name="target38" required></td>
            <td><input type="number" name="accomplished38" required></td>
            <td><input type="date" name="submissionDate38" required></td>
            <td><input type="date" name="completionDate38" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr style="text-align:left; background-color: #f0ed61;">
            <td colspan="10">ADMINISTRATIVE FUNCTIONS</td>
          </tr>
          <tr>
            <td colspan="10"><b>
          19. Perform Administrative Designation Funtions
          </b></td>
        </tr>
        <tr>
          <td>
            a) Prepare....
          </td>
            <td><input type="numbert" name="target39" required></td>
            <td><input type="number" name="accomplished39" required></td>
            <td><input type="date" name="submissionDate39" required></td>
            <td><input type="date" name="completionDate39" required></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>
              b) Submit....
            </td>
              <td><input type="number" name="target40" required></td>
              <td><input type="number" name="accomplished40" required></td>
              <td><input type="date" name="submissionDate40" required></td>
              <td><input type="date" name="completionDate40" required></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                c) Increase....
              </td>
              <td><input type="number" name="target41" required></td>
              <td><input type="number" name="accomplished41" required></td>
              <td><input type="date" name="submissionDate41" required></td>
              <td><input type="date" name="completionDate41" required></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
                <td>
                  d) ....
                </td>
                <td><input type="number" name="target42" required></td>
                <td><input type="number" name="accomplished42" required></td>
                <td><input type="date" name="submissionDate42" required></td>
                <td><input type="date" name="completionDate42" required></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                  <td>
                    e) ....
                  </td>
                  <td><input type="number" name="target43" required></td>
                  <td><input type="number" name="accomplished43" required></td>
                  <td><input type="date" name="submissionDate43" required></td>
                  <td><input type="date" name="completionDate43" required></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  </tr>
                
                  <tr>
                    <td colspan="7" rowspan = "2"><b>
                  Comments and Recommendation for Development Purposes
                  </b><br><br><br><br>Rating scale<br>5 - Outstanding<br>4 - Very Satisfactoy<br>3 - Satisfactory<br>2 - Unsatisfactory<br>1 - Poor 
                    </td>
                    <td style = "padding-right:20px; vertical-align:top; text-align:left;">Numerical Rating: <br><br><br><br></td>
                    <td style = "padding-left:40px; padding-right:40px; vertical-align:top; text-align:center;" colspan="2">Adjectival Rating:<br><br><br><br></td>
                  </tr>
                  <tr style="height:100px;">
                    <td></td>
                  </tr>
                  <tr>
                    <td style = "text-align:center;"><b>Discussed with:<br><br><br><b><input type="text" name="discussed_with" placeholder="NAME" required></td>
                    <td colspan="3" style = "text-align:center;"><b>Assessed by:<br><br><br><b><input type="text" name="assessed_by" placeholder="NAME" required></</td>
                    <td colspan="3" style = "text-align:center;"><b>Checked by:<br><br><br><b><input type="text" name="checked_by" placeholder="NAME" required></</td>
                    <td colspan="3" style = "text-align:center;"><b>Final Rating:<br><br><br><b><input type="text" name="final_rating" placeholder="NAME" required></</b></td>
                  </tr>
                  <t>
                    <td style = "text-align:center;"><i>RATEE</td>
                    <td colspan="3" style = "text-align:center;"><i>Dean/Assoc.Dean</td>
                    <td colspan="3" style = "text-align:center;"><i>HRMO</td>
                    <td colspan="3" style = "text-align:center;"><i>Campus Director</i></td>
                  </t>
                  <tr>
                    <td  style="text-align:center">Date: <input type="date" name="date_discussed_with"></</td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_assessed_by" required></td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_checked_by" required></td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_final_rating" required></td>
                  </tr>

    </table>
    <button type="submit">Submit</button>
</form>

</body>
</html>
