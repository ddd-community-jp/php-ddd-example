<?php
declare(strict_types=1);

namespace App\BizJapan\UseCase;

use App\BizJapan\Domain\Applicant\KouhosyaID;
use App\BizJapan\Domain\Screening\Mensetsu;
use App\BizJapan\Domain\Screening\oubobi;
use App\BizJapan\Domain\Screening\SaiyouSenkouId;
use App\BizJapan\Domain\Screening\SaiyouSenkouRepository;
use App\BizJapan\Domain\Screening\ShinchokuStatus;
use App\BizJapan\Domain\Screening\SaiyouSenkou;

final class 採用選考登録
{

    /**
     * @var SaiyouSenkouRepository
     */
    private $saiyouSenkouRepository;

    public function __construct(SaiyouSenkouRepository $saiyouSenkouRepository)
    {
        $this->saiyouSenkouRepository = $saiyouSenkouRepository;
    }
    public function 面接から選考を登録する(): void
    {
        // 引数

        // 生成
        $id = new SaiyouSenkouId(uniqid('bizJP', true));
        $entity = SaiyouSenkou::createByMensetsu(
            $id,
            new oubobi('日付'),
            new ShinchokuStatus('ステータス'),
            new KouhosyaID('候補者ID'),
            new Mensetsu('面接ID')
        );
        // 永続化
        $this->saiyouSenkouRepository->add($entity);
        // 検索
        $findModel = $this->saiyouSenkouRepository->findById($id);
        dump($findModel);
    }

    public function 面談から選考を登録する(): void
    {

    }
}