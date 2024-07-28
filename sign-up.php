<?php
require_once ("functions.php");

$email = $_POST["email"];
$password = $_POST["password"];
$conf_password = $_POST["conf_password"];

if ($password != $conf_password) {
    alert("warning", "The passwords do not match");
    header("Location: getStarted.php");
    die();
}

$sql = "SELECT * FROM users WHERE email = '{$email}'";
$res = $conn->query($sql);

if ($res->num_rows != 0) {
    alert('danger', 'Email already exists');
    header("Location: getStarted.php");
    die();
}

$password = password_hash($password, PASSWORD_DEFAULT);



if (isset($_POST['org-name'])) {
    $org_name = $_POST['org-name'];
    $org_type = $_POST['org-type'];

    $sql = "INSERT INTO organizations (
        Name,
        Email,
        Password,
        OrgType
    ) VALUES (
        '{$org_name}',
        '{$email}',
        '{$password}',
        '{$org_type}'
    )";

    if ($conn->query($sql)) {
        if (login_org($email, $password)) {
            alert("success", "Account created successfully");
            header("Location: feed.php");
            die();
        } else {
            alert("success", "Now login :)");
            header("Location: getStarted.php");
            die();
        }

    } else {
        alert("danger", "Failed to create account");
        header("Location: getStarted.php");
        die();
    }

} else {
    $name = $_POST["name"];
    $surname = $_POST["surname"];

    $sql = "INSERT INTO users (
        FirstName,
        LastName,
        Email,
        Password
    ) VALUES (
        '{$name}',
        '{$surname}',
        '{$email}',
        '{$password}'
    )";

    if ($conn->query($sql)) {
        if (login_user($email, $password)) {
            alert("success", "Account created successfully");
            header("Location: userProfile.php");
            die();
        } else {
            alert("success", "Now login :)");
            header("Location: getStarted.php");
            die();
        }

    } else {
        alert("danger", "Failed to create account");
        header("Location: getStarted.php");
        die();
    }
}




// if (isset($_POST['user_type']) && $_POST['user_type'] === 'entrepreneur') {
//     // Handle entrepreneur registration


//     // $sql_entr = "INSERT INTO USERS (
//     //     NAME, 
//     //     SURNAME, 
//     //     EMAIL, 
//     //     PASSWORD
//     // ) VALUES (
//     // '($entr_name)', 
//     // '($entr_surname)', 
//     // '($entr_email)', 
//     // '($entr_pass)'
//     // )";

//     // if ($conn->query($sql_entr) === TRUE) {
//     //     alert("Registration successful");
//     //     header("Location: index.html");
//     // } else {
//     //     alert("Error: ". $sql_entr. "<br>". $conn->error);
//     //     header("Location: index.html");
//     // }

// } 
// elseif (isset($_POST['user_type']) && $_POST['user_type'] === 'organization') {

//     echo "Organization";
//     //     // Handle organization registration

//     //     if ($org_pass!= $org_conf_pass) {
// //         alert("Passwords do not match");
// //         header("Location: index.html");
// //         die();
// //     }

//     //     $org_pass = password_hash($org_pass, PASSWORD_DEFAULT);

//     //     $sql_org = "INSERT INTO USERS (
// //         NAME, 
// //         EMAIL, 
// //         PASSWORD,
// //         TYPE
// //     ) VALUES (
// //     '($org_name)', 
// //     '($org_email)', 
// //     '($org_pass)',
// //     '($org_type)'
// //     )";

//     //     if ($conn->query($sql_org) === TRUE) {
// //         alert("Registration successful");
// //         header("Location: index.html");
// //     } else {
// //         alert("Error: ". $sql_org. "<br>". $conn->error);
// //         header("Location: index.html");
// //     }


// }

// die();