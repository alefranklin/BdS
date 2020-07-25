/*-- CONTROLLO INPUT LOGIN --*/

// Controllo che l'username sia una stringa di almeno 5 
// caratteri, che contiene lettere maiuscole o minuscole,
// numeri oppure i simboli '_', '.', '-'
function checkInput(input){
    var regex = /(^[a-zA-Z0-9_.-]{5,})+$/;
    return regex.test(input.value);
    
}

function checkLoginForm(){
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var errori = document.getElementById("errori-login");
    var userOk = true;
    var passOk = true;
    errori.innerText = "";
    if(checkInput(username)){
        userOk = true;
    } else {
        errori.innerText += "Username non valido\n";
        userOk = false;
    }
    if(checkInput(password)){
        passOk = true;
    } else {
        errori.innerText += "Password non valida\n";
        passOk = false;
    }
    return (passOk && userOk);
}

/*-- CONTROLLO INPUT PRODOTTI --*/

function checkNome(input){
    input.value = input.value.normalize("NFD").replace(/[\u0300-\u036f]/g, "");//normalizzo le lettere accentate
    var regex = /^[a-zA-Z0-9\x20]{4,40}$/;
    return regex.test(input.value);
}

function checkCategoria(input){
    var regex = /strumento|accessorio/;
    return regex.test(input.value);
}

function checkCosto(input){
    var regex = /\d+(\.\d{1,2})?$/;
    console.log(input.value);
    return regex.test(input.value);
}

function checkImmagine(input){
    var allowedFileExtensions = ['jpeg', 'jpg', 'png'];
    return allowedFileExtensions.includes(input.value.split(".").pop());
}
function checkProductInput(){
    var nome = document.getElementById("nome");
    var categoria = document.getElementById("categoria");
    var costo = document.getElementById("costo");
    var immagine = document.getElementById("immagine"); 
    var nomeOk = catOk = costOk = imgOk = false;
    var errori = document.getElementById("errori-product");
    errori.innerText = "";

    if(checkNome(nome)){
        nomeOk = true;
    } else {
        nomeOk = false;
        errori.innerText += "Nome non valido\n";
    }

    if(checkCategoria(categoria)){
        catOk = true;
    } else {
        catOk = false;
        errori.innerText += "Categoria non valida\n";
    }

    if(checkCosto(costo)){
        costOk = true;
    } else {
        costOk = false;
        errori.innerText += "Costo non valido\n";
    }

    if(checkImmagine(immagine)){
        imgOk = true;
    } else {
        imgOk = false;
        errori.innerText += "Immagine non valida\n";
    }

    return (nomeOk&&catOk&&costOk&&imgOk);
}

function checkDescrizione(input){
    input.value = input.value.normalize("NFD").replace(/[\u0300-\u036f]/g, "");//normalizzo le lettere accentate
    var regex = /^[a-zA-Z0-9\x20]{20,200}$/;
    return regex.test(input.value);
}

function checkServiceInput(){
    var nome = document.getElementById("nome");
    var costo = document.getElementById("costo");
    var descrizione = document.getElementById("descrizione");
    var nomeOk = costOk = descOk = false;
    var errori = document.getElementById("errori-service");
    errori.innerText = "";

    if(checkNome(nome)){
        nomeOk = true;
    } else {
        nomeOk = false;
        errori.innerText += "Nome non valido\n";
    }

    if(checkDescrizione(descrizione)){
        descOk = true;
    } else {
        descOk = false;
        errori.innerText += "Descrizione non valida \n";
    }

    if(checkCosto(costo)){
        costOk = true;
    } else {
        costOk = false;
        errori.innerText += "Costo non valido\n";
    }

    return (nomeOk&&costOk);
}

function checkBookForm(){
    var nome = document.getElementById("nome");
    var cognome = document.getElementById("cognome");
    var data = document.getElementById("data");
    var ora = document.getElementById("ora");
    var email = document.getElementById("email");

    

    return false;

}