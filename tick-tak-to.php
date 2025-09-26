<?php

            session_start();

             
$cells = ['cel01','cel02','cel03','cel04','cel05','cel06','cel07','cel08','cel09'];
foreach ($cells as $c) {
    if (!isset($_SESSION[$c])) {
        $_SESSION[$c] = "";   // define every cell
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(!isset($_SESSION['player']))
    {
         $_SESSION['player']  = 1;
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////          
     
     if(isset($_POST['reset_gm']))
     {
        
             $_SESSION['cel01']  = "";
            $_SESSION['cel02']  = "";
            $_SESSION['cel03']  = "";

             $_SESSION['cel04']  = "";
             $_SESSION['cel05']  = "";
             $_SESSION['cel06']  = "";

              $_SESSION['cel07']  = "";
              $_SESSION['cel08']  = "";
              $_SESSION['cel09']  = "";
             
     }

   ///////////////////////////////////////////////////////////////////////////////////////////////////////  
 


    if(isset($_POST['cel01']))
     {
        if(  $_SESSION['player']  == 1)
        {
             $_SESSION['cel01']  =  "O";
             $_SESSION['player'] = 0;
        }

        else
        {
             $_SESSION['cel01']  = "X";
            $_SESSION['player'] = 1;
        }
     }
////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel02']))
     {
        if(  $_SESSION['player']  == 1)
        {
             $_SESSION['cel02']  =   "O";
             $_SESSION['player'] = 0;
        }

        else
        {
              $_SESSION['cel02']  =  "X";
             $_SESSION['player'] = 1;
        }
     }

////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel03']))
     {
        if(  $_SESSION['player']  == 1)
        {
              $_SESSION['cel03']  =   "O";
             $_SESSION['player'] = 0;
        }

        else
        {
           $_SESSION['cel03']  =  "X";
          $_SESSION['player'] = 1;
        }
     }

////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel04']))
     {
        if(  $_SESSION['player']  == 1)
        {
             $_SESSION['cel04']  = "O";
            $_SESSION['player'] = 0;
        }

        else
        {
             $_SESSION['cel04']  =  "X";
             $_SESSION['player'] = 1;
        }
     }
////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel05']))
     {
        if(  $_SESSION['player']  == 1)
        {
             $_SESSION['cel05']  =  "O";
             $_SESSION['player'] = 0;
        }

        else
        {
              $_SESSION['cel05']  =  "X";
              $_SESSION['player'] = 1;
        }
     }
////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel06']))
     {
        if(  $_SESSION['player']  == 1)
        {
              $_SESSION['cel06']  =   "O";
           echo   $_SESSION['player'] = 0;
        }

        else
        {
              $_SESSION['cel06']  =   "X";
              $_SESSION['player'] = 1;
        }
     }

////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel07']))
     {
        if(  $_SESSION['player']  == 1)
        {
            $_SESSION['cel07']  =  "O";
              $_SESSION['player'] = 0;
        }

        else
        {
              $_SESSION['cel07']  =  "X";
              $_SESSION['player'] = 1;
        }
     }
////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel08']))
     {
        if(  $_SESSION['player'] === 1)
        {
              $_SESSION['cel08']  = "O";
             $_SESSION['player'] = 0;
        }

        else
        {
              $_SESSION['cel08']  =  "X";
             $_SESSION['player'] = 1;
        }
     }

////////////////////////////////////////////////////////////////////////////////////////////////////
       if(isset($_POST['cel09']))
     {
        if(  $_SESSION['player']  == 1)
        {
              $_SESSION['cel09']  =  "O";
              $_SESSION['player'] = 0;
        }

        else
        {
             $_SESSION['cel09']  = "X";
             $_SESSION['player'] = 1;
        }
     }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if($_SESSION['cel01']=="O" && $_SESSION['cel02'] == "O" && $_SESSION['cel03'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 
   else if($_SESSION['cel01']=="X" && $_SESSION['cel02'] == "X" && $_SESSION['cel03'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }
   

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if($_SESSION['cel01']=="O" && $_SESSION['cel04'] == "O" && $_SESSION['cel07'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 

       else  if($_SESSION['cel01']=="X" && $_SESSION['cel04'] == "X" && $_SESSION['cel07'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }

    

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if($_SESSION['cel01']=="O" && $_SESSION['cel05'] == "O" && $_SESSION['cel09'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 

       else if($_SESSION['cel01']=="X" && $_SESSION['cel05'] == "X" && $_SESSION['cel09'] =="X")
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }

 //// //  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if($_SESSION['cel02']=="O" && $_SESSION['cel05'] == "O" && $_SESSION['cel08'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 
       else if($_SESSION['cel02']=="X" && $_SESSION['cel05'] == "X" && $_SESSION['cel08'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if($_SESSION['cel03']=="O" && $_SESSION['cel05'] == "O" && $_SESSION['cel07'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 
       else if($_SESSION['cel03']=="X" && $_SESSION['cel05'] == "X" && $_SESSION['cel07'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

      if($_SESSION['cel03']=="O" && $_SESSION['cel06'] == "O" && $_SESSION['cel09'] =="O"  )
    {
        echo "<label >PLAYER 1 WINN !!! </label>";
    } 
       else  if($_SESSION['cel03']=="X" && $_SESSION['cel06'] == "X" && $_SESSION['cel09'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


      if($_SESSION['cel07']=="O" && $_SESSION['cel08'] == "O" && $_SESSION['cel09'] =="O"  )
    {
        echo "<label>PLAYER 1 WINN !!! </label>";
    } 
       else if($_SESSION['cel07']=="X" && $_SESSION['cel08'] == "X" && $_SESSION['cel09'] =="X"  )
        {
                echo "<label>PLAYER 2 WINN !!! </label>";
    }



  

  





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tick-tak-to.css">
    <title>Document</title>
</head>
<body>
    <form action="tick-tak-to.php" method="POST">
      <div style="margin-top: 80px;">
    <div class="row" >
     <input type="submit" class="box" name="cel01" value="<?php echo $_SESSION['cel01'] ?> "> 
     <input type="submit" class="box"name="cel02" value="<?php echo  $_SESSION['cel02'] ?>" > 
     <input type="submit" class="box" name="cel03" value="<?php echo $_SESSION['cel03'] ?>">

     </div>
     <div class="row">
    <input type="submit" class="box" name="cel04" value="<?php echo $_SESSION['cel04'] ?>">
    <input type="submit" class="box" name="cel05" value="<?php echo $_SESSION['cel05'] ?>">
    <input type="submit" class="box" name="cel06" value="<?php echo $_SESSION['cel06'] ?>">

     </div>
    <div class="row" >
    <input type="submit" class="box" name="cel07" value="<?php echo $_SESSION['cel07'] ?>">
    <input type="submit" class="box" name="cel08" value="<?php echo $_SESSION['cel08'] ?>">
    <input type="submit" class="box" name="cel09" value="<?php echo $_SESSION['cel09'] ?>">


    </div>
         
        </div>

        <div class="row" style="margin-top: 20px;">
                  <input type="submit" value="Reset" name="reset_gm" id="rbtn">
            </div>
</form>
    </body>
</html>