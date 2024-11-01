<?php
require_once './shared/db.inc';
/**
 * @var mysqli $conn
 */

if($conn->connect_error)
{
    die("Failed connection - " . $conn->connect_error);
}

if(session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}
$errors = [];
$loginSuccess = false;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if(empty($username))
    {
        $errors[] = "Username is required.";
    }
    if(empty($password))
    {
        $errors[] = "Password is required.";
    }
    if(empty($errors)) {
        $sql = "SELECT * FROM LOGINS WHERE (USERNAME = '$username') AND (PASSWORD = '$password') LIMIT 1;";
        error_log($sql);
        $conn->real_query($sql);
        $result = $conn->use_result();
        foreach($result as $row) {
            if ($row) {
                echo $row['USERNAME'] . "\n";
                $loginSuccess = true;
            }
        }
    }
}
?>

<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Parameterized Queries Failed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-inline-block w-50 m-auto">
    <main class="log-in">
        <form action="ParameterizedQueriesUnprotected.php" method="post">
            <h1>Log in</h1>
            <div class="form-floating">
                <input id="username" name="username" type="text" class="form-control" placeholder="name@example.com" required />
                <label for="username">Email</label>
            </div>
            <div class="form-floating">
                <input id="password" name="password" type="password" class="form-control" placeholder="Password!123" required />
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
