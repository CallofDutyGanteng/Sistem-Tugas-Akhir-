<?php
use Phalcon\Mvc\Controller;
use Phalcon\Mcv\View;
class AuthController extends Controller
{   
    public function loginAction(){
        
    }
    public function loginprosesAction()
    {
        $nip_nim    = $this->request->getPost('nip_nim');
        $password   = $this->request->getPost('password');
        $password   = md5($password);
        $pengguna = Pengguna::findFirstByNip_nim($nip_nim);
        if ($pengguna) {
            if ($nip_nim == $pengguna->nip_nim && $password == $pengguna->password ) 
            {
                $this->session->set('nip_nim' ,$pengguna->nip_nim);
                $this->session->set('hak_akses' ,$pengguna->hak_akses);
                $this->session->set('foto' ,$pengguna->foto);
                $this->session->set('nama' ,$pengguna->nama);
                return $this->response->redirect('');
            }
            else{
                return $this->response->redirect('masuk');
            }
        }

        return $this->response->redirect('masuk');
    }

    public function listAction(){
        $baca = Pengguna::find([
            'order' =>'id_pengguna'
        ]);

        $this->view->data = $baca;
    }



    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('masuk');
    }



}