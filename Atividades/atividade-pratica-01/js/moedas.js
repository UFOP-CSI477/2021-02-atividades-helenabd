
async function carregarMoedas() {
    await fetch('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$format=json')
    .then(response => response.json())
    .then(data => preencherSelect(data.value, "moeda_inicial"))
    .catch(error => console.error(error));

    await fetch('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/Moedas?$top=100&$format=json')
    .then(response => response.json())
    .then(data => preencherSelect(data.value, "moeda_final"))
    .catch(error => console.error(error));
}

function preencherSelect(data, campo) {
    let select = document.getElementById(campo);

    data.sort((a, b) => a.nomeFormatado.localeCompare(b.nomeFormatado));

    for (let index in data) {
        const {simbolo, nomeFormatado} = data[index];

        let option = document.createElement("option");
        option.value = simbolo;
        option.innerHTML = nomeFormatado;
        
        select.appendChild(option);
    }
    
}

async function converterMoeda() {
    let conversao = lerDados();
    console.log(conversao);

    let valor_inicial = document.getElementById('valor_inicial');
    valor_inicial.innerHTML = '';
    let valor_final = document.getElementById('valor_final');
    valor_final.innerText = 0;
    let data_cotacao_final = document.getElementById('data_cotacao_final');
    data_cotacao_final.innerText = '';
    let conversao_inicial = document.getElementById('conversao');
    conversao_inicial.innerText = '';
    let conversao_final = document.getElementById('conversao_final');
    conversao_final.innerText = '';

    if(validar(conversao)) {
        let valorConversao = 0;
        let valor = parseFloat(conversao.valor);

        let data = conversao.data.split('-');
        let dataConvertida = data[1] + '-' + data[2] + '-' + data[0];



        if (conversao.moedaFinal == 'BRL') {
            let cotacao = await valorCotacao(conversao.moedaInicial, dataConvertida);
            valorConversao = valor * cotacao;
        }
        else if(conversao.moedaInicial == 'BRL') {
            let cotacao = await valorCotacao(conversao.moedaFinal, dataConvertida);
            console.log(cotacao);
            valorConversao = valor / cotacao;
        } else {
            let cotacaoInicial = await valorCotacao(conversao.moedaInicial, dataConvertida);
            if(cotacaoInicial != 0) {
                let cotacaoFinal = await valorCotacao(conversao.moedaFinal, dataConvertida);
                valorConversao = valor * cotacaoInicial / cotacaoFinal;
            } else {
                valorConversao = 0;
            }
        }
        
        valor_inicial.innerText = valor.toFixed(2);
        valor_final.innerText = (valorConversao == 'Infinity') ? '0,00' : valorConversao.toFixed(2);
        data_cotacao_final.innerText = data.reverse().join('/');
        conversao_inicial.innerText = conversao.moedaInicial;
        conversao_final.innerText = conversao.moedaFinal;
    }
    cancelar();
}   

function lerDados() {
    let conversao = {};
    
    conversao.moedaInicial = document.getElementById('moeda_inicial').value;
    conversao.moedaFinal = document.getElementById('moeda_final').value;
    conversao.valor = document.getElementById('valor').value;
    conversao.data = document.getElementById('data_cotacao').value;

    return conversao;
}

function cancelar() {
    document.getElementById('moeda_inicial').value = '';
    document.getElementById('moeda_final').value = '';
    document.getElementById('valor').value = '';
    document.getElementById('data_cotacao').value = '';
}

function validar(conversao) {
    let msg = '';

    if(conversao.moedaInicial == '') {
        msg += '- Moeda de conversão não informada \n';
    }
    if(conversao.moedaFinal == '') {
        msg += '- Moeda a ser convertida não informada \n';
    }
    if(conversao.valor == '') {
        msg += '- Valor não informado \n';
    }
    if(conversao.data == '') {
        msg += '- Data não informada \n';
    }
    if (msg != '') {
        alert(msg);
        return false;
    }
    console.log(msg);
        
    return true;
}

async function valorCotacao(moeda, data_cotacao) {
    const response = await fetch('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaDia(moeda=@moeda,dataCotacao=@dataCotacao)?@moeda=\'' + moeda + '\'&@dataCotacao=\'' + data_cotacao + '\'&$format=json');
    const responseInJSON = await response.json();
    console.log(responseInJSON.value);

    if(responseInJSON.value.length == 0) {
        alert('Cotação não encontrada para o dia solicitado');
        return 0;
    } else {
        let index = responseInJSON.value.length - 1;   
        return responseInJSON.value[index].cotacaoCompra;
    }
}
