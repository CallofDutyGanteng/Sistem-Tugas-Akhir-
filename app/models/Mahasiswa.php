<?php

class Mahasiswa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $nim;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $department;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_sistemta");
        $this->setSource("mahasiswa");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mahasiswa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mahasiswa[]|Mahasiswa|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mahasiswa|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
