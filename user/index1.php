<?php
session_start();
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
?>
<html>
<head>
<link rel="shortcut icon" href="images/ic.png">
<title>RUKMANA STORE BUSANA DAN AKSESORIS</title>
<meta name="robots" content="index, follow">

<meta name="description" content="RUKMANA STORE BUSANA DAN AKSESORIS MENAWARKAN BERBAGAI MACAM BUSANA DAN AKSESORIS">

<meta name="keywords" content="RUKMANA STORE BUSANA DAN AKSESORIS MENAWARKAN BERBAGAI MACAM BUSANA DAN AKSESORIS">

<link href="style/styles_user.css" rel="stylesheet" type="text/css">
<link href="style/button.css" rel="stylesheet" type="text/css">
<script language="JavaScript" src="js.popupWindow.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-color: #FFFAF0;
	background-image: url(images/tes2.jpg);	 
	
}
-->
</style></head>
<body topmargin="3">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="black" class="border">
  <tr bgcolor="#f9d300">
    <td height="24" align="right" bgcolor="#f9d300"><font color="white"><?php include "inc.login_status.php"; ?></font></td>
  </tr>
  <tr>
    <td height="43" bgcolor="#f9d300"><a href="?open=Barang"><img src="images/dio2.jpg" alt="RUKMANA STORE BUSANA DAN AKSESORIS" width="1000" border="0"></a></td>
  </tr>
   <td height="30" colspan="3" bordercolor="#f9d300" bgcolor="#f9d300" class="HEAD"size="14" > 
	  <script language="JavaScript">
var text="<center>jl. kliran jao. sungai tambang. km5 . sumatra-riau</center>";
var delay=0;
var currentChar=;
var destination="[none]";
function type()
{
//if (document.all)
{
var dest=document.getElementById(destination);
if (dest)// && dest.innerHTML)
{
dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
currentChar++;
if (currentChar>text.length)
{
currentChar=1;
setTimeout("type()", 5000);
}
else
{
setTimeout("type()", delay);
}
}
}
}
function startTyping(textParam, delayParam, destinationParam)
{
text=textParam;
delay=delayParam;
currentChar=1;
destination=destinationParam;
type();
}
</script> <b><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: black;"></div></b> <script language="JavaScript">
javascript:startTyping(text, 50, "textDestination");
</script>
</table>

<!--warna header-->
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#f9d300" class="header"> 
    <td width="261" height="25" valign="middle" bgcolor="#f9d300"> </td>
    <!--
	<td width="98" align="center" bgcolor="#f9d300"><a href="?open=Home" target="_self"><font color="black"><b><font face="Comic Sans">HOME</b></font></a></td></font>    
    -->
	<td width="98" align="center" bgcolor="#f9d300"><a href="?open=Profil" target="_self"><font color="black"><b><font face="Comic Sans">PROFIL</b></font></a></td></font> 
    
	<td width="101" align="center" bgcolor="#f9d300"><a href="?open=Barang" target="_self"><font color="black"><b><font face="Comic Sans">KOLEKSI BARANG</b></font></a></td></font> 
	<td width="101" align="center" bgcolor="#f9d300"><a href="?open=Panduan" target="_self"><font color="black"><b><font face="Comic Sans">PANDUAN</b></font></a></td></font> 
	<td width="101" align="center" bgcolor="#f9d300"><a href="?open=Konfirmasi" target="_self"><font color="black"><b><font face="Comic Sans">KONFIRMASI</b></font></a></td></font> 
	<!--
	<td width="101" align="center" bgcolor="#f9d300"><a href="admin/index.php" target="_self"><font color="black"><b><font face="Comic Sans">ADMIN</b></font></a></td></font> 
	<td width="101" align="center" bgcolor="#f9d300"><a href="../user/index.php" target="_self"><font color="black"><b><font face="Comic Sans">USER</b></font></a></td></font>

	<td width="101" align="center" bgcolor="#f9d300"><a href="../index.php" target="_self"><font color="black"><b><font face="Comic Sans">HOME</b></font></a></td></font>
	-->
  </tr>
</table>
<!--warna header-->


<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="22" colspan="3" align="right" bgcolor="#ff9500" class="head"> 
	<form action="?open=Barang-Pencarian" method="post" name="form1">
	<strong><font color="white"><font face="Comic Sans">Cari Barang</font></strong></font>
	<input name="txtKeyword" type="text" size="30" maxlength="100">
	<input type="submit" name="btnCari" value=" Cari "> 
	</form>
	</td>
  </tr>
  <tr> 
    <td width="182">&nbsp;</td>
    <td width="5" >&nbsp;</td>
    <td width="611" align="right">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center" valign="top" bgcolor="#FFFFFF"  class="utama">
	<?php include "login.php"; ?>
	<table width="100%" border="0" cellpadding="2" cellspacing="0">
      <tr>
        <td align="center" valign="top" ></td>
      </tr>
      <tr align="center">
        <td width="167" height="22" bgcolor="#ff9500" class="head"><font color="black"><b><font face="Comic Sans">KATEGORI</b></font></td></font>
      </tr>
      <tr>
        <td height="18" align="center" valign="top" bgcolor="#FFFFFF">
		<table width="98%" border="0" align="center" cellpadding="4" cellspacing="0">
         <?php
		  $mySql = "SELECT * FROM kategori ORDER BY nm_kategori";
		  $myQry = mysql_query($mySql, $koneksidb) or die ("Query salah : ".mysql_error());
		  while($myData = mysql_fetch_array($myQry)) {
		  	$Kode = $myData['kd_kategori'];
		  ?>
            <tr>
              <td width="8%"><img src="images/ikon.jpg" width="9" height="9"></td>
              <td width="92%"><b> <?php echo "<a href=?open=Barang-Kategori&Kode=$Kode>$myData[nm_kategori]</a>"; ?> </b></td>
            </tr>
            <?php
		  }
		  ?>
        </table></td>
      </tr>
      
      <tr>
        <td height="18" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table></td>
    <td>&nbsp;</td>
    <td align="center" valign="top" bgcolor="#f5d836" class="utama">
	<?php include "buka_file.php"; ?></td>
  </tr>
  <tr> 
    <td height="4">&nbsp;</td>
    <td height="4">&nbsp;</td>
    <td height="4">&nbsp;</td>
  </tr>
  <tr> 
    <td height="50"colspan="3" align="center" bgcolor="#ff9500" class="FOOT"><font color="white">Copyright © | RUKMANA STORE BUSANA DAN AKSESORIS</font></td>
  </tr>
</table>
</body>
</html>

