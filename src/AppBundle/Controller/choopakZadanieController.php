<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\choopakZadanieType;
use choopak\Tools\Zadanie;
class choopakZadanieController extends Controller
{
    /**
     * @Route("/choopak/zadanie/show/form", name="choopak_zadanie_show_form")
     */
    public function showFormAction()
    {
        $zadanie = new Zadanie();
        $form = $this->createCreateForm($zadanie);
        return $this->render(
            'AppBundle:choopakZadanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/choopak/zadanie/przetworz", name="choopak_zadanie_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $zadanie = new Zadanie();
        $form = $this->createCreateForm($zadanie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:choopakZadanie:wynik.html.twig',
                array('wynik' => $zadanie->wynik())
            );
        }
        return $this->render(
            'AppBundle:choopakZadanie:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Zadanie $zadanie The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Zadanie $zadanie)
    {
        $form = $this->createForm(new choopakZadanieType(), $zadanie, array(
            'action' => $this->generateUrl('choopak_zadanie_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Przetwórz'));
        return $form;
    }
} 
