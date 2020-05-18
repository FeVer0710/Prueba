function validar(){
    if(document.all.numero.value==''){
        alert('Introduzca un Numero');
        document.all.numero.focus();
        return false;
    }
}
