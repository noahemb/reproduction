<?php

$tab = ['nom' => 'durant','prenom' => 'loic','age' => '29','metier' => 'webmaster', 'site' => 'openclassroom','lien' => 'https://www.openclassrooms.com/',['nom' => 'dupont','prenom' => 'michel','age' => '55','metier' => 'intégrateur', 'site' => 'alsacreations','lien' => 'https://www.asacreations.com/',['nom' => 'martin','prenom' => 'yannick','age' => '25','metier' => 'développeur', 'site' => 'creative juiz','lien' => 'https://www.creativejuiz.fr/',]]];
echo '<pre>';
print_r($tab);
echo '</pre>';

echo '<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        background-color: black; 
        color: white;
    }
    td {
        padding: 10px;
        border: 1px solid black;
        background-color: red;
    }
</style>';

echo '<table>';
echo '<tr>';
echo '<th>NOM</th>';
echo '<th>PRÉNOM</th>';
echo '<th>ÂGE</th>';
echo '<th>PROFESSION</th>';
echo '<th>SITE WEB</th>';
echo '</tr>';
foreach ($tab as $personne) {
    echo '<tr>';
    echo '<td>' . $personne['nom'] . '</td>';
    echo '<td>' . $personne['prenom'] . '</td>';
    echo '<td>' . $personne['age'] . ' ans</td>';
    echo '<td>' . $personne['metier'] . '</td>';
    echo '<td><a href="' . $personne['lien'] . '" style="color: white;">' . $personne['site'] . '</a></td>';
    echo '</tr>';
}

echo '</table>';


