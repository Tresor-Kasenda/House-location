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
            ->add('electricity', 'select', [
                'choices' => ['oui' => 'Oui', 'non' => 'Non'],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => ['en', 'fr'],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('Cloture', 'select', [
                'choices' => ['oui' => 'Oui', 'non' => 'Non'],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                    'label_attr' => ['class' => 'label-class'],
                ],
                'selected' => ['en', 'fr'],
                'expanded' => true,
                'multiple' => true
            ])
            ->add('toilette', Field::CHOICE, [
                'label' => 'Toilettes',
                'choices' => $this->getToilette(),
                'multiple' => true,
                'attr' => ['class' => 'form-select']
            ])
        ;
    }

    private function getToilette(): array
    {
        return ["Interne" => 'Interne', "Externe" => 'Externe'];
    }
}
