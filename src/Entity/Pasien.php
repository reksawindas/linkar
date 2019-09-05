<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PasienRepository")
 */
class Pasien
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $no_rm;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $jenis_kelamin;

    /**
     * @ORM\Column(type="date")
     */
    private $tanggal_lahir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoRm(): ?string
    {
        return $this->no_rm;
    }

    public function setNoRm(string $no_rm): self
    {
        $this->no_rm = $no_rm;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getJenisKelamin(): ?string
    {
        return $this->jenis_kelamin;
    }

    public function setJenisKelamin(string $jenis_kelamin): self
    {
        $this->jenis_kelamin = $jenis_kelamin;

        return $this;
    }

    public function getTanggalLahir(): ?\DateTimeInterface
    {
        return $this->tanggal_lahir;
    }

    public function setTanggalLahir(\DateTimeInterface $tanggal_lahir): self
    {
        $this->tanggal_lahir = $tanggal_lahir;

        return $this;
    }
}
