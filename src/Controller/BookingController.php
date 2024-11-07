<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Form\BookingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingController extends AbstractController
{

    #[Route('/booking', name: 'booking')]
    public function reserver(Request $request, EntityManagerInterface $entityManager): Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($booking);
            $entityManager->flush();

            $this->addFlash('success', 'Réservation effectuée');

            return $this->redirectToRoute('booking');
        }

        return $this->render('booking/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route('/bookings', name: 'bookings')]
    public function reservations(EntityManagerInterface $entityManager): Response
    {
        $bookings = $entityManager->getRepository(Booking::class)->findAll();

        return $this->render('booking/list.html.twig', [
            'bookings' => $bookings,
        ]);
    }

    #[Route('/booking/annuler/{id}', name: 'booking_annuler')]
    public function annuler(Booking $booking, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($booking);
        $entityManager->flush();

        $this->addFlash('success', 'Réservation annulée');

        return $this->redirectToRoute('bookings');
    }

    #[Route('/booking/confirmer/{id}', name: 'booking_confirmer')]
    public function confirmer(Booking $booking, EntityManagerInterface $entityManager): Response
    {
        $booking->setIsConfirmed(true);
        $entityManager->flush();

        $this->addFlash('success', 'Réservation confirmée');

        return $this->redirectToRoute('bookings');
    }
}
