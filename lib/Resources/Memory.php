<?php

declare(strict_types=1);
/**
 * @copyright Copyright (c) 2020 Daniel Kesselberg <mail@danielkesselberg.de>
 *
 * @author Daniel Kesselberg <mail@danielkesselberg.de>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\ServerInfo\Resources;

class Memory {
	private $memTotal = -1;
	private $memFree = -1;
	private $memAvailable = -1;
	private $swapTotal = -1;
	private $swapFree = -1;

	public function getMemTotal(): int {
		return $this->memTotal;
	}

	public function setMemTotal(int $memTotal): void {
		$this->memTotal = $memTotal;
	}

	public function getMemFree(): int {
		return $this->memFree;
	}

	public function setMemFree(int $memFree): void {
		$this->memFree = $memFree;
	}

	public function getMemAvailable(): int {
		return $this->memAvailable;
	}

	public function setMemAvailable(int $memAvailable): void {
		$this->memAvailable = $memAvailable;
	}

	public function getSwapTotal(): int {
		return $this->swapTotal;
	}

	public function setSwapTotal(int $swapTotal): void {
		$this->swapTotal = $swapTotal;
	}

	public function getSwapFree(): int {
		return $this->swapFree;
	}
	
	public function setSwapFree(int $swapFree): void {
		$this->swapFree = $swapFree;
	}
}