import './bootstrap';

// Calcola la percentuale in base all'importo
function calcolaPercentuale(importo) {
    return (importo / 10000) * 100;
}

// Importo variabile
const importo = 20; // Puoi modificare questo valore con l'importo attuale

// Calcola la percentuale
const percentuale = calcolaPercentuale(importo);

// Seleziona l'elemento di riempimento della barra
const fill = document.getElementById('fill');

const percentualeNumero = document.getElementById('percentualeNumero');

// Aggiorna la larghezza del riempimento in base alla percentuale
fill.style.width = percentuale + '%';

// Aggiorna il numero della percentuale
percentualeNumero.textContent = percentuale;

const totale = document.getElementById('tot');

totale.innerHTML = importo;


