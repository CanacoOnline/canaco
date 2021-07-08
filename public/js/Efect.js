
        var registroCliente = document.getElementById("RegistroCliente");
        var registroUsuario = document.getElementById("RegistroUsuario");
        var efecto = document.getElementById("btnEfect");
        var tam = document.getElementById("cajaP");
        var paisaje= document.getElementById("paisaje");
        var group=document.getElementById("input-group");

        function RegistroUsuario(){
            registroCliente.style.left = "-400px"; 
            registroUsuario.style.left="15px";
            efecto.style.left="110px";
            tam.style.height="680px";
            paisaje.style.height="680px";
            group.style.height="680px";
        }
        function RegistroCliente(){
            registroCliente.style.left = "15px"; 
            registroUsuario.style.left="450px";
            efecto.style.left="0px";
            tam.style.height="600px";
            paisaje.style.height="600px";
            group.style.height="600px";
        }