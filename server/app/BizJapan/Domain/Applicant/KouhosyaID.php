<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Applicant;

final class KouhosyaID
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