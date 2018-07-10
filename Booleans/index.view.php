<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booleans</title>
</head>
<body>

    <h1>Task For The Day</h1>

    <ul>
            <li>
                <strong>Name of the title: </strong> <?= $task['title'] ?>
            </li>
            <li>
                <strong>Due: </strong> <?= $task['due'] ?>
            </li>
            <li>
                <strong>Assigned to: </strong> <?= $task['assigned_to'] ?>
            </li>
            <li>
                <strong>Status: </strong> <?= $task['completed'] ? 'Task has been completed!' : 'Pending'; ?>
            </li>
    </ul>

</body>
</html>