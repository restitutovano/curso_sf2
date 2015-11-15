<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @Route(
     *     path = "/",
     *     name = "app_calculator_index"
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':calculator:index.html.twig');
    }

    /**
     * sumAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "/sum",
     *     name ="app_calculator_sum"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sumAction()
    {
        return $this->render(':calculator:form.html.twig', ['action' => 'app_calculator_doSum']);
    }

    /**
     * doSumAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "/do-sum",
     *     name ="app_calculator_doSum"
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->sum();
        $result = $calculator->getResult();

        return $this->render(':calculator:result.html.twig', [
            'result' => $result,
            'op1' => $op1,
            'op2' => $op2,
            'operation' => '+'
            ]
        );
    }

    /**
     * resAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "/res",
     *     name = "app_calculator_res"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resAction()
    {
        return $this->render(':calculator:form.html.twig', ['action' => 'app_calculator_doRes']);
    }


    /**
     * doResAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "do-res",
     *     name = "app_calculator_doRes"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doResAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->res();
        $result = $calculator->getResult();

        return $this->render(':calculator:result.html.twig', [
            'result' => $result,
            'op1' => $op1,
            'op2' => $op2,
            'operation' => '-'
            ]
        );
    }

    /**
     * multAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "/mult",
     *     name = "app_calculator_mult"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function multAction()
    {
        return $this->render(':calculator:form.html.twig', ['action' => 'app_calculator_doMult']);
    }

    /**
     * doMultAction
     *
     * Show Calculator Result
     *
     * @Route(
     *     path = "do-mult",
     *     name = "app_calculator_doMult"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMultAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->mult();
        $result = $calculator->getResult();

        return $this->render(':calculator:result.html.twig', [
                'result' => $result,
                'op1' => $op1,
                'op2' => $op2,
                'operation' => '*'
            ]
        );
    }

    /**
     * divAction
     *
     * Show Calculator Form
     *
     * @Route(
     *     path = "/div",
     *     name = "app_calculator_div"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function divAction()
    {
        return $this->render(':calculator:form.html.twig', ['action' => 'app_calculator_doDiv']);
    }

    /**
     * doDivAction
     *
     * Show Calculator Result
     *
     * @Route(
     *     path = "do-div",
     *     name = "app_calculator_doDiv"
     * )
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doDivAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->div();
        $result = $calculator->getResult();

        return $this->render(':calculator:result.html.twig', [
            'result' => $result,
            'op1' => $op1,
            'op2' => $op2,
            'operation' => '/'
            ]
        );
    }

}
