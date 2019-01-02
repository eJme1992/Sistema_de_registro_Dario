         <form name="myForm" onsubmit="realizaProceso(
$('#send').val(),
$('#st').val(),
$('#te').val(),
$('#from').val(),
$('#to').val(),
$('#kl').val(),
);return false;">
    <div class="container" style="margin-top:2%;">
        <div class="panel panel-primary">
            <div class="center-block panel-heading" style="font-size: 15PX;"> DRIVER EXPERIENCE</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Class equipment</label>
                        <select id="te"   name="te"  class="form-control">
                            <option>Straights trucks</option>
                            <option> Tractor & semi trailer</option>
                            <option>Tractor & two trailer</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label>type of equipment</label>
                        
                        <select required id="st"   name="st"     class="form-control "    style="border: none;">
                            <option>Van</option>
                            <option> Refeer </option>
                            <option> Flatbed</option>
                            <option> Dump </option>
                            <option> Tank</option>
                            <option> Straight Truck </option>
                            <option> Container</option>
                            <option>Lowboy</option>
                            <option>Liverstock</option>
                        </select>    
                    </div>
                    <div class="col-sm-2">
                        <label>Date: from</label>
                        <input required id="from" name="from"   class="form-control " placeholder="From"                style="border: none;" type="date">
                    </div>
                    <div class="col-sm-2">
                        <label>to:</label>
                        <input required id="to"   name="to"     class="form-control " placeholder="To"                  style="border: none;" type="date">
                    </div>
                    <div class="col-sm-6">
                        <label>Aprox number of myles</label>
                        <input required id="kl"   name="kl"     class="form-control " placeholder="APRPOX.NO.OF MYLES " style="border: none;" type="number">
                    </div>
                 
                    <div class="col-md-12" style="margin-top:2%;">
                        <button type="submit" class="btn btn-default" name="send" id="send"/>
                        Submit
                        </button>
                    </div>
                    <br>
                </div>
                <div class="table-responsive center-block" style="margin-top:2%;">
                    <table class="table table-bordered" id="resultado">
                        <thead>
                            <tr>
                                <th WIDTH="20%"> class equipment </th>
                                <th WIDTH="20%"> type of equipment 
                                    </th>
                                <th WIDTH="20%"> <table WIDTH="100%">
                                        <tr>
                                            <th>Date</th>
                                        </tr>
                                        <tr>
                                            <th WIDTH="50%">From</th>
                                            <th WIDTH="50%">To</th>
                                        </tr>
                                    </table></th>
                                <th WIDTH="20%"> aprox number of myles <br>
                                    (total)</th>
                                <th WIDTH="10%"> expiration date</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>


<form name="myForm2" onsubmit="realizaProceso2(
$('#send2').val(),
$('#dt').val(),
$('#na').val(),
$('#fa').val(),
$('#inj').val(),
$('#tp').val(),
$('#lc').val(),
$('#mt').val()
);return false;">
    <div class="container">
        <div class="panel panel-primary">
            <div class="center-block panel-heading" style="font-size: 15PX;">TRAFFIC CONVICTION AND FORFEITURES FOR THE PAST 3 YEARS(OTHER THAN PARKING VIOLATIONS)</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <label>Dates:</label>
                        <input required id="dt"   name="dt"     class="form-control " placeholder="Dates"   style="border: none;" type="date">
                    </div>
                    <div class="col-sm-6">
                        <label>Nature Of The Accident</label>
                        <input required id="na"   name="na"     class="form-control " placeholder="Nature Of The Accident"   style="border: none;" type="text">
                    </div>
                    <div class="col-sm-6">
                        <label>Fatalities</label>
                        <input required id="fa" name="fa"   class="form-control " placeholder="Fatalities"                style="border: none;" type="number">
                    </div>
                    <div class="col-sm-6">
                        <label>Injuries</label>
                        <input required id="inj"   name="inj"     class="form-control " placeholder="Injuries" style="border: none;" type="number">
                    </div>
                    <div class="col-sm-4">
                        <label for="firma"> Type of vehicle Operated:</label>
                        <input required class="form-control" type="text" id="tp" name="tp">
                    </div>
                    <div class="col-sm-4">
                        <label for="firma"> Offense:</label>
                        <input required class="form-control" type="text" id="mt" name="mt">
                    </div>
                    <div class="col-sm-4">
                        <label>Locations</label>
                        <select  required id="lc"   name="lc"     class="form-control "   style="border: none;" >
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
                    <div class="col-md-12" style="margin-top:2%;">
                        <button type="submit" class="btn btn-default" name="send2" id="send2"/>
                        Submit
                        </button>
                    </div>
                    <br>
                </div>
                <div class="table-responsive center-block" style="margin-top:2%;">
                    <table class="table table-bordered" id="resultado2">
                        <thead>
                            <tr>
                                <th WIDTH="20%"> Dates: </th>
                                <th WIDTH="20%"> Nature Of The Accident<Br>
                                    (Head-On,Near-End,Upset,Etc.)</th>
                                <th WIDTH="20%"> Fatalities</th>
                                <th WIDTH="10%"> Injuries</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>



<form name="myForm3" onsubmit="realizaProceso3(
$('#send3').val(),
$('#lc').val(),
$('#dt1').val(),
$('#ch1').val(),
$('#pn').val()
);return false;">
    <div class="container">
    <div class="panel panel-primary">
        <div class="center-block panel-heading" style="font-size: 15PX;">Criminal charges during the last 3 years</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <label>Locations</label>
                    <select  required id="lc"   name="lc"     class="form-control "   style="border: none;" >
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
                <div class="col-sm-6">
                    <label>Dates</label>
                    <input required      id="dt1"   name="dt1"     class="form-control " placeholder="Dates"   style="border: none;" type="date">
                </div>
                <div class="col-sm-6">
                    <label>Charges</label>
                    <input required    id="ch1"   name="ch1"     class="form-control " placeholder="Charges"                style="border: none;" type="text">
                </div>
                <div class="col-sm-6">
                    <label>Penalty</label>
                    <input required    id="pn"   name="pn"     class="form-control " placeholder="Penalty" style="border: none;" type="text">
                </div>
                <div class="col-md-3" style="margin-top:2%;" >
                    <div class="col-md-12" style="margin-top:2%;">
                        <button type="submit" class="btn btn-default" name="send3" id="send3"/>
                        Submit
                        </button>
                    </div>
                    <br>
                </div>
                <div class="col-sm-12 table-responsive center-block" style="margin-top:2%;">
                    <table class="table table-bordered" id="resultado3">
                        <thead>
                            <tr>
                                <th WIDTH="20%">Locations: </th>
                                <th WIDTH="20%">Dates</th>
                                <th WIDTH="20%">Charges</th>
                                <th WIDTH="10%">Penalty</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
          
            </div>
        </div>
    </div>
    </div>     
</form>
