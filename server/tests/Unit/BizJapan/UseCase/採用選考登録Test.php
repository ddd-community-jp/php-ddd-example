<?php
declare(strict_types=1);

namespace Tests\Unit\BizJapan\UseCase;

use App\BizJapan\Infra\InMemorySaiyouSenkouRepository;
use App\BizJapan\UseCase\採用選考登録;
use Tests\TestCase;

final class 採用選考登録Test extends TestCase
{
    public function test面接から選考を登録する(): void
    {
        $useCase = new 採用選考登録(new InMemorySaiyouSenkouRepository());
        $useCase->面接から選考を登録する();
        dump($useCase);
    }
}