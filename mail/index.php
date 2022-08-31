<?php

$retour = mail("mohamed-du-69780@hotmail.fr", "essai", "Salut les copains", "Mohamed.design@outlook.fr");
if ($retour) {
    echo "<p>L'email a bien été envoyé</p>";
}
