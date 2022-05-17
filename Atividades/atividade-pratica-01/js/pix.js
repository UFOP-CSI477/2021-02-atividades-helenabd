class Pix {

    constructor() {
        this.id = 1;
        this.pixArray = [];
    }

    salvar() {
        let pix = this.lerDados();
        console.log(pix);

        if(this.validar(pix)) {
            this.adicionarPix(pix);
            alert('Pix salvo com sucesso');
        }
        
        this.listarPix();
        this.cancelar();
    }

    lerDados() {
        let pix = {};

        pix.id = this.id;
        pix.tipo = document.getElementById('tipo_chave').value;
        pix.chave = document.getElementById('valor_chave').value;
        pix.banco = document.getElementById('bank').value;
        pix.operacao = document.getElementById('operacao').value;
        pix.valor = document.getElementById('valor').value;
        pix.data = document.getElementById('data').value;

        return pix;
    }

    listarPix() {
        let tbody = document.getElementById('tbody');
        tbody.innerText = '';
        let total_value = document.getElementById('total_value');
        total_value.innerText = 0;
        let total = 0;
        
        for(let i = 0; i < this.pixArray.length; i++) {
            let tr = tbody.insertRow();

            let td_id = tr.insertCell();
            let td_tipo = tr.insertCell();
            let td_chave = tr.insertCell();
            let td_banco = tr.insertCell();
            let td_operacao = tr.insertCell();
            let td_valor = tr.insertCell();
            let td_data = tr.insertCell();

            let data = this.pixArray[i].data.split('-').reverse().join('/');
            let valor =  parseFloat(this.pixArray[i].valor).toFixed(2).replace('.', ',');

            td_id.innerText = this.pixArray[i].id;
            td_tipo.innerText = this.pixArray[i].tipo;
            td_chave.innerText = this.pixArray[i].chave;
            td_banco.innerText = this.pixArray[i].banco;
            td_operacao.innerText = this.pixArray[i].operacao;
            td_valor.innerHTML = valor;
            td_data.innerText = data;


            if(this.pixArray[i].operacao == 'Envio') {
                total -= parseFloat(this.pixArray[i].valor);
            } else {
                total += parseFloat(this.pixArray[i].valor);
            }
            
        }

        total_value.innerText = 'R$ ' + total.toFixed(2).replace('.', ',');
}

    adicionarPix(pix) {
        this.pixArray.push(pix);
        this.id++;
    }

    validar(pix) {
        let msg = '';
        
        if(pix.tipo == '') {
            msg += '- Tipo de chave não informado \n';
        }
        if(pix.chave == '') {
            msg += '- Chave não informada \n';
        }
        if(pix.banco == '') {
            msg += '- Banco não informado \n';
        }
        if(pix.operacao == '') {
            msg += '- Operação não informada \n';
        }
        if(pix.valor == '') {
            msg += '- Valor não informado \n';
        }
        if(pix.data == '') {
            msg += '- Data não informada \n';
        }
        if (msg != '') {
            alert(msg);
            return false;
        }
        console.log(msg);
            
        return true;
    }

    cancelar() {
        document.getElementById('tipo_chave').value = '';
        document.getElementById('valor_chave').value = '';
        document.getElementById('bank').value = '';
        document.getElementById('operacao').value = '';
        document.getElementById('valor').value = '';
        document.getElementById('data').value = '';
    }



}

var pix = new Pix();


async function carregarBancos() {
    await fetch('https://brasilapi.com.br/api/banks/v1')
    .then(response => response.json())
    .then(data => preencherSelect(data, "bank"))
    .catch(error => console.error(error));
}

function preencherSelect(data, campo) {
    let select = document.getElementById(campo);
    // limparSelect(campo);

    data.sort((a, b) => a.name.localeCompare(b.name));

    for (let index in data) {
        const {code, name} = data[index];

        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = name;
        
        
        select.appendChild(option);
    }
    
}

function limparSelect(campo) {
    const select = document.getElementById(campo);

    while(select.length > 1) {
        select.remove(1);
    }
}
