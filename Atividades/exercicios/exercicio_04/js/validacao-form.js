function processForm() {
    let name = document.register.register_name;
    let age = document.register.register_age;
    let phone = document.register.register_phone;
    let street = document.register.register_adress_street;
    let number = document.register.register_adress_number;
    let district = document.register.register_adress_district;
    let city = document.register.register_adress_city;
    let state = document.register.register_adress_state;
    let country = document.register.register_adress_country;
    let cep = document.register.register_adress_cep;
    let cpf = document.register.register_documents_cpf;
    let rg = document.register.register_documents_RG;


    if (validate(name) && validate(age) && validate(phone) && validate(street) && validate(number) && validate(district) && validate(city) && validate(state) && validate(country) && validate(cep) && validate(cpf) && validate(rg)) {
        alert("Formulário enviado com sucesso!");
    }
}

function validate(field) {
    let v = field.value;

    if (v.length == 0 || v == "") {
        window.alert("Valor inválido. Informe corretamente");
        field.value = "";
        field.focus();
        return false;
    } 

    return true;
}