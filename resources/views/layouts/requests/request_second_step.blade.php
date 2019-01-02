@extends('layouts.app') @section('title', 'Validate') @section('cabezera', '') @section('titulo-xl', 'DRIVER APPLICATION') @section('subtitulo', 'APPLICANT INFORMATION') @section('content')



<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="{{asset('css/second_step/formsteep.css')}}" rel="stylesheet">
<script src = "{{asset('js/second_step/habilitador.js')}}"></script>


<form id="regForm" action="">

<!-- <h1>Register:</h1> -->



	<!-- formulario 1 -->
	<div class="tab">
       <div class="row">		
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
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
</div>

</form>


<script src = "{{asset('js/second_step/formsteep.js')}}"></script>

<script type="text/javascript">
function realizaProceso(link){var msj='1';var link2='{{url('/')}}/'+link;if(msj==="1"){var formData=new FormData(jQuery('#Enviar')[0]);$.ajax({url:link2,type:'POST',contentType:false,processData:false,dataType:'json',data:formData,beforeSend:function(){$("#resultado").html('<div class="alert alert-success">Procesando...!</div>');$("#boton").html('<button disabled=""  type="button" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></button> ');}}).done(function(data,textStatus,jqXHR){var getData=jqXHR.responseJSON;if(data.status=='ok'){$("#resultado").html('<div class="alert alert-success">'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');if(data.url!=''){window.location='{{url('/')}}/'+data.url;}}else{$("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');}}).fail(function(data,textStatus,errorThrown){console.log(data);console.log(textStatus);console.log(errorThrown);var errorsHtml='';var errors=data.responseJSON;$.each(errors,function(key,value){if(key!='message'){$.each(value,function(key1,value1){errorsHtml+=value1;});}});$("#resultado").html('<div class="alert alert-danger"><strong>ERROR! </strong>'+errorsHtml+' </div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');})}else{swal("¡Error! ",msj,"error");}};
</script>
@endsection