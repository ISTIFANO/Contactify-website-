<!-- <?php
define('PROJECT_ROOT', dirname(dirname(__DIR__)));
 require_once PROJECT_ROOT . '/vendor/autoload.php';
include(PROJECT_ROOT . "/views/connexion.php");
include(PROJECT_ROOT . "/views/Crud.php");

$fetchingData = new Crud();
$result = $fetchingData->ListerContact();


if ($result) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nom']."</td>
            <td>".$row['prenom']."</td>
            <td>".$row['email']."</td>
            <td>".$row['telephone']."</td>
            <td>
                <a href='edit.php?id=".$row['id']."'>Modifier</a>
                <a href='delete.php?id=".$row['id']."'>Supprimer</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Erreur lors de la récupération des contacts";
}
?> -->