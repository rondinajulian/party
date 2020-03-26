function validate(){

    var usr = document.getElementById("usr");
    var pass = document.getElementById("pass");
    

    if(usr.value.trim() == ""){
        alert("Usiario vacio");
        usr.style.border = "solid 3px red";
        return false;
    }
    else if(pass.value.trim() == ""){
        alert("Ingresa una contraseña");
        pass.style.border = "solid 3px red";
        return false;
    }
  
}

function test(){
    alert ("hola");
}