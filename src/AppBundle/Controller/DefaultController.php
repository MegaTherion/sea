<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = $em->createQuery('SELECT a.municipio from AppBundle:Autoridad a group by a.municipio')
                            ->getResult();
        $autoridades = null;
        $municipio = null;
        if ($request->request->has('municipio')) {
            $autoridades = $em->getRepository('AppBundle:Autoridad')->findByMunicipio($request->request->get('municipio'));
            $municipio = $request->request->get('municipio');
        }
        $arrmunicipios = array();
        // print_r($municipios[30]);
        $i = 0;
        foreach ($municipios as $au)
        {
            $i++;
            if ($i > 5) break;
            if (trim($au['municipio']) != '')
                $arrmunicipios[] = $au['municipio'];
        }
        return array('municipios'=>$arrmunicipios, 
            'autoridades'=>$autoridades,
            'municipio'=>$municipio);
        // replace this example code with whatever you need
        // return $this->render('default/index.html.twig', array(
        //     'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        // ));
    }
    /**
     * @Route("/pordepartamento", name="pordepartamento")
     * @Template()
     */
    public function pordepartamentoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = $em->createQuery('SELECT a.departamento from AppBundle:Autoridad a group by a.departamento')
                            ->getResult();
        $arrmunicipios = array();
        // print_r($municipios[30]);
        $i = 0;
        foreach ($municipios as $au)
        {
            $i++;
            // if ($i > 5) break;
            if (trim($au['departamento']) != '')
                $arrmunicipios[] = $au['departamento'];
        }
        return array('municipios'=>$arrmunicipios);
        // replace this example code with whatever you need
        // return $this->render('default/index.html.twig', array(
        //     'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        // ));
    }

    /**
     * @Route("/infomunicipio", name="infomunicipio")
     * @Template()
     */
    public function infomunicipioAction(Request $request)
    {
        $mun = $request->request->get('municipio');
        $em = $this->getDoctrine()->getManager();
        $autoridades = $em->createQuery('SELECT a from AppBundle:Autoridad a where a.municipio = ?1')
                            ->setParameter(1, $mun)
                            ->getResult();
        return array(
            'autoridades'=>$autoridades,
            'municipio'=>$mun,
            );

        
    }
    /**
     * @Route("/infodepartamento", name="infodepartamento")
     * @Template()
     */
    public function infodepartamentoAction(Request $request)
    {
        $mun = $request->request->get('departamento');
        $em = $this->getDoctrine()->getManager();
        $autoridades = $em->createQuery('SELECT a from AppBundle:Autoridad a where a.departamento = ?1 and (a.cargo = ?2 or a.cargo = ?3 or a.cargo = ?4 or a.cargo = ?5)')
                            ->setParameter(1, $mun)
                            ->setParameter(2, 'Gobernador')
                            ->setParameter(3, 'Sub Gobernador')
                            ->setParameter(4, 'Sub Gobernadora')
                            ->setParameter(5, 'Vicegobernadora')
                            ->getResult();
        return array(
            'autoridades'=>$autoridades,
            'departamento'=>$mun,
            );
        // return array();
    }
}
