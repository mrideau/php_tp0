<?php
    if(array_key_exists('voiture', $_POST))
    {
        foreach ($_POST['voiture'] as $key => $value) {
        ?>
            <p><?php echo $key; ?>: <?php echo $value; ?></p>
        <?php
        }
    }
?>