<?php
declare(strict_types=1);

namespace Tests\Unit\BizJapan\Domain\Screening;

use App\BizJapan\Domain\Screening\Mensetsu;
use Tests\TestCase;

final class 面接Test extends TestCase
{
    public function testHoge(): void
    {
        $a = new Mensetsu('hogehoge');
        dump($a);
    }
}