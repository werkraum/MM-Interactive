<?php
namespace MikelMade\Mminteractive\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 MikelMade (http://www.mikelmade.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package mminteractive
 *
 */
class Mapcache extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	
	/**
		* uid
		*
		* @lazy
		* @var \integer
		*/
	protected $uid;

	/**
		* title 
		*
		* @lazy
		* @var \string
		*/
	protected $title;

	/**
		* mapid
		*
		* @lazy
		* @var \integer
		*/
	protected $mapid;
	
	/**
		* cache
		*
		* @lazy
		* @var \string
		*/
	protected $cache;
	
	/**
		* Returns the uid
		*
		* @return \integer $uid
		*/
	public function getUid() {
		return $this->uid;
	}
	
	/**
		* Returns the title
		*
		* @return \string $title
		*/
	public function getTitle() {
		return $this->title;
	}
	
	/**
		* Sets the title
		*
		* @param \integer $title
		* @return void
		*/
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
		* Returns the mapid
		*
		* @return \integer $mapid
		*/
	public function getMapid() {
		return $this->image;
	}
	
	/**
		* Sets the mapid
		*
		* @param \integer $mapid
		* @return void
		*/
	public function setMapid($mapid) {
		$this->mapid = $mapid;
	}
	
	/**
		* Returns the cache
		*
		* @return \integer $cache
		*/
	public function getCache() {
		return $this->cache;
	}
	
	/**
		* Sets the cache
		*
		* @param \integer $cache
		* @return void
		*/
	public function setMapid($cache) {
		$this->cache = $cache;
	}
}