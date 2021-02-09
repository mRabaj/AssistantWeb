<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;
use App\Form\AppointmentType;
use App\Form\PatientType;
use App\Entity\Appointment;
use ContainerDIhDoPX\getDoctrine_QueryDqlCommandService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class WebAssitantController extends AbstractController
{
    #[Route('/loremipsum', name: 'web_loremipsum')]
    public function loremIpsum(): Response
    {
        return $this->render('web_assitant/index.html.twig', [
            'controller_name' => 'WebAssitantController',
        ]);
    }
     #[Route('/home', name: 'home_page')]
     public function home(): Response
     {
        $repository = $this->getDoctrine()->getRepository(Patient::class);
        $patients = $repository->findall();
        dump($patients);

         return $this->render('web_assitant/home.html.twig',[
            'patients'=>$patients,
            'onload'=>'disabled',          
        ]
        );
     }
    /**
    * @Route("/patient", name="patient_listing")
    */
        public function patientListing(): Response
        {
            $repository = $this->getDoctrine()->getRepository(Patient::class);
            $patients = $repository->findall();
            dump($patients);
            return $this->render('patient/listingPatient.html.twig',[
                'patients'=>$patients,
            ]);
         }
         /**
        * @Route("/patient/create", name="create_patient")
        * @param Request $request
        * @return \Symfony\Component\HttpFoundation\Response
        */
        public function createPatient(Request $request)
        {

            $patient= new Patient();
            
            $form = $this->createForm(PatientType::class, $patient,array());
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()){

                $patient->setGender($form['gender']->getData());
                $patient->setFirstName($form['firstName']->getData());
                $patient->setLastName($form['lastName']->getData());
                $patient->setCity($form['city']->getData());
                $patient->setbirthDate($form['birthDate']->getData());
                $patient->setPhonenumber($form['phonenumber']->getData());
                $patient->setProfessional($form['professional']->getData());
                $patient->setAddress($form['address']->getData());
                $patient->setAddress2($form['address2']->getData());
                $patient->setMailAddress($form['mailAddress']->getData());
                $patient->setnumberOfChildren($form['numberOfChildren']->getData());
                $patient->setOccupationEducation($form['occupationEducation']->getData());
                $patient->setSocialSecurityNumber($form['socialSecurityNumber']->getData());
                $patient->setDisease($form['disease']->getData());
                $patient->setPsycology($form['psycology']->getData());
                $patient->setmedicalTreatment($form['medicalTreatment']->getData());
                $patient->setLongLastingTreatment($form['longLastingTreatment']->getData());
                $patient->setPunctualProcessing($form['punctualProcessing']->getData());
                $patient->setOtherMedicalHistory($form['otherMedicalHistory']->getData());
                $patient->setSprain($form['sprain']->getData());
                $patient->setfracture($form['fracture']->getData());
                $patient->setDislocation($form['dislocation']->getData());
                $patient->setcarAccident($form['carAccident']->getData());
                $patient->setaccidentOnThePublicRoad($form['accidentOnThePublicRoad']->getData());
                $patient->setFall($form['fall']->getData());
                $patient->setOtherTraumaHistory($form['otherTraumaHistory']->getData());
                $patient->setOrthopaedic($form['orthopaedic']->getData());
                $patient->setHeadChurigie($form['headChurigie']->getData());
                $patient->setChestChurigie($form['chestChurigie']->getData());
                $patient->setChurigiaOfAbdomen($form['churigiaOfAbdomen']->getData());
                $patient->setGynecologicalChurigie($form['gynecologicalChurigie']->getData());
                $patient->setOrl($form['orl']->getData());
                $patient->setDeath($form['death']->getData());
                $patient->setChildbirth($form['childbirth']->getData());
                $patient->setOtherFamilyHistory($form['otherFamilyHistory']->getData());
                $patient->setlandlinePhone($form['landlinePhone']->getData());
                $patient->setAddress2($form['address2']->getData());
                $patient->setGeneralRemarks($form['generalRemarks']->getData());
                $patient-> setMaritalStatus($form['maritalStatus']->getData());
                $patient-> setLeisure($form['leisure']->getData());
                $patient-> setMutual($form['mutual']->getData());
                $patient-> setsentBy($form['sentBy']->getData());
                $patient-> setManualPreference($form['manualPreference']->getData());
                $patient-> setNotesOnHistory($form['notesOnHistory']->getData());


                
                $em = $this->getDoctrine()->getManager();
                $em->persist($patient);
                $em->flush();

                return $this->redirectToRoute('patient_listing');
            }

            return $this->render('patient/createPatient.html.twig', array(
                'form' => $form->createView(),
                'top_menu'=> 'hidden_RightTopMenu',
                ));
        }
        /**
        * @Route("/patient/edit/{id}", name="patient_edit")
        *
        * @param int $id
        * @param Request $request
        *
        * @return \Symfony\Component\HttpFoundation\Response
        */
        public function editPatient($id, Request $request)
        {
            $patient= $this->getDoctrine()
            ->getRepository(Patient::class)
            ->findOneBy(array('idPatient'=>$id));
            $form = $this->createForm(PatientType::class, $patient,array());
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){

                $em = $this->getDoctrine()->getManager();

                $patient->setGender($form['gender']->getData());
                $patient->setFirstName($form['firstName']->getData());
                $patient->setLastName($form['lastName']->getData());
                $patient->setCity($form['city']->getData());
                $patient->setbirthDate($form['birthDate']->getData());
                $patient->setPhonenumber($form['phonenumber']->getData());
                $patient->setProfessional($form['professional']->getData());
                $patient->setAddress($form['address']->getData());
                $patient->setAddress2($form['address2']->getData());
                $patient->setMailAddress($form['mailAddress']->getData());
                $patient->setnumberOfChildren($form['numberOfChildren']->getData());
                $patient->setOccupationEducation($form['occupationEducation']->getData());
                $patient->setSocialSecurityNumber($form['socialSecurityNumber']->getData());
                $patient->setDisease($form['disease']->getData());
                $patient->setPsycology($form['psycology']->getData());
                $patient->setmedicalTreatment($form['medicalTreatment']->getData());
                $patient->setLongLastingTreatment($form['longLastingTreatment']->getData());
                $patient->setPunctualProcessing($form['punctualProcessing']->getData());
                $patient->setOtherMedicalHistory($form['otherMedicalHistory']->getData());
                $patient->setSprain($form['sprain']->getData());
                $patient->setfracture($form['fracture']->getData());
                $patient->setDislocation($form['dislocation']->getData());
                $patient->setcarAccident($form['carAccident']->getData());
                $patient->setaccidentOnThePublicRoad($form['accidentOnThePublicRoad']->getData());
                $patient->setFall($form['fall']->getData());
                $patient->setOtherTraumaHistory($form['otherTraumaHistory']->getData());
                $patient->setOrthopaedic($form['orthopaedic']->getData());
                $patient->setHeadChurigie($form['headChurigie']->getData());
                $patient->setChestChurigie($form['chestChurigie']->getData());
                $patient->setChurigiaOfAbdomen($form['churigiaOfAbdomen']->getData());
                $patient->setGynecologicalChurigie($form['gynecologicalChurigie']->getData());
                $patient->setOrl($form['orl']->getData());
                $patient->setDeath($form['death']->getData());
                $patient->setChildbirth($form['childbirth']->getData());
                $patient->setOtherFamilyHistory($form['otherFamilyHistory']->getData());
                $patient->setlandlinePhone($form['landlinePhone']->getData());
                $patient->setAddress2($form['address2']->getData());
                $patient->setGeneralRemarks($form['generalRemarks']->getData());
                $patient->setMaritalStatus($form['maritalStatus']->getData());
                $patient->setLeisure($form['leisure']->getData());
                $patient->setMutual($form['mutual']->getData());
                $patient->setsentBy($form['sentBy']->getData());
                $patient->setManualPreference($form['manualPreference']->getData());
                $patient->setNotesOnHistory($form['notesOnHistory']->getData());

               
                $em->flush();

                return $this->redirectToRoute('patient_listing');
            }
            return $this->render('patient/editPatient.html.twig', array(
                'patient'=>$patient,
                'form' => $form->createView(),
                ));
        }
        /**
        * @Route("/patient/delete/{id}", name="patient_delete")
        *
        * @param int $id
        *
        * @return \Symfony\Component\HttpFoundation\Response
        */
        public function deletePatient($id)
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove( $this->getDoctrine()
            ->getRepository(Patient::class)
            ->findOneBy(array('idPatient' => $id) ));
            $em->flush();
            return $this->redirectToRoute('create_patient');
        }


        // begin calendar

        #[Route('/home/calendar', name: 'calendar_patient')]

            public function patientCalendar(): Response
            {   

                return $this->render('calendar/calendar.html.twig');
            }

         /**
        * @Route("/allAppointment", name="get_all_appointment", methods={"GET"})
        */

         public function getAllAppointment(): JsonResponse
        {
            $repository = $this->getDoctrine()->getRepository(Appointment::class);        
            $appointments = $repository->findall();
            $data = [];
            foreach($appointments as $appointment){
                $data[]=[
                    'id' => $appointment->getIdappointment(),
                    'start' => $appointment->getStartMeeting()->format('Y-m-d H:i:s'),
                    'end' => $appointment ->getEndmeeting()->format('Y-m-d H:i:s'),
                    
                ];
            }
            
        return new JsonResponse($data, Response::HTTP_OK);
        }

        /**
        * @Route("/home/calendar/create", name= "create_appointment")     
        */
        public function createAppointment(Request $request)
        {

            $appointment= new Appointment();
            
            $form = $this->createForm(AppointmentType::class, $appointment,array());
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()){

                $appointment->setPatient($form['patient']->getData());
                $appointment->setStartmeeting($form['startmeeting']->getData());
                $appointment->setEndmeeting($form['endmeeting']->getData());
               
                $em = $this->getDoctrine()->getManager();
                $em->persist($appointment);
                $em->flush();

                return $this->redirectToRoute('calendar_patient');
            }
            return $this->render('calendar/createAppointment.html.twig', array(
                'form' => $form->createView()
                ));
        }

        #[Route('/home/statstics', name: 'statstics')]

        public function displayStatstic(): Response
        {
            return $this->render('stastics/statstics.html.twig');
        }

         /**
        * @Route("/home/allstatstics", name="get_all_patient", methods={"GET"})      
        */

        public function getAllPatient(): JsonResponse
        {
            $repository = $this->getDoctrine()->getRepository(Patient::class);        
            $patients = $repository->findOneBy(array());
            $data = [];
            
            foreach($patients as $patient){
              
                    $data[]=
                    [                                     
                        'id' =>$patient->getIdPatient(),
                        'lastName' => $patient->getLastName(),
                        'firstName' => $patient->getFirstName(),
                        'gender' => $patient->getGender(), 
                        'birth_date' =>$patient->getBirthDate()->format('Y-m-d'),             
                    ];                 
            }            
        return new JsonResponse($data, Response::HTTP_OK);
        }

       
          


 }
