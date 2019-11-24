<?php
declare(strict_types=1);

namespace App\BizJapan\Domain\Screening;

use App\BizJapan\Domain\Applicant\KouhosyaID;

final class SaiyouSenkou
{
    /**
     * @var SaiyouSenkouId
     */
    private $id;
    /**
     * @var Oubobi
     */
    private $応募日;
    /**
     * @var ShinchokuStatus
     */
    private $進捗ステータス;
    /**
     * @var KouhosyaID
     */
    private $候補者ID;
    /**
     * @var Mensetsu
     */
    private $mensetsu;

    private function __construct(
        SaiyouSenkouId $id,
        Oubobi $応募日,
        ShinchokuStatus $進捗ステータス,
        KouhosyaID $候補者ID,
        Mensetsu $mensetsu
    )
    {
        $this->id = $id;
        $this->応募日 = $応募日;
        $this->進捗ステータス = $進捗ステータス;
        $this->候補者ID = $候補者ID;
        $this->mensetsu = $mensetsu;
    }

    public static function createByMensetsu(
        SaiyouSenkouId $senkouId,
        Oubobi $oubobi,
        ShinchokuStatus $shinchokuStatus,
        KouhosyaID $kouhosyaID,
        Mensetsu $mensetsu
    ) {
        return new self(
            $senkouId,
            $oubobi,
            $shinchokuStatus,
            $kouhosyaID,
            $mensetsu
        );
    }

    public static function createByMendan()
    {

    }

    /**
     * @return SaiyouSenkouId
     */
    public function getId(): string
    {
        return $this->id->getId();
    }
}