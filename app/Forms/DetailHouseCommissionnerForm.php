<?php
declare(strict_types=1);

namespace App\Forms;

use App\Enums\HouseType;
use App\Models\House;
use App\Models\Type;
use Kris\LaravelFormBuilder\Form;

class DetailHouseCommissionnerForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('chamberNumber', 'number', [
                'label' => "Nombre des chambres a coucher"
            ])
            ->add('electricity', 'text', [
                'label' => "Nombre des jours avec l'electricite"
            ])
            ->add('roomNumber', 'number', [
                'label' => "Nombre des salons"
            ])
            ->add('toilette', 'text', [
                'label' => "Type de toilette"
            ])
            ->add('house_id', 'choice', [
                'label' => 'Appartement',
                'choices' => $this->getHouses(),
                'multiple' => false,
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function  getHouses(): array
    {
        return House::query()
            ->pluck('reference', 'id')
            ->where('user_id', '=', auth()->id())
            ->toArray();
    }
}
