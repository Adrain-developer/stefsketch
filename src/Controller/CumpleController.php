<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class CumpleController extends AppController{

    public function index(){
        return $this->render('index');
    }
    public function vdos(){
        return $this->render('vdos');
    }
    public function demosAmbar(){
        return $this->render('demosAmbar');
    }
    public function demosZafiro(){
        return $this->render('demosZafiro');
    }
    public function demosDiamante(){
        return $this->render('demosDiamante');
    }
    public function demosPremium(){
        return $this->render('demosPremium');
    }

}