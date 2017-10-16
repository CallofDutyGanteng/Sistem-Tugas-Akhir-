<?php
class PengajuanController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
        $ses_nip_nim = $this->session->get('nip_nim');
        $pengajuan = Pengajuan::findFirstByNim($ses_nip_nim);
        $data_pengajuan = $pengajuan;
        $this->view->data_pengajuan = $data_pengajuan;
        $syarat_review = $data_pengajuan->syarat_review;
        $this->view->syarat_review = json_decode($syarat_review);
        if ($pengajuan) {
            $this->view->pengajuan = 'true';
        }
        else {
            $this->view->pengajuan = 'false';
        }
        $syarat = Syarat::find([
            'order' => 'id'
        ]);
        $dosen = Dosen::find([
           'order' => 'nip ASC'
        ]);
        $array = $syarat[0]->syarat;
        $array = preg_replace("(\[|\]|')", "", $array);
        $array = explode(",", $array);
        $this->view->syarat = $array;
        $this->view->dosen = $dosen;
    }
    public function tunggu_reviewAction()
    {
        $this->view->pick('Pengajuan/tunggu_review');
        $pengajuan2 = Pengajuan::find([
            'order' => 'id_pengajuan'
        ]);
        $dosen = Dosen::find([
           'order' => 'nip ASC'
        ]);

        $this->view->pengajuan2 = $pengajuan2;
        $pe = $pengajuan2[0]->syarat_review;
        $this->view->pe = json_decode($pe);

    }
    public function proses_reviewAction()
    {
        $this->view->pick('Pengajuan/proses_review');
        $pengajuan2 = Pengajuan::find([
            'order' => 'id_pengajuan'
        ]);
        $dosen = Dosen::find([
           'order' => 'nip ASC'
        ]);

        $this->view->pengajuan2 = $pengajuan2;
        $this->view->dosen = $dosen;
        $pe = $pengajuan2[0]->syarat_review;
        $this->view->pe = json_decode($pe);
    }
    // public function Get_detail_pembimbing()
    // {
    //     $dosen = Dosen::find([
    //         'order' => 'nip ASC'
    //     ]);
    // }
    public function PengajuansyaratAction()
    {
        $ses_nip_nim = $this->session->get('nip_nim');
        $inp_nim =$this->request->getPost('nim');
        if ($ses_nip_nim != $inp_nim) {
            $this->flashSession->error('Pengajuan Gagal : Anda tidak bisa mewakilkan pengajuan orang lain');
            return $this->response->redirect('Pengajuan');
        }
        else{
            if($uploads = $this->request->getUploadedFiles()){
                $syarat_review = [];
                $pengajuan = [];
                // membuat direktori
                if ((is_dir('docs_ta/pengajuan/'.$ses_nip_nim))) {
                }
                else {
                    mkdir('docs_ta/pengajuan/'.$ses_nip_nim.'/', 0777);
                }
                // ambil nama file dan memindahkan file
                foreach($uploads as $upload){
                    $name = md5(uniqid(rand(), true)).strtolower($upload->getname());
                    $path_pengajuan = 'docs_ta/pengajuan/'.$ses_nip_nim.'/'.$name;
                    ($upload->moveTo($path_pengajuan)) ? $isUploaded = true : $isUploaded = false;
                    array_push($pengajuan, $name);
                }
            }
            else{
                $this->flashSession->error('Persyaratan yang anda masukkan tidak lengkap');
                return $this->response->redirect('Pengajuan');
            }
            $doc_proposal = $pengajuan[0];
            foreach ($pengajuan as $value) {
                if ($value != $pengajuan[0]) {
                    array_push($syarat_review, $value);
                }
            }
            //membuat kode pengajuan
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
            //save to db
            $pengajuan->kode_pengajuan = strval($kd_pengajuan);
            $pengajuan->nim = $this->request->getPost('nim');
            $pengajuan->judul = $this->request->getPost('judul');
            $pengajuan->metode = $this->request->getPost('metode');
            $pengajuan->doc_proposal = $doc_proposal;
            $pengajuan->calon_pembimbing_1 = $this->request->getPost('calon_pembimbing_1');
            $pengajuan->calon_pembimbing_2 = $this->request->getPost('calon_pembimbing_2');
            $pengajuan->syarat_review = json_encode($syarat_review);

            if ($pengajuan->save()) {
                $this->flashSession->success('Pengajuan Berhasil');
                return $this->response->redirect('Pengajuan');
            }
        }
    }
    public function updateAction()
    {
        $ses_nip_nim = $this->session->get('nip_nim');
        $nim =$this->request->getPost('nim');
        if ($ses_nip_nim != $nim) {
            $this->flashSession->error('Pengajuan Gagal : Anda tidak bisa mewakilkan pengajuan orang lain');
            return $this->response->redirect('Pengajuan');
        }
        else{
            if($uploads = $this->request->getUploadedFiles()){
                $syarat_review = [];
                $pengajuan = [];
                // ambil nama file dan memindahkan file
                foreach($uploads as $upload){
                    $name = md5(uniqid(rand(), true)).strtolower($upload->getname());
                    $path_pengajuan = 'docs_ta/pengajuan/'.$ses_nip_nim.'/'.$name;
                    echo $path_pengajuan;
                    ($upload->moveTo($path_pengajuan)) ? $isUploaded = true : $isUploaded = false;
                    array_push($pengajuan, $name);
                }
            }
            else{
                $this->flashSession->error('Persyaratan yang anda masukkan tidak lengkap');
                return $this->response->redirect('Pengajuan');
            }
            $doc_proposal = $pengajuan[0];
            foreach ($pengajuan as $value) {
                if ($value != $pengajuan[0]) {
                    array_push($syarat_review, $value);
                }
            }
            // save to db
            $id_pengajuan = $this->request->getPost('id_pengajuan');
            $pengajuan = Pengajuan::findFirst($id_pengajuan);
            $pengajuan->judul = $this->request->getPost('judul');
            $pengajuan->metode = $this->request->getPost('metode');
            $pengajuan->doc_proposal = $doc_proposal;
            $pengajuan->calon_pembimbing_1 = $this->request->getPost('calon_pembimbing_1');
            $pengajuan->calon_pembimbing_2 = $this->request->getPost('calon_pembimbing_2');
            $pengajuan->syarat_review = json_encode($syarat_review);
            if ($pengajuan->save()) {
                $this->flashSession->success('Pengajuan Berhasil');
                return $this->response->redirect('Pengajuan');
            }
        }
    }
    public function ReviewAction($id_pengajuan)
    {
        $this->view->pick('pengajuan/review');
        $review = Pengajuan::findFirstByidPengajuan($id_pengajuan);
        $this->view->review = $review;

        $nama2 = "SELECT * FROM Mahasiswa WHERE Mahasiswa.nim = $review->nim";
        $namaMahasiswa = $this->modelsManager->executeQuery($nama2);
        $this->view->namaM = $namaMahasiswa;

        $nama1 = "SELECT * FROM Dosen WHERE Dosen.nip =  $review->calon_pembimbing_1";
        $namaDosen = $this->modelsManager->executeQuery($nama1);
        $this->view->nama = $namaDosen;

        $phql = "SELECT * FROM Dosen WHERE Dosen.nip != $review->calon_pembimbing_1";
        $users = $this->modelsManager->executeQuery($phql);
        $this->view->php = $users;

    }
    public function tambahreviewAction()
    {
        $id = $this->request->getPost("id_pengajuan");
        $id = Pengajuan::findFirst($id);

        $id->reviewer_1 = $this->request->getPost("reviewer_1");
        $id->reviewer_2 = $this->request->getPost("reviewer_2");
        $id->status = 'proses_review';

        if ($id->save()) {
            $this->view->disable();
            $this->flashSession->error('Berhasil mengubah data');
            $this->response->redirect('proses_review');
        } else {
            $this->view->disable();
            $this->flashSession->success('tidak mengubah data');
            $this->response->redirect('tunggu_review');
        }
    }
    public function bimbingankuAction()
    {
        $this->view->pick('pengajuan/bimbinganku');
        $pengajuan2 = Pengajuan::find([
            'order' => 'id_pengajuan'
        ]);

        $this->view->pengajuan2 = $pengajuan2;
        $pe = $pengajuan2[0]->syarat_review;
        $this->view->pe = json_decode($pe);
    }
    public function reviewkuAction()
    {
        $this->view->pick('pengajuan/reviewku');
        $pengajuan2 = Pengajuan::find([
            'order' => 'id_pengajuan'
        ]);

        $this->view->pengajuan2 = $pengajuan2;
        $pe = $pengajuan2[0]->syarat_review;
        $this->view->pe = json_decode($pe);
    }
}
