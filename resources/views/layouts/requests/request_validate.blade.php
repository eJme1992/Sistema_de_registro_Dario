@extends('layouts.app') @section('title', 'Validate') @section('cabezera', '') @section('titulo-xl', 'DRIVER APPLICATION') @section('subtitulo', 'APPLICANT INFORMATION') @section('content')





<form class="col-md-6 col-lg-offset-3" id="Enviar" onsubmit="realizaProceso('job');return false;">
	
    @csrf
    <label>SSN</label>
    <input class="form-control SSN" autocomplete="off" placeholder="SSN" type="text" name="SSN" id="SSN"  required="" data-mask="000-00-0000">
						
    <div id="resultado"></div>
    <div id="boton">
    <button  class="btn btn-primary btn-block" type="submit">Submit <i class="fas fa-check"></i></button>
    </div>
</form>

<script src = "{{asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript">
function realizaProceso(link){var msj='1';var link2='{{url('/')}}/'+link;if(msj==="1"){var formData=new FormData(jQuery('#Enviar')[0]);$.ajax({url:link2,type:'POST',contentType:false,processData:false,dataType:'json',data:formData,beforeSend:function(){$("#resultado").html('<div class="alert alert-success">Procesando...!</div>');$("#boton").html('<button disabled=""  type="button" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></button> ');}}).done(function(data,textStatus,jqXHR){var getData=jqXHR.responseJSON;if(data.status=='ok'){$("#resultado").html('<div class="alert alert-success">'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');if(data.url!=''){window.location='{{url('/')}}/'+data.url;}}else{$("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');}}).fail(function(data,textStatus,errorThrown){console.log(data);console.log(textStatus);console.log(errorThrown);var errorsHtml='';var errors=data.responseJSON;$.each(errors,function(key,value){if(key!='message'){$.each(value,function(key1,value1){errorsHtml+=value1;});}});$("#resultado").html('<div class="alert alert-danger"><strong>ERROR! </strong>'+errorsHtml+' </div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');})}else{swal("¡Error! ",msj,"error");}};
</script>
@endsection