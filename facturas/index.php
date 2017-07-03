
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Ejercicio facturas</title>
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
      display:none;
    }

    #idCorpor h3{
      color:green;
      text-align:center;
      font-size:30px;
    }

    #izquierda{
        float:left;
        border-right:1px solid black;
        height:100%;
        width:10%;
    }

    #derecha{
      float:right;
      border:1px solid transparent;
      width:89%;
      height:100%;
      display:block;
      position:relative;
    }
    #roundedDiveConMas{
      margin: 0 auto;
      border: 2px solid #a1a1a1;
      padding: 10px 40px;
      background: #dddddd;
      width: 300px;
      border-radius: 25px;

    }

    #arriba{
      width:94.5%;
    }

    input[type="number"] {
       width:80px;
    }

    input.petitInput{
       width:80px;
    }

    #abajo{
      text-align:right;
      width:69.75%;
      border:1px solid transparent;

    }

    #totalTotalisid {
      background-color : #00FF00;
      color:red;
      font-weight:600;
  }

  .input-icon {
    position: relative;
  }

.input-icon > i {
  position: absolute;
  transform: translate(0, -52%);
  top: 50%;
  float:right;
  pointer-events: none;
  width: 25px;
  text-align: right;
  font-style: normal;
}

.input-icon2{
    position: relative;
}

.input-icon2 > i{
  position: absolute;
  transform: translate(0, -52%);
  top: 31.8%;
  float:right;
  pointer-events: none;
  width: 25px;
  text-align: right;
  font-style: normal;
}

#superior{
  width:70%;
  height:30px;
  border:1px solid transparent;
}

#izquierdaContentBox{
  float:left;
  border: 1px solid transparent;
  width:49%;
  height:150px;
  display:block;
}

#derechaContentBox{
  float:right;
  width:100%;
  border-left: 1px solid black;
  height:120px;
}
#logoizquierdaContentBox{
  float:left;
  width:49%;
}

#informizquierdaContentBox{
  float:left;
  width:35%;
  text-align:center;
  margin-left:14.9%;
  position:absolute;
  border:1px solid transparent;

}

#testingLabel{
  margin-left: -2%;
  position:absolute;
}

#fecha{
  margin-left:70%;
}

#nombreEmpresa{
  font-size:15px;
}

#nomcliente{
    font-size:15px;
}

.container {
    width: 500px;
    clear: both;
}
.container input {
    width: 100%;
    clear: both;
}

#contenidorFull{
  width:65%;
  border:1px solid transparent;
  float:right ;
}

.button5   {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}


  </style>

<script>

var Linia=function Linia(){

  //ATRIBUTOS LINIA
	this.descripcion="";
	this.unidades=0;
	this.precio=0;
  this.baseImpo= 0;
  this.porcenDescuento = 0;
  this.porcenDescuentoParaTotal = 0;
  this.numIva = 0;
  this.numIvaParaTotal = 0;
  this.Totalapagar = 0;

this.generarLinia=function(comptador) {
  var divLinia=document.createElement("DIV");
  divLinia.innerHTML='<br/><input type="text" onkeyup="vectorLinia['+comptador+'].guardarDescripcion(this);" placeholder="Descripcion" maxlength="200" id="linia'+comptador+'"> <input type="number" placeholder="Unidades" min="1" max="99" onchange="vectorLinia['+comptador+'].guardarUnidades(this);"> <input type="number" class="petitInput" placeholder="Precio" min="1" onkeyup="vectorLinia['+comptador+'].guardarPrecio(this);"> <input type="number" class="petitInput" placeholder="% descuento" min="0" max="100" onchange="vectorLinia['+comptador+'].guardarDescuento(this);"> &nbsp; <select onchange="vectorLinia['+comptador+'].guardarIva(this);"><option value="" disabled selected>Selecciona el IVA</option><option value="4" onchange="vectorLinia['+comptador+'].guardarIva(this);">4</option><option value="10" onchange="vectorLinia['+comptador+'].guardarIva(this);">10</option><option value="21">21</option></select> <input type="text"  id="totalLinia'+comptador+'" placeholder="Total" maxlength="10" disabled style="text-align:center"; onchange="vectorLinia['+comptador+'].totalTotalis(this);">';

  return divLinia;
  }

  this.guardarDescripcion=function(objeto){
    this.descripcion=objeto.value;
    this.totalTotalis();
    //alert(this.descripcion);
  }

  this.guardarUnidades=function(objeto){
        var object = objeto;
        if(object.value <= 0){
            object.value = 1;
        }

    this.unidades=objeto.value;
    this.totalTotalis();
  }

  this.guardarPrecio=function(objeto){
    var object = objeto;
      if(object.value <= 0){
          object.value = "";
      }
    this.precio=objeto.value;
    this.totalTotalis();
  }

  this.guardarDescuento = function(objeto){
    var object = objeto;
      if(object.value <= 0){
          object.value = 0;
      }

      this.porcenDescuento=objeto.value;
      //alert(this.porcenDescuento);
      var testDescuento = (this.porcenDescuento)/100;
      this.porcenDescuentoParaTotal =   this.unidades*this.precio*testDescuento;
      //alert(this.porcenDescuentoParaTotal);
      this.totalTotalis();
  }

  this.guardarIva = function(objeto){
      this.numIva=objeto.value;
      var IvaTest = this.numIva/100;
      this.numIva = IvaTest.toFixed(2);
      //IVA PARA TOTAL
      this.numIvaParaTotal = (this.unidades*this.precio-this.porcenDescuentoParaTotal)*IvaTest;
      this.baseImpo = (this.unidades*this.precio);
      //alert(this.numIvaParaTotal);

      this.guardarTotal();
  }

  this.guardarTotal = function(objeto){
      var totalTest = (this.unidades*this.precio-this.porcenDescuentoParaTotal)+(this.unidades*this.precio-this.porcenDescuentoParaTotal)*this.numIva;
      this.Totalapagar=totalTest;
      //alert(totalTest);
      document.getElementById("totalLinia"+(comptador-1)).value = totalTest;

      this.totalTotalis();
  }


  this.totalTotalis = function(objeto){
    var baseImpoTotal = 0;
    var porcenTotal = 0;
    var totalIva =0;
    var totalTotalisTotalis =0;

    for (i=0; i<vectorLinia.length; i++){
       baseImpoTotal += vectorLinia[i].baseImpo;
       porcenTotal +=  vectorLinia[i].porcenDescuentoParaTotal;
       totalIva += vectorLinia[i].numIvaParaTotal;
       totalTotalisTotalis += vectorLinia[i].Totalapagar;
    }

    document.getElementById("baseImpo").value =  baseImpoTotal;
    document.getElementById("totalDescuento").value = porcenTotal;
    document.getElementById("totalIvas").value = totalIva;
    document.getElementById("totalTotalisid").value = totalTotalisTotalis;
  }
}
  //variable global random
  var comptador = 0;
  var baseChungahardcore = 0;
  vectorLinia = new Array();

  function nuevaLinia (comptador){
      vectorLinia[comptador] = new Linia();
      var novaDIV= vectorLinia[comptador].generarLinia(comptador);
      document.getElementById('arriba').appendChild(novaDIV);

  }

  function onLoadBody(){
      document.getElementById('idCorpor').style.display = "none";

  }

  function pintarResto(){
      var contFactura = 1;
      document.getElementById('idCorpor').style.display = "initial";
      document.getElementById('contenidorFull').style.display = "none";

      document.getElementById('nomCliente').innerHTML = document.getElementById('nombreCliente1').value;
      document.getElementById('NIFcliente').innerHTML = document.getElementById('dninif1').value;
      document.getElementById('callecliente').innerHTML = document.getElementById('direccion1').value;
      document.getElementById('cpcliente').innerHTML = document.getElementById('codipostal1').value + document.getElementById('poblacion1').value;
      document.getElementById('ciudadcliente').innerHTML = document.getElementById('provincia1').value + document.getElementById('pais1').value;
      document.getElementById('telcliente').innerHTML = document.getElementById('telefono1').value;

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();

      if(dd<10) {
          dd = '0'+dd
      }

      if(mm<10) {
          mm = '0'+mm
      }

      today = dd + '/' + mm + '/' + yyyy;
      document.getElementById('fecha').innerHTML = "Fecha: "+today;
      document.getElementById('numeroFactura').innerHTML = "Número de factura: "+ (contFactura++);

      nuevaLinia(comptador++);
      }

      var comptadorCorrecte1 = false;
      var comptadorCorrecte2 = false;
      var comptadorCorrecte3 = false;
      var comptadorCorrecte4 = false;
      var comptadorCorrecte5 = false;
      var comptadorCorrecte6 = false;
      var comptadorCorrecte7 = false;
      var comptadorCorrecte8 = false;

      function changeName(){
        if(document.getElementById('nombreCliente1').value == ""){
            document.getElementById('nombreCliente1').style.backgroundColor = "red";
        }else if(!document.getElementById('nombreCliente1').value == ""){
            document.getElementById('nombreCliente1').style.backgroundColor = "white";
            comptadorCorrecte1 = true;
        }

        if(document.getElementById('dninif1').value == ""){
            document.getElementById('dninif1').style.backgroundColor = "red";
        }else if(!document.getElementById('dninif1').value == ""){
            document.getElementById('dninif1').style.backgroundColor = "white";
            comptadorCorrecte2 = true;
        }

        if(document.getElementById('direccion1').value == ""){
            document.getElementById('direccion1').style.backgroundColor = "red";
        }else if(!document.getElementById('direccion1').value == ""){
            document.getElementById('direccion1').style.backgroundColor = "white";
            comptadorCorrecte3 = true;
        }

        if(document.getElementById('codipostal1').value == ""){
            document.getElementById('codipostal1').style.backgroundColor = "red";
        }else if(!document.getElementById('codipostal1').value == ""){
            document.getElementById('codipostal1').style.backgroundColor = "white";
            comptadorCorrecte4 = true;
        }

        if(document.getElementById('poblacion1').value == ""){
            document.getElementById('poblacion1').style.backgroundColor = "red";
        }else if(!document.getElementById('poblacion1').value == ""){
            document.getElementById('poblacion1').style.backgroundColor = "white";
            comptadorCorrecte5 = true;
        }

        if(document.getElementById('provincia1').value == ""){
            document.getElementById('provincia1').style.backgroundColor = "red";
        }else if(!document.getElementById('provincia1').value == ""){
            document.getElementById('provincia1').style.backgroundColor = "white";
            comptadorCorrecte6 = true;
        }

        if(document.getElementById('pais1').value == ""){
            document.getElementById('pais1').style.backgroundColor = "red";
        }else if(!document.getElementById('pais1').value == ""){
            document.getElementById('pais1').style.backgroundColor = "white";
            comptadorCorrecte7 = true;
        }

        if(document.getElementById('telefono1').value == ""){
            document.getElementById('telefono1').style.backgroundColor = "red";
        }else if(!document.getElementById('telefono1').value == ""){
            document.getElementById('telefono1').style.backgroundColor = "white";
            comptadorCorrecte8 = true;
        }

        if(comptadorCorrecte1==true && comptadorCorrecte2==true && comptadorCorrecte3==true && comptadorCorrecte4==true && comptadorCorrecte5==true && comptadorCorrecte6==true && comptadorCorrecte7==true && comptadorCorrecte8==true){
          pintarResto();

        }
        }



</script>
</head>

<body onload="onLoadBody();" >
  <div id="contenidorFull">
    <fieldset style="width:19.6%; background-color:#e7e7e7;">
        <legend><strong>CLIENTE</strong></legend>
        <div class="container">
            <form>
            Nombre<input type="text" name="nombre" id="nombreCliente1" ><br>
            DNI / CIF <input type="text" name="dninif" id="dninif1" maxlength="9"><br>
            Dirección <input type="text" name="direccion" id="direccion1"><br>
            Código postal <input type="text" name="codipostal" id="codipostal1" maxlength="5"><br>
            Población <input type="text" name="poblacion" id="poblacion1"><br>
            Província <input type="text" name="provincia" id="provincia1"><br>
            País <input type="text" name="pais" id="pais1"><br>
            Teléfono <input type="text" name="telefono" id="telefono1" maxlength="9"><br><br>
            <input type="button" class="button5" value="Generar factura" onclick="changeName();">
        </form>
      </div>
  </fieldset>
</div>
  <div id="idCorpor">
    <div id="izquierda">
      <br/><br/><br/><br/><br/><br/><br/><br/>
        <span id="roundedDiveConMas" onclick="nuevaLinia(comptador); comptador++;">+</span>
    </div>

    <div id="derecha">
      <div id="superior">
          <label id="fecha"> </label> &#8226; <label id="numeroFactura"></label>
          <hr/>
      </div>

      <div id="contentBox">
        <div id="izquierdaContentBox">
            <div id="logoizquierdaContentBox">
              <br/><br/>
              <img src="./img/logo.png" alt="Meine own logo" style="width:304px;height:100px;">
            </div>
            <br/>
            <div id="informizquierdaContentBox">
              <br/>
                  <label id="nombreEmpresa"> <strong> Aitor Javier Santaeugenia Marí </strong> </label><br/>
                  <label id="NIF"> NIF: 25965874V </label><br/>
                  <label id="numDireccio"> Polígono La Trotxa </label><br/>
                  <label id="numCP"> 50000, Menorca </label><br/>
                  <label id="numCiutat"> Alaior </label><br/>
                  <label id="NumTelefon">698-695-325 </label><br/>
                  <label id="numCorreo"> Superempresafactura@gmail.com   </label><br/>
            </div>

        </div>
        <fieldset style="width:19.6%;">
          <legend>CLIENTE</legend>
        <div id="derechaContentBox">
          <br/>
          <strong><label id="nomCliente">  Esperança Saurina Uris </label></strong><br/>
          <label id="NIFcliente"> 41744374H </label><br/>
          <label id="callecliente"> Calle no existe, 34 1º2ª </label><br/>
          <label id="cpcliente"> 07760, Ciutadella </label><br/>
          <label id="ciudadcliente"> Menorca, España</label><br/>
          <label id="telcliente"> 698-695-325 </label><br/>
        </div>
        </fieldset>

        </div>

        <div id="arriba">

        </div>

        <div id="abajo">
            <hr/>
            <br/>
            <div class="input-icon">
                <label for="baseImpo">Base imponible </label> <i>&euro;</i>
                  <input type="text" placeholder="Base imponible" style="text-align:center" name="baseImpo" id="baseImpo" disabled><br/>
            </div>

            <div class="input-icon">
              <label for="totlaDescuent">Total descuentos </label><i>&euro;</i><input type="text" placeholder="Total descuentos" style="text-align:center" id="totalDescuento" name="totlaDescuent" disabled><br/>
            </div>
            <div class="input-icon2">
              <label for="totalIvas">Total IVA </label><i>&euro;</i><input type="text" style="text-align:center" placeholder="Total IVA" id="totalIvas" name="totalIvas" disabled><br/><br/>
            </div>

            <div class="input-icon">
              <label for="Total">Total </label><i>&euro;</i><input type="text" style="text-align:center" placeholder="Total" id="totalTotalisid" name="total" disabled>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
