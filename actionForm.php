<?php

 if (isset($_POST['send'])) {
     $to = "\OpenServer\domains\Fact\Php.ru\email";
     $subject = "Письмо";
     $charset = "utf-8";
     $headerss ="Content-type: text/html; charset=$charset\r\n";
     $headerss.="MIME-Version: 1.0\r\n";
     $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
     $msg = "Имя: ".$_POST["name"]."\n";$msg .= "Сообщение: ".$_POST["msg"]."\n";
     mail($to, $subject, $msg, $headerss);
     print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";
 }




