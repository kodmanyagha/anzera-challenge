<?php

namespace App\Extended;

use Illuminate\Routing\Router as BaseRouter;


/**
 * Class Route
 * @package App\Extended
 */
class Router extends BaseRouter
{
    /**
     * Route an REST API CRUD to a controller.
     *
     * @param string $name
     * @param string $controller
     * @return Router
     */
    public function restCrud($name, $controller)
    {
        $this->get($name . '/index', [$controller, 'index'])->name($name . '.index');
        $this->post($name . '/store', [$controller, 'store'])->name($name . '.store');
        $this->get($name . '/read/{id}', [$controller, 'read'])->name($name . '.read');
        $this->put($name . '/update/{id}', [$controller, 'update'])->name($name . '.update');
        $this->delete($name . '/delete/{id}', [$controller, 'delete'])->name($name . '.delete');

        return $this;
    }

}

