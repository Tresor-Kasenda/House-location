<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ApartmentForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('price_per_month', 'number', [
                'label' => "Prix mensuel"
            ])
            ->add('address', 'text', [
                'label' => "Addresse"
            ])
            ->add('guarantees', 'number', [
                'label' => "Garantie"
            ])
            ->add('phone_number', 'text',[
                'label' => "Numero Telephone"
            ])
            ->add('email', 'text', [
                'label' => "Addresse Email"
            ])
            ->add('latitude', 'text', [
                'label' => 'Latitude'
            ])
            ->add('longitude', 'text', [
                'label' => "Longitude"
            ])
            ->add('picture', 'file',[
                'label' => "Photo"
            ])
            ->add('commune', 'text', [
                'label' => "Commune"
            ])
            ->add('district', 'text', [
                'label' => "Quartier"
            ])
            ->add('piece_number', 'number', [
                'label' => "Nombre des pieces"
            ])
            ->add('characteristic', 'collection', [
                'type' => 'form',
                'options' => [
                    'class' => CharacteristicForm::class,
                    'label' => false,
                ]
            ]);
    }
}