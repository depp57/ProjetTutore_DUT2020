<?php


namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class DashboardController extends AbstractController{

    /**
     * @var Environment
     */
    private $repository;


    public function __construct(UtilisateurRepository $repository){
        $this->repository = $repository;
    }

    /**
     * @Route("/dashboard", name="dashboard")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response{
        return $this->render('pages/dashboard.html.twig',[
                                    'current_menu' => 'dashboard',
                            ]);
    }
}