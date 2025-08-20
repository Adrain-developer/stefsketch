<?php 
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class InvitacionesController extends AppController{

    public function index(){
        return $this->render('index');
    }

    public function ver(){
        $this->viewBuilder()->setLayout("boda");
        return $this->render('ver');
    }
    public function vipaccess(){
        return $this->render('vipaccess');
    }

}