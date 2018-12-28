@extends('layouts.app') @section('title', 'Data') @section('cabezera', '') @section('titulo-xl', 'DRIVER APPLICATION') @section('subtitulo', 'APPLICANT INFORMATION') @section('content')
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<!--<form method="POST" action="{{url('/job')}}">-->
<form class="col-md-12 row" id="Enviar" onsubmit="realizaProceso2('data');return false;">
    
  
    @csrf

    <div class="panel-body panel">
        <div class="text-center">
            <h2>AUTHORIZATION AND REALEASE TO OBTAIN INFORMATION</h2>
        </div>
        <div class="text-justify">
            <p>I hereby authorize Journey Transport LLC to obtain records concerning my driving performance and monitor my driving record. This authorization shall remain in effect over the course of my employment.
            </p>
            <p>Federal State reports may be ordered periodically during the course of my employment.</p>
            <p>I hereby release and hold harmless any person that discloses matters in accordance with this</p>
            <p>authorization, as well as Journey Transport LLC from the liability that might otherwise result from the request for the use of any/or disclosure of any of the foregoing information. I agree that a copy this authorization has the same effect
                as an original.</p>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-6" style="margin-top:2%;">
            <label for="lastname">First Name:</label>
            <input type="text" maxlength="15" class="form-control" id="nombre" required name="nombre" placeholder="First name">
        </div>
        <div class="col-md-6" style="margin-top:2%;">
            <label for="firstname">Last name:</label>
            <input type="text" required maxlength="15" class="form-control" id="apellido" name="apellido" placeholder="Last name">
        </div>
        <div class="col-md-4" style="margin-top:2%;">
            <label for="ssn"> SSN:</label>
            <input class="form-control" type="text" required maxlength="15" id="ssn" name="ssn" placeholder="SSN" disabled="" value="{{$Job->SSN}}">
        </div>
        <div class="col-md-4" style="margin-top:2%;">
            <label for="date"> DOB:</label>
            <input class="form-control" required name="edad" placeholder="DOB" id="edad" type="date">
        </div>

        <div class="col-md-4" style="margin-top:2%;">
            <label for="ssn"> E-mail:</label>
            <input class="form-control" type="email" required id="email" name="email" placeholder="E-mail">
        </div>
         <div class="col-md-6" style="margin-top:2%;">
            <label for="date"> License:</label>
            <input class="form-control" required name="licencia" placeholder="License" id="licencia" type="number">
        </div>

        <div class="col-md-6" style="margin-top:2%;">
                        <label for="state"> State:</label>
                        <select class="form-control"   id="estado" name="estado" required="" >
                            <option value="AL" selected="selected" >Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
    </div>
   <input class="form-control" type="hidden" required id="id" name="id" value="{{$Job->id}}">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="center-block" align="center">
                <label for="date" class="center-block">Signature (must sign with the mouse)</label>
            </div>
            <div align="center">
                <button type="button" onclick="cleanCanvas()">Clean</button>
            </div>
            <div class="center-block">
                <canvas class="center-block" style="border: 1px solid black" id="canvas">Your browser does not support canvas :( </canvas>
            </div>
            
        </div>

        <div align="center">

            <input name="checkbox" type="checkbox" id="checkbox" onChange="return comprobar(checkbox.value);" />
            <label for="checkbox">I accept the Conditions</label>
        </div>
    </div>




    <div id="resultado" class="col-md-12"></div>
    <div id="boton" style="padding-top:15px;">
        <button disabled="" class="btn btn-primary btn-block" id="enviar" type="submit">Submit <i class="fas fa-check"></i></button>
    </div>
</form>
<script type="text/javascript">
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
    function realizaProceso2(link) {
    var msj = '1';
    var dataUrl = signaturePad.toDataURL();
    var base64ImageContent = dataUrl.replace(/^data:image\/(png);base64,/, "");
    var link2 = '{{url('/')}}/'+link;
    if (msj === "1") {
        var formData = new FormData(jQuery('#Enviar')[0]);
        formData.append("firma", base64ImageContent);
        
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