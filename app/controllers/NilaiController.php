<?php

class NilaiController extends \Phalcon\Mvc\Controller
{
    public function setnilaiAction($nim)
    {
        $row_pengajuan = Pengajuan::findFirstByNim($nim);
        $this->view->row_pengajuan = $row_pengajuan;

        $nilai = Nilai::find(['order' => 'id_nilai']);
        $x = $nilai[0]->kriteria;
        $y = json_decode($x);
        $this->view->y = $y;
        $this->view->nilai = $nilai;

        // hitung banyak kriteria
        $count_y = count($y);
        $this->view->count_y = $count_y;
    }
    public function addAction()
    {
        $id_pengajuan = $this->request->getPost('id_pengajuan');
        $pengajuan = Pengajuan::findFirstByIdPengajuan($id_pengajuan);
        $pengajuan->reviewer = $this->request->getPost('reviewer');
        $pengajuan->nilai = $this->request->getPost('total');
        if ($pengajuan->reviewer_1 == $pengajuan->reviewer ) {
            $pengajuan->nilai_1 = $pengajuan->nilai;
            $pengajuan->save();
            $this->response->redirect('reviewku');
        }
        elseif ($pengajuan->reviewer_2 == $pengajuan->reviewer) {
            $pengajuan->nilai_2 = $pengajuan->nilai;
            $pengajuan->save();
            $this->response->redirect('reviewku');
        }
    }

}
