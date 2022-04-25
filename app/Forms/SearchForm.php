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

        <li class="space-x-4 flex items-center">
                    {!! form_row($form->type, [
                        'attr' => [
                            'class' => 'form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer'
                        ]
                    ]) !!}
                </li>

    {!! form_row($form->number, [
        'attr' => [
            'class' => 'form-select form-select-lg mb-3 appearance-none block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none'
        ]
    ]) !!}
    }
}
