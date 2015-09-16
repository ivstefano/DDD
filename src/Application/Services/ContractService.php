<?php
/**
 * Creator: Ivo Stefanov
 * Modifier: Ivo Stefanov
 * Date: 16/09/2015
 * Time: 08:14
 * Type:
 */

class ContractsService {
	private $contractRepository;

	public function __construct(ContractRepositoryInterface $contractRepository) {
		$this->contractRepository = $contractRepository;
	}
}