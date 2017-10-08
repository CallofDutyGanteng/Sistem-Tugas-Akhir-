<?php

class SyaratController extends \Phalcon\Mvc\Controller
{

    public function indexAction() {
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


    public function searchAction()
    {

    }

}

