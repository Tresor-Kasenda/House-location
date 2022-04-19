<?php
declare(strict_types=1);

namespace App\Forms;

use App\Models\Category;
use App\Models\Type;
use Kris\LaravelFormBuilder\Form;

class ApartmentForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('prices', 'number', [
                'label' => "Prix mensuel"
            ])
            ->add('address', 'text', [
                'label' => "Addresse"
            ])
            ->add('guarantees', 'number', [
                'label' => "Garantie"
            ])
            ->add('phoneNumber', 'text',[
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
            ->add('images', 'file',[
                'label' => "Image"
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
            ->add('roomNumber', 'number', [
                'label' => "Nombre des pieces"
            ])
            ->add('categories','choice',[
                'label' => 'Categorie',
                'choices' => Category::all()->pluck('name', 'id')->toArray(),
                'multiple' => true,
                'attr' => ['class' => 'form-select']
            ])
            ->add('type','choice',[
                'label' => 'Type',
                'choices' => Type::all()->pluck('name', 'id')->toArray(),
                'multiple' => false,
                'attr' => ['class' => 'form-select']
            ]);
    }
}
