   <form name="myForm" onsubmit="realizaProceso(
$('#send').val(),
$('#com').val(),
$('#ph').val(),
$('#add').val(),
$('#name').val(),
$('#jt').val(),
$('#from').val(),
$('#to').val(),
$('#sa').val(),
$('#re').val(),
$('#c').val()
);return false;">
    <div class="container">
        <div class="panel panel-primary" style="margin-top:2%;">
            <div class="panel-heading"> Previous experience. (Add companies where you have previously worked) </div>
            <div  class="row panel-body">
                <div style="margin-top:2%;" class="col-md-6">
                    <label for="company">Company:</label>
                    <input  id="com" name="com"  required type="text" class="form-control" placeholder="Name of the company">
                </div>
                <div style="margin-top:2%;" class="col-md-6">
                    <label for="phone">Phone:</label>
                    <input  id="ph" name="ph"  required type="tel" class="form-control" placeholder="Phone">
                </div>
                <div style="margin-top:2%;" class="col-md-12">
                    <label for="address">Address:</label>
                    <input  id="add" name="add"  required type="text" class="form-control" placeholder="Address">
                </div>
                <div style="margin-top:2%;" class="col-md-4">
                    <label for="lastname">Supervisor:</label>
                    <input  id="name" name="name"  required type="text" class="form-control" placeholder="Supervirsor">
                </div>
                <div style="margin-top:2%;" class="col-md-4">
                    <label for="lastname">Job Title:</label>
                    <input  id="jt" name="jt"  required type="text" class="form-control" placeholder="Job Title">
                </div>
                <div style="margin-top:2%;" class="col-md-2">
                    <label for="lastname">From:</label>
                    <input  id="from" name="from"  required type="date" class="form-control" placeholder="From">
                </div>
                <div style="margin-top:2%;" class="col-md-2">
                    <label for="lastname">To:</label>
                    <input  id="to" name="to"  required type="date" class="form-control" placeholder="To">
                </div>
                <div style="margin-top:2%;" class="col-md-4">
                    <label for="lastname">Salary:</label>
                    <input  id="sa" name="sa"  required type="number" class="form-control" placeholder="Salary">
                </div>
                <div style="margin-top:2%;" class="col-md-8">
                    <label for="lastname">Reason for leaving:</label>
                    <input  id="re" name="re"  required type="text" class="form-control" placeholder="Reason for leaving">
                </div>
                <div style="margin-top:2%;" class="col-md-6 row">
                    <div style="margin-top:2%;" class="col-md-6">
                        <label for="conductor">May we contact you previous supervisor for a reference?</label>
                    </div>
                    <div style="margin-top:2%;" class="col-md-1">
                        <label for="yes"> Yes</label>
                        <input  id="c" name="c"  required type="radio" >
                    </div>
                    <div style="margin-top:2%;" class="col-md-1">
                        <label for="no"> No</label>
                        <input  id="c" name="c"  required type="radio" >
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:2%;">
                    <div id="resultado"></div>
                    <button type="submit" class="btn btn-default" name="send" id="send"/>
                    Submit
                    </button>
                </div>
            </div>
        </div>
        <!--
		<div style="margin-top: 2%;"> <a href="5.php">
            <button type="button" class="btn btn-primary btn-lg">Next</button>
            </a> 
		</div>
		-->
    </div>
</form>
