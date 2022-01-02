<?php
include "_common.php";
include "Outline/_header.php";
?>
<?php if (member::isLogin()) : ?>
	<?=$member['memNm']?>(<?=$member['memId']?>)님 로그인...
	<a href='member/info.php'>회원정보 수정</a>
	<a href='member/logout.php'>로그아웃</a>
<?php else : ?>
	<a href='member/join.php'>회원가입</a>
	<a href='member/login.php'>로그인</a>
<?php endif; ?>
<?php
include "Outline/_footer.php";