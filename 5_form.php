<form method="post" action="5_form_process.php?t1=1&t2=2">
	아이디 <input type="text" name="memId"><br>
	비밀번호 <input type="password" name="memPw"><br>
	<input type="submit" value="POST 로그인!">
</form>
<form method="get" action="5_form_process.php">
	아이디 <input type="text" name="memId"><br>
	비밀번호 <input type="password" name="memPw"><br>
	<input type="submit" value="GET 로그인!">
</form>

/** result
form method="post" action="5_form_process.php?t1=1&t2=2"
:post 방식으로 ex_form_process.php?t1=1&t2=2  url로 전송

form method="get" action="5_form_process.php
:get 방식으로 5_form_process.php  url로 전송
*/
