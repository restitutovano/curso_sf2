<?php
/**
 * Created by PhpStorm.
 * User: resvamon
 * Date: 10/11/2015
 * Time: 13:36
 */

namespace AppBundle\Service;


class CalculatorService
{
    /**
     * @var int
     */
    private $op1;

    /**
     * @var int
     */
    private $op2;

    /**
     * @var int
     */
    private $result;

    /**
     * CalculatorService constructor.
     * @param int $op1
     * @param int $op2
     * @param int $result
     */
    public function __construct($op1=null, $op2=null, $result=null)
    {
        $this->op1 = $op1;
        $this->op2 = $op2;
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;
    }

    /**
     * @return int
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param int $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int) $op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = (int) $result;
    }

    /**
     * sum
     *
     * La suma
     */
    public function sum()
    {
        $this->setResult($this->getOp1() + $this->getOp2());
    }

    /**
     * res
     *
     * La resta
     */
    public function res()
    {
        $this->setResult($this->getOp1() - $this->getOp2());
    }

    /**
     * div
     *
     * La división
     */
    public function div()
    {
        $this->setResult($this->getOp1() / $this->getOp2());
    }

    /**
     * mult
     *
     * La multiplicación
     */
    public function mult()
    {
        $this->setResult($this->getOp1() * $this->getOp2());
    }

}