<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
#[Route('/blog')]
class BotController extends AbstractController
{
    #[Route('/bot', name: 'app_bot')]
    public function index(Request $request): Response
    {
       
      
    
         
    $qa = [
        'Bonjour' => 'Bonjour ! Comment puis-je vous aider ?',
        'bonjour' => 'Bonjour ! Comment puis-je vous aider ?',
        'Hi' => 'Hi ! How can I help you ?',
        'hi' => 'Hi ! How can I help you ?',

        ];
    $message = $request->request->get('message');
    if (array_key_exists($message, $qa)) {
        $response = $qa[$message];
    } else {
        $response = 'Je suis désolé, je n\'ai pas compris votre question.';
    }
    return $this->render('bot.html.twig', [
        'response' => $response
    ]);

}}

