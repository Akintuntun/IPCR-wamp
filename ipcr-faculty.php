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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Database connection details
  $servername = "localhost";
  $username = "root";
  $password = "Akisophiekingking";
  $database = "ipcr_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve form data
  $name = $_POST['name'];
  $academicRank = $_POST['academic_rank'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $conforme = $_POST['conforme'];
  $reviewedBy = $_POST['reviewed_by'];
  $approvedBy = $_POST['approved_by'];

  // Insert data into the ipcr_faculty table
  $sql = "INSERT INTO ipcr_faculty (name, academic_rank, semester, year, conforme, reviewed_by, approved_by)
          VALUES ('$name', '$academicRank', '$semester', '$year', '$conforme', '$reviewedBy', '$approvedBy')";

  if ($conn->query($sql) === TRUE) {
      echo "Data inserted successfully.";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Retrieve the inserted id from the ipcr_faculty table
  $idQuery = "SELECT id FROM ipcr_faculty WHERE name = '$name'";
  $result = $conn->query($idQuery);
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $ID = $row['id'];

      // Insert data into the ipcr_answers table
      $target = $_POST['target1'];
      $accomplished = $_POST['accomplished1'];
      $dateOfSubmissionCompletion = $_POST['submissionDate1'];
      $dateSubmittedCompleted = $_POST['completionDate1'];
      $qty = $_POST['qtyRating1'];
      $qlE = $_POST['qlRating1'];
      $t = $_POST['plRating1'];
      $a = $_POST['overallRating1'];
      $remarks = $_POST['remarks1'];

      $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
              VALUES ('$ID', 'a) No. of Syllabus prepared', '$target', '$accomplished', '$dateOfSubmissionCompletion', '$dateSubmittedCompleted',
              '$qty', '$qlE', '$t', '$a', '$remarks')";

      if ($conn->query($sql) === TRUE) {
          echo "Data inserted successfully.";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  } else {
      echo "Error: Could not retrieve the inserted id.";
  }


    // Insert data into the ipcr_answers table
    $target2 = $_POST['target2'];
    $accomplished2 = $_POST['accomplished2'];
    $dateOfSubmissionCompletion2 = $_POST['submissionDate2'];
    $dateSubmittedCompleted2 = $_POST['completionDate2'];
    $qty2 = $_POST['qtyRating2'];
    $qlE2 = $_POST['qlRating2'];
    $t2 = $_POST['plRating2'];
    $a2 = $_POST['overallRating2'];
    $remarks2 = $_POST['remarks2'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) No. of Course Guide', '$target2', '$accomplished2', '$dateOfSubmissionCompletion2', '$dateSubmittedCompleted2',
            '$qty2', '$qlE2', '$t2', '$a2', '$remarks2')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target3 = $_POST['target3'];
    $accomplished3 = $_POST['accomplished3'];
    $dateOfSubmissionCompletion3 = $_POST['submissionDate3'];
    $dateSubmittedCompleted3 = $_POST['completionDate3'];
    $qty3 = $_POST['qtyRating3'];
    $qlE3 = $_POST['qlRating3'];
    $t3 = $_POST['plRating3'];
    $a3 = $_POST['overallRating3'];
    $remarks3 = $_POST['remarks3'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c) No. of SLM', '$target3', '$accomplished3', '$dateOfSubmissionCompletion3', '$dateSubmittedCompleted3',
            '$qty3', '$qlE3', '$t3', '$a3', '$remarks3')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target4 = $_POST['target4'];
    $accomplished4 = $_POST['accomplished4'];
    $dateOfSubmissionCompletion4 = $_POST['submissionDate4'];
    $dateSubmittedCompleted4 = $_POST['completionDate4'];
    $qty4 = $_POST['qtyRating4'];
    $qlE4 = $_POST['qlRating4'];
    $t4 = $_POST['plRating4'];
    $a4 = $_POST['overallRating4'];
    $remarks4 = $_POST['remarks4'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'd) No. of subject areas with community immersion/involvement component 3', '$target4', '$accomplished4', '$dateOfSubmissionCompletion4', '$dateSubmittedCompleted4',
            '$qty4', '$qlE4', '$t4', '$a4', '$remarks4')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target5 = $_POST['target5'];
    $accomplished5 = $_POST['accomplished5'];
    $dateOfSubmissionCompletion5 = $_POST['submissionDate5'];
    $dateSubmittedCompleted5 = $_POST['completionDate5'];
    $qty5 = $_POST['qtyRating5'];
    $qlE5 = $_POST['qlRating5'];
    $t5 = $_POST['plRating5'];
    $a5 = $_POST['overallRating5'];
    $remarks5 = $_POST['remarks5'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance Sheet', '$target5', '$accomplished5', '$dateOfSubmissionCompletion5', '$dateSubmittedCompleted5',
            '$qty5', '$qlE5', '$t5', '$a5', '$remarks5')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target6 = $_POST['target6'];
    $accomplished6 = $_POST['accomplished6'];
    $dateOfSubmissionCompletion6 = $_POST['submissionDate6'];
    $dateSubmittedCompleted6 = $_POST['completionDate6'];
    $qty6 = $_POST['qtyRating6'];
    $qlE6 = $_POST['qlRating6'];
    $t6 = $_POST['plRating6'];
    $a6 = $_POST['overallRating6'];
    $remarks6 = $_POST['remarks6'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) Class Records', '$target6', '$accomplished6', '$dateOfSubmissionCompletion6', '$dateSubmittedCompleted6',
            '$qty6', '$qlE6', '$t6', '$a6', '$remarks6')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target7 = $_POST['target7'];
    $accomplished7 = $_POST['accomplished7'];
    $dateOfSubmissionCompletion7 = $_POST['submissionDate7'];
    $dateSubmittedCompleted7 = $_POST['completionDate7'];
    $qty7 = $_POST['qtyRating7'];
    $qlE7 = $_POST['qlRating7'];
    $t7 = $_POST['plRating7'];
    $a7 = $_POST['overallRating7'];
    $remarks7 = $_POST['remarks7'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Evaluation of Teaching Effectiveness (CQA-SF-012)', '$target7', '$accomplished7', '$dateOfSubmissionCompletion7', '$dateSubmittedCompleted7',
            '$qty7', '$qlE7', '$t7', '$a7', '$remarks7')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target8 = $_POST['target8'];
    $accomplished8 = $_POST['accomplished8'];
    $dateOfSubmissionCompletion8 = $_POST['submissionDate8'];
    $dateSubmittedCompleted8 = $_POST['completionDate8'];
    $qty8 = $_POST['qtyRating8'];
    $qlE8 = $_POST['qlRating8'];
    $t8 = $_POST['plRating8'];
    $a8 = $_POST['overallRating8'];
    $remarks8 = $_POST['remarks8'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) Class Observation (CQA-SF-012)', '$target8', '$accomplished8', '$dateOfSubmissionCompletion8', '$dateSubmittedCompleted8',
            '$qty8', '$qlE8', '$t8', '$a8', '$remarks8')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Insert data into the ipcr_answers table
    $target9 = $_POST['target9'];
    $accomplished9 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion9 = $_POST['submissionDate9'];
    $dateSubmittedCompleted9 = $_POST['completionDate9'];
    $qty9 = $_POST['qtyRating9'];
    $qlE9 = $_POST['qlRating9'];
    $t9 = $_POST['plRating9'];
    $a9 = $_POST['overallRating9'];
    $remarks9 = $_POST['remarks9'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a.1) TOS/Rubrics(Mid Term)', '$target9', '$accomplished9', '$dateOfSubmissionCompletion9', '$dateSubmittedCompleted9',
            '$qty9', '$qlE9', '$t9', '$a9', '$remarks9')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target10 = $_POST['target10'];
    $accomplished10 = $_POST['accomplished10'];
    $dateOfSubmissionCompletion10 = $_POST['submissionDate10'];
    $dateSubmittedCompleted10 = $_POST['completionDate10'];
    $qty10 = $_POST['qtyRating10'];
    $qlE10 = $_POST['qlRating10'];
    $t10 = $_POST['plRating10'];
    $a10 = $_POST['overallRating10'];
    $remarks10 = $_POST['remarks10'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a.2) TOS/Rubrics(Final Term)', '$target10', '$accomplished10', '$dateOfSubmissionCompletion10', '$dateSubmittedCompleted10',
            '$qty10', '$qlE10', '$t10', '$a10', '$remarks10')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target11 = $_POST['target11'];
    $accomplished11 = $_POST['accomplished11'];
    $dateOfSubmissionCompletion11 = $_POST['submissionDate11'];
    $dateSubmittedCompleted11 = $_POST['completionDate11'];
    $qty11 = $_POST['qtyRating11'];
    $qlE11 = $_POST['qlRating11'];
    $t11 = $_POST['plRating11'];
    $a11 = $_POST['overallRating11'];
    $remarks11 = $_POST['remarks11'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
      VALUES ('$ID', 'b.1) Test questions(term exams)/Performance\\'s based activities (Mid Term)', '$target11', '$accomplished11', '$dateOfSubmissionCompletion11', '$dateSubmittedCompleted11',
      '$qty11', '$qlE11', '$t11', '$a11', '$remarks11')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target12 = $_POST['target12'];
    $accomplished12 = $_POST['accomplished12'];
    $dateOfSubmissionCompletion12 = $_POST['submissionDate12'];
    $dateSubmittedCompleted12 = $_POST['completionDate12'];
    $qty12 = $_POST['qtyRating12'];
    $qlE12 = $_POST['qlRating12'];
    $t12 = $_POST['plRating12'];
    $a12 = $_POST['overallRating12'];
    $remarks12 = $_POST['remarks12'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
        VALUES ('$ID', 'b.2) Test questions(term exams)/Performance\\'s based activities (Final Term)', '$target12', '$accomplished12', '$dateOfSubmissionCompletion12', '$dateSubmittedCompleted12',
        '$qty12', '$qlE12', '$t12', '$a12', '$remarks12')";


    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target13 = $_POST['target13'];
    $accomplished13 = $_POST['accomplished13'];
    $dateOfSubmissionCompletion13 = $_POST['submissionDate13'];
    $dateSubmittedCompleted13 = $_POST['completionDate13'];
    $qty13 = $_POST['qtyRating13'];
    $qlE13 = $_POST['qlRating13'];
    $t13 = $_POST['plRating13'];
    $a13 = $_POST['overallRating13'];
    $remarks13 = $_POST['remarks13'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c.1) Answer Keys (Mid Term)', '$target13', '$accomplished13', '$dateOfSubmissionCompletion13', '$dateSubmittedCompleted13',
            '$qty13', '$qlE13', '$t13', '$a13', '$remarks13')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target14 = $_POST['target14'];
    $accomplished14 = $_POST['accomplished14'];
    $dateOfSubmissionCompletion14 = $_POST['submissionDate14'];
    $dateSubmittedCompleted14 = $_POST['completionDate14'];
    $qty14 = $_POST['qtyRating14'];
    $qlE14 = $_POST['qlRating14'];
    $t14 = $_POST['plRating14'];
    $a14 = $_POST['overallRating14'];
    $remarks14 = $_POST['remarks14'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c.2) Answer Keys (Final Term)', '$target14', '$accomplished14', '$dateOfSubmissionCompletion14', '$dateSubmittedCompleted14',
            '$qty14', '$qlE14', '$t14', '$a14', '$remarks14')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target15 = $_POST['target15'];
    $accomplished15 = $_POST['accomplished15'];
    $dateOfSubmissionCompletion15 = $_POST['submissionDate15'];
    $dateSubmittedCompleted15 = $_POST['completionDate15'];
    $qty15 = $_POST['qtyRating15'];
    $qlE15 = $_POST['qlRating15'];
    $t15 = $_POST['plRating15'];
    $a15 = $_POST['overallRating15'];
    $remarks15 = $_POST['remarks15'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) No. of grading sheets submitted and encoded', '$target15', '$accomplished15', '$dateOfSubmissionCompletion15', '$dateSubmittedCompleted15',
            '$qty15', '$qlE15', '$t15', '$a15', '$remarks15')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target16 = $_POST['target16'];
    $accomplished16 = $_POST['accomplished16'];
    $dateOfSubmissionCompletion16 = $_POST['submissionDate16'];
    $dateSubmittedCompleted16 = $_POST['completionDate16'];
    $qty16 = $_POST['qtyRating16'];
    $qlE16 = $_POST['qlRating16'];
    $t16 = $_POST['plRating16'];
    $a16 = $_POST['overallRating16'];
    $remarks16 = $_POST['remarks16'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) No. of faculty & students seek advices (LSPU-ACAD-011)', '$target16', '$accomplished16', '$dateOfSubmissionCompletion16', '$dateSubmittedCompleted16',
            '$qty16', '$qlE16', '$t16', '$a16', '$remarks16')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target17 = $_POST['target17'];
    $accomplished17 = $_POST['accomplished17'];
    $dateOfSubmissionCompletion17 = $_POST['submissionDate17'];
    $dateSubmittedCompleted17 = $_POST['completionDate17'];
    $qty17 = $_POST['qtyRating17'];
    $qlE17 = $_POST['qlRating17'];
    $t17 = $_POST['plRating17'];
    $a17 = $_POST['overallRating17'];
    $remarks17 = $_POST['remarks17'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Accomplishment Report', '$target17', '$accomplished17', '$dateOfSubmissionCompletion17', '$dateSubmittedCompleted17',
            '$qty17', '$qlE17', '$t17', '$a17', '$remarks17')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target18 = $_POST['target18'];
    $accomplished18 = $_POST['accomplished18'];
    $dateOfSubmissionCompletion18 = $_POST['submissionDate18'];
    $dateSubmittedCompleted18 = $_POST['completionDate18'];
    $qty18 = $_POST['qtyRating18'];
    $qlE18 = $_POST['qlRating18'];
    $t18 = $_POST['plRating18'];
    $a18 = $_POST['overallRating18'];
    $remarks18 = $_POST['remarks18'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Research proposal submitted/Activity conducted', '$target18', '$accomplished18', '$dateOfSubmissionCompletion18', '$dateSubmittedCompleted18',
            '$qty18', '$qlE18', '$t18', '$a18', '$remarks18')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target19 = $_POST['target19'];
    $accomplished19 = $_POST['accomplished19'];
    $dateOfSubmissionCompletion19 = $_POST['submissionDate19'];
    $dateSubmittedCompleted19 = $_POST['completionDate19'];
    $qty19 = $_POST['qtyRating19'];
    $qlE19 = $_POST['qlRating19'];
    $t19 = $_POST['plRating19'];
    $a19 = $_POST['overallRating19'];
    $remarks19 = $_POST['remarks19'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) Research implemented and/or Completed within the timeframe', '$target19', '$accomplished19', '$dateOfSubmissionCompletion19', '$dateSubmittedCompleted19',
            '$qty19', '$qlE19', '$t19', '$a19', '$remarks19')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target20 = $_POST['target20'];
    $accomplished20 = $_POST['accomplished20'];
    $dateOfSubmissionCompletion20 = $_POST['submissionDate20'];
    $dateSubmittedCompleted20 = $_POST['completionDate20'];
    $qty20 = $_POST['qtyRating20'];
    $qlE20 = $_POST['qlRating20'];
    $t20 = $_POST['plRating20'];
    $a20 = $_POST['overallRating20'];
    $remarks20 = $_POST['remarks20'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c) Research Presenterd in Regional/National/International Comferences', '$target9', '$accomplished20', '$dateOfSubmissionCompletion20', '$dateSubmittedCompleted20',
            '$qty20', '$qlE20', '$t20', '$a20', '$remarks20')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $target21 = $_POST['target21'];
    $accomplished21 = $_POST['accomplished21'];
    $dateOfSubmissionCompletion21 = $_POST['submissionDate21'];
    $dateSubmittedCompleted21 = $_POST['completionDate21'];
    $qty21 = $_POST['qtyRating21'];
    $qlE21 = $_POST['qlRating21'];
    $t21 = $_POST['plRating21'];
    $a21 = $_POST['overallRating21'];
    $remarks21 = $_POST['remarks21'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'd) Research Published in Peer-reviewed Journals', '$target21', '$accomplished21', '$dateOfSubmissionCompletion21', '$dateSubmittedCompleted21',
            '$qty21', '$qlE21', '$t21', '$a21', '$remarks21')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target22 = $_POST['target22'];
    $accomplished22 = $_POST['accomplished22'];
    $dateOfSubmissionCompletion22 = $_POST['submissionDate22'];
    $dateSubmittedCompleted22 = $_POST['completionDate22'];
    $qty22 = $_POST['qtyRating22'];
    $qlE22 = $_POST['qlRating22'];
    $t22 = $_POST['plRating22'];
    $a22 = $_POST['overallRating22'];
    $remarks22 = $_POST['remarks22'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'e) Filed/Published/Approved Intellectual Property Right', '$target22', '$accomplished22', '$dateOfSubmissionCompletion22', '$dateSubmittedCompleted22',
            '$qty22', '$qlE22', '$t22', '$a22', '$remarks22')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target23 = $_POST['target23'];
    $accomplished23 = $_POST['accomplished23'];
    $dateOfSubmissionCompletion23 = $_POST['submissionDate23'];
    $dateSubmittedCompleted23 = $_POST['completionDate23'];
    $qty23 = $_POST['qtyRating23'];
    $qlE23 = $_POST['qlRating23'];
    $t23 = $_POST['plRating23'];
    $a23 = $_POST['overallRating23'];
    $remarks23 = $_POST['remarks23'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'f) Research Utilized/Deployed through Commercialization/Extension/Policy	
', '$target23', '$accomplished23', '$dateOfSubmissionCompletion23', '$dateSubmittedCompleted23',
            '$qty23', '$qlE23', '$t23', '$a23', '$remarks23')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target24 = $_POST['target24'];
    $accomplished24 = $_POST['accomplished24'];
    $dateOfSubmissionCompletion24 = $_POST['submissionDate24'];
    $dateSubmittedCompleted24 = $_POST['completionDate24'];
    $qty24 = $_POST['qtyRating24'];
    $qlE24 = $_POST['qlRating24'];
    $t24 = $_POST['plRating24'];
    $a24 = $_POST['overallRating24'];
    $remarks24 = $_POST['remarks24'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'g) Number of cirtation in journal/books', '$target24', '$accomplished24', '$dateOfSubmissionCompletion24', '$dateSubmittedCompleted24',
            '$qty24', '$qlE24', '$t24', '$a24', '$remarks24')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target25 = $_POST['target25'];
    $accomplished25 = $_POST['accomplished25'];
    $dateOfSubmissionCompletion25 = $_POST['submissionDate25'];
    $dateSubmittedCompleted25 = $_POST['completionDate25'];
    $qty25 = $_POST['qtyRating25'];
    $qlE25 = $_POST['qlRating25'];
    $t25 = $_POST['plRating25'];
    $a25 = $_POST['overallRating25'];
    $remarks25 = $_POST['remarks25'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Extension proposal submiitted/activity conducted', '$target25', '$accomplished25', '$dateOfSubmissionCompletion25', '$dateSubmittedCompleted25',
            '$qty25', '$qlE25', '$t9', '$a25', '$remarks25')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target26 = $_POST['target26'];
    $accomplished26 = $_POST['accomplished26'];
    $dateOfSubmissionCompletion26 = $_POST['submissionDate26'];
    $dateSubmittedCompleted26 = $_POST['completionDate26'];
    $qty26 = $_POST['qtyRating26'];
    $qlE26 = $_POST['qlRating26'];
    $t26 = $_POST['plRating26'];
    $a26 = $_POST['overallRating26'];
    $remarks26 = $_POST['remarks26'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) EPersons trained/provided with technical advise', '$target26', '$accomplished26', '$dateOfSubmissionCompletion26', '$dateSubmittedCompleted26',
            '$qty26', '$qlE26', '$t26', '$a26', '$remarks26')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target27 = $_POST['target27'];
    $accomplished27 = $_POST['accomplished27'];
    $dateOfSubmissionCompletion27 = $_POST['submissionDate27'];
    $dateSubmittedCompleted27 = $_POST['completionDate27'];
    $qty27 = $_POST['qtyRating27'];
    $qlE27 = $_POST['qlRating27'];
    $t27 = $_POST['plRating27'];
    $a27 = $_POST['overallRating27'];
    $remarks27 = $_POST['remarks27'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c) Persons who avail the service who rated the service as good or better', '$target27', '$accomplished27', '$dateOfSubmissionCompletion27', '$dateSubmittedCompleted27',
            '$qty27', '$qlE27', '$t27', '$a27', '$remarks27')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target28 = $_POST['target28'];
    $accomplished28 = $_POST['accomplished28'];
    $dateOfSubmissionCompletion28 = $_POST['submissionDate28'];
    $dateSubmittedCompleted28 = $_POST['completionDate28'];
    $qty28 = $_POST['qtyRating28'];
    $qlE28 = $_POST['qlRating28'];
    $t28 = $_POST['plRating28'];
    $a28 = $_POST['overallRating28'];
    $remarks28 = $_POST['remarks28'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'd) Persons given training or advisory who rated the timeliness of service delivery as good or better', '$target28', '$accomplished28', '$dateOfSubmissionCompletion28', '$dateSubmittedCompleted28',
            '$qty28', '$qlE28', '$t28', '$a28', '$remarks28')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target29 = $_POST['target29'];
    $accomplished29 = $_POST['accomplished29'];
    $dateOfSubmissionCompletion29 = $_POST['submissionDate29'];
    $dateSubmittedCompleted29 = $_POST['completionDate29'];
    $qty29 = $_POST['qtyRating29'];
    $qlE29 = $_POST['qlRating29'];
    $t29 = $_POST['plRating29'];
    $a29 = $_POST['overallRating29'];
    $remarks29 = $_POST['remarks29'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'e) Technical advice responded within 3 days upon request', '$target29', '$accomplished29', '$dateOfSubmissionCompletion29', '$dateSubmittedCompleted29',
            '$qty29', '$qlE29', '$t29', '$a29', '$remarks29')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target30 = $_POST['target30'];
    $accomplished30 = $_POST['accomplished30'];
    $dateOfSubmissionCompletion30 = $_POST['submissionDate30'];
    $dateSubmittedCompleted30 = $_POST['completionDate30'];
    $qty30 = $_POST['qtyRating30'];
    $qlE30 = $_POST['qlRating30'];
    $t30 = $_POST['plRating30'];
    $a30 = $_POST['overallRating30'];
    $remarks30 = $_POST['remarks30'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Accomplishment Report', '$target30', '$accomplished30', '$dateOfSubmissionCompletion30', '$dateSubmittedCompleted30',
            '$qty30', '$qlE30', '$t30', '$a30', '$remarks30')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target31 = $_POST['target31'];
    $accomplished31 = $_POST['accomplished31'];
    $dateOfSubmissionCompletion31 = $_POST['submissionDate31'];
    $dateSubmittedCompleted31 = $_POST['completionDate31'];
    $qty31 = $_POST['qtyRating31'];
    $qlE31 = $_POST['qlRating31'];
    $t31 = $_POST['plRating31'];
    $a31 = $_POST['overallRating31'];
    $remarks31 = $_POST['remarks31'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance', '$target31', '$accomplished31', '$dateOfSubmissionCompletion31', '$dateSubmittedCompleted31',
            '$qty31', '$qlE31', '$t31', '$a31', '$remarks31')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target32 = $_POST['target32'];
    $accomplished32 = $_POST['accomplished32'];
    $dateOfSubmissionCompletion32 = $_POST['submissionDate32'];
    $dateSubmittedCompleted32 = $_POST['completionDate32'];
    $qty32 = $_POST['qtyRating32'];
    $qlE32 = $_POST['qlRating32'];
    $t32 = $_POST['plRating32'];
    $a32 = $_POST['overallRating32'];
    $remarks32 = $_POST['remarks32'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance', '$target32', '$accomplished32', '$dateOfSubmissionCompletion32', '$dateSubmittedCompleted32',
            '$qty32', '$qlE32', '$t32', '$a32', '$remarks32')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target33 = $_POST['target33'];
    $accomplished33 = $_POST['accomplished33'];
    $dateOfSubmissionCompletion33 = $_POST['submissionDate33'];
    $dateSubmittedCompleted33 = $_POST['completionDate33'];
    $qty33 = $_POST['qtyRating33'];
    $qlE33 = $_POST['qlRating33'];
    $t33 = $_POST['plRating33'];
    $a33 = $_POST['overallRating33'];
    $remarks33 = $_POST['remarks33'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof', '$target9', '$accomplished33', '$dateOfSubmissionCompletion33', '$dateSubmittedCompleted33',
            '$qty33', '$qlE33', '$t33', '$a33', '$remarks33')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target34 = $_POST['target34'];
    $accomplished34 = $_POST['accomplished34'];
    $dateOfSubmissionCompletion34 = $_POST['submissionDate34'];
    $dateSubmittedCompleted34 = $_POST['completionDate34'];
    $qty34 = $_POST['qtyRating34'];
    $qlE34 = $_POST['qlRating34'];
    $t34 = $_POST['plRating34'];
    $a34 = $_POST['overallRating34'];
    $remarks34 = $_POST['remarks34'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof', '$target34', '$accomplished34', '$dateOfSubmissionCompletion34', '$dateSubmittedCompleted34',
            '$qty34', '$qlE34', '$t34', '$a34', '$remarks34')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target35 = $_POST['target35'];
    $accomplished35 = $_POST['accomplished35'];
    $dateOfSubmissionCompletion35 = $_POST['submissionDate35'];
    $dateSubmittedCompleted35 = $_POST['completionDate35'];
    $qty35 = $_POST['qtyRating35'];
    $qlE35 = $_POST['qlRating35'];
    $t35 = $_POST['plRating35'];
    $a35 = $_POST['overallRating35'];
    $remarks35 = $_POST['remarks35'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Training/Seminar/Conference certificate of attendance/participation', '$target35', '$accomplished35', '$dateOfSubmissionCompletion35', '$dateSubmittedCompleted35',
            '$qty35', '$qlE35', '$t35', '$a35', '$remarks35')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target36 = $_POST['target36'];
    $accomplished36 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion36 = $_POST['submissionDate36'];
    $dateSubmittedCompleted36 = $_POST['completionDate36'];
    $qty36 = $_POST['qtyRating36'];
    $qlE36 = $_POST['qlRating36'];
    $t36 = $_POST['plRating36'];
    $a36 = $_POST['overallRating36'];
    $remarks36 = $_POST['remarks36'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance', '$target36', '$accomplished36', '$dateOfSubmissionCompletion36', '$dateSubmittedCompleted36',
            '$qty36', '$qlE36', '$t36', '$a36', '$remarks36')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target37 = $_POST['target37'];
    $accomplished37 = $_POST['accomplished37'];
    $dateOfSubmissionCompletion37 = $_POST['submissionDate37'];
    $dateSubmittedCompleted37 = $_POST['completionDate37'];
    $qty37 = $_POST['qtyRating37'];
    $qlE37 = $_POST['qlRating37'];
    $t37 = $_POST['plRating37'];
    $a37 = $_POST['overallRating37'];
    $remarks37 = $_POST['remarks37'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance', '$target37', '$accomplished37', '$dateOfSubmissionCompletion37', '$dateSubmittedCompleted37',
            '$qty37', '$qlE37', '$t37', '$a37', '$remarks37')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target38 = $_POST['target38'];
    $accomplished38 = $_POST['accomplished9'];
    $dateOfSubmissionCompletion38 = $_POST['submissionDate38'];
    $dateSubmittedCompleted38 = $_POST['completionDate38'];
    $qty38 = $_POST['qtyRating38'];
    $qlE38 = $_POST['qlRating38'];
    $t38 = $_POST['plRating38'];
    $a38 = $_POST['overallRating38'];
    $remarks38 = $_POST['remarks38'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Attendance sheet/Program of activities/other document as proof', '$target38', '$accomplished38', '$dateOfSubmissionCompletion38', '$dateSubmittedCompleted38',
            '$qty38', '$qlE38', '$t38', '$a38', '$remarks38')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target39 = $_POST['target39'];
    $accomplished39 = $_POST['accomplished39'];
    $dateOfSubmissionCompletion39 = $_POST['submissionDate39'];
    $dateSubmittedCompleted39 = $_POST['completionDate39'];
    $qty39 = $_POST['qtyRating39'];
    $qlE39 = $_POST['qlRating39'];
    $t39 = $_POST['plRating39'];
    $a39 = $_POST['overallRating39'];
    $remarks39 = $_POST['remarks39'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'a) Prepare....', '$target39', '$accomplished39', '$dateOfSubmissionCompletion39', '$dateSubmittedCompleted39',
            '$qty39', '$qlE39', '$t39', '$a39', '$remarks39')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target40 = $_POST['target40'];
    $accomplished40 = $_POST['accomplished40'];
    $dateOfSubmissionCompletion40 = $_POST['submissionDate40'];
    $dateSubmittedCompleted40 = $_POST['completionDate40'];
    $qty40 = $_POST['qtyRating40'];
    $qlE40 = $_POST['qlRating40'];
    $t40 = $_POST['plRating40'];
    $a40 = $_POST['overallRating40'];
    $remarks40 = $_POST['remarks40'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'b) Submit....', '$target40', '$accomplished40', '$dateOfSubmissionCompletion40', '$dateSubmittedCompleted40',
            '$qty40', '$qlE40', '$t40', '$a40', '$remarks40')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target41 = $_POST['target41'];
    $accomplished41 = $_POST['accomplished41'];
    $dateOfSubmissionCompletion41 = $_POST['submissionDate41'];
    $dateSubmittedCompleted41 = $_POST['completionDate41'];
    $qty41 = $_POST['qtyRating41'];
    $qlE41 = $_POST['qlRating41'];
    $t41 = $_POST['plRating41'];
    $a41 = $_POST['overallRating41'];
    $remarks41 = $_POST['remarks41'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'c) Increase....', '$target41', '$accomplished41', '$dateOfSubmissionCompletion41', '$dateSubmittedCompleted41',
            '$qty41', '$qlE41', '$t41', '$a41', '$remarks41')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target42 = $_POST['target42'];
    $accomplished42 = $_POST['accomplished42'];
    $dateOfSubmissionCompletion42 = $_POST['submissionDate42'];
    $dateSubmittedCompleted42 = $_POST['completionDate42'];
    $qty42 = $_POST['qtyRating42'];
    $qlE42 = $_POST['qlRating42'];
    $t42 = $_POST['plRating42'];
    $a42 = $_POST['overallRating42'];
    $remarks42 = $_POST['remarks42'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'd) ....', '$target42', '$accomplished42', '$dateOfSubmissionCompletion42', '$dateSubmittedCompleted42',
            '$qty42', '$qlE42', '$t42', '$a42', '$remarks42')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $target43 = $_POST['target43'];
    $accomplished43 = $_POST['accomplished43'];
    $dateOfSubmissionCompletion43 = $_POST['submissionDate43'];
    $dateSubmittedCompleted43 = $_POST['completionDate43'];
    $qty43 = $_POST['qtyRating43'];
    $qlE43 = $_POST['qlRating43'];
    $t43 = $_POST['plRating43'];
    $a43 = $_POST['overallRating43'];
    $remarks43 = $_POST['remarks43'];

    $sql = "INSERT INTO ipcr_answers (id, Performance_Indication, Target, Accomplished, Date_of_Submission_Completion, Date_Submitted_Completed, QTY, QL_E, T, A, Remarks)
            VALUES ('$ID', 'e) ....', '$target43', '$accomplished43', '$dateOfSubmissionCompletion43', '$dateSubmittedCompleted43',
            '$qty43', '$qlE43', '$t43', '$a43', '$remarks43')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $numericalRating = $_POST['numerical_rating'];
    $adjectivalRating = $_POST['adjectival_rating'];
    $discussedWith = $_POST['discussed_with'];
    $dateDiscussedWith = $_POST['date_discussed_with'];
    $assessedBy = $_POST['assessed_by'];
    $dateAssessedBy = $_POST['date_assessed_by'];
    $checkedBy = $_POST['checked_by'];
    $dateCheckedBy = $_POST['date_checked_by'];
    $finalRating = $_POST['final_rating'];
    $dateFinalRating = $_POST['date_final_rating'];

    // Insert data into the ipcr_faculty table
    $sql = "INSERT INTO ipcr_faculty (numerical_rating, adjectival_rating, discussed_with, date_discussed_with, assessed_by, date_assessed_by, checked_by, date_checked_by, final_rating, date_final_rating)
            VALUES ('$numericalRating', '$adjectivalRating', '$discussedWith', '$dateDiscussedWith', '$assessedBy', '$dateAssessedBy', '$checkedBy', '$dateCheckedBy', '$finalRating', '$dateFinalRating')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
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
            <th id="name">Conforme:<br><br><input type="text" name="conforme" class="top"></th>
            <th colspan="4" id="assoc_dean">Reviewed By:<br><br><input type="text" name="reviewed_by" class="top"></th>
            <th colspan="5" id="director">Approved By:<br><br><input type="text" name="approved_by" class="top"></th>
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
            <td><input type="number" name="target1"></td>
            <td><input type="number" name="accomplished1"></td>
            <td><input type="date" name="submissionDate1"></td>
            <td><input type="date" name="completionDate1"></td>
            <td><input type="number" name="qtyRating1"></td>
            <td><input type="number" name="qlRating1"></td>
            <td><input type="number" name="plRating1"></td>
            <td><input type="number" name="overallRating1"></td>
            <td><input type="text" name="remarks1"></td>
        </tr>
        <tr>
          <td>
            b) No. of Course Guide
          </td>
            <td><input type="number" name="target2"></td>
            <td><input type="number" name="accomplished2"></td>
            <td><input type="date" name="submissionDate2"></td>
            <td><input type="date" name="completionDate2"></td>
            <td><input type="number" name="qtyRating2"></td>
            <td><input type="number" name="qlRating2"></td>
            <td><input type="number" name="plRating2"></td>
            <td><input type="number" name="overallRating2"></td>
            <td><input type="text" name="remarks2"></td>
        </tr>
        <tr>
          <td>
            c) No. of SLM
          </td>
            <td><input type="number" name="target3"></td>
            <td><input type="number" name="accomplished3"></td>
            <td><input type="date" name="submissionDate3"></td>
            <td><input type="date" name="completionDate3"></td>
            <td><input type="number" name="qtyRating3"></td>
            <td><input type="number" name="qlRating3"></td>
            <td><input type="number" name="plRating3"></td>
            <td><input type="number" name="overallRating3"></td>
            <td><input type="text" name="remarks3"></td>
        </tr>
        <tr>
          <td>
            d) No. of subject areas with community immersion/involvement component
        3</td>
            <td><input type="number" name="target4"></td>
            <td><input type="number" name="accomplished4"></td>
            <td><input type="date" name="submissionDate4"></td>
            <td><input type="date" name="completionDate4"></td>
            <td><input type="number" name="qtyRating4"></td>
            <td><input type="number" name="qlRating4"></td>
            <td><input type="number" name="plRating4"></td>
            <td><input type="number" name="overallRating4"></td>
            <td><input type="text" name="remarks4"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            2. Organizes Classroom instructions.
          </b></td>
        <tr>
          <td>
            a) Attendance Sheet
          </td>
            <td><input type="number" name="target5"></td>
            <td><input type="number" name="accomplished5"></td>
            <td><input type="date" name="submissionDate5"></td>
            <td><input type="date" name="completionDate5"></td>
            <td><input type="number" name="qtyRating5"></td>
            <td><input type="number" name="qlRating5"></td>
            <td><input type="number" name="plRating5"></td>
            <td><input type="number" name="overallRating5"></td>
            <td><input type="text" name="remarks5"></td>
        </tr>
        <tr>
          <td>
            b) Class Records
          </td>
            <td><input type="number" name="target6"></td>
            <td><input type="number" name="accomplished6"></td>
            <td><input type="date" name="submissionDate6"></td>
            <td><input type="date" name="completionDate6"></td>
            <td><input type="number" name="qtyRating6"></td>
            <td><input type="number" name="qlRating6"></td>
            <td><input type="number" name="plRating6"></td>
            <td><input type="number" name="overallRating6"></td>
            <td><input type="text" name="remarks6"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            3. Teaching Effectiveness.
          </b></td>
        <tr>
          <td>
            a) Evaluation of Teaching Effectiveness (CQA-SF-012)
          </td>
            <td><input type="number" name="target7"></td>
            <td><input type="number" name="accomplished7"></td>
            <td><input type="date" name="submissionDate7"></td>
            <td><input type="date" name="completionDate7"></td>
            <td><input type="number" name="qtyRating7"></td>
            <td><input type="number" name="qlRating7"></td>
            <td><input type="number" name="plRating7"></td>
            <td><input type="number" name="overallRating7"></td>
            <td><input type="text" name="remarks7"></td>
        </tr>
        <tr>  
          <td>
            b) Class Observation (CQA-SF-012)
          </td>
            <td><input type="number" name="target8"></td>
            <td><input type="number" name="accomplished8"></td>
            <td><input type="date" name="submissionDate8"></td>
            <td><input type="date" name="completionDate8"></td>
            <td><input type="number" name="qtyRating8"></td>
            <td><input type="number" name="qlRating8"></td>
            <td><input type="number" name="plRating8"></td>
            <td><input type="number" name="overallRating8"></td>
            <td><input type="text" name="remarks8"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            4. Prepare and Check Summative/Evaluative/Formative Tests.
          </b></td>
        <tr>
          <td>
            a.1) TOS/Rubrics(Mid Term)
          </td>
            <td><input type="number" name="target9"></td>
            <td><input type="number" name="accomplished9"></td>
            <td><input type="date" name="submissionDate9"></td>
            <td><input type="date" name="completionDate9"></td>
            <td><input type="number" name="qtyRating9"></td>
            <td><input type="number" name="qlRating9"></td>
            <td><input type="number" name="plRating9"></td>
            <td><input type="number" name="overallRating9"></td>
            <td><input type="text" name="remarks9"></td>
        </tr>
        <tr>
          <td>
            a.2) TOS/Rubrics(Final Term)
          </td>
            <td><input type="number" name="target10"></td>
            <td><input type="number" name="accomplished10"></td>
            <td><input type="date" name="submissionDate10"></td>
            <td><input type="date" name="completionDate10"></td>
            <td><input type="number" name="qtyRating10"></td>
            <td><input type="number" name="qlRating10"></td>
            <td><input type="number" name="plRating10"></td>
            <td><input type="number" name="overallRating10"></td>
            <td><input type="text" name="remarks10"></td>
        </tr>
        <tr>
          <td>
            b.1) Test questions(term exams)/Performance's based activities (Mid Term)
          </td>
            <td><input type="number" name="target11"></td>
            <td><input type="number" name="accomplished11"></td>
            <td><input type="date" name="submissionDate11"></td>
            <td><input type="date" name="completionDate11"></td>
            <td><input type="number" name="qtyRating11"></td>
            <td><input type="number" name="qlRating11"></td>
            <td><input type="number" name="plRating11"></td>
            <td><input type="number" name="overallRating11"></td>
            <td><input type="text" name="remarks11"></td>
        </tr>
        <tr>
          <td>
            b.2) Test questions(term exams)/Performance's based activities (Final Term)
          </td>
            <td><input type="number" name="target12"></td>
            <td><input type="number" name="accomplished12"></td>
            <td><input type="date" name="submissionDate12"></td>
            <td><input type="date" name="completionDate12"></td>
            <td><input type="number" name="qtyRating12"></td>
            <td><input type="number" name="qlRating12"></td>
            <td><input type="number" name="plRating12"></td>
            <td><input type="number" name="overallRating12"></td>
            <td><input type="text" name="remarks12"></td>
        </tr>
        <tr>
          <td>
            c.1) Answer Keys (Mid Term)
          </td>
            <td><input type="number" name="target13"></td>
            <td><input type="number" name="accomplished13"></td>
            <td><input type="date" name="submissionDate13"></td>
            <td><input type="date" name="completionDate13"></td>
            <td><input type="number" name="qtyRating13"></td>
            <td><input type="number" name="qlRating13"></td>
            <td><input type="number" name="plRating13"></td>
            <td><input type="number" name="overallRating13"></td>
            <td><input type="text" name="remarks13"></td>
        </tr>
        <tr>
          <td>
            c.2) Answer Keys (Final Term)
          </td>
            <td><input type="number" name="target14"></td>
            <td><input type="number" name="accomplished14"></td>
            <td><input type="date" name="submissionDate14"></td>
            <td><input type="date" name="completionDate14"></td>
            <td><input type="number" name="qtyRating14"></td>
            <td><input type="number" name="qlRating14"></td>
            <td><input type="number" name="plRating14"></td>
            <td><input type="number" name="overallRating14"></td>
            <td><input type="text" name="remarks14"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            5. Compute and Evaluate Grades.
          </b></td>
        <tr>
          <td>
            a) No. of grading sheets submitted and encoded
          </td>
            <td><input type="number" name="target15"></td>
            <td><input type="number" name="accomplished15"></td>
            <td><input type="date" name="submissionDate15"></td>
            <td><input type="date" name="completionDate15"></td>
            <td><input type="number" name="qtyRating15"></td>
            <td><input type="number" name="qlRating15"></td>
            <td><input type="number" name="plRating15"></td>
            <td><input type="number" name="overallRating15"></td>
            <td><input type="text" name="remarks15"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            6. Consultation services to faculty and students.
          </b></td>
        <tr>
          <td>
            a) No. of faculty & students seek advices (LSPU-ACAD-011)
          </td>
            <td><input type="number" name="target16"></td>
            <td><input type="number" name="accomplished16"></td>
            <td><input type="date" name="submissionDate16"></td>
            <td><input type="date" name="completionDate16"></td>
            <td><input type="number" name="qtyRating16"></td>
            <td><input type="number" name="qlRating16"></td>
            <td><input type="number" name="plRating16"></td>
            <td><input type="number" name="overallRating16"></td>
            <td><input type="text" name="remarks16"></td>
        </tr>
        <tr>
          <td colspan="10"><b>
            7. Prepare accomplishment report.
          </b></td>
        <tr>
          <td>
            a) Accomplishment Report
          </td>
            <td><input type="number" name="target17"></td>
            <td><input type="number" name="accomplished17"></td>
            <td><input type="date" name="submissionDate17"></td>
            <td><input type="date" name="completionDate17"></td>
            <td><input type="number" name="qtyRating17"></td>
            <td><input type="number" name="qlRating17"></td>
            <td><input type="number" name="plRating17"></td>
            <td><input type="number" name="overallRating17"></td>
            <td><input type="text" name="remarks17"></td>
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
            <td><input type="number" name="target18"></td>
            <td><input type="number" name="accomplished18"></td>
            <td><input type="date" name="submissionDate18"></td>
            <td><input type="date" name="completionDate18"></td>
            <td><input type="number" name="qtyRating18"></td>
            <td><input type="number" name="qlRating18"></td>
            <td><input type="number" name="plRating18"></td>
            <td><input type="number" name="overallRating18"></td>
            <td><input type="text" name="remarks18"></td>
        </tr>
        <tr>
          <td>
            b) Research implemented and/or Completed within the timeframe
          </td>
            <td><input type="number" name="target19"></td>
            <td><input type="number" name="accomplished19"></td>
            <td><input type="date" name="submissionDate19"></td>
            <td><input type="date" name="completionDate19"></td>
            <td><input type="number" name="qtyRating19"></td>
            <td><input type="number" name="qlRating19"></td>
            <td><input type="number" name="plRating19"></td>
            <td><input type="number" name="overallRating19"></td>
            <td><input type="text" name="remarks19"></td>
        </tr>
        <td>
          c) Research Presenterd in Regional/National/International Comferences
        </td>
            <td><input type="number" name="target20"></td>
            <td><input type="number" name="accomplished20"></td>
            <td><input type="date" name="submissionDate20"></td>
            <td><input type="date" name="completionDate20"></td>
            <td><input type="number" name="qtyRating20"></td>
            <td><input type="number" name="qlRating20"></td>
            <td><input type="number" name="plRating20"></td>
            <td><input type="number" name="overallRating20"></td>
            <td><input type="text" name="remarks20"></td>
      </tr>
      <td>
      d) Research Published in Peer-reviewed Journals
    </td>
            <td><input type="number" name="target21"></td>
            <td><input type="number" name="accomplished21"></td>
            <td><input type="date" name="submissionDate21"></td>
            <td><input type="date" name="completionDate21"></td>
            <td><input type="number" name="qtyRating21"></td>
            <td><input type="number" name="qlRating21"></td>
            <td><input type="number" name="plRating21"></td>
            <td><input type="number" name="overallRating21"></td>
            <td><input type="text" name="remarks21"></td>
  </tr>
  <td>
    e) Filed/Published/Approved Intellectual Property Right
  </td>
            <td><input type="number" name="target22"></td>
            <td><input type="number" name="accomplished22"></td>
            <td><input type="date" name="submissionDate22"></td>
            <td><input type="date" name="completionDate22"></td>
            <td><input type="number" name="qtyRating22"></td>
            <td><input type="number" name="qlRating22"></td>
            <td><input type="number" name="plRating22"></td>
            <td><input type="number" name="overallRating22"></td>
            <td><input type="text" name="remarks22"></td>
</tr>
<td>
  f) Research Utilized/Deployed through Commercialization/Extension/Policy
</td>
            <td><input type="number" name="target23"></td>
            <td><input type="number" name="accomplished23"></td>
            <td><input type="date" name="submissionDate23"></td>
            <td><input type="date" name="completionDate23"></td>
            <td><input type="number" name="qtyRating23"></td>
            <td><input type="number" name="qlRating23"></td>
            <td><input type="number" name="plRating23"></td>
            <td><input type="number" name="overallRating23"></td>
            <td><input type="text" name="remarks23"></td>
</tr>
<td>
  g) Number of cirtation in journal/books
</td>
            <td><input type="number" name="target24"></td>
            <td><input type="number" name="accomplished24"></td>
            <td><input type="date" name="submissionDate24"></td>
            <td><input type="date" name="completionDate24"></td>
            <td><input type="number" name="qtyRating24"></td>
            <td><input type="number" name="qlRating24"></td>
            <td><input type="number" name="plRating24"></td>
            <td><input type="number" name="overallRating24"></td>
            <td><input type="text" name="remarks24"></td>
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
            <td><input type="number" name="target25"></td>
            <td><input type="number" name="accomplished25"></td>
            <td><input type="date" name="submissionDate25"></td>
            <td><input type="date" name="completionDate25"></td>
            <td><input type="number" name="qtyRating25"></td>
            <td><input type="number" name="qlRating25"></td>
            <td><input type="number" name="plRating25"></td>
            <td><input type="number" name="overallRating25"></td>
            <td><input type="text" name="remarks25"></td>
</tr>
<td>
  b) EPersons trained/provided with technical advise
</td>
            <td><input type="number" name="target26"></td>
            <td><input type="number" name="accomplished26"></td>
            <td><input type="date" name="submissionDate26"></td>
            <td><input type="date" name="completionDate26"></td>
            <td><input type="number" name="qtyRating26"></td>
            <td><input type="number" name="qlRating26"></td>
            <td><input type="number" name="plRating26"></td>
            <td><input type="number" name="overallRating26"></td>
            <td><input type="text" name="remarks26"></td>
</tr>
<td>
  c) Persons who avail the service who rated the service as good or better
</td>
            <td><input type="number" name="target27"></td>
            <td><input type="number" name="accomplished27"></td>
            <td><input type="date" name="submissionDate27"></td>
            <td><input type="date" name="completionDate27"></td>
            <td><input type="number" name="qtyRating27"></td>
            <td><input type="number" name="qlRating27"></td>
            <td><input type="number" name="plRating27"></td>
            <td><input type="number" name="overallRating27"></td>
            <td><input type="text" name="remarks27"></td>
</tr>
<td>
  d) Persons given training or advisory who rated the timeliness of service delivery as good or better
</td>
            <td><input type="number" name="target28"></td>
            <td><input type="number" name="accomplished28"></td>
            <td><input type="date" name="submissionDate28"></td>
            <td><input type="date" name="completionDate28"></td>
            <td><input type="number" name="qtyRating28"></td>
            <td><input type="number" name="qlRating28"></td>
            <td><input type="number" name="plRating28"></td>
            <td><input type="number" name="overallRating28"></td>
            <td><input type="text" name="remarks28"></td>
</tr>
<td>
  e) Technical advice responded within 3 days upon request
</td>
            <td><input type="number" name="target29"></td>
            <td><input type="number" name="accomplished29"></td>
            <td><input type="date" name="submissionDate29"></td>
            <td><input type="date" name="completionDate29"></td>
            <td><input type="number" name="qtyRating29"></td>
            <td><input type="number" name="qlRating29"></td>
            <td><input type="number" name="plRating29"></td>
            <td><input type="number" name="overallRating29"></td>
            <td><input type="text" name="remarks29"></td>
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
            <td><input type="number" name="target30"></td>
            <td><input type="number" name="accomplished30"></td>
            <td><input type="date" name="submissionDate30"></td>
            <td><input type="date" name="completionDate30"></td>
            <td><input type="number" name="qtyRating30"></td>
            <td><input type="number" name="qlRating30"></td>
            <td><input type="number" name="plRating30"></td>
            <td><input type="number" name="overallRating30"></td>
            <td><input type="text" name="remarks30"></td>
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
            <td><input type="number" name="target31"></td>
            <td><input type="number" name="accomplished31"></td>
            <td><input type="date" name="submissionDate31"></td>
            <td><input type="date" name="completionDate31"></td>
            <td><input type="number" name="qtyRating31"></td>
            <td><input type="number" name="qlRating31"></td>
            <td><input type="number" name="plRating31"></td>
            <td><input type="number" name="overallRating31"></td>
            <td><input type="text" name="remarks31"></td>
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
            <td><input type="number" name="target32"></td>
            <td><input type="number" name="accomplished32"></td>
            <td><input type="date" name="submissionDate32"></td>
            <td><input type="date" name="completionDate32"></td>
            <td><input type="number" name="qtyRating32"></td>
            <td><input type="number" name="qlRating32"></td>
            <td><input type="number" name="plRating32"></td>
            <td><input type="number" name="overallRating32"></td>
            <td><input type="text" name="remarks32"></td>
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
            <td><input type="number" name="target33"></td>
            <td><input type="number" name="accomplished33"></td>
            <td><input type="date" name="submissionDate33"></td>
            <td><input type="date" name="completionDate33"></td>
            <td><input type="number" name="qtyRating33"></td>
            <td><input type="number" name="qlRating33"></td>
            <td><input type="number" name="plRating33"></td>
            <td><input type="number" name="overallRating33"></td>
            <td><input type="text" name="remarks33"></td>
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
            <td><input type="number" name="target34"></td>
            <td><input type="number" name="accomplished34"></td>
            <td><input type="date" name="submissionDate34"></td>
            <td><input type="date" name="completionDate34"></td>
            <td><input type="number" name="qtyRating34"></td>
            <td><input type="number" name="qlRating34"></td>
            <td><input type="number" name="plRating34"></td>
            <td><input type="number" name="overallRating34"></td>
            <td><input type="text" name="remarks34"></td>
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
            <td><input type="number" name="target35"></td>
            <td><input type="number" name="accomplished35"></td>
            <td><input type="date" name="submissionDate35"></td>
            <td><input type="date" name="completionDate35"></td>
            <td><input type="number" name="qtyRating35"></td>
            <td><input type="number" name="qlRating35"></td>
            <td><input type="number" name="plRating35"></td>
            <td><input type="number" name="overallRating35"></td>
            <td><input type="text" name="remarks35"></td>
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
            <td><input type="number" name="target36"></td>
            <td><input type="number" name="accomplished36"></td>
            <td><input type="date" name="submissionDate36"></td>
            <td><input type="date" name="completionDate36"></td>
            <td><input type="number" name="qtyRating36"></td>
            <td><input type="number" name="qlRating36"></td>
            <td><input type="number" name="plRating36"></td>
            <td><input type="number" name="overallRating36"></td>
            <td><input type="text" name="remarks36"></td>
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
            <td><input type="number" name="target37"></td>
            <td><input type="number" name="accomplished37"></td>
            <td><input type="date" name="submissionDate37"></td>
            <td><input type="date" name="completionDate37"></td>
            <td><input type="number" name="qtyRating37"></td>
            <td><input type="number" name="qlRating37"></td>
            <td><input type="number" name="plRating37"></td>
            <td><input type="number" name="overallRating37"></td>
            <td><input type="text" name="remarks37"></td>
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
            <td><input type="number" name="target38"></td>
            <td><input type="number" name="accomplished38"></td>
            <td><input type="date" name="submissionDate38"></td>
            <td><input type="date" name="completionDate38"></td>
            <td><input type="number" name="qtyRating38"></td>
            <td><input type="number" name="qlRating38"></td>
            <td><input type="number" name="plRating38"></td>
            <td><input type="number" name="overallRating38"></td>
            <td><input type="text" name="remarks38"></td>
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
            <td><input type="numbert" name="target39"></td>
            <td><input type="number" name="accomplished39"></td>
            <td><input type="date" name="submissionDate39"></td>
            <td><input type="date" name="completionDate39"></td>
            <td><input type="number" name="qtyRating39"></td>
            <td><input type="number" name="qlRating39"></td>
            <td><input type="number" name="plRating39"></td>
            <td><input type="number" name="overallRating39"></td>
            <td><input type="text" name="remarks39"></td>
          </tr>
          <tr>
            <td>
              b) Submit....
            </td>
              <td><input type="number" name="target40"></td>
              <td><input type="number" name="accomplished40"></td>
              <td><input type="date" name="submissionDate40"></td>
              <td><input type="date" name="completionDate40"></td>
              <td><input type="number" name="qtyRating40"></td>
              <td><input type="number" name="qlRating40"></td>
              <td><input type="number" name="plRating40"></td>
              <td><input type="number" name="overallRating40"></td>
              <td><input type="text" name="remarks40"></td>
            </tr>
            <tr>
              <td>
                c) Increase....
              </td>
              <td><input type="number" name="target41"></td>
              <td><input type="number" name="accomplished41"></td>
              <td><input type="date" name="submissionDate41"></td>
              <td><input type="date" name="completionDate41"></td>
              <td><input type="number" name="qtyRating41"></td>
              <td><input type="number" name="qlRating41"></td>
              <td><input type="number" name="plRating41"></td>
              <td><input type="number" name="overallRating41"></td>
              <td><input type="text" name="remarks41"></td>
              </tr>
              <tr>
                <td>
                  d) ....
                </td>
                <td><input type="number" name="target42"></td>
                <td><input type="number" name="accomplished42"></td>
                <td><input type="date" name="submissionDate42"></td>
                <td><input type="date" name="completionDate42"></td>
                <td><input type="number" name="qtyRating42"></td>
                <td><input type="number" name="qlRating42"></td>
                <td><input type="number" name="plRating42"></td>
                <td><input type="number" name="overallRating42"></td>
                <td><input type="text" name="remarks42"></td>
                </tr>
                <tr>
                  <td>
                    e) ....
                  </td>
                  <td><input type="number" name="target43"></td>
                  <td><input type="number" name="accomplished43"></td>
                  <td><input type="date" name="submissionDate43"></td>
                  <td><input type="date" name="completionDate43"></td>
                  <td><input type="number" name="qtyRating43"></td>
                  <td><input type="number" name="qlRating43"></td>
                  <td><input type="number" name="plRating43"></td>
                  <td><input type="number" name="overallRating43"></td>
                  <td><input type="text" name="remarks43"></td>
                  </tr>
                
                  <tr>
                    <td colspan="7" rowspan = "2"><b>
                  Comments and Recommendation for Development Purposes
                  </b><br><br><br><br>Rating scale<br>5 - Outstanding<br>4 - Very Satisfactoy<br>3 - Satisfactory<br>2 - Unsatisfactory<br>1 - Poor 
                    </td>
                    <td style = "padding-right:20px; vertical-align:top; text-align:left;">Numerical Rating: <br><br><br><br><input type="number" name="numerical_rating" placeholder="RATING"></td>
                    <td style = "padding-left:40px; padding-right:40px; vertical-align:top; text-align:center;" colspan="2">Adjectival Rating:<br><br><br><br><input type="number" name="adjectival_rating" placeholder="RATING"></td>
                  </tr>
                  <tr style="height:100px;">
                    <td></td>
                  </tr>
                  <tr>
                    <td style = "text-align:center;"><b>Discussed with:<br><br><br><b><input type="text" name="discussed_with" placeholder="NAME"></td>
                    <td colspan="3" style = "text-align:center;"><b>Assessed by:<br><br><br><b><input type="text" name="assessed_by" placeholder="NAME"></</td>
                    <td colspan="3" style = "text-align:center;"><b>Checked by:<br><br><br><b><input type="text" name="checked_by" placeholder="NAME"></</td>
                    <td colspan="3" style = "text-align:center;"><b>Final Rating:<br><br><br><b><input type="text" name="final_rating" placeholder="NAME"></</b></td>
                  </tr>
                  <t>
                    <td style = "text-align:center;"><i>RATEE</td>
                    <td colspan="3" style = "text-align:center;"><i>Dean/Assoc.Dean</td>
                    <td colspan="3" style = "text-align:center;"><i>HRMO</td>
                    <td colspan="3" style = "text-align:center;"><i>Campus Director</i></td>
                  </t>
                  <tr>
                    <td  style="text-align:center">Date: <input type="date" name="date_discussed_with"></</td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_assessed_by"></td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_checked_by"></td>
                    <td colspan="3"  style="text-align:center">Date: <input type="date" name="date_final_rating"></td>
                  </tr>

    </table>
    <button type="submit">Submit</button>
</form>

</body>
</html>
