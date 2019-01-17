<?php
/**
 * Abstract collection.
 *
 * @package App
 */

declare(strict_types=1);

namespace App\Entities;

/**
 * Abstract collection class.
 */
interface CollectionInterface extends \Iterator, \ArrayAccess, \Countable {

	/**
	 * Add blueprint.
	 *
	 * @param array $properties Properties.
	 * @return EntityInterface
	 */
	public function add_blueprint( array $properties ) : EntityInterface;

	/**
	 * Add entity.
	 *
	 * @param EntityInterface $entity Entity.
	 * @param mixed           $key Key.
	 * @return void
	 */
	public function add_entity( EntityInterface $entity, $key = null );

	/**
	 * Build entity.
	 *
	 * You need to implement this method in your final class.
	 *
	 * @return EntityInterface
	 */
	public function build_entity() : EntityInterface;
}
