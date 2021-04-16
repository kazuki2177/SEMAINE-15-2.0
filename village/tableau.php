<!DOCTYPE html>
<html lang="fr">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tableau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    ?>
</head>

<body>

    <div class="container">

        <!-- Début de page -->

        <?php include "Header/header_tableau.php"; ?>

        <?php

        //Récupération des articles
        $requete = 'SELECT * FROM produits where pro_stock != 0 ';

        // On prépare la requête
        $result = $db->prepare($requete);


        // On exécute
        $result->execute();

        if (!$result) {
            $tableauErreurs = $db->errorInfo();
            echo $tableauErreur[1];
            die("Erreur dans la requête");
        }

        if ($result->rowCount() == 0) {
            // Pas d'enregistrement
            die("La table est vide");
        }

        ?>

        <div class="row ">

            <div class="col-12 col-sm-12">

                <!-- tableau -->
                <section>
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">photo</th>
                                    <th scope="col">ID </th>
                                    <th scope="col">Référence</th>
                                    <th scope="col">Libellé</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Couleur</th>
                                    <th scope="col">Ajout</th>
                                    <th scope="col">Modif</th>
                                    <th scope="col">Bloqué</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>'; ?>
                                    <td><img src="Src/Img/img_outil/<?= $row->pro_id . "." . $row->pro_photo; ?>" alt="Article" width="100">.</td>

                                    <?php
                                    echo "<th class='text-muted'>" . $row->pro_id . "</th>";
                                    echo "<th class='text-muted'>" . $row->pro_ref . "</th>";
                                    echo '<th><a class="text-muted" href="detail.php?pro_id=' . $row->pro_id . '" title=' . $row->pro_libelle . '>' . $row->pro_libelle . '</a></th>';
                                    echo "<th class='text-muted'>" . $row->pro_prix . "</th>";

                                    if ($row->pro_stock == 0) {
                                        echo "<th class='text-muted'>" . "Rupture de stock" . "</th>";
                                    } else {
                                        echo "<th class='text-muted'>" . $row->pro_stock . "</th>";
                                    }

                                    echo "<th class='text-muted'>" . $row->pro_couleur . "</th>";
                                    echo "<th class='text-muted'>" . $row->pro_d_ajout . "</th>";
                                    echo "<th class='text-muted'>" . $row->pro_d_modif . "</th>";
                                    echo "<th class='text-muted'>" . $row->pro_bloque . "</th>"; ?>

                                <?php
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

        </div>

        <!-- Bas de page -->

        <?php include "Footer/footer.php"; ?>

    </div>
    <!-- script boostrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>