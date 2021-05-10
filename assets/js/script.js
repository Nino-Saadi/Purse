// Variable pour avoir data du donghut
var donghut = document.getElementById('donghut_chart')
var exp_value = donghut.dataset.exp
var inc_value = donghut.dataset.inc

// === include 'setup' then 'config' above ===

// Set-up

const data = {
  labels: [
    'Dépenses',
    'Revenus',
  ],
  datasets: [{
    label: 'My Donghut Chart',
    data: [exp_value, inc_value],
    backgroundColor: [
      '#FAAAC0',
      '#F8B48F',
    ],
    hoverOffset: 6
  }]
};


// Config
const config = {
  type: 'doughnut',
  data: data,
};

// Chargement de la var donghut
var donghut = new Chart(
  donghut,
  config
);