<?php
// test_cron.php
// Archivo de prueba para confirmar ejecución de cron en Hostinger

$logFile = __DIR__ . '/test_cron.log';
$now = date('Y-m-d H:i:s');
file_put_contents($logFile, "Cron ejecutado: {$now}\n", FILE_APPEND);
