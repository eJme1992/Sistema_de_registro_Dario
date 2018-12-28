<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">
    .form-control{
        margin-top:5px;
        margin-bottom:5px;
    }
    td {
  padding-top:20px;
  vertical-align: bottom;
}
</style>


<body>
    <div class="container">
        <div class="row">
            <div class="panel-body panel row">
                <div class="text-center col-lg-12">
                    <h2>AUTHORIZATION AND REALEASE TO OBTAIN INFORMATION</h2>
                </div>
                <div class="text-justify col-lg-12">
                    <p>I hereby authorize Journey Transport LLC to obtain records concerning my driving performance and monitor my driving record. This authorization shall remain in effect over the course of my employment.
                    </p>
                    <p>Federal State reports may be ordered periodically during the course of my employment.</p>
                    <p>I hereby release and hold harmless any person that discloses matters in accordance with this</p>
                    <p>authorization, as well as Journey Transport LLC from the liability that might otherwise result from the request for the use of any/or disclosure of any of the foregoing information. I agree that a copy this authorization has the same
                        effect as an original.</p>
                </div>
            </div>


            <div class="col-md-12">
                <table width="100%" class="text-center">
                    <tr>
                        <td height="90">
                            {{$Job->nombre}} {{$Job->nombre}}
                            <hr> Full Name (Print Clearly)
                        </td>

                        <td height="90">
                            <img src="{{$Job->firma}}" style="width:200px">
                            <hr> Signature
                        </td>

                        <td height="90">
                            {{$Form->updated_at}}
                            <hr> Date
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$License->licencia}}
                            <hr> Driver’s License #
                        </td>

                        <td>
                            {{$License->estado}}
                            <hr> State Licensed
                        </td>

                        <td>
                            {{$Job->edad}}
                            <hr> Date of Birth
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

​