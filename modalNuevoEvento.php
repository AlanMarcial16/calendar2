<!--FUNCIONES NECESARIAS PARA EL FORMULARIO--->
<script type="text/javascript">

            $(document).ready(function(){
                $('inputo').each(function(){/*En caso de fallo quitar la "o"*/
                    valor=$(this).next('span').text();
                    $(this).val(valor);
                })
            });

            function alertDiaDeSemana(){ 
                var d=new Date(document.getElementById("fecha_inicio").value);
                d.setDate(d.getDate() + 1);

                var diadesemana=new Array(7);
                diadesemana[0]="Domingo";
                diadesemana[1]="Lunes";
                diadesemana[2]="Martes";
                diadesemana[3]="Miércoles";
                diadesemana[4]="Jueves";
                diadesemana[5]="Viernes";
                diadesemana[6]="Sábado";
                var n= diadesemana[d.getDay()];
                document.getElementById("dia").innerHTML=n;

                $("#dia-input").val(n);
    
            }
            
            function dif() {
            var fechaI = new Date(document.getElementById("fecha_inicio").value);
            var fechaF = new Date(document.getElementById("fecha_fin").value);
            var tiempo = fechaF.getTime() - fechaI.getTime();
            console.log(fechaI);
            var dias = Math.floor(tiempo / (1000 * 60 * 60 * 24));
            document.getElementById("noches").innerHTML = dias;
            document.getElementById("noches").value = dias;

            };

            
            function upperCase() {
            var x=document.getElementById("cliente").value
            document.getElementById("cliente").value=x.toUpperCase()
            }

            function SoloLetras(letra) {

            tecla = (document.all) ? letra.keyCode : letra.which;

            //Tecla de retroceso para borrar, y espacio siempre la permite
            if (tecla == 8 || tecla == 32) {
                return true;
            }

            // Patrón de entrada
            patron = /[A-Za-z]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);

            }
            


            function LlenarTarifa2()
            {
                const selectElement = document.querySelector('#habitacion');
                var tarifas = document.getElementById("tarifa");
                selectElement.addEventListener('change', (event) => {
                    const seleccionado = event.target.value;
                    //Habitaciones Estandar
                    if(seleccionado === 'Cuna de Moisés'){
                        tarifas.options[1] = new Option('874.65');
                        tarifas.options[2] = new Option('981.75'); 
                    }
                    else if(seleccionado === 'Dalia'){
                        tarifas.options[1] = new Option('874.65');
                        tarifas.options[2] = new Option('981.75'); 
                    }
                    //Habitacones Superior
                    else if(seleccionado === 'Bugambilia'){
                        tarifas.options[1] = new Option('999.60');
                        tarifas.options[2] = new Option('1106.70');
                    }
                    else if(seleccionado === 'Tulipan'){
                        tarifas.options[1] = new Option('999.60');
                        tarifas.options[2] = new Option('1106.70'); 
                    }
                    else if(seleccionado === 'Jazmín'){
                        tarifas.options[1] = new Option('999.60');
                        tarifas.options[2] = new Option('1106.70');
                    }
                    else if(seleccionado === 'Violeta'){
                        tarifas.options[1] = new Option('999.60');
                        tarifas.options[2] = new Option('1106.70');
                    }
                    //Habitaciones Superior Deluxe
                    else if(seleccionado === 'Lily'){
                        tarifas.options[1] = new Option('1124.55');
                        tarifas.options[2] = new Option('1231.65');
                    }
                    else if(seleccionado === 'Girasol'){
                        tarifas.options[1] = new Option('1124.55');
                        tarifas.options[2] = new Option('1231.65');
                    }
                    //Habitaciones Deluxe con vista a los volcanes
                    else if(seleccionado === 'Margarita'){
                        tarifas.options[1] = new Option('1286.99');
                        tarifas.options[2] = new Option('1394.09');
                    }
                    else if(seleccionado === 'Noche Buena'){
                        tarifas.options[1] = new Option('1286.99');
                        tarifas.options[2] = new Option('1394.09');
                    }
                    //Especiales
                    else if(seleccionado === 'Ocaso Terraza'){
                        tarifas.options[1] = new Option('1254');
                        tarifas.options[2] = new Option('1358');
                    }
                    else if(seleccionado === 'Sala de Negocios'){
                        tarifas.options[1] = new Option('1254');
                        tarifas.options[2] = new Option('1358');
                    }
                });
            }
        </script>
        <!--SCRIPT PARA LLENADO DE HUÉSPEDES -->
        <script type="text/javascript">
            function LlenarHuesped()
            {
                const selectElement = document.querySelector('#huespedes');
                var descripcion = document.getElementById("edades");
                selectElement.addEventListener('change', (event) => {
                    const seleccionado = event.target.value;

                    if(seleccionado === '1'){
                        descripcion.options[1] = new Option('1 Adulto (18 años +)');
                    }
                    else if(seleccionado === '2'){
                        descripcion.options[1] = new Option('2 Adultos (18 años +)');
                        descripcion.options[2] = new Option('1 Adultos (18 años +) y 1 Adolescente (13 a 17 años)');
                        descripcion.options[3] = new Option('1 Adultos (18 años +) y 1 Niño (3 a 12 años)'); 
                        descripcion.options[4] = new Option('1 Adultos (18 años +) y 1 Bebé (0 a 2 años)'); 
                    }
                    else if(seleccionado === '3'){
                        descripcion.options[1] = new Option('3 Adultos (18 años +)');
                        descripcion.options[2] = new Option('2 Adultos (18 años +) y 1 Adolescente (13 a 17 años)');
                        descripcion.options[3] = new Option('2 Adultos (18 años +) y 1 Niño (3 a 12 años)'); 
                        descripcion.options[4] = new Option('2 Adultos (18 años +) y 1 Bebé (0 a 2 años)'); 
                        descripcion.options[5] = new Option('1 Adultos (18 años +) y 2 Adolescentes (13 a 17 años');
                        descripcion.options[6] = new Option('1 Adultos (18 años +) y 2 Niños (3 a 12 años)'); 
                        descripcion.options[7] = new Option('1 Adultos (18 años +) y 2 Bebés (0 a 2 años)');
                        descripcion.options[8] = new Option('1 Adultos (18 años +), 1 Adolescente (13 a 17 años) y 1 Niño (3 a 12 años)');
                        descripcion.options[9] = new Option('1 Adultos (18 años +), 1 Adolescente (13 a 17 años) y 1 Bebé (0 a 2 años)');
                        descripcion.options[10] = new Option('1 Adultos (18 años +), 1 Niño (3 a 12 años) y 1 Bebé (0 a 2 años)');
                    }
                    else if(seleccionado === '4'){
                        descripcion.options[1] = new Option('4 Adultos (18 años +)');
                        descripcion.options[2] = new Option('3 Adultos (18 años +) y 1 Adolescente (13 a 17 años)');
                        descripcion.options[3] = new Option('3 Adultos (18 años +) y 1 Niño (3 a 12 años)'); 
                        descripcion.options[4] = new Option('3 Adultos (18 años +) y 1 Bebé (0 a 2 años)'); 
                        descripcion.options[5] = new Option('2 Adultos (18 años +) y 2 Adolescentes (13 a 17 años');
                        descripcion.options[6] = new Option('2 Adultos (18 años +) y 2 Niños (3 a 12 años)'); 
                        descripcion.options[7] = new Option('2 Adultos (18 años +) y 2 Bebés (0 a 2 años)');
                        descripcion.options[8] = new Option('2 Adultos (18 años +), 1 Adolescente (13 a 17 años) y 1 Niño (3 a 12 años)');
                        descripcion.options[9] = new Option('2 Adultos (18 años +), 1 Adolescente (13 a 17 años) y 1 Bebé (0 a 2 años)');
                        descripcion.options[10] = new Option('1 Adultos (18 años +), 2 Adolescentes (13 a 17 años) y 1 Niño (3 a 12 años)');
                        descripcion.options[11] = new Option('1 Adultos (18 años +), 2 Adolescentes (13 a 17 años) y 1 Bebé (0 a 2 años)'); 
                        descripcion.options[12] = new Option('1 Adultos (18 años +), 1 Adolescente (13 a 17 años) y 2 Niños (3 a 12 años)');
                        descripcion.options[13] = new Option('1 Adultos (18 años +), 1 Adolescente (13 a 17 años), 1 Niño (3 a 12 años) y 1 Bebé (0 a 2 años)');
                    }

                    
                });
            }
        </script>


<div class="modal" id="exampleModal"  tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form name="formEvento" id="formEvento" action="nuevoEvento.php" class="form-horizontal" method="POST">
		
    <div class="form-group">
			<label for="evento" class="col-sm-12 control-label">Habitación</label>
			<div class="col-sm-10">
        <select class="form-control" id="evento" name="evento" placeholder="Habitación" onclick="LlenarTarifa2()" required>
          <option value="Cuna de Moisés">Estándar 1 - Cuna de Moisés</option>
          <option value="Dalia">Estándar 2 - Dalia</option>
          <option value="Bugambilia">Superior 1 - Bugambilia</option>
          <option value="Tulipan">Superior 2 - Tulipan</option>
          <option value="Jazmín">Superior 3 - Jazmín</option>
          <option value="Violeta">Superior 4 - Violeta</option>
          <option value="Lily">Superior Deluxe 1 - Lily</option>
          <option value="Girasol">Superior Deluxe 2 - Girasol</option>
          <option value="Margarita">Deluxe con vista a los volcanes 1 - Margarita</option>
          <option value="Noche Buena">Deluxe con vista a los volcanes 2 - Noche Buena</option>
          <option value="Ocaso Terraza">Ocaso Terraza</option>
          <option value="Sala de Negocios">Sala de Negocios</option>
        </select>
      </div>
		</div>
    <div class="form-group">
      <label for="fecha_inicio" class="col-sm-12 control-label">Fecha de Llegada</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" onblur="dif()" name="fecha_inicio" id="fecha_inicio" value="<?php echo date("Y-m-d");?>" placeholder="Fecha Inicio" onChange="alertDiaDeSemana(), dif()" required>
      </div>
    </div>
    <div class="form-group">
      <label for="dia" class="col-sm-12 control-label">Día</label>
      <div class="col-sm-10">
      <p>El día seleccionado es: <span id="dia" name="dia"></span></p>
      </div>
    </div>


    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Fecha de Salida</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" onchange="dif()" onblur="dif()" placeholder="Fecha Final">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-sm-12 control-label">Numero de noches</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="noches" id="noches" placeholder="Introduce el numero de noches">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Nombre del cliente</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Introduzca el nombre del cliente" onblur="upperCase()" onkeypress="return SoloLetras(event)">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Correo electronico</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Introduzca el correo electronico">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Numero de telefono</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Introduzca el numero de telefono">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Reserva via</label>
      <div class="col-sm-10">
        <select class="form-control mb-3" name="via" placeholder="Vía" required>
          <option value="DIRECTA">DIRECTA</option>
          <option value="AIRBNB">AIRBNB</option>
          <option value="BOOKING">BOOKING</option>
          <option value="TRIP ADVISOR">TRIP ADVISOR</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Tarifa</label>
      <div class="col-sm-10">
      <select class="form-control mb-3" id="tarifa" name="tarifa" placeholder="Tarifa" required>
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Numero de huespedes</label>
      <div class="col-sm-10">
        <select class="form-control mb-3" id="huespedes" name="huespedes" placeholder="Número de huéspedes" onclick="LlenarHuesped()" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Descripcion</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="edades" name="edades">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Anticipo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Anticipo (ANOTE SOLAMENTE NÚMEROS SIN SIGNOS NI LETRAS)">
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Servicios extras</label>
      <div class="col-sm-10">
          <select class="form-control mb-3" name="sextras" placeholder="Servicios Extras" required>
              <option value="NINGUNO">NINGUNO</option>
              <option value="PAQUETE ROMÁNTICO">PAQUETE ROMÁNTICO</option>
              <option value="PAQUETE DÍA DE MUERTOS">PAQUETE DÍA DE MUERTOS</option>
              <option value="PAQUETE VILLA ILUMINADA">PAQUETE VILLA ILUMINADA</option>
              <option value="EARLY CHECK IN">EARLY CHECK IN</option>
              <option value="EARLY CHECK OUT">EARLY CHECK OUT</option>
              <option value="LATE CHECK IN">LATE CHECK IN</option>
              <option value="LATE CHECK OUT">LATE CHECK OUT</option>
          </select>
      </div>
    </div>
    <div class="form-group">
      <label for="cliente" class="col-sm-12 control-label">Comentarios</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Comentarios">
      </div>
    </div>

  <div class="col-md-12" id="grupoRadio">
  
  <input type="radio" name="color_evento" id="orange" value="#FF5722">
  <label for="orange" class="circu" style="background-color: #FF5722;"> </label>

  <input type="radio" name="color_evento" id="amber" value="#FFC107">  
  <label for="amber" class="circu" style="background-color: #FFC107;"> </label>

  <input type="radio" name="color_evento" id="lime" value="#8BC34A">  
  <label for="lime" class="circu" style="background-color: #8BC34A;"> </label>

  <input type="radio" name="color_evento" id="teal" value="#009688">  
  <label for="teal" class="circu" style="background-color: #009688;"> </label>

  <input type="radio" name="color_evento" id="blue" value="#2196F3">  
  <label for="blue" class="circu" style="background-color: #2196F3;"> </label>

  <input type="radio" name="color_evento" id="indigo" value="#9c27b0">  
  <label for="indigo" class="circu" style="background-color: #9c27b0;"> </label>

</div>
		
	   <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Guardar Evento</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
    	</div>
	</form>
      
    </div>
  </div>
</div>