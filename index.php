<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form name="form1" method="post">
    <table width="323"border="1"cellpadding="1"cellspacing="1"bordercolor="66CC33" bgcolor="#FFFFFF">
        <tr>
         <td width="118"height="24"align="right"bgcolor="aqua">用户名：</td>
        <td width="192"height="24"bgcolor="#8a2be2"><input name="user"type="text"class="inputcss"id="user"
            size="24"></td>
        </tr>
        <tr>
        <td height="24"align="right"bgcolor="#CCFF33">密&nbsp;&nbsp;码：</td>
        <td height="24"bgcolor="#CCFF33"><input name="pwd"type="password"class="inputcss"id="pwd"
            size="24"></td>
        </tr>
        <tr align="center"bgcolor="#CCFF33">
        <td height="24"colspan="3"><input name="submit"type="submit" value="登录"></td>
        </tr>
        </table>
</form>
<?php
while(list($name,$value)=each($_POST))
{
    if($name!="submit")
    {
        echo"$name=$value<br>";
    }

}
echo md5("w shi ren ");
?>
</body>
</html>
