<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * 注意，如希望通过服务中心来管理服务，需在注解内增加 publishTo 属性.
 * @RpcService(name="CalculatorService", protocol="jsonrpc-tcp-length-check", server="jsonrpc-tcp-length-check")
 */
class LengthCheckCalculatorService extends CalculatorService
{
    public function add(int $a, int $b): int
    {
        return parent::add($a, $b);
    }
}
