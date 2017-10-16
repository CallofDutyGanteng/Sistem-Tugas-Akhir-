<?php

class KomentarController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function createAction()
    {
        $add = new Komentar();
        $add->author = $this->request->getPost('nama');
        $add->create_time = date('Y-m-d H:i:s');
        $add->content = $this->request->getPost('comment');
        $add->kd_pengajuan= $this->request->getPost('kode_pengajuan');
        $add->save();
        $this->response->redirect('guide');


    }

}

