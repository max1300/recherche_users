<?php require_once 'layout\header.php'?>

<form class="forme" action="contact_process.php" method="GET">
    <p>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" />
    </p>

    <p>
        <div class="bouton">
            <input class='btn btn-primary' type="submit" value="Envoyer" />
        </div>
    </p>

</form>

<?php
require_once 'contact_process.php';

require_once 'layout\footer.php'?>