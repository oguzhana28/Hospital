<?php
	include "../common/header.php";
require_once "delete.logic.php";
?>
    <h1>Delete patiënt</h1>
    <p>Are you sure you want to delete:</p>
    <form method="post">
        <div>
            <input type="hidden" name="id" value="<?=$clients['id']?>">
            <label for="name">Firstname:</label>
            <span><?=$clients['Firstname']?></span>
        </div>
        <div>
            <label for="name">prefix:</label>
            <span><?=$clients['prefix']?></span>
        </div>
        <div>
            <label for="name">Lastname:</label>
            <span><?=$clients['Lastname']?></span>
        </div>
        <div>
            <label></label>
            <input type="submit" name="confirmed" value="Yes">
            <input type="submit" name="canceled" value="No">
        </div>
    </form>
    <?php
	include "../common/footer.php";
?>