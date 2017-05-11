<?php

namespace Kizi\Modules\Process;

use Kizi\Modules\Contracts\RunableInterface;
use Kizi\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Kizi\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Kizi\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
