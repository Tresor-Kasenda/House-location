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
                'choices' => ['oui' => "Oui", 'non' => 'Non'],
                'selected' => 'Oui'
            ])
            ->add('Cloture', [
                'choices' => ['oui' => "Oui", 'non' => 'Non'],
                'selected' => 'Oui'
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
