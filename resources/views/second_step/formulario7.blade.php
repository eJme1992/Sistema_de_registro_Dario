<form name="myForm" onsubmit="realizaProceso(
    $('#send').val(),
    $('#Day').val(),
    $('#fecha').val(),
    $('#horas').val(),
    );return false;">
    <div class="container">
        <div class="panel panel-primary" style="margin-top: 2%;">
            <div class="panel-heading"> <b>DRIVER STATEMENT OF ON-DUTY HOURS</b> </div>
            <div class="panel-body">
                <h5> Instructions: Motor carriers when using a driver for the first time shall obtain from the driver
                    a signed statement giving the total time on-duty during immeduately  preceding 7 days and the 
                    time at which such driver was last relieved from duty prior to beginning work for such carrier. Rule 395.8
                    (j) (2) Federal Motor Carrier Safety Regulations. NOTE: Hours for any compesated work during preceding 7 days,
                    including work for a non-motor carrier entity, must be recorded on this form. 
                </h5>
                <!-- Tabla -->
                <div class="row">
                    <div class="col-md-3">
                        <label>Day</label>
                        <select class="form-control" id="dia" name="dia">
                        	<option value="0">Select</option>
                            <option value="1" >Day 1</option>
                            <option value="2">Day 2</option>
                            <option value="3">Day 3</option>
                            <option value="4">Day 4</option>
                            <option value="5">Day 5</option>
                            <option value="6">Day 6</option>
                            <option value="7">Day 7</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Date</label>
                        <input class="form-control" type="date" required maxlength="15" id="fecha" name="fecha" placeholder="Date">
                    </div>
                    <div class="col-md-3">
                        <label>Hours</label>
                        <input class="form-control" type="number" required maxlength="15" id="horas" name="horas" placeholder="	Hours" min="0" max="24">
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-12" style="margin-top:2%;">
                            <button type="submit" style="margin-top:8%;" class="btn btn-default" name="send" id="send"/> Submit
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12" id="resultado" style="margin-top:2%;">
                        <table class="table">
                            <tr>
                                <td>Day</td>
                                <td>Date</td>
                                <td>Hours</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <h5> I hereby certify that the information given above is correct to the best of my knowledge and belief, and i was
                    last relieved from work at:
                </h5>
                <div ALIGN="center">
                    <p>By checking the box below, I agree that the electronic digitized signatures I apply on the following document are representations of my signature and are legally valid and binding as if I had signed the document with ink on paper in accordance with the Uniform Electronic Transactions Act (UETA) and the Electronic Signatures in Global and National Commerce Act (E-SIGN) of 2000.</p>
                    <input name="checkbox" type="checkbox" id="checkbox" onChange="return comprobar(checkbox.value);"/>
                    <label for="checkbox">I accept the Conditions</label>
                    <br>
                    <input class="btn btn-primary btn-lg" name="button" type="image" id="button" onclick='location.href ="8.php";' align="top" disabled/>
                </div>
                <br>
            </div>
        </div>
    </div>
</form>