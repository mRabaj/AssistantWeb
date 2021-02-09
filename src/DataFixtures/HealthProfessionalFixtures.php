<?php

namespace App\DataFixtures;

use App\Entity\Healthprofessional;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HealthProfessionalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $faker = Faker\Factory::create('fr_FR');
            for ($nbProfessional = 0; $nbProfessional < 50; $nbProfessional++) {
            $praticien = new Healthprofessional();
            $praticien->setFirstName($faker->firstName);
            $praticien->setLastName($faker->lastName);
            $praticien->setPostcode($faker->postcode);  
            $praticien->setCity($faker->city);
            $praticien->setCellphone($faker->phoneNumber);
            $manager->persist($praticien);
       

        }
        $manager->flush();
    }
}
