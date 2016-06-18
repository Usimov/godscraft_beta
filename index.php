<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
//mb_internal_encoding('UTF-8');
//mb_http_output('UTF-8');
//mb_http_input('UTF-8');
//mb_regex_encoding('UTF-8');
//session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<link rel="stylesheet" type="text/css" href="TWstyle.css">
<title>GodsCraft</title>
<meta name="description" content="GodsCraft">
<meta name="keywords" content="godscraft">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
    function SendRequest(){
            $.ajax({
                type: "POST",
                url: "/my_handler.php",
                data: "&data_1="+$('#data_1').val()+"&data_2="+$('#data_2').val(),
                success: function(response){
                $('#response').html(response);
                }
            });
    };
</script>
</head>

<body>
<h1>Я люблю Котика!</h1>
<p>Это мой самый любимый котик)))</p>
<p>Самый-присамый-присамый любимый)</p>
<table>
    <tr>
        <th>Запрос</th>
        <th>Ответ сервера</th>
        </tr>
    <tr>
        <td>
            <label>Переменная 1: <input type="text" size="10" id="data_1" /></label><br />
            <label>Переменная 2: <input type="text" size="10" id="data_2" /></label><br />
            <button onclick="SendRequest();">Послать запрос</button>
            </td>
        <td>
            <div id="response"></div>
            </td>
        </tr>
    </table>


</body>

</html>
<?php
$arr = [ 1, 2, 3 ];
var_dump( $arr );