

// 0 = nome; 1 = cpf; 2 = rendimento; 3 = aliquota; 4 = imposto

const urlParams = new URLSearchParams(window.location.search);


const nomeDados = urlParams.get("nome")
const cpfDados = urlParams.get("cpf")
const rendimentoDados = urlParams.get("rendimento")
const aliquotaDados = urlParams.get("aliquota")
const impostoDados = urlParams.get("imposto")

let nome = document.querySelector('#nome');
let cpf = document.querySelector('#cpf');
let rendimento = document.querySelector('#rendimento');
let aliquota = document.querySelector('#aliquota');
let imposto = document.querySelector('#imposto');

nome.textContent = nomeDados
cpf.textContent = cpfDados
rendimento.textContent = rendimentoDados
aliquota.textContent = aliquotaDados
imposto.textContent = impostoDados

console.log(nomeDados)