<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Equipage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Equipage controller.
 *
 * @Route("equipage")
 */
class EquipageController extends Controller
{
    /**
     * Lists all equipage entities.
     *
     * @Route("/", name="equipage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $equipages = $em->getRepository('AppBundle:Equipage')->findAll();

        return $this->render('equipage/index.html.twig', array(
            'equipages' => $equipages,
        ));
    }

    /**
     * Finds and displays a equipage entity.
     *
     * @Route("/{id}", name="equipage_show")
     * @Method("GET")
     */
    public function showAction(Equipage $equipage)
    {

        return $this->render('equipage/show.html.twig', array(
            'equipage' => $equipage,
        ));
    }
}
