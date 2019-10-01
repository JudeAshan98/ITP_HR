<!DOCTYPE html>
<html lang="en">

<head>
    <!--title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"-->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->



    <!--sample for datepicker-->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <!--sample-->

</head>

<body>

    <div class="container" role="main">
        <div class="jumbotron text-center" style="padding-top:40px; padding-bottom:0px; background-color: transparent;">
            <h2>Travel Requests</h2>
        </div>
        <br /><br /><br />


        <form action="AddTravel.php" onsubmit="#" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Travel From</label>
                    <input type="text" class="form-control" id="inputFrom" placeholder="Location" name="Tfrom">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Travel To</label>
                    <input type="text" class="form-control" id="inputTo" placeholder="Location" name="Tto">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFromDate">Travel Date</label>
                    <!-- <div class='input-group date' id='datetimepicker1' >
                                  <input type='text' class="form-control" name="Tdate">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script type="text/javascript">
                                   $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                      });
                                </script>
                            </div>    -->
                    <input type="date" class="form-control" name="Tdate">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputFromDate">Travel Date</label>
                    <!-- <div class='input-group date' id='datetimepicker2' >
                                  <input type='text' class="form-control" name="EndDate">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <script type="text/javascript">
                                   $(function () {
                                        $('#datetimepicker2').datetimepicker();
                                      });
                                </script>
                            </div>  -->
                    <input type="date" class="form-control" name="EndDate">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Prority</label>
                    <select id="inputState" class="form-control" name="priority">
                        <option selected>Choose...</option>
                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Vehicle</label>
                    <select id="inputState" class="form-control" name="Vehicle">
                        <option selected>Choose...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-">
                    <label for="inputCity">Notes</label>
                    <textarea class="form-control" id="inputCity" name="description"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">+ Request</button>
            <button type="reset" class="btn btn-primary">Clear</button>
        </form>
    </div>
    </div>
</body>

</html>