<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;
use App\Form\OrderType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/order_form")
 */
class OrderFormController extends AbstractController
{

    /**
     * @Route("/{id}/new", name="order_form", methods={"GET","POST"})
     */
    public function new(Request $request, Product $product): Response
    {
//        $em = $this->getDoctrine()->getManager();
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
//            $orderr->setItem($product->getName());
//            $orderr->setPrice($product->getPrice());
            $order->setCreated(new \DateTime);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($order);
            $entityManager->flush();
            return $this->redirectToRoute('product_list_index');
        }
        return $this->render('order_form/index.html.twig', [
            'order' => $order,
            'form' => $form->createView(),
            'product' => $product
        ]);
    }























}
//    /**
//     * @Route("/", name="order_form")
//     */
//    public function new(Request $request):Response
//    {
//        $order = new Order;
//        $form = $this->createForm(OrderType::class, $order);
//        $form->handleRequest($request);
//        if($form->isSubmitted() && $form->isValid())
//        {
////            $order->setPrice($product->getPrice());
//            $order->setCreated(new \DateTime);
//            $entityManager = $this->getDoctrine()->getManager();
//            $entityManager->persist($order);
//            $entityManager->flush();
//            return $this->redirectToRoute('product_list_index');
//        }
//
//        return $this->render('order_form/index.html.twig', [
//            'order' => $order,
//            'form' => $form->createView(),
////            'product' => $product
//        ]);
//
//    }
//}
