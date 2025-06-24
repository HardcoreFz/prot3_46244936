<?php
    namespace App\Controllers;
    use Codeigniter\Controller;
    use App\Models\Usuario_Model;

    class Login_Controller extends Controller
    {
        public function index()
        {
            helper(['form','url']);

            $data['titulo'] = "Login";
            echo view('Views/front/head_view', $data);
            echo view('Views/front/navbar_view');
            echo view('login');
            echo view('templates/footer');
        }

        public function auth()
        {
            $session = session();
            $model = new Usuario_Model();

            /*traemos los datos del formulario*/
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('pass');

            $data = $model ->where('email', $email)->first();
            if ($data) 
            {
                $pass = $data['pass'];
                $ba = $data['baja'];
                if($ba == 'SI') 
                {
                    $session->setFlashdata('msg','El usuario se encuentra dado de baja');
                    return redirect()->to('/login_controller');
                }

                $verify_pass = password_verify($password, $pass);
                if($verify_pass)
                {
                    $ses_data = [
                        'id_usuario' => $data['id_usuario'],
                        'nombre' => $data['nombre'],
                        'apellido' => $data['apellido'],
                        'email' => $data['email'],
                        'usuario' => $data['usuario'],
                        'perfil_id'=> $data['perfil_id'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    session()->setFlashdata('msg','Bienvenido '.$data['nombre']);
                    return redirect()->to('/panel');
                } else
                {
                    $session->setFlashdata('msg','Contraseña incorrecta');
                    return redirect()->to('/login_controller');
                }
            } else
            {
                $session->setFlashdata('msg','El usuario no existe');
                return redirect()->to('/login_controller');
            }
        }
        public function logout()
        {
            $session = session();
            $session->destroy();
            
            return redirect()->to('/');
        }
    }