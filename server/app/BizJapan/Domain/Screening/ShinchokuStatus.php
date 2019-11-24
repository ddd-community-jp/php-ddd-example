<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Screening;

final class ShinchokuStatus
{
    /**
     * @var string
     */
    private $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }
}
