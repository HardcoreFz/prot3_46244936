<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Pagina Principal';
        return view('front/head_view',$data)
        . view ('front/navbar_view')
        . view('front/principal')
        . view('front/footer_view');
    }

    public function quienes_somos(): string
    {
        $data['titulo'] = 'Quienes somos';
        return view('front/head_view',$data)
        . view('front/navbar_view')
        . view('front/quienes_somos')
        . view('front/footer_view');
    }

    public function acercade(): string
    {
        $data['titulo'] = 'Acerca de';
        return view('front/head_view',$data)
        . view('front/navbar_view')
        . view('front/acercade')
        . view('front/footer_view');
    }

    public function registro(): string
    {
        $data['titulo'] = 'Registrarse';
        return view('front/head_view',$data)
        . view('front/navbar_view')
        . view('front/registro')
        . view('front/footer_view');
        
    }

    public function login(): string
    {
        $data['titulo'] = 'Iniciar Sesion';
        return view('front/head_view',$data)
        . view('front/navbar_view')
        . view('front/login')
        . view('front/footer_view');
    }
}
