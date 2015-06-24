<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	@session_start();
	if($_SESSION['Permissions'] != "yes"){
		echo "<script>alert('관리 권한이 부여되지 않았습니다.');</script>";
		echo "<script>location.href='http://www.probrain.co.kr';</script>";
		
	}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
	<script type="text/javascript" language="Javascript" src="script.js">
	
	</script>

	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Changing Picture Page</title>
	</head>
<body>

		

	<div  id = "logo">
	<img src="logo.png"/>
	<h2>사진 변경 페이지

	</h2>
	</div><br>
	
	<!-- pic -->
	<div id="first">
		<p>메인 페이지</p>
		<p>(가로 960px * 세로 400px)</p>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		
		<input name="fileToUpload" id="fileToUpload1" type="file" value="파일 선택" onchange="displayimage(1)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image1">
		
		</form>
	</div>
	
	<!-- pic -->
	<div id="first">
		<p>학과소개</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload2.php" method="post" enctype="multipart/form-data">
		
		<input name="fileToUpload" id="fileToUpload2" type="file" value="파일 선택" onchange="displayimage(2)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image2">
		
		</form>
	</div>
	
	<!-- pic -->
	<div id="first">
		<p>교육과정</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload3.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload3" type="file" value="파일 선택" onchange="displayimage(3)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image3">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>대학원</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload4.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload4" type="file" value="파일 선택" onchange="displayimage(4)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image4">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>공지사항</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload5.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload5" type="file" value="파일 선택" onchange="displayimage(5)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image5">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>커뮤니티</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload6.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload6" type="file" value="파일 선택" onchange="displayimage(6)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image6">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>자료실</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload7.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload7" type="file" value="파일 선택" onchange="displayimage(7)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image7">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>교과목게시판</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload8.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload8" type="file" value="파일 선택" onchange="displayimage(8)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image8">
		
		</form>
	</div>
	
	
	<!-- pic -->
	<div id="first">
		<p>삼성전자</p>
		<p>(가로 960px * 세로 200px)</p>
		<form action="upload9.php" method="post" enctype="multipart/form-data">
		<input name="fileToUpload" id="fileToUpload9" type="file" value="파일 선택" onchange="displayimage(9)"></input>
		<input id="submit_btn_1" type="submit" name="submit" value="사진 변경"/><br>
		<img class = "image" id="image9">
		
		</form>
	</div>
	
	
	<footer>
	<div id="footer_box">
	<img id="logo2" src="logo2.jpg"/>
	<div id="footer_content">305-764 대전광역시 유성구 대학로 99 충남대학교 공대5호관 406호<br> 컴퓨터공학과
대학원: TEL: 042-821-5441, FAX: 042-822-9959<br>
학 부: TEL: 042-821-6651, FAX: 042-822-4997<br>
Copyright(C)2010 충남대학교 All Rights Reserved.
</div>
</div>
	</footer>
</body>
</html>