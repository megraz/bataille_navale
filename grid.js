let tableaujoueur = [];
let tableauennemi = []; // on crée un tableau vide qui va contenie le tout
let ennemigrid = createGrid('plateau2', tableauennemi); //on demade au tableau de l'ennemi de faire comme le premier
let creatall = createGrid('plateau1', tableaujoueur); //pr appeler la fonction: premier tableau créé à mettre en dernier pr être lu en premier

function createGrid(addelement, tableau) { //addelement = argument pr rajouter un element futur

    for (let x = 0; x < 10; x++) {
        tableau[x] = [];
        let tr = document.createElement('tr');
        tr.className = 'ligne' + x;
        document.body.querySelector('#' + addelement).appendChild(tr);
        for (let y = 0; y < 11; y++) {
            if (y == 0) {
                let td = document.createElement('td');
                td.className = 'caseBataille';
                td.textContent = x + 1; //l'intérieur de la balise td = X//
                tableau[x][y] = td;
                document.body.querySelector('.ligne' + x).appendChild(td);
            } else {
                let td = document.createElement('td');
                td.className = 'caseBataille';
                document.body.querySelector('.ligne' + x).appendChild(td);
            }
        }
    }
    return tableau;
}
//console.log(tableaujoueur);