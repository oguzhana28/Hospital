<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
    <h1>Edit patiënt</h1>
    <form method="post">
        <div>
            <input type="hidden" name="id" value="<?=$clients['id']?>">
            <label for="name">Firstname:</label>
            <input type="text" id="Firstname" name="Firstname" value="<?=$clients['Firstname']?>">
        </div>
        <div>
            <label for="name">prefix:</label>
            <input type="text" id="prefix" name="Prefix" value="<?=$clients['prefix']?>">
        </div>
        <div>
            <label for="name">Lastname:</label>
            <textarea id="Lastname" name="Lastname">
                <?=$clients['Lastname']?>
            </textarea>
        </div>
        <div>
            <label></label>
            <input type="submit" value="Save">
        </div>
    </form>
    <?php
	include "../common/footer.php";
?>