<?php

namespace Ertuo\Tests\Lab;

use Ertuo\Lab\Benchmark_Bitbucket_FastRoute_Ertuo_Open;

class Benchmark_Bitbucket_FastRoute_Ertuo_Open_Test extends Benchmark_Bitbucket_Test
{
	function testBenchmark()
	{
		return $this->benchmark( new Benchmark_Bitbucket_FastRoute_Ertuo_Open );
	}
}
