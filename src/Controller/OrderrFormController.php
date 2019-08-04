<?php

namespace App\Controller;
use App\Entity\Orderr;
use App\Entity\OrderrForm;
use App\Entity\Product;
use App\Form\OrderrFormType;
use App\Form\OrderrType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderrFormController extends AbstractController
{
//    /**
//     * @Route("/orderr/form", name="orderr_form")
//     */
//    public function index()
//    {
//        return $this->render('orderr_form/index.html.twig', [
//            'controller_name' => 'OrderrFormController',
//        ]);
//    }
    /**
     * @Route("/{id}/new", name="new_orderr_form", methods={"GET","POST"})
     */
    public function new(Request $request, Product $product): Response
    {
        $em = $this->getDoctrine()->getManager();
        $orderr = new OrderrForm();
        $form = $this->createForm(OrderrFormType::class, $orderr);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
//            $orderr->setItem($product->getName());
            $orderr->setPrice($product->getPrice());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($orderr);
            $entityManager->flush();

            $orderr->setCreated(new \DateTime);
            $em->persist($orderr);
            $em->flush();

            return $this->redirectToRoute('product_list_index');
        }
        return $this->render('orderr_form/index.html.twig', [
            'orderr' => $orderr,
            'form' => $form->createView(),
            'product' => $product
        ]);
    }
}