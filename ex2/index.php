<!-- titre, couleur, taille, poids, prix, description, stock, fournisseur -->

<?php
    foreach ($_POST as $key => $value) {
        ?>
            <p><?php echo $key; ?>: <?php echo $value; ?></p>
        <?php
    }
?>
<form method="post">
    <input type="text" name="titre" id="titre" placeholder="Titre">
    <input type="text" name="description" id="description" placeholder="Description">
    <input type="number" name="prix" id="prix" min="0" placeholder="Prix">
    <input type="text" name="fournisseur" id="fournisseur" placeholder="Fournisseur">
    <input type="text" name="taille" id="taille" placeholder="Taille">
    <input type="text" name="couleur" id="couleur" placeholder="Couleur">
    <input type="number" name="poids" id="poids" min="0" placeholder="Poids">
    <input type="number" name="stock" id="stock" min="0" placeholder="Stock">
    <input type="submit" value="Envoyer">
</form>