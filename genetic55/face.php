<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
</style>
</head>
<body>
	<table width="100%"  cellpadding="5" border="1">
		<tr>
			<td colspan="2"><h2> �������������������� ����������� ��� ������ ������������� ��������� </h3></td>
		</tr>
		<tr>
			<td width="50%"> �������� 1 - ������ ����� ������� </br>
			<img src="form1.png" align="center">
			
			</td>
			<td> �������� 2 - ������������������ </br>
			<img src="form2.png" align="center">
			</td>
		</tr>
		<tr>
			<td colspan="2">��� s - ������; v - �������� �������; L - ����� ���������; d - ������� ���������; D0 - �������� ������ �����; A - ���������� ������� ���������</td>
		</tr>
		<tr>
			<!--td colspan="2">
				<table width="80%"  border="2">
					<tr>
						<td> </td>
						<td> L, �</td>
						<td> d, �</td>
						<td> D0, �</td>
						<td> s, �</td>
						<td> v, �</td>
					</tr>
					<tr>
						<td> min </td>
						<td> 0.1</td>
						<td> 0.01</td>
						<td> 0.2E-7</td>
						<td> 1E-5</td>
						<td> 2.5</td>
					</tr>
					<tr>
						<td> max </td>
						<td> 0.5</td>
						<td> 0.1</td>
						<td> 2.5E-7</td>
						<td> 10.23E-3</td>
						<td> 100</td>
					</tr>
				</table-->				
			</td>
		</tr>
		<tr>
			<td> ������� ��������� ��������� ��� ������������� ���������:</br>
				<form method="post" action="index.php" name="data" id="data"> 
					<b> �������� ���������� �� ������ ���������� �� q ����� ����� �������:</b> </br> 
						<label for="qs"> s:</label><input type="text" name="qs" value="5" id="qs"> </br>
						<label for="qv"> v:</label><input type="text" name="qv" value="1" id="qv"> </br>
						<label for="ql"> L:</label><input type="text" name="ql" value="4" id="ql"> </br>
						<label for="qd"> d:</label><input type="text" name="qd" value="4" id="qd"> </br>
						<label for="qd0">D0:</label><input type="text" name="qd0" value="10" id="qd0"><br>  		
						<b> ������ ���������:</b></br>
						<label for="popsize">������:</label><input type="text" name="popsize" value="1000" id="popsize"><br>
						<input type="submit" name="start" id="start" value="Start">  
					</form> 			
			</td>
			<td>���������� ����������:</td>
		</tr>
		
	</table>