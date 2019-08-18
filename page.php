<?php
/*здесь описан класс, с помощью которого происходит сборка страниц*/

class Page{

	public $content;		// свойство, в котором содержится контент страницы
	public $title;		// свйство, в котором содержится title страницы

	public function __set($name, $value){	// сеттер для установки свойств объекта
		$this->$name = $value;
	}

	// метод вывода страницы
	public function Display(){
		echo "<!DOCTYPE html>\n<html>\n<head>\n";
		$this->DisplayTitle();
		$this->DisplayStyle();
		echo "</head>\n<body>\n";
		$this->DisplayHeader();
		echo $this->content;
		$this->DisplayScript();
		$this->DisplayFooter();
		echo "</body>\n</html>\n";
	}


	// метод вывода кодировки и title
	public function DisplayTitle(){		
		echo '<meta charset="utf-8">';
		echo '<title>'. $this->title .'</title>';
	}

	// метод вывода стилей, шрифтов, библиотек
	public function DisplayStyle(){		
		?>

		<link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">	
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/style/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/style/style.css">
		
		<?php
	}

	// метод вывода шапки сайта и навигации
	public function DisplayHeader(){		

		$firstLevel = '';
		$secondLevel = '';
		$thirdLevel = '';
		$fourthLevel = '';
		$original = '';

        switch($this->title){
            case 'Первый уровень':
                $firstLevel = 'active';
                break;
            case 'Второй уровень':
                $secondLevel = 'active';
                break;
            case 'Третий уровень':
                $thirdLevel = 'active';
                break;
            case 'Четвертый уровень':
                $fourthLevel = 'active';
                break;
            case 'Тексты в оригинале':
                $original = 'active';
                break;
        }

		?>

		<div id="header">
			<div id="logo">
				<a href="<?php $_SERVER['DOCUMENT_ROOT'];?>/"><img src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/home.png" title="На главную страницу"></a>
				<a href="<?php $_SERVER['DOCUMENT_ROOT'];?>faq/"><img src="<?php $_SERVER['DOCUMENT_ROOT'];?>/images/faq.png" title="Часто задаваемые вопросы"></a>
			</div>
			<h1>You_Don`t_Speak<span>_English</span></h1>
			<h2>Ресурс для изучения Английского языка</h2>
			<ul id="navigation">
				<li><a class="<?php echo $firstLevel;?>" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/first_level">Первый уровень</a></li>
				<li><a class="<?php echo $secondLevel;?>" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/second_level">Второй уровень</a></li>
				<li><a class="<?php echo $thirdLevel;?>" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/third_level">Третий уровень</a></li>
				<li><a class="<?php echo $fourthLevel;?>" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/fourth_level">Четвертый уровень</a></li>
				<li><a class="<?php echo $original;?>" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/original">Тексты в оригинале</a></li>
			</ul>
		</div>

		<?php
	}
	
	// метод для загрузки скрипта JS
	public function DisplayScript(){
		?>	
		
		<script type="text/javascript">
		    
		    //аккордеон по главам книг
		    var parent = $('#book h3');
		    
		    parent.attr('title', 'Нажми меня');
		    parent.css({
		        background: '#d9d9d9',
		        margin: '8px',
		        borderRadius: '5px',
		        cursor: 'pointer'
		    });
		    $('#book').css({
		        padding: '5px'
		    });
		    parent.next().slideUp();
		    parent.click(function(){
		       $(this).next().slideToggle(1000);
		    });
			
		</script>
		
		<?php
	}

	// метод для отображения формы обратной связи и подвала
	public function DisplayFooter(){
		?>

		<div id="footer"> <!-- подвал с формой обратной связи -->
		    <form action="<?php $_SERVER['DOCUMENT_ROOT'];?>/sendmail.php" method="post">
		        
		        <h2>По всем возникающим вопросам Вы можете обратиться
		           через форму обратной связи, представленную ниже:</h2>
		        <div>   
	    	        <p>Введите e-mail:</p>
	        	    <input type="email" name="email" placeholder="ivan_ivanov@email.ru" required>
	        	    <p>Текст сообщения:</p>
	        	    <textarea  name="message" rows="6" required></textarea>
	        	    <button>Отправить</button>
	        	</div> 
		        
		        <a href="https://vk.com/id10657440"><h3>Басов Денис - 2019.</h3></a>
		       
		    </form>
		</div>

		<?php
	}


}
?>
