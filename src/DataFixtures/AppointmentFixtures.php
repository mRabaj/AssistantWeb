<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Appointment;
use App\Entity\Patient;

use Faker;

class AppointmentFixtures extends Fixture
{
    
        public function load(ObjectManager $rendezVous)
    {

             
        $faker = Faker\Factory::create('fr_FR');
            for ($i = 0; $i < 20; $i++) {
           
            
           //but : les débuts de rdv -> faker et fin début +1 heure ?
            
            $appointment = new Appointment();
            $date_heure_faker=new \DateTime($faker->date('Y-m-d H:i:s','now'));
            $appointment->setStartMeeting($date_heure_faker);

            // $date_start=strtotime($date_heure_debut."+30 minute");
            // $date_heure_fin=date('Y-m-d H:i:s',$date_start);
            // $appointment->setEndmeeting( $date_heure_fin);
           
            $rendezVous->persist($appointment);
        
        
        }
        $rendezVous->flush();

       
    }

}