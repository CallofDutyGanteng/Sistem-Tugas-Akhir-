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
     * @var integer
     * @Column(type="integer", length=12, nullable=false)
     */
    public $nim;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $judul;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $metode;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $doc_proposal;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=false)
     */
    public $calon_pembimbing_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $calon_pembimbing_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $syarat_review;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_upload;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_upload_update;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $reviewer_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $komentar_1;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $nilai_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_menilai_1;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_update_menilai_1;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $reviewer_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $komentar_2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=true)
     */
    public $nilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_menilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_update_menilai_2;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $hasil;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_m_hasil;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $status;

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
