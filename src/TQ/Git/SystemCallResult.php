<?php
namespace TQ\Git;

class SystemCallResult
{
    /**
     *
     * @var string
     */
    protected $stdOut;
    /**
     *
     * @var string
     */
    protected $stdErr;
    /**
     *
     * @var integer
     */
    protected $returnCode;

    /**
     *
     * @param string $stdOut
     * @param string $stdErr
     * @param integer $returnCode
     */
    public function __construct($stdOut, $stdErr, $returnCode)
    {
        $this->stdOut       = (string)$stdOut;
        $this->stdErr       = (string)$stdErr;
        $this->returnCode   = (int)$returnCode;
    }

    /**
     *
     * @return string
     */
    public function getStdOut()
    {
        return $this->stdOut;
    }

    /**
     *
     * @return  boolean
     */
    public function hasStdOut()
    {
        return !empty($this->stdOut);
    }

    /**
     *
     * @return string
     */
    public function getStdErr()
    {
        return $this->stdErr;
    }

    /**
     *
     * @return  boolean
     */
    public function hasStdErr()
    {
        return !empty($this->stdErr);
    }

    /**
     *
     * @return integer
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }
}

