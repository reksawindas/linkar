<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Pasien;

class PasienFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        // for($i = 1; $i <= 2; $i++){
        //     $pasien = new Pasien ();
        //     $pasien->setNoRm($i);
        //     $pasien->setNama(sprintf('test%d',$i));
        //     $pasien->setJenisKelamin('L');
        //     $pasien->setTanggalLahir(\DateTime::createFromFormat('Y-m-d', "2018-09-09"));
        //     $manager->persist($pasien);
        // }
        $manager->flush();
    }
}
