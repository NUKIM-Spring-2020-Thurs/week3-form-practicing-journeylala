<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高大資管營</title>
</head>
<style>
    div.head{font-size:40px;color:antiquewhite;background-color:#34495E;width: 800px ;margin: 0 auto}
</style>
<style>
    div.body{font-size:20px;background-color:#DAF7A6;width: 800px ;margin: 0 auto; margin-top:5px ;}
</style>
<style>
    div.table{font-size:20px;background-color: #FFC300;width: 800px;height:350px;line-height:50px;text-align:center;margin: 0 auto;margin-top:5px;;}
</style>
<style>
     div.a{font-size:40px;color:black;background-color:#A9F8FC;width: 800px ;margin: 0 auto;margin-top:5px}
</style>
<body>
    <div class="head">
        <center>歡迎來到資管營</BR>
                Welcome to IMCP
        </center>
        
    </div>
    <div class="table">
        <center>資管營時間表 
        <table border="2">
            <tr>
                <td>7/1星期一</td>
                <td>7/2星期二</td>
                <td>7/3星期三</td>
                <td>7/4星期四</td>
                <td>7/5星期五</td>
            </tr>
            <tr>
                <td>破冰時間</td>
                <td>大地遊戲</td>
                <td>RPG</td>
                <td>程式設計</td>
                <td>水大地</td>
            </tr>
            <tr>
                <td>開幕</td>
                <td>行銷</td>
                <td>供應鏈管理</td>
                <td>程式設計2.0</td>
                <td>閉幕式</td>
            </tr>
            <tr>
                <td>大學入門</td>
                <td>密室</td>
                <td>舞會</td>
                <td>晚會</td>
                <td>小隊時間</td>
            </tr>
            <tr>
                <td>小隊時間</td>
                <td>小隊劇排練</td>
                <td>宵夜時間</td>
                <td>星空夜語</td>
                <td>工人耍廢</td>
            </tr>
            
         </table></center>
    </div>
    <div class="body">
        <center>報名表單</center>
    <form action="submit.php" method="POST">

        請輸入你的名字:<input type="text" name="name" placeholder="王大明" required><br>
        你的性別:<br>
        male<input type="radio" name="gender" value="M"  checked>
        female<input type="radio" name="gender" value="F"><br>
        你的身分證字號:<input type="password" name="id" value="" placeholder="T111111111" required><br>
        請輸入你的聯絡方式
        手機: <input type="text" name="phonenumber" placeholder="09XX-XXX-XXX" required><br>
        請輸入你的生日: <input type="date" name="bd" required><br>
        你來自何方?<br> <select name="city" id="" required>
            <option value="Taipei" selected>台北市</option>
            <option value="New_Taipei">新北市</option>
            <option value="Keelung">基隆市</option>
            <option value="Taoyuan">桃園市</option>
            <option value="Hsinchu">新竹市</option>
            <option value="Hsinchu">新竹縣</option>
            <option value="Yilan">宜蘭縣</option>
            <option value="Miaoli">苗栗縣</option>
            <option value="Taichung">台中市</option>
            <option value="Changhua">彰化縣</option>
            <option value="Yunlin">雲林縣</option>
            <option value="Nantou">南投縣</option>
            <option value="Chiayi">嘉義市</option>
            <option value="Chiayi">嘉義縣</option>
            <option value="Tainan">台南市</option>
            <option value="Kaohsiung" >高雄市</option>
            <option value="Pingtung">屏東縣</option>
            <option value="Taitung">台東縣</option>
            <option value="Hualien">花蓮縣</option>
            <option value="Kinmen">金門縣</option>
            <option value="Lienchiang">連江縣</option>
            <option value="Penghu">澎湖縣</option>
            </select></BR>
        飲食習慣:<br>葷<input type="radio" name="eathabbit" value="M">
                素<input type="radio" name="eathabbit" value="V"><br>
        你的人格特質: <br><select name="personality[]" id="" multiple required>
                  <option value="easy-going">隨和的</option>
                  <option value="shy">害羞的</option>
                  <option value="brave">勇敢的</option>
                  <option value="happy">聰明的</option>
                  </select><br>
        何時抵達: <input type="time" name="arrivetime" required><br>
        如何知道高大資管營?<br>
            FB粉專<input type="checkbox" name="information[]" value="socialmedia">
            海報傳單<input type="checkbox" name="information[]" value="poster">
            親朋好友<input type="checkbox" name="information[]" value="relative"><br>

            有甚麼想說的話嗎?<br>
            <textarea name="comment" id="" cols="20" rows="5">
            </textarea><br>

        <input type="reset" value="清除"><input type="submit" value="提交"><br>

    </form>
    </div>
    <div class="a">
        <center>快來找我們玩喔~</center>
    </div>
</body>
</html>