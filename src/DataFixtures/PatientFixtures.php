<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Patient;
use Faker;

class PatientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $faker = Faker\Factory::create('fr_FR');
            for ($nbPatient = 0; $nbPatient < 50; $nbPatient++) {
            $patient = new Patient();
            $patient->setfirstName($faker->firstName);
            $patient->setlastName($faker->lastName);
            $patient->setDateofbirth(new \DateTime($faker->date('Y-m-d',  'now')));
            $patient->setCity($faker->city);
            $patient->setPhonenumber($faker->phoneNumber);
            $manager->persist($patient);

       

        }
        $manager->flush();
    }
    
   
}
