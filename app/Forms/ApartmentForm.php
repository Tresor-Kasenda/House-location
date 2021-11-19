<?php
declare(strict_types=1);

namespace App\Forms;

use App\Models\Category;
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
            ->add('town', 'text', [
                'label' => "ville"
            ])
            ->add('district', 'text', [
                'label' => "Quartier"
            ])
            ->add('piece_number', 'number', [
                'label' => "Nombre des pieces"
            ])
            ->add('categories','choice',[
                'label' => 'Categorie',
                'choices' => Category::all()->pluck('name', 'id')->toArray(),
                'multiple' => true,
                'attr' => ['class' => 'form-select']
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
