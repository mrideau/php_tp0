<?php
    if (array_key_exists('message', $_POST))
    {
        ?>
        <p>Message: <?php echo htmlspecialchars($_POST['message'], ENT_QUOTES) ?></p>
        <?php
    }
?>

<form method="post">
    <input type="text" name="message" id="message">
    <input type="submit" value="Envoyer">
</form>