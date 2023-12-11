// js/validacao.js



function validarCadastro() {
    var email = document.getElementById('cadastro-email').value;
    var celular = document.getElementById('cadastro-celular').value;
    var senha = document.getElementById('cadastro-senha').value;
    var placaCarro = document.getElementById('placa-carro-principal').value;

    // Validar o formato do email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, insira um email válido.');
        return false;
    }

    // Validar o formato do celular
    var celularRegex = /^\(\d{2}\)\d{5}-\d{4}$/;
    if (!celularRegex.test(celular)) {
        alert('Por favor, insira um número de celular válido. Ex: (11)91234-5678');
        return false;
    }

    // Validar a senha com no mínimo 6 caracteres
    if (senha.length < 6) {
        alert('A senha deve ter pelo menos 6 caracteres.');
        return false;
    }

    // Validar o formato da placa do carro
    var placaRegex = /^[A-Za-z]{3}\d{1}[A-Za-z]\d{2}$|^[A-Za-z]{3}-\d{4}$/;
    if (!placaRegex.test(placaCarro)) {
        alert('Por favor, insira uma placa de carro válida.');
        return false;
    }


}



