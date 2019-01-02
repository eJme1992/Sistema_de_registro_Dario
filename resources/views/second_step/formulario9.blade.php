<form name="myForm" onsubmit="return validation();" action="php/p9.php" enctype="multipart/form-data" method="post" >
    <div class="panel panel-primary" style="margin-top:2%;">
        <div class="panel-heading"> PREVIOUS DRUG AND ALCOHOL TEST STAMENT</div>
        <h3> To be completed by the driver/applicant</h3>
        <div class="panel-body">
            <div class="row">
                <div  class="col-md-8" style="margin-top:2%;"> During the past (2)two years, have you ever tested positive for controlled substances including a pre-empleyment
                    drug or alcohol test administered by an employer to which you applied for, but did not obtain, safety-sensitive
                    transportation work convered by the Deparment of Transportation (DOT) drug alcohol testing rules? </div>
                <div  class="col-md-4" style="margin-top:2%;" for="yes"> 
                    <select class="form-control"  required  name="worked1" id="worked1">
                        <option value="no">No</option>
                      <option value="yes">Yes</option>     
                </select>
            </div>
            </div>
            <div class="row">
                <div  class="col-md-8" style="margin-top:2%;" for="no"> During the past (2) two years, have you ever refused to test for controlled substances or alcohol including
                    a pre-employment drug or alcohol test administered by an employer to which you applied for, but did not obtain, safety-sensitive transportation
                    work covered by the Deparment of Transportation (DOT) drug and alcphol testing rules? </div>
                   <div  class="col-md-4" style="margin-top:2%;" for="yes"> 
                    <select class="form-control"  required  name="worked2" id="worked2">
              <option value="no">No</option>    
              <option value="yes">Yes</option> 
                </select>
            </div>
            </div>
            <div class="row">
                <div  class="col-md-8" style="margin-top:2%;"> During the past (2) two years, have you ever had an alcohol test with a Breath Alcohol concentratition
                    of 0.04 or greater? </div>
                 <div  class="col-md-4" style="margin-top:2%;" for="yes"> 
                    <select class="form-control"  required  name="worked3" id="worked3">
              <option value="no">No</option>
              <option value="yes">Yes</option>
                   
                </select>
            </div>
            </div>
            <h4> If you answered yes to any of the questions above, please provide documentation of your successful
                completion of the return-to-duty process.</h4>
            <div class="row">
                <div class="col-md-8" style="margin-top:2%;">
                    <input class="form-control" type="file" id="file" name="file" disabled required>
                </div>
            </div>
            <div ALIGN="center">
                <p>By checking the box below, I agree that the electronic digitized signatures I apply on the following document are representations of my signature and are legally valid and binding as if I had signed the document with ink on paper in accordance with the Uniform Electronic Transactions Act (UETA) and the Electronic Signatures in Global and National Commerce Act (E-SIGN) of 2000.</p>
                <input name="checkbox" type="checkbox" id="checkbox" onChange="return comprobar(checkbox.value);"/>
                <label for="checkbox">I accept the Conditions </label>
                <br>
               <input class="btn btn-primary btn-lg" name="send" type="submit" id="send" align="top" disabled/>
            </div>
        </div>
    </div>
   </form>       