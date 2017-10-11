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
    public $id_pengajuan = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $kode_pengajuan = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $judul = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $metode = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $doc_proposal = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $calon_pembimbing_1 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $calon_pembimbing_2 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $syarat_review = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_upload = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_upload_update = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $reviewer_1 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $komentar_1 = 0;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $nilai_1 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_menilai_1 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_update_menilai_1 = 0;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $reviewer_2 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $komentar_2 = 0;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=false)
     */
    public $nilai_2 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_menilai_2 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_update_menilai_2 = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $hasil = 0;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_m_hasil = 0;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_sistemta");
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
