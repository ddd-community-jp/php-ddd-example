<?php
declare(strict_types=1);

namespace App\BizJapan\Infra;

use App\BizJapan\Domain\Screening\SaiyouSenkou;
use App\BizJapan\Domain\Screening\SaiyouSenkouId;
use App\BizJapan\Domain\Screening\SaiyouSenkouRepository;

final class InMemorySaiyouSenkouRepository implements SaiyouSenkouRepository
{
    private $data = [];
    public function add(SaiyouSenkou $saiyouSenkou): void
    {
        $this->data[$saiyouSenkou->getId()] = $saiyouSenkou;
    }

    public function findById(SaiyouSenkouId $senkouId): SaiyouSenkou
    {
        return $this->data[$senkouId->getId()];
    }
}