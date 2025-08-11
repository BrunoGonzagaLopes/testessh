
function validarform() {
    var validador = true
    const inpform = document.querySelectorAll(".inputclass")
    const email = document.getElementById('email')
    const opcoes = document.getElementsByName("metpagamento");
    

    if (!email.value.includes('@') && !email.value.includes(".com")) {
        validador = addblock(email)
       
        
    } else {
        if (email.classList.contains('block'))
            removeblock(email)
    }
    if (opcoes.length > 0 ) {
        for (let i = 0; i < opcoes.length; i++) {
        if (opcoes[i].checked) {
            validador = true
            break;
        }else{
            validador = false
        }
    } 
    }
    
    
    inpform.forEach(element => {
        console.log(element.value)
        if (element.value.trim() == '') {
            validador = addblock(element)
        } else {
            if (element.classList.contains('block'))
                removeblock(element)
        }


    });
    
    
if (validador) {
    document.getElementsByTagName('form')[0].submit()


}
}


function removeblock(campo) {
    campo.classList.remove("block")
}

function addblock(campo) {
    campo.classList.add("block")
    return false
}