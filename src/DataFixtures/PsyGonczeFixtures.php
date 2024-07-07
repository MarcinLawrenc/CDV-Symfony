<?php

namespace App\DataFixtures;

use App\Entity\PsyGoncze;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PsyGonczeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
//        $psy_goncze = new PsyGoncze();
//
//        $psy_goncze->setName(
//            Name: 'Ogar niemiecki'
//        );
//        $psy_goncze ->setDescription(
//            Description: 'Ogar niemiecki, znany rowniez jako German Hound, jest sredniej wielkosci psem gonczym pochodzacym z Niemiec'
//        );
//        $manager->persist($psy_goncze);
//        $manager->flush();

        $psyGonczeData = [
            ['Name'=>'Jamnik','Description'=>'Maly pies'],
            ['Name'=>'Ogar polski','Description'=>'Duzy pies']
        ];

        foreach ($psyGonczeData as $data){
            $psy_goncze = new PsyGoncze($data);
            $psy_goncze->setName($data['Name']);
            $psy_goncze ->setDescription($data['Description']);
            $manager->persist($psy_goncze);
        }

        $manager->flush();
    }
}
