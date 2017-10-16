<?php
class DosenController extends \Phalcon\Mvc\Controller
{
    public function indexAction(){
        $data = Dosen::find([
            'order' => 'nip'
        ]);
        $this->view->data = $data;

    }

    public function listAction(){
        $this->view->disable();
        $response = new response();
        $output = '';
        $data = Dosen::find(['order' => 'nip']);
        $resData = array();
        foreach ($data as $result) {
            $resData[] = array("nip" => $result->nip, "nama" => $result->nama , "bidang"=> $result->bidang);
        }

        $response->setContent(json_encode($resData));
        return $response;
    }

    public function addAction()
    {
        $add = new Dosen();
        $success = $add->save($this->request->getPost()
            , array('nip', 'nama', 'bidang'));
        if ($success) {
            $this->view->disable();
            $this->flash->success('Berhasil Menyimpan Data');
            $this->response->redirect('dosen');
        } else {
            $this->view->disable();
            $this->flash->error('Gagal Menyimpan Data');
            $this->response->redirect('dosen');
        }
    }
    public function updateAction($nip)
    {
        $nip = $this->request->getPost("nip");
        $dsn = Dosen::findFirst($nip);

        $dsn->nip = $nip;
        $dsn->nama = $this->request->getPost("nama");
        $dsn->bidang = $this->request->getPost("bidang");

        if (!$dsn->save()) {
            $this->view->disable();
            $this->flash->success('tidak dapat mengubah data');
            $this->response->redirect('dosen');
        }
        else
        {
            $this->view->disable();
            $this->flashSession->error('Berhasil mengubah data');
            $this->response->redirect('dosen');
        }
    }

    public function deleteAction($nip) {
            $dsn = Dosen::findFirst($nip);
            $dsn->delete();

            $this->flashSession->success('berhasil menghapus data');
            return $this->response->redirect('dosen');
    }
}