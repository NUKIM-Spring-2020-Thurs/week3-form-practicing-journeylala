 <?php
 $name=$_POST["name"];
 $gender=$_POST["gender"];
 $id=$_POST["id"];
$phonenubber=$_POST["phonenumber"];
$bd=$_POST["bd"];
$city=$_POST["city"];
$eathabbit=$_POST["eathabbit"];
$personality=($_POST["personality"]);
$information=$_POST["information"];
$arrivetime=$_POST["arrivetime"];
$comment=$_POST["comment"];
 echo "你的姓名:".$name."<br/>";
 echo "你的性別:".$gender."<br/>";
 echo "你的身分證字號:".$id."<br/>";
 echo "你的電話號碼:".$phonenubber."<br/>";
 echo "你的生日:".$bd."<br/>";
 echo "你來自何方:".$city."<br/>";
 echo "你的飲食習慣:".$eathabbit."<br/>";
 //echo "如何知道高大資管營:".$information."<br/>"; 
 echo "何時抵達:".$arrivetime."<br/>";
 //echo nl2br($comment)."<br/>";
 echo nl2br(htmlspecialchars($comment))."<br/>";

 $personalitynum=count($personality);
 echo $personalitynum;
 

 for($i=0;$i<$personalitynum;$i++)
 {
     echo "你的個性:".$personality[$i]."<br/>";
 }

 $informationNO=count($information);
 //for($j=0;$j<$informationNO;$j++)
 //{
   // echo "如何知道高大資管營:" .$information[$j]."<br/>";
 //}

 foreach ($information as $key => $value)
 {
    echo "如何知道高大資管營:" .$value."<br/>";
 }

 ?>