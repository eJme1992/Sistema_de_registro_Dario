 <form onsubmit="realizaProceso(
$('#send').val(),
$('#otro').val(),
$('#otro2').val(),
);return false; ">
		<div class="panel panel-primary" style="margin-top:2%;">
			<div class="panel-heading">
				<h2 id="p" class="center-block" style="text-align: center;"> DRIVER CERTIFICATION FOR OTHER COMPESATED WORK</h2>
			</div>
			<div class="panel-body">
				<section class="main">
					<h4> Instructions: When employed by a motor carrier, a driver must report to the carrier all of-duty time including time
                    working for the other employers. The definition of on-duty time found in section 395.2 paragraphs(8) and (9) of the
                    Federal Motor Carrier Safety Regulations includes time perfoming any other work in the capacity of, or in the employ or service
                    of, a common, contract or private motor carrier, also perfoming any compesated work for any non-motor carrier entity.</h4>
				</section>
				<section>
					<div id="pregunta">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-6">
									<label for="conductor"> Are you currently working for another employer? </label>
								</div>
								<div class="col-md-1">
									<label for="yes"> Yes</label>
									<input type="radio" value="Yes" onclick="habilitar()" required  name="otro" id="otro">
								</div>
								<div class="col-md-1">
									<label for="no"> No</label>
									<input type="radio" value="No" onclick="habilitar1()" required name="otro" id="otro">
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-12">
									<label for="conductor"> At this time do you intend to work for another employer while still employed by this company? </label>
								</div>
								<select class="form-control" name="otro2" id="otro2" required disabled>
									<option> Yes</option>
									<option> No</option>
								</select>
							</div>
						</div>
					</div>
				</section>
				<section>
					<h4> I hereby certify that the information given obove is true and i understand that once i become
                    employed with this company, if i begin working for any additional employer(s) for compesation that i
                    must in form this company immediately of such employment activity.</h4>
				</section>
				<section>
                                    <div id="resultado"></div>    
					<div ALIGN="center">
						<p>By checking the box below, I agree that the electronic digitized signatures I apply on the following document are representations of my signature and are legally valid and binding as if I had signed the document with ink on paper in accordance with the Uniform Electronic Transactions Act (UETA) and the Electronic Signatures in Global and National Commerce Act (E-SIGN) of 2000.</p>
						<input name="checkbox" type="checkbox" id="checkbox" onChange="return comprobar(checkbox.value); comprobar1(checkbox.value);"/>
						<label for="checkbox">I accept the Conditions </label>
						<br>
						<input class="btn btn-primary btn-lg" name="send" type="image" id="send"  align="top" disabled/>
					</div>
				</section>
			</div>
		</div>
	</form>