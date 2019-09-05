<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KunjunganRepository")
 */
class Kunjungan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\kunjungan", inversedBy="kunjungans")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pasien;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tanggal_masuk;

    /**
     * @ORM\Column(type="datetime")
     */
    private $tanggal_keluar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPasien(): ?kunjungan
    {
        return $this->pasien;
    }

    public function setPasien(?kunjungan $pasien): self
    {
        $this->pasien = $pasien;

        return $this;
    }

    public function getTanggalMasuk(): ?\DateTimeInterface
    {
        return $this->tanggal_masuk;
    }

    public function setTanggalMasuk(\DateTimeInterface $tanggal_masuk): self
    {
        $this->tanggal_masuk = $tanggal_masuk;

        return $this;
    }

    public function getTanggalKeluar(): ?\DateTimeInterface
    {
        return $this->tanggal_keluar;
    }

    public function setTanggalKeluar(\DateTimeInterface $tanggal_keluar): self
    {
        $this->tanggal_keluar = $tanggal_keluar;

        return $this;
    }
}
