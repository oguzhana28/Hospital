<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
    <h1>New patiënt</h1>
    <form method="post">
        <div>
            <label for="Firstname">Firstname:</label>
            <input type="text" id="name" name="Firstname">
        </div>
        <div>
            <label for="Prefix">prefix:</label>
            <input type="text" id="species" name="prefix">
        </div>
        <div>
            <label for="name">Lastname:</label>
            <textarea id="status" name="Lastname"></textarea>
        </div>
        <div>
            <label></label>
            <input type="submit" value="Save">
        </div>
    </form>
    <?php
	include "../common/footer.php";
?>