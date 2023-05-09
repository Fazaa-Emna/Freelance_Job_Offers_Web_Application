<?php

namespace App\Controller;
use App\Entity\Service;
use App\Form\ServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Request; 
use App\Some\Other\Namespace\Services;
use App\Repository\ServiceRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Annotation\Groups;

class Service1Controller extends AbstractController
{
    #[Route('/service1', name: 'app_service1')]
    public function index(): Response
    {
        return $this->render('service1/index.html.twig', [
            'controller_name' => 'Service1Controller',
        ]);
    }
    
    #[Route('/addServiceJson', name: 'add')]
    public function new( Request $req,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();

        $service=new Service();
        $service->setName($req->get('name'));
        $service->setDescr($req->get('descr'));
        $service->setPrix($req->get('prix'));
        $service->setFile($req->get('file'));
        $service->setCat($req->get('cat'));

       
        $em->persist($service);
        $em->flush();

        $jsonContent = $Normalizer->normalize($service, 'json', ['groups'=>'post:read']);
        return new JsonResponse(json_encode($jsonContent));

       
    }

    #[Route('/AllServicesJson', name: 'listservices')]
    public function showAll(NormalizerInterface $normalizer)
    {
        $services = $this->getDoctrine()->getManager()->getRepository(Service::class)->findAll();

        $jsonContent = $normalizer->normalize($services, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    } 

    #[Route('/AllServicesJson/{id}', name: 'service')]
    public function ServiceId($id,NormalizerInterface $normalizer)
    {
        $services = $this->getDoctrine()->getManager()->getRepository(Service::class)->find($id);

        $jsonContent = $normalizer->normalize($services, 'json', ['groups' => 'post:read']);

        return new Response(json_encode($jsonContent));
    }
 


    #[Route('/deleteServiceJson/{id}', name: 'delete')]
    public function delete( Request $req,NormalizerInterface $Normalizer,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $service =$em->getRepository(Service::class)->find($id);
        $em->remove($service);
        $em->flush();

        $jsonContent = $Normalizer->normalize($service, 'json', ['groups'=>'post:read']);
        return new JsonResponse(json_encode($jsonContent));
    }


    #[Route('/updateServiceJson/{id}', name: 'update')]
    public function update( Request $req,NormalizerInterface $Normalizer,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $service =$em->getRepository(Service::class)->find($id);
   
        $service-> setName($req->get('name'));
        $service->setDescr($req->get('descr'));
        $service->setPrix($req->get('prix'));
        $service->setFile($req->get('file'));
        $service->setCat($req->get('cat'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($service, 'json', ['groups'=>'post:read']);
        return new JsonResponse(json_encode($jsonContent));

       
    }

}
