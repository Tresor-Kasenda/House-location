<?php

declare(strict_types=1);

namespace App\Enums;

enum ToiletEnum: string
{
    const INTERNE = "Interne";
    const EXTERNE = "Externe";
    const INTERNE_EXTERNE = "Interne/Externe";
}
