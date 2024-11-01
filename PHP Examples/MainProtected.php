<?php
$pdo= new PDO('mysql:host=localhost;dbname=SQL_INJECTION_PROJECT', 'kaaucri', 'IT241Pwd!');


if(session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}

$errors = [];
$loginSuccess = false;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    // Get username and password from input fields
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
        // Stored Procedure
        $query = "SELECT * FROM LOGINS WHERE (USERNAME = ?) && (PASSWORD = ?) LIMIT 1";

        // Prepared Statement via...
        $stmt = $pdo->prepare($query);

        // ... Variable Binding.
        $stmt->execute([$username, $password]);

        $result = $stmt->fetchAll();

        if ($result) {
            echo "<script>alert('Logged in Successfully');</script>";
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
        }

        exit();
    }
    $pdo = null;
}
?>

<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <title>Parameterized Queries Instituted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-inline-block w-50 m-auto">
    <main class="log-in">
        <form action="MainProtected.php" method="post">
            <h1>Log in</h1>
            <?php if(empty($errors) === false): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach($errors as $error): ?>
                            <li><?= htmlentities($error) ?></li>
                            <!-- Display errors to the user -->
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="form-floating">
                <input id="username" name="username" type="text" class="form-control" placeholder="name@example.com" required />
                <label for="username">Email</label>
            </div>
            <div class="form-floating">
                <input id="password" name="password" type="text" class="form-control" placeholder="Password!123" required />
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

