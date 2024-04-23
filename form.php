<?php

$title = "Commander";

include_once 'header.php';

require_once 'database.php';


function displayMenu()
{
    $conn = connectToDB();
    $tables = ['entrées', 'plats', 'desserts', 'boissons'];
    foreach ($tables as $table) {
        $tab = selectFrom($conn, $table);
        echo '<fieldset>
            <legend>' . ucfirst($table) . '</legend>';
        foreach ($tab as $t) {
            $id = $t['html_id'];
            $title = $t['title'];
            $desc = $t['description'] ?? '';
            $desc = isset($t['description']) ? '<span>(' . $t["description"] . ')</span>' : '';
            echo "<div>
                <input type='radio' name='$table' id='$id' value='$title'>
                <label for='$id'>$title $desc</label>
            </div>";
        };
        echo '</fieldset>';
    }
}

?>

<form action="post.php" method="post">
    <h2>Composez votre menu :</h2>

    <?php displayMenu() ?>

    <input type="submit" name="valider" value="Valider">
</form>