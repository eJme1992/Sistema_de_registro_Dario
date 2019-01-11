                      <div class="panel-body"  style = "background-color:#F9F7F7">
                    <div class="row">
                    <div class="col-md-6" style="margin-top:2%;">
				<label for="addres"> Address:</label>
				<input class="form-control" maxlength="70" type="text" name="three_address" id="add" placeholder="Address" required>
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="apparment"> Apartment:</label>
				<input class="form-control" type="text" maxlength="15" id="ap" name="three_apartamento" placeholder="Unit#">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="city"> City:</label>
				<input class="form-control" type="text" required maxlength="15" id="ct" name="three_city" placeholder="City">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="state"> State:</label>
				 <select class="form-control"   id="st" name="three_estado"  >
  
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
				<input class="form-control" type="text" required maxlength="15" id="zp" name="three_zip" placeholder="zip">
			</div>
			<div class="col-md-3" style="margin-top:2%;">
				<label for="howl"> How long:</label>
				<input class="form-control" type="number" required name="three_howlong" id="hl" placeholder="how long">
			</div>
			
			
			
  </div>
  
  <div class = "row col-md-2" style="margin-top:20px;">
			<button id = "three_adress_button" onclick = "realizaProceso2('send_data', this.id);">Add</button>
  </div>
  
  <div class = "row col-md-12" style="margin-top:50px;">
  <table class="table table-responsive" id = "tabla_three_adress">
  <thead class="thead-dark">
    <tr style="background-color:#E6E6E6">
      <th scope="col">Address:</th>
      <th scope="col">Apartament:</th>
      <th scope="col">City:</th>
      <th scope="col">State:</th>
      <th scope="col">Zip:</th>
      <th scope="col">How Long:</th>
    </tr>
  </thead>
  <tbody id = "loopdds">
  <!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
	-->
	
  </tbody>
</table>
</div>
</div>



