<?php

class Dosen extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=30, nullable=false)
     */
    public $nip;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $bidang;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_sistemta");
        $this->setSource("dosen");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dosen';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dosen[]|Dosen|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dosen|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
