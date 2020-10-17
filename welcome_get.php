
<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<?php  
$number = $_GET["name"]; 
// echo $number;

$is_end = 0;

$win_count = 0;

function show_board ($num) {
    $turn = 1;
    $status = array();
        echo "<br> Turn: ".$turn."<br>";

    if($turn%2 == 1){
        echo "Player1 <br>";
        is_win();
    }
    if($turn%2 == 0 ){
        echo "player2 <br>";
        is_win();
    }
    
    for ($i = 0; $i < $num; $i++) {
        for($j = 0; $j < $num; $j++){
            $status[$i][$j] = 0 ;
            // echo "||| $i"."$j ";
            echo "
            <div id='$i$j' onclick='test(this.id,this.value)' class='btn'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>'
            ";
        }
        echo "<br><br>";
        // $status[$i][$j] = 0 ;
      }
     return json_encode($status);

    }
    
    function is_win(){

    }

  echo "<br>";

  show_board($number);


// while($is_end==0){
    

    

//     echo "<br> Turn: ".$turn."<br>";

//     if($turn%2 == 1){
//         echo "kao1 <br>";
//         is_win();
//     }
//     if($turn%2 == 0 ){
//         echo "kao2 <br>";
//         is_win();
//     }
    

//     $board = json_encode(show_board ($number));
//     if($turn >= ($number*$number) || $win_count == $number ){
//         $is_end = 1;
//     }
    
//     $turn++;
    
// }


?><br>

<script>
    function test(id,value){
        // alert(document.getElementById("00").id);
        // document.querySelector('#00').innerHTML = 'Hide';
        // document.getElementById("11").value = "New text!";
        console.log(id+' '+value)
    }
</script>

</body>
</html>
