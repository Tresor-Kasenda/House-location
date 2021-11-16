<?php
declare(strict_types=1);

namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class CharacteristicForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('piece', 'number', [
                'label' => "Nombre des pieces"
            ])
            ->add('electricity', 'select', [
                'choices' => ['en' => 'English', 'fr' => 'French'],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => ['en', 'fr'],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('Cloture', 'select', [
                'choices' => ['en' => 'English', 'fr' => 'French'],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => ['en', 'fr'],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('toilette', Field::CHOICE, [
                'label' => 'Categories',
                'choices' => $this->getToilette(),
                'multiple' => true,
                'attr' => ['class' => 'form-select']
            ])
        ;
    }

    private function getToilette(): array
    {
        return ["Interne", "Externe"];
    }
}
