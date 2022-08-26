<?php

declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class SlideForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', [
                'label' => 'Titre',
            ])
            ->add('images', 'file', [
                'label' => 'Images',
            ])
            ->add('description', 'textarea', [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'rows' => 2,
                ],
            ]);
    }
}
