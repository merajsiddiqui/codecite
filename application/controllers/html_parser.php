<?php
 function html_replace($string){
 	$parse = array(
 		'&'=>"&amp;",
 		'!'=>"&excl;",
 		"'"=>"&apos;",
 		'"'=>"&quot;",
 		'#'=>"&num;",
 		'%'=>"&percnt;",
 		'('=>"&lpar;",
 		')'=>"&rpar;",
 		'$'=>"&dollar;",
 		'-'=>"&minus;",
 		"*"=>"&ast;",
 		","=>"&comma;",
 		"."=>"&period;",
 		'/'=>"&sol;",
 		':'=>"&colon;",
 		';'=>"&semi;<br/>",
 		'<'=>"&lt;",
 		'>'=>"&gt;",
 		'='=>"&equals;",
 		'+'=>"&plus;",
 		"\\"=>"&bsol;",
 		'`'=>"&grave;",
 		']'=>"&rbrack;",
 		'^'=>"&Hat;",
 		'_'=>"&lowbar;",
 		'?'=>"&quest;",
 		'@'=>"&commat;",
 		'['=>"&lbrack;",
 		'{'=>"&lbrace;",
 		'}'=>"&rbrace;",
 		'|'=>"&verbar;"
 		);
 	$str_array = str_split($string);
 	foreach ($parse as $check => $char) {
 		foreach ($str_array as $found => $value) {
 			if($value==$check){
 				$str_array[$found] = $char;
 			}
 		}
 	}
 	return $newstr = implode('', $str_array);
 }
if(isset($_POST['convert'])){
	$code = $_POST['code'];
	$uncompiled_code = html_replace($code);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Code</title>
</head>
<body>
<form action="" method="post">
<textarea rows="10" cols="100"  name="code"></textarea>
<input type="submit" value="Print Code" name="convert">
</form>
<?php 
if(isset($uncompiled_code)){
echo $uncompiled_code;
}?>
</body>
</html>
