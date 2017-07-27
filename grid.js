let tableaujoueur = [];

function grid(addelement, tableau) { //addelement = argument pr rajouter un element futur

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
let creatall = grid('plateau1', tableaujoueur); //pr appeler la fonction
//console.log(tableaujoueur);