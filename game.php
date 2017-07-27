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
            <tr>
                <td class="caseBataille ">1</td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="A1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="B1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="C1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="D1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="E1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="F1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="G1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="H1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="I1 "></td>
                <td class="caseBataille" onclick="changeClasse(this, 'red');" id="J1 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">2</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I2 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J2 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">3</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I3 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J3 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">4</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I4 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J4 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">5</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I5 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J5 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">6</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I6 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J6 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">7</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I7 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J7 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">8</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I8 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J8 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">9</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I9 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J9 "></td>
            </tr>
            <tr>
                <td class="caseBataille ">10</td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="A10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="B10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="C10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="D10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="E10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="F10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="G10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="H10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="I10 "></td>
                <td class="caseBataille " onclick="changeClasse(this, 'red');" id="J10 "></td>
            </tr>
        </table>
        <!--<input type="text" id="coup" />
    <input type="button" id="jouer" value="Valider" />-->
    </section>
    <script src="grid.js"></script>
</body>

</html>