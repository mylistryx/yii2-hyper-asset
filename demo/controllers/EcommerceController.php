<?php

namespace demo\controllers;

use yii\web\Controller;

final class EcommerceController extends Controller
{
    public function init(): void
    {
        $this->view->params['breadcrumbs'][] = ['label' => 'Ecommerce'];
        parent::init();
    }
    public function actionCheckout(): string
    {
        return $this->render('checkout');
    }

    public function actionCustomers(): string
    {
        return $this->render('customers');
    }

    public function actionOrders(): string
    {
        return $this->render('orders');
    }

    public function actionOrdersDetails(): string
    {
        return $this->render('orders-details');
    }

    public function actionProducts(): string
    {
        return $this->render('products');
    }

    public function actionProductsDetails(): string
    {
        return $this->render('products-details');
    }

    public function actionSellers(): string
    {
        return $this->render('sellers');
    }

    public function actionShoppingCart(): string
    {
        return $this->render('shopping-cart');
    }
}