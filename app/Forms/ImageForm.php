<?php

declare(strict_types=1);

namespace App\Forms;

use App\Models\House;
use Kris\LaravelFormBuilder\Form;

class ImageForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('images', 'file', [
                'label' => 'Photo',
                'multiple' => true,
            ])
            ->add('house', 'choice', [
                'label' => 'Apartement',
                'choices' => $this->getHouses(),
                'multiple' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function getHouses(): array
    {
        return House::query()
            ->pluck('reference', 'id')
            ->toArray();
    }
}
