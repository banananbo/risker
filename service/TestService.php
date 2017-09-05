<?php
declare(strict_types=1);
/**
 * ユニットテスト用サンプルクラス
 */
namespace Service;

class TestService
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
