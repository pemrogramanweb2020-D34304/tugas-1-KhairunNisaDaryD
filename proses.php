<?php

if ($_GET) :
    $bilangan1 = $_GET['bilangan1'];
    $bilangan2 = $_GET['bilangan2'];
    $operasi = $_GET['operasi'];

    switch ($operasi) {
        case '+':
            $hasil = $bilangan1 + $bilangan2;
            break;
        case '-':
            $hasil = $bilangan1 - $bilangan2;
            break;
        case '*':
            $hasil = $bilangan1 * $bilangan2;
            break;
        case '/':
            $hasil = $bilangan1 / $bilangan2;
            break;
    }
?>
    <br>
    Bilangan 1 : <strong><?php echo $bilangan1 ?></strong><br>
    Bilangan 2 : <strong><?php echo $bilangan2 ?></strong><br>
    Hasil      : <strong> <?php echo $hasil ?></strong><br>

<?php
endif; ?>

