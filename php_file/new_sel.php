<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<style type = "text/css">
			h1{color:blue; text-align: center; font-size:36}
			em{color:black; font-weight:bold; font-size:18}
	</style>
</head>

<body align="center" background="./teacherCov.jpg" >
	<h1>新增資料</h1>
	<h2>請選擇類別</h2>
	<em>
	<form action="teacher_show.php" target=show method=get>
		<input type="radio" name="type" value="phonetic">同注音
		<input type="radio" name="type" value="radical">同部首<br>
		<input type="radio" name="type" value="synonyms">同義詞
		<input type="radio" name="type" value="antonym">反義詞<br><br>
		編號<select name="id" size="1">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
		</select><br>
		
		內容 I <input type="text" name="content1"><br>
		內容 II<input type="text" name="content2"><br>
		<input type="submit" name="sub">
		</em>
	</form>
	<br><br>
	<h1>刪除資料</h1>
	<h2>請選擇類別</h2>
	<em>
	<form action="teacher_delete.php" target=show method=get>
		<input type="radio" name="type" value="phonetic">同注音
		<input type="radio" name="type" value="radical">同部首<br>
		<input type="radio" name="type" value="synonyms">同義詞
		<input type="radio" name="type" value="antonym">反義詞<br><br>
		編號<select name="id" size="1">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
		</select><br>
		<input type="submit" name="del">
	</form>
		
	</em>
</body>
</html>
