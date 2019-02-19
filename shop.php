<?php
	require './Session.php';
	require './Cookie.php';

	$session = new Session();
?>

<div>
    <div>
        <label for="product1">Товар 1</label>
        <div style="width: 50px; height: 50px; background-color: red"></div>
        <div>Цена: 1 марсианский фунт</div>
    </div>
    <!-- <a href="/basket.php.?id=1">Положить в корзину</a> -->
    <a href= 'basket.php?id=1'>Положить в корзину</a>
    <br>
    <br>
    <div>
        <label for="product2">Товар 2</label>
        <div style="width: 50px; height: 50px; background-color: green"></div>
        <div>Цена: 1 марсианский фунт</div>
    </div>
    <!-- <a href="./basket.php?id=2">Положить в корзину</a> -->
    <a href= 'basket.php?id=2'>Положить в корзину</a>
    <br>
    <br>
    <div>
        <label for="product3">Товар 3</label>
        <div style="width: 50px; height: 50px; background-color: blue"></div>
        <div>Цена: 1 марсианский фунт</div>
    </div>
    <a href= 'basket.php?id=3'>Положить в корзину</a>
    <br>
    <br>
    <div>
        <label for="product4">Товар 4</label>
        <div style="width: 50px; height: 50px; background-color: yellow"></div>
        <div>Цена: 1 марсианский фунт</div>
    </div>
    <a href= 'basket.php?id=4'>Положить в корзину</a>
    <br>
    <br>
    <div>
        <label for="product5">Товар 5</label>
        <div style="width: 50px; height: 50px; background-color: black"></div>
        <div>Цена: 1 марсианский фунт</div>
    </div>
    <a href= 'basket.php?id=5'>Положить в корзину</a>
    <br>
    <br>
<?php
	echo 'Сумма: ' . $session->get('sum');
?>  
</div>

