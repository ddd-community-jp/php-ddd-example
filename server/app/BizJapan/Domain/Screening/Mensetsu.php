<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Screening;

final class Mensetsu
{
    /**
     * @var string
     */
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}