<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		// On ne sait pas combien de pages il y a
    		// Mais on sait qu'une page doit être supérieure ou égale à 1
		if($page <1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
		}
		// Ici, on récupérera la liste des annonces, puis on la passera au template
		// Mais pour l'instant, on ne fait qu'appeler le template
		return $this->render('OCPlatformBundle:Advert:index.html.twig');
	}

	public function viewAction($id)
	{
		// Ici, on récupérera l'annonce correspondante à l'id $id
		return $this->render(
			'OCPlatformBundle:Advert:view.html.twig', 
			array('id'  => $id)
		);
	}
/*
	public function addAction(Request $request)
	{
		// La gestion d'un formulaire est particulière, mais l'idée est la suivante :
		// Si la requête est en POST, c'est que le visiteur a soumis le formulaire
		if ($request->isMethod('POST')) {
			// Ici, on s'occupera de la création et de la gestion du formulaire
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			// Puis on redirige vers la page de visualisation de cettte annonce
 			 return $this->redirect($this->generateUrl('oc_platform_view', array('id' => 5)));
		}
		// Si on n'est pas en POST, alors on affiche le formulaire
		return $this->render('OCPlatformBundle:Advert:add.html.twig');
	}
*/
	public function addAction(Request $request)
	{
		// On récupère le service
		$antispam = $this->container->get('oc_platform.antispam');

		// Je pars du principe que $text contient le texte d'un message quelconque
		//$text = 'moins de 50 car ...';
		$text = 'plus de 50 car ...1234567890123456789012345678901234567890';
		if ($antispam->isSpam($text)) {
			throw new \Exception('Votre message a été détecté comme spam !');
	        }
		// Ici le message n'est pas un spam
	}

  	public function editAction($id, Request $request)
  	{
    		// Ici, on récupérera l'annonce correspondante à $id
		// Même mécanisme que pour l'ajout
    		if ($request->isMethod('POST')) {
      			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
      			return $this->redirect($this->generateUrl('oc_platform_view', array('id' => 5)));
    		}
    		return $this->render('OCPlatformBundle:Advert:edit.html.twig');
  	}

  	public function deleteAction($id)
  	{
	    	// Ici, on récupérera l'annonce correspondant à $id
    		// Ici, on gérera la suppression de l'annonce en question
    		return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  	}
}
