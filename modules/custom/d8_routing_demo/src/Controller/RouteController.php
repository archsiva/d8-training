<?php

namespace Drupal\d8_routing_demo\Controller;

use Drupal\user\UserInterface;

class RouteController {
	public function hello_world() {
		return [
				'#type' => '#markup',
				'#markup' => 'Hello world'
		];
	}
	public function helloDynamic($name) {
		return [
				'#type' => '#markup',
				'#markup' => $name
		];
	}
	public function helloDynamicTitleCallback($name) {
		return [
				'#type' => '#markup',
				'#markup' => 'This is my first D8 Program'
		];
	}
	public function helloDynamicEntity(UserInterface $user) {
		dpm ( $user );
		return $user->getUsername ();
	}
	public function helloDynamicEntityTitleCallback(UserInterface $user) {
		return $user->getUsername ();
	}
}