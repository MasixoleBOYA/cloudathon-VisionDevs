<?php

// Start the session if it hasn't already been started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Create a new connection to the MySQL database
$conn = new mysqli('localhost', 'root', '', 'vc_database');

// Function to log out the user
function logout_user()
{
    // Check if the 'user' session variable is set and unset it
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }

    // Display a success message and redirect to login.php
    alert('success', 'Logged out');
    header("Location: login.php");
    die();
}

// Function to set an alert message in the session
function alert($type, $message)
{
    $_SESSION['alert']['type'] = $type;
    $_SESSION['alert']['message'] = $message;
}

// Function to check if a user is logged in
function is_logged_in()
{
    // Return true if 'user' session variable is set, otherwise false
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

// Function to log in a user
function login_user($email, $password)
{
    global $conn;

    // Query the database for the user with the given email
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $res = $conn->query($sql);

    // If no user is found, set an alert and return false
    if ($res->num_rows < 1) {
        alert("danger", "Email does not exist");
        return false;
    }

    // Fetch the user data
    $row = $res->fetch_assoc();

    // Verify the password and set an alert if incorrect
    if (!password_verify($password, $row['password'])) {
        alert("danger", "You entered wrong password");
        return false;
    }

    // Set the 'user' session variable and set a success alert
    $_SESSION['user'] = $row;
    alert("success", "Logged in successfully");
    return true;
}

// Function to insert data into a database table
function db_insert($table_name, $data)
{
    global $conn;
    $sql = "INSERT INTO $table_name ";

    // Prepare the column names and values for the SQL query
    $column_names = "(";
    $column_values = "(";

    $is_first = true;
    foreach ($data as $key => $value) {
        if ($is_first) {
            $is_first = false;
        } else {
            $column_names .= ",";
            $column_values .= ",";
        }
        $column_names .= $key;

        // Escape string values for the SQL query
        $gettype = gettype($value);
        if ($gettype == 'string') {
            $v = $conn->real_escape_string($value);
            $column_values .= "'$v'";
        } else {
            $column_values .= $value;
        }
    }
    $column_names .= ")";
    $column_values .= ")";

    // Combine the column names and values into the SQL query
    $sql .= $column_names . " VALUES " . $column_values;

    // Execute the query and return true if successful, otherwise false
    if ($conn->query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to select data from a database table
function db_select($table, $condition = null)
{
    $sql = "SELECT * FROM $table ";
    if ($condition != null) {
        $sql .= "WHERE $condition ";
    }
    global $conn;

    // Execute the query and fetch the result rows
    $res = $conn->query($sql);
    $rows = [];
    while ($row = $res->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}
?>
