<?php

class MahasiswaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $data = Mahasiswa::find([
            'order' => 'nim'
        ]);
        $this->view->data = $data;


    }



    public function listAction()
    {

        $this->view->disable();
        $response = new response();
        $output = '';
        $data = Mahasiswa::find([
            'order' => 'nim'
        ]);

        $resData = array();

        foreach ($data as $result) {
            $resData[] = array("nim" => $result->nim, "name" => $result->name, "department" => $result->department);
        }

        $response->setContent(json_encode($resData));
        return $response;

        /*while($d = mysqli_fetch_array($data))
        {
          $output .= '
          <tr>
            <td>'.$d["nim"].'</td>
            <td>'.$d["name"].'</td>
            <td>'.$d["department"].'</td>
            <td>
              <a data-nim="'.$d["nim"].'" data-nama="'.$d["name"].'" data-depart="'.$d["department"].'" class="btn btn-warning" id="editbtn" data-toggle="modal" data-target="#modalUbah">Ubah</a>
              <a href="" data-href="index/delete/'.$d["nim"].'" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</a>
            </td>
          </tr>
          ';
        }

        $this->view->output = $output;*/
        //$this->view->data = $data;
    }

    public function addAction()
    {
        $add = new Mahasiswa();

        $success = $add->save(
            $this->request->getPost(),
            array('nim','name', 'department')
        );

        if($success){
            $this->view->disable();
            $this->flashSession->success('Berhasil menyimpan data');
            $this->response->redirect('mahasiswa');
        }
        else{
            $this->view->disable();
            $this->flashSession->error('Gagal menyimpan data');
            $this->response->redirect('mahasiswa');
        }
    }

    /*public function editAction($nim)
    {
      $mhs = Mahasiswa::findFirst($nim);

   		$this->view->nim=$mhs->nim;
   		$this->view->name=$mhs->name;
   		$this->view->department=$mhs->department;
    }*/

    public function updateAction()
    {
        $nim = $this->request->getPost("nim");
        $mhs = Mahasiswa::findFirst($nim);

        $mhs->nim = $nim;
        $mhs->name = $this->request->getPost("name");
        $mhs->department = $this->request->getPost("department");

        if (!$mhs->save()) {
            $this->view->disable();
            $this->flashSession->success('tidak mengubah data');
            $this->response->redirect('mahasiswa');
        }
        else
        {
            $this->view->disable();
            $this->flashSession->error('Berhasil mengubah data');
            $this->response->redirect('mahasiswa');
        }
    }

    public function deleteAction($nim){
        $user = Mahasiswa::findFirst($nim);
        $user->delete();
        $this->flashSession->error('Berhasil Menghapus data');
        return $this->response->redirect('mahasiswa');
    }
}