
<!DOCTYPE html>
<html>

<head>
<style>
div {
    text-align: center;
    height: 35px;
    width: 35px;
    background-color: powderblue;
}

h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>

<body>

<h1>Tic Tac Toe</h1>
<p id="turn">Turn: 1</p>
<p id="player">Player: 1 </p>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<?php  
$number = $_GET["name"]; 

function show_board ($num) {
    
    for ($i = 0; $i < $num; $i++) {
        for($j = 0; $j < $num; $j++){
            $status[$i][$j] = 0 ;
            echo "
            
            <div id='$i.$j' onclick='test(this.id,this.value)' class='btn'></div>
            ";
        }
        echo "<br><br>";
      }

    }
    
    function is_win(){

    }

  echo "<br>";

  show_board($number);


?><br>

<script>

    var turn = 1 ;
    

    function test(id,value){
        if(document.getElementById(id).innerHTML == "X" || document.getElementById(id).innerHTML == "O"){

        }else{
            if(turn%2 == 1){
                document.getElementById(id).innerHTML = "X";
                document.getElementById("player").innerHTML = "Player: 2";
            }
            if(turn%2 == 0 ){
                document.getElementById(id).innerHTML = "O";
                document.getElementById("player").innerHTML = "Player: 1";
                
            }
            
            turn++;
            document.getElementById("turn").innerHTML = "Turn: " + turn;
        }
        // console.log(id+' '+value)
    }
</script>

</body>
</html>
