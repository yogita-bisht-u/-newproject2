<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=if, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div id=""> My name is <?php echo $_COOKIE['username']; ?></div><hr>
    <div id=""> l live in <?php echo $_COOKIE['address']; ?></div><hr>
    <div id=""> my id is <?php echo $_COOKIE['userid']?></div><hr>
    <div id=""> my email id is <?php echo $_COOKIE['Email']?></div><hr>
    <div id=""> gender <?php echo $_COOKIE['gender']?></div><hr>
    <div id=""> my fev language <?php 
   
   switch($_COOKIE['city']){
      case "delhi":
      echo "you are from delhi";
      break;
      case "USA":
        echo "you are from USA";
        break;
      default:
        echo "City not selected";  
    }
        
        
    

    ?> </div><hr>
    <div id=""> my location <?php echo $_COOKIE['city']?> </div><hr>


<!-- class , html element positions , margin , padding -->


</body>
</html>