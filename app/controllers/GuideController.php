<?php

class GuideController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $dosenKomentar = Pengajuan::find([
            'order' => 'id_pengajuan'
        ]);
        $this->view->dosenKomentar = $dosenKomentar;
        $dosen = Dosen::find([
            'order' => 'nip'
        ]);
        $this->view->dosen = $dosen;
        $komentar = Komentar::find(["order" => "id_komentar"]);
        $this->view->komentar = $komentar;
    }

}
