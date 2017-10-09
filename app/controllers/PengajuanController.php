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
        $this->view->data = $array;
        $this->view->dosen = $dosen;
    }
    public function PengajuansyaratAction() {
        if($uploads = $this->request->getUploadedFiles()){
            $names = [];
            foreach($uploads as $upload){
                $name = md5(uniqid(rand(), true)).strtolower($upload->getname());
                $path = 'img/syarat_review/'.$name;
                ($upload->moveTo($path)) ? $isUploaded = true : $isUploaded = false;
                array_push($names, $name);
            }
        }else{
            $this->flashSession->error('Persyaratan yang anda masukkan tidak lengkap');
            return $this->response->redirect('Pengajuan');
        }
        $names = json_encode($names);

        if (Pengajuan::count() == 0 ) {
            $value = 'kd_pengajuan-0';
        }
        elseif (Pengajuan::count() != 0 ) {
            $max_kd_pengajuan = Pengajuan::maximum(
            [
                'column' => 'kode_pengajuan'
            ]);
            $value_kd_pengajuan = explode("kd-pengajuan-" , $max_kd_pengajuan);
            foreach ($value_kd_pengajuan as $value) {
                $value++;
            }
        }
        $kd_pengajuan = 'kd-pengajuan-'.intval($value);
        $pengajuan = new Pengajuan();
        $pengajuan->kode_pengajuan = strval($kd_pengajuan) ;
        $pengajuan->judul = $this->request->getPost('judul');
        $pengajuan->calon_pembimbing = $this->request->getPost('calon_pembimbing');
        $pengajuan->syarat_review = $names;
        
        if ($pengajuan->save()) {
            $this->flashSession->success('Pengajuan Berhasil');
            return $this->response->redirect('Pengajuan');   
        }


    }
}
