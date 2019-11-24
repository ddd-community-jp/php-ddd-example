<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Screening;

final class Oubobi
{
    /**
     * @var string
     */
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }
}