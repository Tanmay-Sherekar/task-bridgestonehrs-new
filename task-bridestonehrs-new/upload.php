<!-- <!?php
// Database connection
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "bridgestonehrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file is uploaded
if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == 0) {
    $file = $_FILES['csv_file']['tmp_name'];
    
    if (($handle = fopen($file, "r")) !== FALSE) {
        $headers = fgetcsv($handle); // Skip the headers

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Extract data from the CSV file
            $patient_name = $data[0];
            $patient_account = $data[1];
            $payment_date = $data[2];
            $service_date = $data[3];
            $code = $data[4];
            $billed_amount = $data[5];

            // Prepare and bind parameters to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO details (patient_name, patient_account, payment_date, service_date, code, billed_amount) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssd", $patient_name, $patient_account, $payment_date, $service_date, $code, $billed_amount);

            // Execute the query
            $stmt->execute();
        }
        fclose($handle);
        echo "Data has been successfully inserted.";
    } else {
        echo "Error reading the file.";
    }
} else {
    echo "Please upload a valid CSV file.";
}

$conn->close();
?> -->

<!--<!?php
// Database connection
$servername = "localhost";
$username = "root";  // Change this to your MySQL username
$password = "";      // Change this to your MySQL password
$dbname = "bridgestonehrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file is uploaded
if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == 0) {
    $file = $_FILES['csv_file']['tmp_name'];

    // Open the CSV file
    if (($handle = fopen($file, "r")) !== FALSE) {
        // Skip the headers
        $headers = fgetcsv($handle);

        // Loop through the rows in the CSV file
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Extract data from each row in the CSV
            $patient_name = trim($data[0]);
            $patient_account = trim($data[1]);
            $payment_date = trim($data[2]);
            $service_date = trim($data[3]);
            $code = trim($data[4]);
            $billed_amount = (is_numeric($data[5])) ? floatval($data[5]) : 0;  // Ensure it's a float value

            // Prepare and bind parameters to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO details (patient_name, patient_account, payment_date, service_date, code, billed_amount) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssd", $patient_name, $patient_account, $payment_date, $service_date, $code, $billed_amount);

            // Execute the query
            if ($stmt->execute()) {
                echo "Record for $patient_name has been inserted successfully.<br>";
            } else {
                echo "Error inserting record for $patient_name: " . $stmt->error . "<br>";
            }
        }

        // Close the CSV file after processing
        fclose($handle);
        echo "Data has been successfully inserted into the database.";
    } else {
        echo "Error reading the file.";
    }
} else {
    echo "Please upload a valid CSV file.";
}

// Close the database connection
$conn->close();
?>
-->

<?php
// Database connection
$servername = "localhost";
$username = "root";  // Change this to your MySQL username
$password = "";      // Change this to your MySQL password
$dbname = "bridgestonehrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file is uploaded
if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] == 0) {
    $file = $_FILES['csv_file']['tmp_name'];

    // Open the CSV file
    if (($handle = fopen($file, "r")) !== FALSE) {
        // Skip the headers
        $headers = fgetcsv($handle);

        // Loop through the rows in the CSV file
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Check if the row contains the expected number of columns
            if (count($data) < 6) {
                // Skip rows that don't have enough columns (we need at least 6 fields)
                continue;
            }

            // Extract data from each row in the CSV
            $patient_name = trim($data[0]);
            $patient_account = trim($data[1]);
            $payment_date = trim($data[2]);
            $service_date = trim($data[3]);
            $code = trim($data[4]);
            $billed_amount = (is_numeric($data[5])) ? floatval($data[5]) : 0;  // Ensure it's a float value

            // Prepare and bind parameters to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO details (patient_name, patient_account, payment_date, service_date, code, billed_amount) 
                                    VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssd", $patient_name, $patient_account, $payment_date, $service_date, $code, $billed_amount);

            // Execute the query
            if ($stmt->execute()) {
                echo "Record for $patient_name has been inserted successfully.<br>";
            } else {
                echo "Error inserting record for $patient_name: " . $stmt->error . "<br>";
            }
        }

        // Close the CSV file after processing
        fclose($handle);
        echo "Data has been successfully inserted into the database.";
    } else {
        echo "Error reading the file.";
    }
} else {
    echo "Please upload a valid CSV file.";
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload details through file</title>
    </head>
    <body>
        <h1>To See Details Visit below link</h1>
        <a href="view_data.html">View Details</a>
    </body>
</html>