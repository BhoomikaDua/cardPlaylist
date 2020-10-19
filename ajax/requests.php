<?php
session_start();

// database settings
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'ubisoft';

// connect to the database
$Database = new mysqli($server, $user, $pass, $db);

if($_POST['action'] === 'register') {
  $title = $Database -> real_escape_string($_POST['title']);
  $desc = $Database -> real_escape_string($_POST['desc']);
  $img = $Database -> real_escape_string($_POST['img']);

  $sql = "INSERT INTO items (title, description, image)
    VALUES ('".$title."','".$desc."','".$img."')";
    
    $result = $Database->query($sql);
    if ($result) {
      // success
		  echo 'TRUE';
    }
    else {
      // failure
		  echo 'FALSE';
  }
}
elseif($_POST['action'] === 'gallery'){
   $arr=json_decode($_SESSION["gallery"], TRUE);
   $start=$_SESSION["counter"];
   $total=$_SESSION["total"];
   if($total-$start==5){
     echo 'END';
     return false;
   }
   $_SESSION["counter"]=$_SESSION["counter"]+1;

   $test=$arr[0]["image"];

   $display='';
   for($i=0;$i<6;$i++){
     $display.=
     '
     <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Card -->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="'.$arr[$start+$i]["image"].'" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">'.$arr[$start+$i]["title"].'</h4>
                        <!--Text-->
                        <p class="card-text">'.$arr[$start+$i]["description"].'</p>


                    </div>

                </div>
                <!-- Card -->
            </div>
     ';
   }

   $list='';
   $remaining=0;
   for($j=$start+6;$j<$total;$j++){
    $remaining++;
     $list.='
     <div class="field">
                            <img class="card-img-top" src="'.$arr[$j]["image"].'" alt="Card image cap">
                            <h4 class="card-title">'.$arr[$j]["title"].'</h4>
                        </div>
                        <hr>
     ';
   }

   $data='
   <!-- Card deck -->
        <div class="card-deck row">
        '.$display.'
        </div>
        <!-- Card deck -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary queue bottom" data-toggle="modal" data-target="#exampleModal">Queue['.$remaining.']</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Queue</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                    '.$list.'
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
   ';

echo $data;


}