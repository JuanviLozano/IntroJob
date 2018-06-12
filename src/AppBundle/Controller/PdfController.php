<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usu_conocimiento;
use AppBundle\Entity\Usu_educacion;
use AppBundle\Entity\Usu_exp_laboral;
use AppBundle\Entity\Usu_idioma;
use AppBundle\Entity\Usu_informacion;
use AppBundle\Entity\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PdfController extends Controller
{
    public function generatePdfAction()
    {

        $id = $this->getUser()->getId();

        $datos = $this->getDoctrine()
            ->getRepository(Usuario::Class)
            ->findById($id);

        $conocimientos = $this->getDoctrine()
            ->getRepository(Usu_conocimiento::Class)
            ->findById($id);

        $educaciones = $this->getDoctrine()
            ->getRepository(Usu_educacion::Class)
            ->findById($id);

        $experiencias = $this->getDoctrine()
            ->getRepository(Usu_exp_laboral::Class)
            ->findById($id);

        $idiomas = $this->getDoctrine()
            ->getRepository(Usu_idioma::Class)
            ->findById($id);

        $informaciones = $this->getDoctrine()
            ->getRepository(Usu_informacion::Class)
            ->findById($id);



        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('pdf/curriculumPdf.html.twig', array(
                    'datos' => $datos,
                    'conocimientos' => $conocimientos,
                    'educaciones' => $educaciones,
                    'experiencias' => $experiencias,
                    'idiomas' => $idiomas,
                    'informaciones' => $informaciones,
                ));
        
        $filename = 'curriculumPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="'.$filename.'.pdf"'
            )
        );

    }
}
