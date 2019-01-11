@extends('layouts.app') @section('title', 'Validate') @section('cabezera', '') @section('titulo-xl', 'DRIVER APPLICATION') @section('subtitulo', 'APPLICANT INFORMATION') @section('content')



<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="{{asset('css/second_step/formsteep.css')}}" rel="stylesheet">
<script src = "{{asset('js/second_step/habilitador.js')}}"></script>



<div id = "resultado"></div>
<form id="regForm">

<!-- <h1>Register:</h1> -->

 @csrf

	<!-- formulario 1 -->
	<div class="tab">
       <div class="row"  style = "background-color:#F9F7F7">		
             @include('second_step.formulario1')
        </div>   
    </div>
  
  
   <!-- formulario 2 -->
   <div class="tab">Address For the Past Three Years:
     <div class = "row">
              @include('second_step.formulario2')	
     </div> 
   </div>

  
	<!-- formulario 3 -->
	<div class="tab">DRIVER LICENCE:
		<div class = "row">
				@include('second_step.formulario3')
		</div>
	</div>

	
	<!--  formulario 4 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario4')
		</div>
	</div>
	
	
	<!--  formulario 5 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario5')
		</div>
	</div>

	
	<!--  formulario 6 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario6')
		</div>
	</div>
	
	<!--  formulario 7 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario7')
		</div>
	</div>


	<!--  formulario 8 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario8')
		</div>
	</div>

	
	<!--  formulario 9 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario9')
		</div>
	</div>

	
    <!--  formulario 10 -->	
	<div class="tab">
		<div class = "row">
				@include('second_step.formulario10')
		</div>
	</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1); contador(1); ">Previous</button>
    <button type="button" id="nextBtn" onclick="realizaProceso2('send_data', null); nextPrev(1); contador(2);">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>


<script src = "{{asset('js/second_step/formsteep.js')}}"></script>

<script type="text/javascript">
/*
    var canvas = document.querySelector("canvas");
    var signaturePad = new SignaturePad(canvas);
    function comprobar() {
        check = document.getElementById("checkbox");
        if (check.checked) {
            document.getElementById('enviar').disabled = false;
        } else {
            document.getElementById('enviar').disabled = true;
        }
    }
    function cleanCanvas() {
        signaturePad.clear();
    }
	*/
	var contador_form = 1;
	function contador(n){
		//  :)  $(window).scrollTop(0);
		if(n == 2){
			contador_form++
			//alert(contador_form);
		}
		else if(n == 1){
			contador_form--;
			//alert(contador_form);
		}

	}
	
    function realizaProceso2(link, boton_forms) {
    var msj = '1';
    //var dataUrl = signaturePad.toDataURL();
    //var base64ImageContent = dataUrl.replace(/^data:image\/(png);base64,/, "");
    var link2 = '{{url('/')}}/'+link;
    if (msj === "1") {
        var formData = new FormData(jQuery('#regForm')[0]);
        formData.append("contadorForm", contador_form);
        formData.append("slug", "{{ $Form->slug }}");
		
        formData.append("boton_bucle", boton_forms);
        
        $.ajax({
            url: link2,
            type: 'POST',
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formData,
            beforeSend: function() {
                $("#resultado").html('<div class="alert alert-success">Procesando...!</div>');
                $("#boton").html('<button disabled=""  type="button" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></button> ');
            }
        }).done(function(data, textStatus, jqXHR) {
            var getData = jqXHR.responseJSON;
            if (data.status == 'ok') {
                $("#resultado").html('<div class="alert alert-success">' + data.mensaje + ' | <a href="{{url('job')}}">Go out</a></div>');
                $("#boton").html('<button disabled="" type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');
           
				if(	(contador_form == 2) && (boton_forms == "three_adress_button") ){
					//document.getElementById("tabla_three_adress").insertRow(-1).innerHTML += 
					//"<tr><th scope='row'>3</th><td>Larry</td><td>the Bird</td><td>@twitter</td></tr>";
					
	var myTable = document.getElementById("tabla_three_adress"); 
var rowCount = myTable.rows.length; 
for (var x=rowCount-1; x>0; x--) { 
    myTable.deleteRow(x); 
} 
					//alert(Object.keys(data.three_adress).length);
					//alert(data.three_adress[0].direccion);
					var datos = data.three_adress;
				
					for( var i=0; i<=datos.length; i++ )
					{
						
						
						
						
					document.getElementById("loopdds").insertRow(-1).innerHTML += 
					"<tr><th scope='row'>"+datos[i].direccion+"</th><td>"+datos[i].apartamento+"</td><td>"+datos[i].ciudad+"</td><td>"+datos[i].estado+"</td><td>"+datos[i].zip+"</td><td>"+datos[i].cuanto_tiempo+"</td></tr>";
					
					
					}
					
					
				}





		   } else {
                $("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>' + data.mensaje + '</div>');
            }
        }).fail(function(data, textStatus, errorThrown) {
            console.log(data);
            console.log(textStatus);
            console.log(errorThrown);
            var errorsHtml = '';
            var errors = data.responseJSON;
            $.each(errors, function(key, value) {
                if (key != 'message') {
                    $.each(value, function(key1, value1) {
                        errorsHtml += value1;
                    });
                }
            });
            $("#resultado").html('<div class="alert alert-danger"><strong>ERROR! </strong>' + errorsHtml + ' </div>');
            $("#boton").html('<button  type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');
        })
    } else {
        swal("¡Error! ", msj, "error");
    }
};
</script>


@endsection