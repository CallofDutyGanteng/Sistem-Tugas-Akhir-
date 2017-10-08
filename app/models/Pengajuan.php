<?php

class Pengajuan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_pengajuan;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $kode_pengajuan;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $judul;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $file;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $calon_pembimbing;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $syarat_riview;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_upload;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_upload_update;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $riviewer_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $komentar_1;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $nilai_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_menilai_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_update_menilai_1;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $riviewer_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $komentar_2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=false)
     */
    public $nilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_menilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_update_menilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $hasil;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_m_hasil;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_sistemTA");
        $this->setSource("pengajuan");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pengajuan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengajuan[]|Pengajuan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengajuan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}