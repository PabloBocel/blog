<?php
namespace App\View\Composers;
    class CompanyComposer
    {
        public function compose($view)
        {
            $view->with('mensaje', 'Este es un mensaje específico para la vista Posts.show');
        }
    }