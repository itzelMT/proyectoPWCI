/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ocultar() {
    document.getElementById("claseDesc").style.display = 'block';
    document.getElementById("claseImg").style.display = 'none';
}

function regresar() {
    document.getElementById("claseDesc").style.display = 'none';
    document.getElementById("claseImg").style.display = 'block';
}

function trasladar(){
     document.getElementById("cardB").style.transform = "translateX(-401px)";
}

function trasladarBack(){
     document.getElementById("cardB").style.transform = "translateX(0)";
}