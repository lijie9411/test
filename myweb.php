<!DOCTYPE html>
<html>
<title >个人网页</title>
<body style='background-image:url(bg3.jpg);background-size:100%;background-repeat:no-repeat;  opacity:0.85;background-attachment:fixed'>

<h1 style="text-align:left">个人简介</h1>
<p style="text-align:right">该网页已被浏览

<?php

$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db");
mysql_query("set names utf8");
$sqlstr="update mycount set count=count+1";
mysql_query($sqlstr);
$sqlstr="select count from mycount";
$result=mysql_query($sqlstr);
$row=mysql_fetch_array($result);
mysql_close($con);
print $row['count'];

?>次</P>



<hr>
<center><img src="school.jpg" width="100%" height="100%"/>
<p style="text-align:right;font-family:arial;font-weight:bold;color:red;font-size:20px">诚推电影：
<a href="http://video.tudou.com/v/XMjgyNDc1MTA3Ng==.html?from=s1.8-1-1.2">喜剧：乌克兰游击队</a>
<a href="https://v.qq.com/x/cover/ki0w464ogke3bk4.html?ptag=sogou.movie.free&fromvsogou=1">无厘头喜剧：越光宝盒</a>
<a href="https://v.qq.com/x/cover/rzpyce9pmxayzvb.html?ptag=sogou.movie.free&fromvsogou=1">精彩电影：让子弹飞</a>
<a href="http://v.youku.com/v_show/id_XNTEwNTYwODky.html?fromvsogou=1">高分电影：十二怒汉</a>
<a href="http://vod.kankan.com/v/93/93046.shtml">高分电影：控方证人</a>
</p>
<!--自我介绍-->
<hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />

<table style='background-image:url(bgt.jpg);background-size:100% ;font-family:宋体;font-weight:bold;color:black;font-size:24px;text-align:left'>      

<tbody>        
        
<tr>          

<td rowspan="6"><img src="touxiang1.jpg" width="300" height="400"></td>          

<td>姓名</td>

<td>李扬帆</td>          

<td>性别：</td>          
<td>重要吗？</td>          

</tr>        

<tr>          

<td>学校：</td>  
<td>CAU</td>           
<td > 专业： </td>
<td > 机械电子工程 </td>
<td><img src="zhuanye.jpg" style="float:right;" width="140" height="140"></td>
</tr> 
 
<tr>          
<td>对象：</td>  
<td><img src="duixang.jpg"  width="140" height="140"></td>          

<td>目标：</td>  
<td><img src="mubiao.jpg"  width="140" height="140"></td>   
</tr>

<tr>          
<td colspan="3">爱好：吃鸡，旅游，喜剧，计算机</td>          
<td >喜欢的歌：</td> 
<td><a href="song1.mp3">在这个世界相遇</a></td>  
<script type="text/javascript" src="http://mediaplayer.yahoo.com/js"></script> 
</tr>   

    
<tr>          
<td  colspan="5">个人说明：最近参悟人生，发现人生难悟，红尘难出，一个人时倍感无聊，欢迎各位找我来玩，心态超好</td>          
</tr> 
<tr>          
<td  colspan="2"></td>          


<td ><button type="button" onclick="getP()">点赞看照片</button></td> 

<SCRIPT LANGUAGE="JavaScript">

	function getP(){
		
	window.location.href="myphoto.php";
	
	}
	</SCRIPT>
	
<td ><button type="button" onclick="getP2()">点击还有</button></td> 

<SCRIPT LANGUAGE="JavaScript">

	function getP2(){
		
	window.location.href="myphoto2.php";
	
	}
	</SCRIPT>
<td ><button type="button" onclick="getP3()">看我无敌可爱外甥女</button></td> 		
<SCRIPT LANGUAGE="JavaScript">

	function getP3(){
		
	window.location.href="photo3.php";
	
	}
	</SCRIPT>
		





</tr> 

</tbody>    

</table>

<hr style=" height:2px;border:none;border-top:2px dotted #185598;" />
<p style="font-family:arial;font-weight:bold;font-size:30px;text-align:left">个人动态</p>
<br>


<p style="font-family:arial;font-weight:bold;font-size:26px"> 发表说说：喷子是很形象了hh<img src="penzi.gif" width="172.5" height="300"/></p>
<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="dianzan3" style="text-align:center">
<input type="submit" value="点赞" style="text-align:center">
</form>

<p style="font-family:arial;font-weight:bold;color:blue;font-size:25px"">
<?php
error_reporting(0);
$dianname3=$_POST['dianzan3'];
$sql="insert into msg3(dianzan) values('" . $dianname3 ."' )";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($dianname3)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg3");

while($row = mysql_fetch_array($result))
{
	if(trim($row['dianzan'])=="")
	;
    else
	{print $row['dianzan']." " ;
	 
	}
}

?>已点赞</p>



<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="name3" style="text-align:center">
有话想说：
<textarea name="message3" rows="1" cols="60"  align="center"></textarea>
<input type="submit" value="评论" >
</form>

<!--连接phpmysql-->
<p style="font-family:arial;font-weight:bold;color:green;font-size:20px">
<?php 
error_reporting(0);
$haname3=$_POST['name3'];
$hamessage3=$_POST['message3'];
$sql="insert into msg3(name,message) values('" . $haname3 ."' , '".$hamessage3."')";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($haname3)==""||trim($hamessage3)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg3");
while($row = mysql_fetch_array($result))
{
	if(trim($row['name'])=="")
		;
	else
	{
		echo $row['name'] . "：" . $row['message'];
		echo "<br />";
	}
}
?>
</p>

<hr>
<p style="font-family:arial;font-weight:bold;font-size:26px"> 发表说说：冬至了<img src="shaji.jpg" width="324" height="432"/></p>
<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="dianzan2" style="text-align:center">
<input type="submit" value="点赞" style="text-align:center">
</form>

<p style="font-family:arial;font-weight:bold;color:blue;font-size:25px"">
<?php
error_reporting(0);
$dianname2=$_POST['dianzan2'];
$sql="insert into msg2(dianzan) values('" . $dianname2 ."' )";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($dianname2)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg2");

while($row = mysql_fetch_array($result))
{
	if(trim($row['dianzan'])=="")
	;
    else
	{print $row['dianzan']." " ;
	 
	}
}

?>已点赞</p>



<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="name2" style="text-align:center">
有话想说：
<textarea name="message2" rows="1" cols="60"  align="center"></textarea>
<input type="submit" value="评论" >
</form>

<!--连接phpmysql-->
<p style="font-family:arial;font-weight:bold;color:green;font-size:20px">
<?php 
error_reporting(0);
$haname2=$_POST['name2'];
$hamessage2=$_POST['message2'];
$sql="insert into msg2(name,message) values('" . $haname2 ."' , '".$hamessage2."')";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($haname2)==""||trim($hamessage2)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg2");
while($row = mysql_fetch_array($result))
{
	if(trim($row['name'])=="")
		;
	else
	{
		echo $row['name'] . "：" . $row['message'];
		echo "<br />";
	}
}
?>
</p>

<hr>

<p style="font-family:arial;font-weight:bold;font-size:26px">发表说说：小猪佩奇哭着说：妈妈妈妈，我的朋友们都嘲笑我长得像吹风机，妈妈摸了摸她的头：乖孩子不哭，以后说话离妈妈远一点，把妈妈的头发都吹乱了</p>
<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="dianzan" style="text-align:center">
<input type="submit" value="点赞" >
</form>

<p style="font-family:arial;font-weight:bold;color:blue;font-size:25px">
<?php
error_reporting(0);
$dianname=$_POST['dianzan'];
$sql="insert into msg(dianzan) values('" . $dianname ."' )";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($dianname)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg");

while($row = mysql_fetch_array($result))
{
	if(trim($row['dianzan'])=="")
	;
    else
	{print $row['dianzan']." " ;
	 
	}
}

?>已点赞</p>



<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="name" style="text-align:center">
有话想说：
<textarea name="message" rows="1" cols="60"  align="center"></textarea>
<input type="submit" value="评论" >
</form>

<!--连接phpmysql-->
<p style="font-family:arial;font-weight:bold;color:green;font-size:20px">
<?php
error_reporting(0);
$haname=$_POST['name'];
$hamessage=$_POST['message'];
$sql="insert into msg(name,message) values('" . $haname ."' , '".$hamessage."')";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($haname)==""||trim($hamessage)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg");
while($row = mysql_fetch_array($result))
{
	if(trim($row['name'])=="")
		;
	else
	{
		echo $row['name'] . "：" . $row['message'];
		echo "<br />";
	}
}
?>
</p>


<hr>

<p style="font-family:arial;font-weight:bold;font-size:26px"> 发表说说：出去玩吗？<img src="偷瞄.jpg" /></p>
<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="dianzan1" style="text-align:center">
<input type="submit" value="点赞" style="text-align:center">
</form>

<p style="font-family:arial;font-weight:bold;color:blue;font-size:25px"">
<?php
error_reporting(0);
$dianname1=$_POST['dianzan1'];
$sql="insert into msg1(dianzan) values('" . $dianname1 ."' )";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($dianname1)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg1");

while($row = mysql_fetch_array($result))
{
	if(trim($row['dianzan'])=="")
	;
    else
	{print $row['dianzan']." " ;
	 
	}
}

?>已点赞</p>



<form method="post" style="text-align:center;font-family:arial;font-weight:bold;color:red;font-size:20px">
留名：
<input type="text" name="name1" style="text-align:center">
有话想说：
<textarea name="message1" rows="1" cols="60"  align="center"></textarea>
<input type="submit" value="评论" >
</form>

<!--连接phpmysql-->
<p style="font-family:arial;font-weight:bold;color:green;font-size:20px">
<?php 
error_reporting(0);
$haname1=$_POST['name1'];
$hamessage1=$_POST['message1'];
$sql="insert into msg1(name,message) values('" . $haname1 ."' , '".$hamessage1."')";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($haname1)==""||trim($hamessage1)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from msg1");
while($row = mysql_fetch_array($result))
{
	if(trim($row['name'])=="")
		;
	else
	{
		echo $row['name'] . "：" . $row['message'];
		echo "<br />";
	}
}
?>
</p>


<hr style="height:10px;border:none;border-top:10px groove skyblue;" />
<!--留言区-->
<form method="post" style="text-align:center;font-family:arial;font-size:20px">
行不更名坐不改姓：
<input type="text" name="Zname" style="text-align:center">
有话想说：
<textarea name="Zmessage" rows="4" cols="60"  align="center"></textarea>
<input type="submit" value="留言" >
</form>

<!--连接phpmysql-->
<p style="font-family:arial;font-size:25px">
<?php 
error_reporting(0);
$Zhaname=$_POST['Zname'];
$Zhamessage=$_POST['Zmessage'];
$sql="insert into Zmsg(name,message) values('" . $Zhaname ."' , '".$Zhamessage."')";
$con=mysql_connect("localhost","s2016307160110","s2016307160110");
mysql_select_db("s2016307160110db",$con);
mysql_query("set names utf8");
if(trim($Zhaname)==""||trim($Zhamessage)=="")
	;
else
	mysql_query($sql);
$result = mysql_query("select*from Zmsg");
while($row = mysql_fetch_array($result))
{
	if(trim($row['name'])=="")
		;
	else
	{
		echo $row['name'] . "：" . $row['message'];
		echo "<br />";
	}
}
?>
</p>
</body>
</html>
