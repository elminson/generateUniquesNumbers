<?php

class generateUniqueNumbers
{

	private $exclude = [];

	private $topRandomNumber = 1;

	private $max = 10;

	private $currentNumbers = [];

	private $error = false;


	function generate()
	{

		$number = rand(0, $this->max);
		if (!in_array($number, $this->currentNumbers) && !in_array($number, $this->exclude)) {
			$this->currentNumbers[] = $number;
		}

		$countCurrentNumbers = count($this->currentNumbers);
		$countExclude = count($this->exclude);

		if ($countExclude + $this->topRandomNumber >= $this->max) {
			$this->error = true;

			return;
		}

		if ($countCurrentNumbers >= $this->topRandomNumber) {
			return;
		}


		return $this->generate();

	}

	/**
	 * @param array $exclude
	 */
	public function setExclude($exclude = [])
	{

		$this->exclude = $exclude;
	}

	/**
	 * @param int $topRandomNumber
	 */
	public function setRandomNumberToReturn($topRandomNumber = 1)
	{

		if (!empty($topRandomNumber)) {
			$this->topRandomNumber = $topRandomNumber;
		}

	}

	/**
	 * @param int $max
	 */
	public function setMax($max = 10)
	{

		$this->max = $max;
	}


	/**
	 * @return array
	 */
	public function getCurrentNumbers()
	{

		if ($this->error) {
			return "Not enougth room to calculate";
		}

		return $this->currentNumbers;
	}

}

?>
