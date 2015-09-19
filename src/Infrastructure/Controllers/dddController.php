<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 16/09/2015
 * Time: 08:13
 * Type: Controller
 */

class dddController extends BaseController {
	/**
	 * @var Request
	 */
	private $request;

	/**
	 * @var Response
	 */
	private $response;

	/**
	 * @var ContractsService
	 */
	private $contractsService;

	/**
	 * @var Money Service
	 */
	private $moneyService;

	/**
	 * DDDController constructor.
	 * @param Request $request
	 * @param Response $response
	 * @param ContractsService $contractsService
	 * @param Money $moneyService
	 */
	public function __construct(Request $request, Response &$response, ContractsService $contractsService, Money $moneyService) {
		$this->request = $request;
		$this->response = $response;
		$this->contractsService = $contractsService;
		$this->moneyService = $moneyService;
	}

	public function invoke() {

	}

	public function createInvoiceAction($id) {
		echo $id;
	}
}