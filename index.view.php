
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <h1>Hello</h1>


    <!-- <ul class="list-group">
            <?php foreach ($person as $key => $feature) : ?>
            <li class="list-group-item"><strong><?= $key ?></strong>:<?= $feature ?>
        <?php endforeach ?>
    </ul> -->


    <ul class="list-group">
        <li class='list-group-item'>
            <strong>Name: </strong><?= $task['title']; ?>
        </li>

        <li class='list-group-item'>
            <strong>Due Date: </strong><?= $task['due']; ?>
        </li>

        <li class='list-group-item'>
            <strong>Person Responsible </strong><?= $task['assigned_to']; ?>
        </li>

        <li class='list-group-item'>
            <strong>Status: </strong><?= $task['completed'] ? 'Completed' : 'Incomplete'; ?>
        </li>

    </ul>


</body>

</html>
