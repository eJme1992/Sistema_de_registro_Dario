    <div class="col-md-6" style="margin-top:2%;">
                        <label for="addres"> Address:</label>
                        <input class="form-control" maxlength="70" type="text" name="direccion" id="add" placeholder="Streer Address" required>
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="apparment"> Apartment:</label>
                        <input class="form-control" type="text" maxlength="15" id="ap" name="apartamento" placeholder="Unit#">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="city">City:</label>
                        <input class="form-control" type="text" required maxlength="15" id="ct" name="city" placeholder="City">
                    </div>

                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="zip"> Zip:</label>
                        <input class="form-control" type="text" required maxlength="15" id="zp" name="zip" placeholder="zip">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="howl"> How long:</label>
                        <input class="form-control" type="number" required name="howlong" id="hl" placeholder="how long">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="phone"> Phone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="cellphone"> CellPhone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="cph" name="cell_phone" placeholder="Cellphone">
                    </div>
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="emph"> Emergency Phone:</label>
                        <input class="form-control" type="tel" required maxlength="15" id="eph" name="emergency_phone" placeholder="Emergency Phone">
                    </div>
                   
                    <div class="col-md-3" style="margin-top:2%;">
                        <label for="dtav"> Date Available:</label>
                        <input class="form-control" type="date" required name="disponible" id="da">
                    </div>
                    <div class="col-md-9" style="margin-top:2%;">
                        <label for="position"> Position Applied For:</label>
                        <input class="form-control" type="text" required maxlength="15" id="paf" name="position_applied_for" placeholder="Position">
                    </div>
                    <div class="col-md-4" style="margin-top:2%;">
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="nati"> Are you a Citizen of the United States?:</label>
                        </div>
                        <div class="col-md-3" style="margin-top:2%;">
                            <label for="yes"> Yes</label>
                            <input class="form-control" type="radio" value="Yes" onclick="habilitar1()" name="nacionalidad" id="nati" required>
                        </div>
                        <div class="col-md-3" style="margin-top:2%;">
                            <label for="no"> No</label>
                            <input class="form-control" type="radio" value="No" onclick="habilitar()"  name="nacionalidad" id="nati" required>
                        </div>
                    </div>
                     <div class="col-md-4 row" style="margin-top:2%;">
                   
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="nati"> &nbsp;  If no, are you authorized to work in the U.S?:</label>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                          
                            <select class="form-control"  name="permiso_trabajo" id="work" required disabled>
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
                            <input class="form-control" type="radio" value="Yes" name="ex_trabajador" onclick="habilitar2()" id="worked" required>
                        </div>
                        <div  class="col-md-3" style="margin-top:2%;">
                            <label for="no"> No</label>
                            <input class="form-control" type="radio" value="No" name="ex_trabajador" onclick="habilitar3()" id="worked" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6 row">
                        <div>
                            <label for="yes"> &nbsp; &nbsp; If so, when?</label>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="emph"> From:</label>
                            <input class="form-control" type="date" required maxlength="15" id="from" name="inicio_extrabajo" placeholder="From" disabled>
                        </div>
                        <div class="col-md-6" style="margin-top:2%;">
                            <label for="dob"> To:</label>
                            <input class="form-control" type="date" required maxlength="15" name="fin_extrabajo" id="to" placeholder="To" disabled>
                        </div>
                    </div>
                    