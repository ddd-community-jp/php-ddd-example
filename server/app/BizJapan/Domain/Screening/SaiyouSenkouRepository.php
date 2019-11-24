<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Screening;

interface SaiyouSenkouRepository
{
    public function add(SaiyouSenkou $saiyouSenkou): void;
    public function findById(SaiyouSenkouId $senkouId): SaiyouSenkou;
}