<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Bataille Navale</title>
    <script>
        function changeClasse(td, couleur) {
            td.className = couleur;
        }
    </script>
</head>

<body>
    <h1>Bataille Navale</h1>

    <section class="game">
    <table id="plateau1" border="1">
        <tr>
            <!--La table contient des éléments tr qui représentent les lignes
            l'élément tr contient des éléments td qui représentent les différentes cases de la ligne-->
            <td></td>
            <td class="caseBataille">A</td>
            <td class="caseBataille">B</td>
            <td class="caseBataille">C</td>
            <td class="caseBataille">D</td>
            <td class="caseBataille">E</td>
            <td class="caseBataille">F</td>
            <td class="caseBataille">G</td>
            <td class="caseBataille">H</td>
            <td class="caseBataille">I</td>
            <td class="caseBataille">J</td>
        </tr>
        </table>

        <table id="plateau2" border="1">
            <tr>
                <td></td>
                <td class="caseBataille">A</td>
                <td class="caseBataille">B</td>
                <td class="caseBataille">C</td>
                <td class="caseBataille">D</td>
                <td class="caseBataille">E</td>
                <td class="caseBataille">F</td>
                <td class="caseBataille">G</td>
                <td class="caseBataille">H</td>
                <td class="caseBataille">I</td>
                <td class="caseBataille">J</td>
            </tr>
        </table>
        <!--<input type="text" id="coup" />
    <input type="button" id="jouer" value="Valider" />-->
    </section>
    <script src="grid.js"></script>
</body>

</html>