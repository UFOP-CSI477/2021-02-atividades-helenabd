async function carregarRegiao() {

    await fetch('https://servicodados.ibge.gov.br/api/v1/localidades/regioes')
    .then(response => response.json())
    .then(data => preencherSelect(data, "regioes"))
    .catch(error => console.error(error));

 }

function carregarEstados() {

    const regioes = document.getElementById("regioes");
    const regioes_index = regioes.selectedIndex;
    const regioes_id = regioes.options[regioes_index].value;

    limparSelect("estados");

    if(regioes_id == "") {
        return;
    }

    const estados_url = `https://servicodados.ibge.gov.br/api/v1/localidades/regioes/${regioes_id}/estados`;

    fetch(estados_url)
     .then(response => response.json())
     .then(data => preencherSelect(data, "estados"))
     .catch(error => console.error(error));

 }
 
 function preencherSelect(data, campo) {
     
     let select = document.getElementById(campo);
     limparSelect(campo);
 
     data.sort((a,b) =>  a.nome.localeCompare(b.nome));
 
     for(let index in data) {
         const {id, nome} = data[index];
 
         let option = document.createElement("option");
         option.value = id;
         option.innerHTML = nome;
 
         select.appendChild(option);
     }
 }
 
 function limparSelect(campo) {
     const select = document.getElementById(campo);
 
     while(select.length > 1) {
         select.remove(1);
     }
 }
 
 function carregarCidades() {
 
     const estados = document.getElementById("estados");
     const estados_index = estados.selectedIndex;
     const estados_id = estados.options[estados_index].value;
 
     limparSelect("cidades");
     
     if(estados_id == "") {
         return;
     }
 
     const cidades_url = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estados_id}/municipios`;
     
     fetch(cidades_url)
     .then(response => response.json())
     .then(data => preencherSelect(data, "cidades"))
     .catch(error => console.error(error));
 }
 
