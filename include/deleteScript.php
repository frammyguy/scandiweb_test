<form action="index.php" id="delete-form" method="POST" novalidate hidden>
    <input type="text" id="textinput" name="textinput" value="check">
    <?php
        foreach ($checkboxcounter as $check)
            echo ('<input type="checkbox" id="' . $check . '" name="' . $check . '" class="delete-checks">');
    ?>
    <button id="formDelButton" type="submit">s</button>
</form>

<?php


if (isset($_POST['textinput']) && $_POST['textinput'] == 'check') {
    $db = new DB();

    $link = $db->connect();

    foreach ($_POST as $key => $row)
        if ($key != 'textinput')
            $db->deleteRow($link, $key);

    $_POST = null;
}