@extends('layouts.app') @section('title', 'Validate') @section('cabezera', '') @section('titulo-xl', 'DRIVER APPLICATION') @section('subtitulo', 'APPLICANT INFORMATION') @section('content')



<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="{{asset('css/second_step/formsteep.css')}}" rel="stylesheet">
<script src = "{{asset('js/second_step/habilitador.js')}}"></script>


<form id="regForm" action="">

<!-- <h1>Register:</h1> -->

<!-- 1 STPET -->
<div class="tab">


 <div class="row">
				
                   
                    <div class="col-md-6" style="margin-top:2%;">
                        <label for="addres"> Address:</label>
                        <input class="form-control" maxlength="70" type="text" name="add" id="add" placeholder="Streer Address" required>
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="apparment"> Apartment:</label>
                        <input class="form-control" type="text" maxlength="15" id="ap" name="ap" placeholder="Unit#">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="city">City:</label>
                        <input class="form-control" type="text" required maxlength="15" id="ct" name="ct" placeholder="City">
                    </div>

                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="zip"> Zip:</label>
                        <input class="form-control" type="text" required maxlength="15" id="zp" name="zp" placeholder="zip">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="howl"> How long:</label>
                        <input class="form-control" type="number" required name="hl" id="hl" placeholder="how long">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="phone"> Phone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="ph" name="ph" placeholder="Phone">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="cellphone"> CellPhone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="cph" name="cph" placeholder="Cellphone">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="emph"> Emergency Phone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="eph" name="eph" placeholder="Emergency Phone">
                    </div>
                   
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="dtav"> Date Available:</label>
                        <input class="form-control" type="date" required name="da" id="da">
                    </div>
                    <div class="col-md-9" style="margin-top:2%;">
                        <label for="position"> Position Applied For:</label>
                        <input class="form-control" type="text" required maxlength="15" id="paf" name="paf" placeholder="Position">
                    </div>
                    <div class="col-md-4" style="margin-top:2%;">
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="nati"> Are you a Citizen of the United States?:</label>
                        </div>
                        <div class="col-md-3" style="margin-top:2%;">
                            <label for="yes"> Yes</label>
                            <input class="form-control" type="radio" value="Yes" onclick="habilitar1()" name="nati" id="nati" required>
                        </div>
                        <div class="col-md-3" style="margin-top:2%;">
                            <label for="no"> No</label>
                            <input class="form-control" type="radio" value="No" onclick="habilitar()"  name="nati" id="nati" required>
                        </div>
                    </div>
                     <div class="col-md-4 row" style="margin-top:2%;">
                   
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="nati"> &nbsp;  If no, are you authorized to work in the U.S?:</label>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                          
                            <select class="form-control"  name="work" id="work" required disabled>
                                <option> Yes</option>
                                <option> No</option>
                            </select>
                        </div>
                
              </div>
                    
                    <div class="col-md-4" style="margin-top:2%;">
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="nati"> Have you ever worked for this company?</label>
                        </div>
                        <div class="col-md-3" style="margin-top:2%;">
                            <label for="yes"> Yes</label >
                            <input class="form-control" type="radio" value="Yes" name="worked" onclick="habilitar2()" id="worked" required>
                        </div>
                        <div  class="col-md-3" style="margin-top:2%;">
                            <label for="no"> No</label>
                            <input class="form-control" type="radio" value="No" name="worked" onclick="habilitar3()" id="worked" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6 row">
                        <div>
                            <label for="yes"> &nbsp; &nbsp; If so, when?</label>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="emph"> From:</label>
                            <input class="form-control" type="date" required maxlength="15" id="from" name="from" placeholder="From" disabled>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="dob"> To:</label>
                            <input class="form-control" type="date" required maxlength="15" name="to" id="to" placeholder="To" disabled>
                        </div>
                    </div>
                    
                </div>

  
  </div>
<!-- 2 STPET -->
<div class="tab">Address For the Past Three Years:

  <div class = "row">
  
                    	
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-md-6" style="margin-top:2%;">
				<label for="addres"> Address:</label>
				<input class="form-control" maxlength="70" type="text" name="add" id="add" placeholder="Address" required>
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="apparment"> Apartment:</label>
				<input class="form-control" type="text" maxlength="15" id="ap" name="ap" placeholder="Unit#">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="city"> City:</label>
				<input class="form-control" type="text" required maxlength="15" id="ct" name="ct" placeholder="City">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="state"> State:</label>
				 <select class="form-control"   id="st" name="st"  >
  
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
			<div class="col-md-3" style="margin-top:2%;">
				<label for="zip"> Zip:</label>
				<input class="form-control" type="text" required maxlength="15" id="zp" name="zp" placeholder="zip">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="howl"> How long:</label>
				<input class="form-control" type="number" required name="hl" id="hl" placeholder="how long">
			</div>
  </div>
</div>
</div>
</div>

<!-- step 3 -->
<div class="tab">DRIVER LICENCE:
<div class = "row">
  <div class=" panel-body row">
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city"> STATE:</label>
                <select class="form-control"   id="st" name="st"  >
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
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city"> License Number:</label>
                <input required id="ln" name="ln" class="form-control" type="text" placeholder="Licence No"  maxlength="15">
            </div>
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city"> Type:</label>
                <select required id="tp" name="tp" class="form-control"  maxlength="30">
                    <option> A </option>
                    <option> B </option>
                    <option> C </option>
                    <option> D </option>
                </select>
            </div>
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city"> Expiration Date:</label>
                <input required id="ex" name="ex" class="form-control"   type="date">
            </div>
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city">Photo of the license:</label>
                <input required id="en" name="en" class="form-control" type="file">
            </div>
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city">Restriction(s)</label>
                <input id="re" name="re" class="form-control"   type="text" placeholder="Restriction(s)" maxlength="30">
            </div>
            <div class="col-md-3" style="margin-top:2%;">
                <label for="city">Class:</label>
                <input  required id="cla" name="cla" class="form-control"   type="text" placeholder="Class" maxlength="10">
            </div>
</div>
</div>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
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
</div>

</form>


<script src = "{{asset('js/second_step/formsteep.js')}}"></script>

<script type="text/javascript">
function realizaProceso(link){var msj='1';var link2='{{url('/')}}/'+link;if(msj==="1"){var formData=new FormData(jQuery('#Enviar')[0]);$.ajax({url:link2,type:'POST',contentType:false,processData:false,dataType:'json',data:formData,beforeSend:function(){$("#resultado").html('<div class="alert alert-success">Procesando...!</div>');$("#boton").html('<button disabled=""  type="button" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></button> ');}}).done(function(data,textStatus,jqXHR){var getData=jqXHR.responseJSON;if(data.status=='ok'){$("#resultado").html('<div class="alert alert-success">'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');if(data.url!=''){window.location='{{url('/')}}/'+data.url;}}else{$("#resultado").html('<div class="alert alert-danger"><strong>ERROR!</strong>'+data.mensaje+'</div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');}}).fail(function(data,textStatus,errorThrown){console.log(data);console.log(textStatus);console.log(errorThrown);var errorsHtml='';var errors=data.responseJSON;$.each(errors,function(key,value){if(key!='message'){$.each(value,function(key1,value1){errorsHtml+=value1;});}});$("#resultado").html('<div class="alert alert-danger"><strong>ERROR! </strong>'+errorsHtml+' </div>');$("#boton").html('<button type="submit" name="enviar" id="enviar" class="btn-primary btn-block btn">Submit <i class="fas fa-check"></i></button> ');})}else{swal("¡Error! ",msj,"error");}};
</script>
@endsection