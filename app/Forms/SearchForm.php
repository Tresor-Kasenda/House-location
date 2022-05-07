<?php
declare(strict_types=1);

namespace App\Forms;

use App\Enums\HouseType;
use App\Models\Type;
use Kris\LaravelFormBuilder\Form;

class SearchForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type', 'choice', [
                'label' => false,
                'choices' => ['louer' => HouseType::FOR_SALE, 'vendre' => HouseType::FOR_HIRE],
                'choice_options' => [
                    'wrapper' => ['class' => 'choice-wrapper'],
                ],
                'selected' => ['louer', 'vendre'],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('number', 'select', [
                'label' => false,
                'choices' => [
                    '1' => 'Une chambre',
                    '2' => 'Deux chambre',
                    '3' => 'Trois chambre',
                    '4' => 'Plus'
                ],
                'selected' => '1'
            ]);
    }
}
