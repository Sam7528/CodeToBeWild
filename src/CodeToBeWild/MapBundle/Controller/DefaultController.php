<?php

namespace CodeToBeWild\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CodeToBeWildMapBundle:Default:index.html.twig');
    }
    public function candidatsAction ()
    {
        return $this->render('CodeToBeWildMapBundle:Default:candidats.html.twig');
    }
}
