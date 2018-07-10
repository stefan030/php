<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>

        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }

    </style>

</head>
<body>


    <header>
        <h1>

            <?php echo "Hello, " . $_GET['name']; ?>
            <br />
            <!-- Shorter way 'echo' transfers to '=' -->
            <?= "Hello, " . $_GET['name']; ?>
            <br />
            <?= "Hello, " . htmlspecialchars($_GET['name']); ?>

            <?= "Welcome abroad, your name is " . htmlspecialchars($_GET['first_name']) . ' You are ' . htmlspecialchars($_GET['age']) . " old." ?>




        </h1>
    </header>

</body>
</html>