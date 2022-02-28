<!-- marque, modele, couleur, km, carburant, annee, prix, puissance,
options -->
<form action="voiture.php" method="post">
    <input type="text" name="voiture[marque]" id="marque" placeholder="Marque">
    <input type="text" name="voiture[modele]" id="modele" placeholder="Modele">
    <input type="text" name="voiture[couleur]" id="couleur" placeholder="Couleur">
    <input type="text" name="voiture[km]" id="km" placeholder="km">
    <input type="text" name="voiture[carburant]" id="carburant" placeholder="Carburant">
    <input type="text" name="voiture[annee]" id="annee" placeholder="Annee">
    <input type="number" name="voiture[prix]" id="prix" min="0" placeholder="Prix">
    <input type="text" name="voiture[puissance]" id="puissance" min="0" placeholder="Puissance">
    <input type="submit" value="Vrooom">
</form>