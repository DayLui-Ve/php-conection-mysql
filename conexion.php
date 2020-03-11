<?php
try {
	$usuario = 'admin';
	$contraseña = 'admin';
    $mbd = new PDO('mysql:host=mysql-env:3306;dbname=admin', $usuario, $contraseña);
    echo 'Estoy conectado'.PHP_EOL;
    /*foreach($mbd->query('SELECT * from prueba') as $fila) {
        print_r($fila);
    }*/
    $mbd = null;
    echo 'Estoy desconectado'.PHP_EOL;
} catch (PDOException $e) {
	echo 'Imposible conectarme'.PHP_EOL;
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>