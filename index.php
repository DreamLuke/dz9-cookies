<?php
    if(empty($_COOKIE['count'])) {
    	$count = 1;
        setcookie('count', $count, time()+3600, '/');
    } else {
    	$count = $_COOKIE['count'] + 1;
    	setcookie('count', $count, time()+3600, '/');
    }

    if(empty($_COOKIE['hide']) || $_COOKIE['hide'] == 'false') {
    	setcookie('hide', 'false', time()+3600, '/');
?>
		<div class="banner">
			<link rel="stylesheet" href="css/style.css">
			<img src="img/banner-top.png">
			<a href="./hide.php">Не показывать больше!</a>
		</div>
<?php
    }

    if(empty($_COOKIE['last'])) {
    	$now = date('Y-m-d');
    	$delta = 0;
        setcookie('last', $now, time()+mktime(0, 0, 0, date("m"), date("d"),   date("Y") + 100), '/');
    } else {
    	$now = date('Y-m-d');
    	$delta = abs(strtotime($now) - strtotime($_COOKIE['last']));
    	$delta = ((int)date('d', $delta) - 1);

        setcookie('last', $now, time()+mktime(0, 0, 0, date("m"), date("d"),   date("Y") + 100), '/');
    }

	if(empty($_COOKIE['birth'])) {
		$birthAsk = true;
		$birth = $_REQUEST['birth'];
		setcookie('birth', $birth, time()+mktime(0, 0, 0, date("m"), date("d"),   date("Y") + 1), '/');
	} else {
		$birthAsk = false;
		$birth = $_COOKIE['birth'];
		$nextBirth = date('Y-m-d', strtotime("+1 year", strtotime($birth)));
		$nextBirth = strtotime($nextBirth);
		$now = time();
    	$deltaBirth = abs($nextBirth - $now);
    	$deltaBirth = round($deltaBirth / (60 * 60 * 24));
	}

	$colors = ['red', 'blue', 'green'];
	if(empty($_COOKIE['color'])) {
		$color = $_REQUEST['colors'];
		setcookie('color', $color, time()+mktime(0, 0, 0, date("m"), date("d"),   date("Y") + 1), '/');
	} else {
		$color = $_COOKIE['color'];
		//$color = $_REQUEST['colors'];
		setcookie('color', $color, time()+mktime(0, 0, 0, date("m"), date("d"),   date("Y") + 1), '/');
	}
?>

<div style="width: 100%; height: 30px; background-color: <?php echo $colors[$color]; ?>;"></div>

<?php
    echo 'Вы посетили сайт ' . $count . ' раз!' . '<br>';
    
    if($delta == 0) {
    	echo 'Вы были на сайте сегодня!' . '<br>';
    } else{
    	echo 'Вы не были на сайте ' . $delta . ' дней!' . '<br>';
    }
    if($deltaBirth) {
    	echo 'До дня рождения осталось ' . $deltaBirth . ' дней!' . '<br>';
	}
?>

<form action="" id="id-form" method="POST" name="form">
		<div style="<?php echo $birthAsk ? 'display: block;' : 'display: none;'; ?>">
		<label for="birth">Введите дату рождения</label>
		<input
		    type="date"
		    class="birth"
		    id="birth"
		    name="birth"
		    value=""
		   	oninput
		>
		<br>
	</div>
	<label for="colors">Цвет шапки</label>
	<select id="colors" name="colors">
	    <option value="0" <?php echo ($color == 0) ? 'selected' : ''; ?>>Красный</option>
	    <option value="1" <?php echo ($color == 1) ? 'selected' : ''; ?>>Синий</option>
	    <option value="2" <?php echo ($color == 2) ? 'selected' : ''; ?>>Зелёный</option>
	</select>
	<button type="submit">Подтвердить выбор</button>
</form>
<a href="./dropColor.php">Сбросить цвет</a>

<script>
    $(function() {
        $("#id-form").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: "POST",
                url: '/form.php',
                data: form.serialize(),
                dataType: 'json',
                success: function(data)
              		{
                	}
                });
            });
         });   
</script>


