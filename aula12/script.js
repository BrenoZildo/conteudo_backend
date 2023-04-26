// script.js
fetch('livro.json')
  .then(response => response.json())
  .then(data => {
    const dadosDiv = document.getElementById('dados');
    
    const nomeP = document.createElement('p');
    nomeP.textContent = `Nome: ${data.nome}`;
    dadosDiv.appendChild(nomeP);
    
    const idadeP = document.createElement('p');
    idadeP.textContent = `Idade: ${data.idade}`;
    dadosDiv.appendChild(idadeP);
    
    const emailP = document.createElement('p');
    emailP.textContent = `E-mail: ${data.email}`;
    dadosDiv.appendChild(emailP);
    
    const telefoneP = document.createElement('p');
    telefoneP.textContent = `Telefone: ${data.telefone}`;
    dadosDiv.appendChild(telefoneP);
  })
  .catch(error => console.error(error));
