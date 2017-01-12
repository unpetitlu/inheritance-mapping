<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commercial;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /*
        $commercial = new Commercial();
        $commercial->setSale(12)
                    ->setFirstname('Ludo')
                    ->setLastname('3wa');
        $em = $this->getDoctrine()->getManager();
        $em->persist($commercial);
        $em->flush();
        */

        $em = $this->getDoctrine()->getManager();
        $commercial = $em->getRepository('AppBundle:User')->find(1);
        // or $commercial = $em->getRepository('AppBundle:Commercial')->find(1);
        if ($commercial instanceof Commercial) {
            die('Object Commercial');
        }
        die;

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
