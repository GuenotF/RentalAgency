<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf as Pdf;
use Dompdf\Options as PdfConfig;

class ApiController extends AbstractController
{
    /**
     * @Route("/", name="api")
     */
    public function index()
    {
        return $this->render('api/index.html.twig', []);
    }

    /**
     * @Route("/pdf", name="api")
     */
    public function generatePdf()
    {
        $pdfConfig = new PdfConfig();
        $pdfConfig->set('defaultFont', 'Arial');
        $pdf = new Pdf($pdfConfig);
        $html = $this->renderView('pdf/invoice.html.twig', [
            'title' => "pdf de test"
        ]);

        $pdf->loadHtml($html);

        $pdf->setPaper('A4', 'portrait');

        $pdf->render();

        $pdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }
}
