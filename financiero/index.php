
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Ejercicio financiero</title>
    <!-- CONEXION PHP -->
  <style>
    #botonSiguiente, #botonSiguienteDos, #botonSiguienteTres, #botonSiguienteGuardar, #botonSiguienteGuardarUltimo{
        border:1px solid black;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:5px;
        padding-top:5px;
        background-color: #6b6b6b;
    }

    #botonSiguiente:hover, #botonSiguienteDos:hover, #botonSiguienteTres:hover, #botonSiguienteGuardar:hover, #botonSiguienteGuardarUltimo:hover{
        background-color: #dbd9d9;
    }

    #ApareceSiguienteTres h2{
      color:green;
      text-align:center;
    }

    #testingTecno{
        text-align:center;
    }

    #thisIstheFinelDivitirorirooo  h2{
      color:green;
      text-align:center;
    }

    #contentSiguienteTres, #contentSiguienteTres2, #contentSiguienteTres3, #contentSiguienteTres4, #contentSiguienteTres5, #contentSiguienteTres6{
      color:black;
      font-size:20px;
      text-align:center;
    }

    /*- new styles bitch */
    #idCorpor{
      text-align:center;
      font-family: monospace;
    }

    #idCorpor h3{
      color:green;
      text-align:center;
      font-size:30px;
    }

    #acciones{
      text-align:center;
      font-family: monospace;
      border:1px solid black;
    }

    #acciones h3{
      color:green;
      text-align:center;
      font-size:30px;
    }
    #bonos{
      text-align:center;
      font-family: monospace;
      border:1px solid black;
    }

    #bonos h3{
      color:green;
      text-align:center;
      font-size:30px;
    }

    #depositos{
      text-align:center;
      font-family: monospace;
      border:1px solid black;
    }

    #depositos h3{
      color:green;
      text-align:center;
      font-size:30px;
    }


  </style>

<script>

var Accion=function Accion(){

  //ATRIBUTOS ACCION
	this.cantidad=0;
	this.precioAcciones=2.53;
  this.numAcciones = 0;
  this.rentabilidad = 0.35;
	this.beneficio=0;

  this.ShowPanel=function (){
      document.getElementById('acciones').style.display = "initial";
      document.getElementById('bonos').style.display = "none";
      document.getElementById('depositos').style.display = "none";
  }

  this.showInfoAccion = function(){
    document.getElementById('showInfoPanelAccion').style.display = "initial";

    var cantidadAcciones = document.getElementById("cantidadAccion").value;
    accion1.cantidad = cantidadAcciones;
    precioAccion = accion1.precioAcciones;
    var numAcciones = cantidadAcciones/precioAccion;
    numAcciones = Math.floor(numAcciones);
    accion1.numAcciones = numAcciones;
    var beneficio = numAcciones*accion1.rentabilidad;
    accion1.beneficio = beneficio;
    //alert(numAcciones);
    document.getElementById('showInfoPanelAccion').innerHTML = "Precio de acciones: " + precioAccion + "<br/>";
    document.getElementById('showInfoPanelAccion').innerHTML += "Número de acciones: " + numAcciones + "<br/>";
    document.getElementById('showInfoPanelAccion').innerHTML += "Rentabilidad: 35%" + "<br/>";
    document.getElementById('showInfoPanelAccion').innerHTML += "Beneficio anual: " + beneficio + "<br/>";

  }
}


var Bonos=function Bonos(){

  //ATRIBUTOS BONOS
	this.cantidad=0;

  //INTERESES PAISES
  this.IntEspaña = 0.12;
  this.IntPanama = 0.15;
  this.IntGrecia = 0.20;
  this.IntPortugal = 0.16;

  //PRECIO BONO PAISES
  this.PrecioBonoEspaña = 5.616;
  this.PrecioBonoPanama = 3.916;
  this.PrecioBonoGrecia = 4.11;
  this.PrecioBonoPortugal = 2.15;

  this.numBonos=0;
  this.beneficio=0;

  this.ShowPanel=function (){
    document.getElementById('acciones').style.display = "none";
    document.getElementById('bonos').style.display = "initial";
    document.getElementById('depositos').style.display = "none";
  }

  this.showInfoAccion = function(){
      var cantidadBono = document.getElementById("cantidadBono").value;
      bono1.cantidad = cantidadBono;
      var precioBono = 0;
      var interesBono = 0;
      var numeroBonos = 0;
      var beneficioAnual = 0;

      if(document.getElementById("espanaRadio").checked){
        espanaRadio = bono1.IntEspaña;
        document.getElementById('showInfoPanelBonos').innerHTML = "Precio del bono: " + bono1.PrecioBonoEspaña + "<br/>" + "<br/>";
        //alert(espanaRadio);
        precioBono = bono1.PrecioBonoEspaña;
        numeroBonos = cantidadBono / precioBono;
        numeroBonos = Math.floor(numeroBonos);
        bono1.numBonos = numeroBonos;
        document.getElementById('showInfoPanelBonos').innerHTML = "Número de bonos: " + numeroBonos + "<br/>" + "<br/>";
        beneficioAnual = numeroBonos * precioBono * espanaRadio;
        beneficioAnual = beneficioAnual.toFixed(2);
        bono1.beneficio = beneficioAnual;
        document.getElementById('showInfoPanelBonos').innerHTML += "Beneficio: " + beneficioAnual + "<br/>" + "<br/>";
      }

      if(document.getElementById("panamaRadio").checked){
        espanaRadio = bono1.IntPanama;
        document.getElementById('showInfoPanelBonos').innerHTML = "Precio del bono: " + bono1.PrecioBonoPanama + "<br/>" + "<br/>";
        precioBono = bono1.PrecioBonoPanama;
        //alert(espanaRadio);
        precioBono = bono1.PrecioBonoPanama;
        numeroBonos = cantidadBono / precioBono;
        numeroBonos = Math.floor(numeroBonos);
        document.getElementById('showInfoPanelBonos').innerHTML = "Número de bonos: " + numeroBonos + "<br/>" + "<br/>";
        beneficioAnual = numeroBonos * precioBono * espanaRadio;
        beneficioAnual = beneficioAnual.toFixed(2);
        document.getElementById('showInfoPanelBonos').innerHTML += "Beneficio: " + beneficioAnual + "<br/>" + "<br/>";
      }

      if(document.getElementById("greciaRadio").checked){
        espanaRadio = bono1.IntGrecia;
        document.getElementById('showInfoPanelBonos').innerHTML = "Precio del bono: " + bono1.PrecioBonoGrecia + "<br/>" + "<br/>";
        precioBono = bono1.PrecioBonoGrecia;
        //alert(espanaRadio);
        precioBono = bono1.PrecioBonoGrecia;
        numeroBonos = cantidadBono / precioBono;
        numeroBonos = Math.floor(numeroBonos);
        document.getElementById('showInfoPanelBonos').innerHTML = "Número de bonos: " + numeroBonos + "<br/>" + "<br/>";
        beneficioAnual = numeroBonos * precioBono * espanaRadio;
        beneficioAnual = beneficioAnual.toFixed(2);
        document.getElementById('showInfoPanelBonos').innerHTML += "Beneficio: " + beneficioAnual + "<br/>" + "<br/>";
      }

      if(document.getElementById("portugalRadio").checked){
        espanaRadio = bono1.IntPortugal;
        document.getElementById('showInfoPanelBonos').innerHTML = "Precio del bono: " + bono1.PrecioBonoPortugal + "<br/>" + "<br/>";
        precioBono = bono1.PrecioBonoPortugal;
        //alert(espanaRadio);
        precioBono = bono1.PrecioBonoPortugal;
        numeroBonos = cantidadBono / precioBono;
        numeroBonos = Math.floor(numeroBonos);
        document.getElementById('showInfoPanelBonos').innerHTML = "Número de bonos: " + numeroBonos + "<br/>" + "<br/>";
        beneficioAnual = numeroBonos * precioBono * espanaRadio;
        beneficioAnual = beneficioAnual.toFixed(2);
        document.getElementById('showInfoPanelBonos').innerHTML += "Beneficio: " + beneficioAnual + "<br/>" + "<br/>";
      }


  }

}


var Deposito=function Deposito(){

  //ATRIBUTOS DEPOSITO
	this.cantidad=0;
  this.interes = 4.56;
	this.beneficio=0;

  this.ShowPanel=function (){
    document.getElementById('acciones').style.display = "none";
    document.getElementById('bonos').style.display = "none";
    document.getElementById('depositos').style.display = "initial";
  }

  this.showInfoAccion = function(){
      var cantidadBono = document.getElementById("cantidadDeposito").value;
      deposito1.cantidad = cantidadBono;
      var interes =  deposito1.interes;

      var beneficioDeposito = cantidadBono * interes;
      beneficioDeposito = beneficioDeposito.toFixed(2);
      document.getElementById('showInfoPanelDeposito').innerHTML = "Beneficio: " + beneficioDeposito + "<br/>" + "<br/>" + "<br/>";
      deposito1.beneficio = beneficioDeposito;

  }


}

//Creamos los diferentes objetos
var accion1 = new Accion();
var bono1 = new Bonos();
var deposito1 = new Deposito();

</script>
</head>

<body>
  <div id="idCorpor">
    <h3> Bienvenido al gestor financiero personal </h3>
        <input type="radio" name="radioButton" value="Accion" onclick="accion1.ShowPanel();";>  Accion <br/>
        <input type="radio" name="radioButton" value="Bono" onclick="bono1.ShowPanel();"> Bono <br/>
        &nbsp; <input type="radio" name="radioButton" value="Deposito" onclick="deposito1.ShowPanel();"> Deposito
  </div>

  <div id="acciones" style="display:none;">
    <h3>Formulario Acciones</h3>
      <div id="contenidoAcciones">
        Cantidad <input type="number" id="cantidadAccion" placeholder=" Inserte cantidad" maxlength="15"> <span id="correctIncorrect1" style="border:1px solid green; display:none;">1</span><br/><br/><br/>
        <!-- AQUI MOSTRAREM LA INFORMACIO INTERNA -->
        <div id="showInfoPanelAccion" style="display:none;">

        </div><br/><br/><br/>
          <span id="botonSiguienteGuardarUltimo" onclick="accion1.showInfoAccion();" style="cursor:pointer; text-align:center; margin:0 auto;"> Calcular </span>

      </div>
      <br/><br/>
  </div>

  <div id="bonos" style="display:none;">
    <h3>Formulario Bonos</h3>
      <div id="contenidoBonos">
        Cantidad <input type="number" id="cantidadBono" placeholder=" Inserte cantidad" maxlength="15"> <span id="correctIncorrect2" style="border:1px solid green; display:none;">1</span><br/>
        <br/>
        <h2>Por favor el tipo de interés segun el país:</h2><br/>
        <input type="radio" name="radioButtonPais" id="espanaRadio" onclick="bono1.showInfoAccion();">  España - 12% <br/>
        <input type="radio" name="radioButtonPais" id="panamaRadio" onclick="bono1.showInfoAccion();"> Panamá - 15% <br/>
        &nbsp; <input type="radio" name="radioButtonPais" id="greciaRadio" onclick="bono1.showInfoAccion();"> Grecia - 20% <br/>
        <input type="radio" name="radioButtonPais" id="portugalRadio" onclick="bono1.showInfoAccion();"> Portugal - 16% <br/><br/>
        <div id="showInfoPanelBonos">

        </div>

      </div>
      <br/><br/>
  </div>

  <div id="depositos" style="display:none;">
    <h3>Formulario Deposito</h3>
      <div id="contenidoDepositos">
        Cantidad <input type="number" id="cantidadDeposito" placeholder=" Inserte cantidad" maxlength="15"> <span id="correctIncorrect3" style="border:1px solid green; display:none;">1</span><br/><br/><br/>
        <div id="showInfoPanelDeposito">

        </div>
        <span id="botonSiguienteGuardarUltimo" onclick="deposito1.showInfoAccion();" style="cursor:pointer; text-align:center; margin:0 auto;"> Calcular </span>

      </div>
      <br/><br/>
  </div>

</body>
</html>
