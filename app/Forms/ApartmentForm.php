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
                'label' => "Prix mensuel",
            ])
            ->add('commune', 'text', [
                'label' => "Commune",
            ])
            ->add('town', 'text', [
                'label' => "Ville",
            ])
            ->add('district', 'text', [
                'label' => "Quartier",
            ])
            ->add('address', 'text', [
                'label' => "Adresse",
            ])
            ->add('guarantees', 'number', [
                'label' => "Garantie",
            ])
            ->add('phone_number', 'text',[
                'label' => "N° Téléphone",
            ])
            ->add('email', 'text', [
                'label' => "Email",
            ])
            ->add('latitude', 'text', [
                'label' => 'Latitude',
            ])
            ->add('longitude', 'text', [
                'label' => "Longitude",
            ])
            ->add('images', 'file',[
                'label' => "Image",
            ])
            ->add('reference', 'text',[
                'label' => "Référence",
            ])
            ->add('categories','choice',[
                'label' => 'Catégorie de Maison',
                'choices' => Category::all()->pluck('name', 'id')->toArray(),
                'multiple' => true,
            ])
            ->add('type','choice',[
                'label' => 'Type de Maison',
                'choices' => $this->getHouseType(),
                'multiple' => false,
            ])
            ->add('room_number', 'number', [
                'label' => "Nombre des chambres",
            ])
            ->add('room_pieces', 'number', [
                'label' => "Nombre des Pieces",
            ])
            ->add('electricity', 'choice', [
                'choices' => [1 => 'Oui', 0 => 'Non'],
                'attr' => ['class' => 'form-control'],
                'selected' => [1, 0],
                'multiple' => false,
            ])
            ->add('toilet', 'choice', [
                'choices' => ['external' => 'Externe', 'internal' => 'Interne'],
                'attr' => ['class' => 'form-control'],
                'selected' => ['external', 'internal'],
                'multiple' => false,
            ]);
    }

    public function getCategories(): array
    {
        return Category::all()
            ->pluck('name', 'id')
            ->toArray();
    }

    public function getHouseType(): array
    {
        return Type::all()
            ->pluck('name', 'id')
            ->toArray();
    }
}
