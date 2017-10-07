<?php

class PenggunaController extends \Phalcon\Mvc\Controller
{
    public function indexAction(){
        $data = Pengguna::find([
            'order' => 'nip_nim'
        ]);
      
       
        $this->view->data = $data;
    }

    public function listAction(){
        $this->view->disable();
        $response = new response();
        $output = '';
        $data = Pengguna::find(['order' => 'nip_nim']);
        $resData = array();
        foreach ($data as $result) {
            $resData[] = array(
            	"id_pengguna" => $result->id_pengguna,
            	"nip_nim" => $result->nip_nim,
            	"nama" => $result->nama ,
            	"foto"=> $result->foto,
            	"hak_akses"=> $result->hak_akses
            );
        }

        $response->setContent(json_encode($resData));
        return $response;
    }
    public function editAction()
    {
        $id_pengguna = $this->request->getPost('id');
        $pengguna = Pengguna::findFirstByidPengguna($id_pengguna);
        
        $pengguna->nama = $this->request->getPost('nama');
        $pengguna->foto = $this->request->getPost('foto');
        $pengguna->hak_akses = $this->request->getPost('hak_akses');
        
        if ($pengguna->save()) {
            $this->response->redirect('pengguna');
        }
    }
    

}