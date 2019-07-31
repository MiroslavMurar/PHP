<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends AbstractController
{
    /**
     * @Route("/product/list", name="product_list_index")
     */
    public function index(ProductRepository $productRepository)
    {
        return $this->render('product_list/index.html.twig', [
            'product' => $productRepository->findAll()
        ]);
    }
}
