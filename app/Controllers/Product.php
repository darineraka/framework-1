<?php

namespace Controllers;

class Product extends \SlimController\SlimController
{

    public function indexAction($slug)
    {
        try {
            $product = $this->app->moltin->get('product', ['slug' => $slug, 'status' => 1]);
        } catch(\Exception $e) {
            exit($e->getMessage());
        }

        // Build page
        $this->render('Views/Product', $product['result']);
    }

}
