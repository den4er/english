<?php

if(!empty($_POST['email']) && !empty($_POST['message'])){
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars($_POST['message']);
    $to = 'service@xn----ftbkdbbbxq7i.xn--p1ai';
    $subject = 'Письмо с сайта изи-инглиш.рф';
    
    
    mail($to, $subject, "Отправитель: $email <br> Cообщение: $message",
        "Content-type:text/html;charset=utf-8");
        
    //header("Location: https://изи-инглиш.рф/index.html");
    
}else{
    header("Location: https://изи-инглиш.рф/index.html");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="yandex-verification" content="2f059bf28b95195c" />
	<meta charset="utf-8">
	<title>изи-инглиш.рф</title>
	<link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
<style>	


</style>
</head>
<body>

	<div id="header">
		<div id="logo">
			<a href="index.html"><img src="images/home.png" title="На главную страницу"></a>
			<a href="faq.html"><img src="images/faq.png" title="Часто задаваемые вопросы"></a>
		</div>
		<h1>You_Don`t_Speak<span>_English</span></h1>
		<h2>Ресурс для изучения Английского языка</h2>
		<ul id="navigation">
			<li><a href="first_level.html">Первый уровень</a></li>
			<li><a href="second_level.html">Второй уровень</a></li>
			<li><a href="third_level.html">Третий уровень</a></li>
			<li><a href="fourth_level.html">Четвертый уровень</a></li>
			<li><a href="original.html">Тексты в оригинале</a></li>
		</ul>
	</div>
	
	
	
	<div id="page"> 	<!-- основной контент -->

	    <div class="main">
	        
            <p>Ресурс изи-инглиш.рф предназначен для изучения Ангийского языка методом чтения адаптированной литературы.
            При адаптации текста наиболее сложные речевые обороты заменяются упрощенными, что позволяет 
            изучать английскую литературу читателям с разным уровнем подготовки.</p>
            
            <p>Весь контент разделен на пять уровней по степени адаптации текста, от самого простого 
            (elementary) до оригинала. Выбрать раздел по своим силам Вы можете просто начав читать любое
            из представленных в нем произведений. Если незнакомых слов и непонятных речевых оборотов 
            очень много, перейдите в предыдущий раздел.</p>
            
            <p>Особое внимание следует уделить произношению незнакомых слов, используйте электронные словари,
            которые дополнены произношением английских слов или один из веб-переводчиков, например
            (translate.google.com)</p>
            <p>Более подробная информация по изучению в разделе FAQ по сылке в правом верхнем углу.</p>
            
	    </div>
	    
	</div> 	<!-- end page -->
	
	<div id="footer"> <!-- подвал с формой обратной связи -->
	    <form>
	        
	        <h2>Ваше сообщение отправлено!</h2>

	        <a href="https://vk.com/id10657440"><h3>Басов Денис - 2019.</h3></a>
	       
	    </form>
	</div>
	
</body>
</html>