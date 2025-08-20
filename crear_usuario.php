<?php
// archivo: crear_usuario.php
require 'vendor/autoload.php';

use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Utility\Security;
use Cake\Utility\Text;
use Cake\Auth\DefaultPasswordHasher;

use Cake\Core\Configure;
use Cake\Datasource\FactoryLocator;

// Inicializar CakePHP (modo script)
Configure::write('App.namespace', 'App');

// Cargar configuración de base de datos
ConnectionManager::setConfig(Configure::consume('Datasources'));

// Necesario para usar TableRegistry
FactoryLocator::add('Table', new \Cake\ORM\Locator\TableLocator());

// Cargar tabla Users
$usersTable = TableRegistry::getTableLocator()->get('Users');

// Crear nuevo usuario
$user = $usersTable->newEmptyEntity();

$user->email = 'admin@ejemplo.com';
$user->password = (new DefaultPasswordHasher)->hash('admin1234');
$user->role = 'admin';
$user->blog_author_id = 3; // o pon el ID si quieres vincularlo a blog_authors

if ($usersTable->save($user)) {
    echo "✅ Usuario creado correctamente.\n";
    echo "Correo: {$user->email}\n";
    echo "Contraseña: admin1234\n";
} else {
    echo "❌ Error al crear usuario:\n";
    debug($user->getErrors());
}
