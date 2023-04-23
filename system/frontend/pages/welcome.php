<?php


session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../backend/login.php');
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location:index.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Welcome Page</title>
    <style>
    body {
        background: url('https://imgs.search.brave.com/tgHTqBgDzCVA1K3d-aDRB4x2dWhNtbWPaTUd-EbtSRA/rs:fit:1200:1200:1/g:ce/aHR0cDovL3d3dy5w/aXhlbHN0YWxrLm5l/dC93cC1jb250ZW50/L3VwbG9hZHMvMjAx/Ni8wNC9DdXRlLWRv/d25sb2FkLWthd2Fp/aS1iYWNrZ3JvdW5k/cy5qcGc');
        background-size: cover;
        background-repeat: no-repeat;
    }

    button {
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 20px;
        margin-right: 20px;
    }

    button:hover {
        cursor: pointer;
        background-color: red;
    }
    </style>
</head>

<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <form method="POST">
        <button type="submit" name="logout" value="Logout">Logout</button>
    </form>
</body>

</html>