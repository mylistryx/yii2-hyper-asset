<?php

namespace demo\console;

use yii\console\Controller;
use yii\console\ExitCode;

final class HelloController extends Controller
{
    public function actionIndex(): int
    {
        $this->stdout('Hello World!' . PHP_EOL);

        return ExitCode::OK;
    }
}