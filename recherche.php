<?php require_once 'layout\header.php'?>

<form class="forme" action="contact_process.php" method="GET">
    <p>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" />
    </p>

    <p>
        <input class='btn-primary' type="submit" value="Envoyer" />
    </p>

</form>

<?php
require_once 'contact_process.php';

require_once 'layout\footer.php'?>