<?php
declare(strict_types=1);

namespace App\Forms;

use App\Models\Type;
use Kris\LaravelFormBuilder\Form;

class SearchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type', 'checkbox', [
                'label' => false,
                'choices' => Type::query()->pluck('name', 'id')
                    ->toArray(),
                'multiple' => false,
            ])
            ->add('languages', 'choice', [
                'choices' => ['en' => 'English', 'fr' => 'French'],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => ['en', 'fr'],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('number', 'checkbox', [
                'label' => false,
                'choices' => "",
                'mutiple' => false
            ]);
    }
}
