/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*logn */
/*para validar campos vacios*/
function validarCampos() {
    var user, pass;
    user = document.getElementById("txt1").value;
    pass = document.getElementById("txt2").value;
    if (user === "" || pass === "") {
        alert("campos vacios");
        document.getElementById("txt1").value = "";
        document.getElementById("txt2").value = "";
        return false;
    } else {
        return true;
    }
}
