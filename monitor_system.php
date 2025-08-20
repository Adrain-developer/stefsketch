<?php
/**
 * Monitor Simple del Sistema Blog
 * Ubicación: /home/77/public_html/monitor_system.php
 * Uso: php monitor_system.php
 */

echo "🔍 MONITOR DEL SISTEMA BLOG\n";
echo "================================\n";

// Verificar ubicación
echo "📁 Directorio: " . getcwd() . "\n";
echo "📅 Fecha: " . date('Y-m-d H:i:s') . "\n\n";

// 1. Verificar archivos críticos
echo "📋 ARCHIVOS CRÍTICOS:\n";
$files = [
    'bin/cake.php' => 'Comando principal',
    'config/bootstrap.php' => 'Bootstrap',
    'config/app_local.php' => 'Configuración'
];

foreach ($files as $file => $desc) {
    if (file_exists($file)) {
        echo "✅ $desc: $file\n";
    } else {
        echo "❌ $desc: $file (NO ENCONTRADO)\n";
    }
}

echo "\n";

// 2. Verificar logs
echo "📄 ARCHIVOS DE LOG:\n";
$logDir = 'logs/';
if (!is_dir($logDir)) {
    echo "❌ Directorio logs/ no existe\n";
    echo "💡 Ejecuta: mkdir -p logs && touch logs/queue.log logs/scheduled_posts.log\n";
} else {
    $logs = ['queue.log', 'scheduled_posts.log', 'error.log'];
    foreach ($logs as $log) {
        $path = $logDir . $log;
        if (file_exists($path)) {
            $size = filesize($path);
            $modified = date('Y-m-d H:i', filemtime($path));
            echo "📄 $log: " . number_format($size) . " bytes ($modified)\n";
        } else {
            echo "⚠️  $log: no existe\n";
        }
    }
}

echo "\n";

// 3. Probar comando básico
echo "🧪 PRUEBA DE COMANDO:\n";
$testCommand = 'php bin/cake.php --version 2>&1';
$output = shell_exec($testCommand);

if ($output) {
    echo "✅ Comando CakePHP funciona:\n";
    echo "   " . trim($output) . "\n";
} else {
    echo "❌ Error ejecutando: $testCommand\n";
}

echo "\n";

// 4. Verificar base de datos (si bootstrap funciona)
echo "🗄️  BASE DE DATOS:\n";
try {
    if (file_exists('config/bootstrap.php')) {
        require_once 'config/bootstrap.php';
        
        // Usar clase ConnectionManager
        $connection = \Cake\Datasource\ConnectionManager::get('default');
        $result = $connection->execute("SELECT 1 as test")->fetch('assoc');
        
        if ($result) {
            echo "✅ Conexión a base de datos: OK\n";
            
            // Verificar tabla queue_jobs
            try {
                $queueCount = $connection->execute("SELECT COUNT(*) as count FROM queue_jobs WHERE completed IS NULL")->fetch('assoc');
                echo "📧 Trabajos pendientes en cola: " . $queueCount['count'] . "\n";
            } catch (\Exception $e) {
                echo "⚠️  No se puede acceder a tabla queue_jobs\n";
            }
            
        } else {
            echo "❌ Conexión a base de datos: FALLO\n";
        }
        
    } else {
        echo "⚠️  No se puede cargar bootstrap.php\n";
    }
    
} catch (\Exception $e) {
    echo "❌ Error con base de datos: " . $e->getMessage() . "\n";
}

echo "\n";

// 5. Información del sistema
echo "💻 INFORMACIÓN DEL SISTEMA:\n";
echo "PHP Version: " . phpversion() . "\n";
echo "PHP Path: " . PHP_BINARY . "\n";
echo "User: " . get_current_user() . "\n";
echo "Memory Limit: " . ini_get('memory_limit') . "\n";

echo "\n================================\n";
echo "Monitor completado: " . date('Y-m-d H:i:s') . "\n";