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
                    