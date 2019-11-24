<?php
declare(strict_types=1);

namespace App\BizJapan\Infra;

use App\BizJapan\Domain\Screening\SaiyouSenkou;
use App\BizJapan\Domain\Screening\SaiyouSenkouRepository;

final class DbSaiyouSenkouRepository implements SaiyouSenkouRepository
{

    public function add(SaiyouSenkou $saiyouSenkou): void
    {
        // TODO: Implement add() method.
    }
}