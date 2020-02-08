<?php
session_start();
if(isset($_SESSION["last"])) {
  session_destroy();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sigles</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="../assets/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<!-- NAVBAR
================================================== -->

<body>

<div class="login-wrap">
<div class="login-html scorecard">


    <header>
      <div class="scorecard-header">
        <div class="hd-lines"><label>Competition:</label><input type="text" name=""></div>
        <div class="hd-lines"><label>Date:</label><input type="text" name=""></div>
        <div class="row">
          <div class="col-xs-5">
            <input type="text" placeholder="Home Team">
          </div>
          <div class="col-xs-2">
            Vs
          </div>
          <div class="col-xs-5">
            <input type="text" placeholder="Away Team">
          </div>
        </div>
      </div>
    </header>
    <form id="sendform" method="POST" class="input-group">
    <div class="score-area">
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          Lead
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          2nd
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          3rd
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
        <div class="col-xs-2">
          Skip
        </div>
        <div class="col-xs-5">
          <input type="text" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" name="1" id="pts" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" name="2" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="pts" disabled>
            </div>
          </div>   
        </div>
        <div class="col-xs-2">
          Ends
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="3" id="pts3" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" name="4" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="5" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" name="6" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          1
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="7" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="8" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="9" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="10" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          2
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="11" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="12" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="13" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="14" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          3
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="15" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="16" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="17" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="18" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          4
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="19" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="20" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="21" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="22" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          5
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="23" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="24" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="25" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="26" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          6
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="27" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="28" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="29" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="30" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          7
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="31" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="32" class="pts" disabled>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="33" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="34" class="pts" disabled>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          8
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="35" class="pts" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" name="36" class="pts" disabled>
            </div>
          </div>
        </div>
    </div>
          <div class="row">
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <form method="GET" action="scoreboard.php">
                <input type="number" id="htotal" name="t1">
                <br>
                <input type=submit value=Submit>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-2">
          TOTAL
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-6 group-pts">
              <input type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" pattern="\d*">
            </div>
            <div class="col-xs-6 group-pts">
              <input type="number" maxlength="1" id="atotal" oninput="this.value=this.value.replace(/[^0-9]/g,'');" >
            </div>
          </div>
        </div>
    </div> 
</div>
<input id="clickClear" type="submit" value="Clear Scores" class="btn btn-default" />
<input id="text" type="hidden" name="text" autocomplete="off" class="form-control" placeholder="Enter chat message.."/>
<!-- <a href='scoreboard.php?score-id=248&score-away=124'>Send Score</a> -->
<!-- <span class="input-group-btn">
  <input id="send" type="hidden" value="Send" class="btn btn-default" />
</span> -->
</form>
<div id="msg" class="panel-body" style="display: none;">
        </div>
</div>
  </div>

  <script src="chat.js"></script> 

</body>
</html>
