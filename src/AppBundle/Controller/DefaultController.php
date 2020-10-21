<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Equipage;
use AppBundle\Form\EquipageType;




class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, EntityManagerInterface $em )
    {
        $em = $this->getDoctrine()->getManager();

        $argonaute = new Equipage();

        $form = $this->createForm(EquipageType::class, $argonaute);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
        // $form->getData() holds the submitted values
        // but, the original `$task` variable has also been updated
        $argonaute = $form->getData();
        dump($argonaute);

        // ... perform some action, such as saving the task to the database
        // for example, if Task is a Doctrine entity, save it!
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($argonaute);
         $entityManager->flush();

        return $this->redirectToRoute('homepage');
    }


        $argonautes = $em->getRepository(Equipage::class)->findAll();
        // replace this example code with whatever you need

        dump($argonautes);
        

        return $this->render('default/index.html.twig', [
            'argonautes' => $argonautes,
            'form' => $form->createView(),
        ]);
    }

  

}
