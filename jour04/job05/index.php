<form action="index.php" method="post">
    <label for="username">Username:</label>
    <input type="text"name="username" id="username"><br>
    <label for="password">Password:</label>
    <input type="password"name="password" id="password"><br>
    <input type="submit" value="submit">
</form>

<?php
if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
    echo "C’est pas ma guerre";
}
else{
    echo "Votre pire cauchemard";
}
