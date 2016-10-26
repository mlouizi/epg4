<?php
namespace Eplugg\FrontBundle\Controller;

use Eplugg\BackBundle\Entity\EventCalendar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;
class CalendarController extends Controller
{
    public function CalendarAction()
    {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $request = $this->get('request');

        if($request->query->get('month') && $request->query->get('year')) {
            $month =  $request->query->get('month');
            $year = $request->query->get('year');
            $date  = new \DateTime($year . '-' . $month);
        }
        else {
            $date = new \DateTime();
            $month =  $date->format('m');
            $year = $date->format('Y');
        }

        $monthDaysNumber = cal_days_in_month(
            CAL_GREGORIAN,
            $month,
            $year
        );
        $form_date  = new \DateTime($year . '-' . $month . '-01' );
        $to_date  = new \DateTime($year . '-' . $month . '-' . $monthDaysNumber );
        $repository = $this->getDoctrine()
            ->getRepository('EpluggBackBundle:EventCalendar');
        $query = $repository->createQueryBuilder('e')
            ->where('e.createdBy = :uid')
            ->andWhere('e.eventDate >= :form_date')
            ->andWhere('e.eventDate <= :to_date')
            ->setParameter('uid', $currentUser->getId())
            ->setParameter('form_date', $form_date)
            ->setParameter('to_date', $to_date)
            ->getQuery();

        $events = $query->getResult();
        $mountheEvents = array();
        $week = 1;
        $dayNumber = $form_date->format('N');
        for($i=1; $i<= $dayNumber; $i++) {
            $mountheEvents[$week][] = array('day' => false);
        }
        for($i =1; $i<= $monthDaysNumber; $i++) {
            if($dayNumber % 7 == 0 ) {
                $week++;
            }
            $mountheEvents[$week][] = array('day' => $i);

            $dayNumber++;
        }
        foreach($events as $event) {
            $eventDate = $event->getEventDate();
            $eventDay = $eventDate->format('d');

            $eventDayNumber = $eventDate->format('N');

            $weekNumber = (int)($eventDay /7) +1;

            $dayIndex = $eventDayNumber % 7;

            $mountheEvents[$weekNumber][$dayIndex]["events"][] = $event;

        }
        $prevDate = clone $date;
        $nextDate = clone $date;
        $prevDate->modify('-1 month');
        $nextDate->modify('+1 month');

        return $this->render('EpluggFrontBundle:Calendar:calendar.html.twig', array('date' => $date, 'events' => $mountheEvents, 'nextDate' => $nextDate, 'prevDate' => $prevDate));

    }
    public function AddEventAction() {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $valid = false;
        $event = new EventCalendar();
        $form = $this->createFormBuilder($event)
            ->add('title', 'text', array('required' => true))
            ->add('eventDate', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'required' => true)
            )
            ->getForm();
        $request = $this->get('request');
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isValid()) {
            $event->setCreated(new \DateTime());
            $event->setCreatedBy($currentUser);

            $em->persist($event);
            $em->flush();
            $valid = true;

        }
        return $this->render('EpluggFrontBundle:Calendar:add_event.html.twig', array('form' => $form->createView(), 'valid' => $valid));

    }
    public function xmlEventsAction()
    {
        $currentUser = $this->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()
            ->getRepository('EpluggBackBundle:EventCalendar');
        $query = $repository->createQueryBuilder('e')
            ->where('e.createdBy = :uid')
            ->setParameter('uid', $currentUser->getId())
            ->getQuery();
        $events = $query->getResult();

      /*  foreach($events as $event) {
            $eventFormatted = new \stdClass();
            $eventFormatted->id = $event->getId();
            $eventFormatted->startdate = $event->getEventDate()->format('Y-m-d');
            $eventFormatted->enddate = '';
            $eventFormatted->starttime = $eventFormatted->endtime = '';
            $eventFormatted->color = '#ffb128';
            $eventFormatted->url = '';
            $eventsFormatted[] = $eventFormatted;
        }*/
        $response = $this->render('EpluggFrontBundle:Calendar:xml_events.xml.twig', array('events' => $events));
        $response->headers->set('Content-Type', 'application/xml');

        return $response;
     }
}