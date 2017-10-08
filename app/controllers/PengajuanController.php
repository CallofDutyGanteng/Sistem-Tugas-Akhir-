<?php

class PengajuanController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {	   
        $data = Syarat::find([
            'order' => 'id'
        ]);

        $dosen = Dosen::find([
           'order' => 'nip ASC'
        ]);
        $array = $data[0]->syarat;
        $array = preg_replace("(\[|\]|')", "", $array);
        $array = explode(",", $array);
        $this->view->data = $data;
        $this->view->data2 = $array;
        $this->view->dosen = $dosen;
    }
    public function uploadAction() {
        $pengajuan = new Pengajuan();
        $pengajuan->judul = $this->request->getPost('judul');
        if($this->request->hasFiles() == true){
            $uploads = $this->request->getUploadedFiles();
            $isUploaded = false;
            foreach($uploads as $upload){
                $path = 'img/'.md5(uniqid(rand(), true)).'-'.strtolower($upload->getname());
                ($upload->moveTo($path)) ? $isUploaded = true : $isUploaded = false;
            }
            ($isUploaded) ? die('Files successfully uploaded.') : die('Some error ocurred.');
        }else{
            die('You must choose at least one file to send. Please try again.');
        }
    }
}
