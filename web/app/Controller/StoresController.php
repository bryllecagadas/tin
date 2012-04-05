<?php
class StoresController extends AppController {
	function index() {
		$stores = $this->Store->find("all");
	}
}