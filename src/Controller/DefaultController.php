<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(TranslatorInterface $translator): Response
    {
        $message = $translator->trans("Symfony is awesome !");

        return $this->render('default/index.html.twig', [
            'message' => $message,
        ]);
    }
}
