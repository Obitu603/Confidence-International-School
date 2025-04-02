<?php
include ('security.php');
require'dbcon.php';
include('message.php');
if (isset($_POST['login'])) {

// Sanitize user inputs
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Query to check if user exists
$sql = "SELECT * FROM user_info WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user data
    $user = $result->fetch_assoc();

    // Verify password
    if ($password === $user['password']) {
        // Calculate age based on date_of_birth
        $dateOfBirth = $user['date_of_birth'];
        $birthDate = new DateTime($dateOfBirth);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate)->y;

        // Store user info in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_type'] = $user['user_type'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['date_of_birth'] = $dateOfBirth;
        $_SESSION['age'] = $age;
        $_SESSION['email'] = $email;

        // Redirect based on user type
        if ($user['user_type'] === 'admin') {
            header("Location: admindashboard.php");
            exit;
        } elseif ($user['user_type'] === 'student') {
            header("Location: studentdashboard.php");
            exit;
        } else {
            $_SESSION['message'] = "Invalid user type.";
            header("Location: index.php");
            exit;
        }
    } else {
        // Incorrect password
        $_SESSION['message'] = "Invalid password.";
        header("Location: index.php");
        exit;
    }
} else {
    // Email not found
    $_SESSION['message'] = "Email does not exist.";
    header("Location: index.php");
    exit;
}

}

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: Home.php');
}

//add admin
if (isset($_POST['add_admin'])) {
    $username =  $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
        if($password ===  $confirmPassword)
        {
            $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
            $query_run = mysqli_query($conn, $query); 
            if($query_run)
            {
                $_SESSION['message'] = "Admin Profile Added";
                header('Location: dashboard.php');
            }
            else 
            {
                $_SESSION['message'] = "Admin Profile Not Added";
                header('Location: dashboard.php'); 
            }
        }
        else 
        {
            $_SESSION['message'] = "Password and Confirm Password Does Not Match";
            header('Location: dashboard.php');
        }
    }

    
//register

if (isset($_POST['regbtn'])) {
    // Sanitize user inputs
    $sname = mysqli_real_escape_string($conn, $_POST["sname"]);
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $DOB = mysqli_real_escape_string($conn, $_POST["DOB"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $SOO = mysqli_real_escape_string($conn, $_POST["SOO"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $cpassword = mysqli_real_escape_string($conn, $_POST["cpassword"]);
    $user_type = mysqli_real_escape_string($conn, $_POST["user_type"]);

    // Check if passwords match
    if ($password === $cpassword) {
        // Insert data into the user_info table with plain text password
        $sql = "INSERT INTO user_info (sur_name, first_name, last_name, email, address, dob, gender, phone_no, soo, user_type, password) 
                VALUES ('$sname', '$fname', '$lname', '$email', '$address', '$DOB', '$gender', '$phone', '$SOO', '$user_type', '$password')";

        if ($conn->query($sql) === TRUE) {
            // Registration successful
            $_SESSION['message'] = "Successfully Registered";
            header('Location: Home.php');
            exit;
        } else {
            // Registration failed
            $_SESSION['message'] = "Registration Failed: " . $conn->error;
            header('Location: Home.php');
            exit;
        }
    } else {
        // Passwords do not match
        $_SESSION['message'] = "Passwords do not match";
        header('Location: Home.php'); // Redirect back to the registration page
        exit;
    }
}

if (isset($_POST['pay'])) {
    $fname = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $lname = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $session = mysqli_real_escape_string($conn, $_POST["session"]);
    $term = mysqli_real_escape_string($conn, $_POST["term"]);
    $class = mysqli_real_escape_string($conn, $_POST["class"]);

    $sql = "INSERT INTO payment (first_name, last_name, email, session, term, class) 
    VALUES ('$sname', '$fname', '$lname', '$email', '$session', '$term', '$class')";

    
    if (mysqli_query($conn, $sql)) {
        echo "Payment record successfully added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    
    mysqli_close($conn);

}

?>