<?php
/**
 * Labels trait.
 *
 * @package App
 */

namespace App\Services\Labels;

/**
 * Labels trait.
 */
trait Common {
	/**
	 * Get default labels.
	 *
	 * @param string  $singular Singular label.
	 * @param string  $singular_lower Singular label lower case.
	 * @param string  $plural Plural label.
	 * @param string  $plural_lower Plural label lower case.
	 * @param boolean $is_female Is female label.
	 * @return array
	 */
	protected static function get_defaults( $singular, $singular_lower, $plural, $plural_lower, $is_female = false ) {
		return [
			'name'              => $plural,
			'singular_name'     => $singular,
			'menu_name'         => $plural,
			/* translators: %s label plural lower. */
			'all_items'         => sprintf( _n( 'Todas %s', 'Todos %s', $is_female, 'wpsteak' ), $plural_lower ),
			/* translators: %s label singular lower. */
			'edit_item'         => sprintf( __( 'Editar %s', 'wpsteak' ), $singular_lower ),
			/* translators: %s label singular lower. */
			'view_item'         => sprintf( __( 'Ver %s', 'wpsteak' ), $singular_lower ),
			/* translators: %s label singular lower. */
			'add_new_item'      => sprintf( _n( 'Adicionar nova %s', 'Adicionar novo %s', $is_female, 'wpsteak' ), $singular_lower ),
			/* translators: %s label singular. */
			'parent_item_colon' => sprintf( __( '%s pai:', 'wpsteak' ), $singular ),
			/* translators: %s label plural lower. */
			'search_items'      => sprintf( __( 'Buscar %s', 'wpsteak' ), $plural_lower ),
			/* translators: %s label singular lower. */
			'not_found'         => sprintf( _n( 'Nenhuma %s encontrada.', 'Nenhum %s encontrado.', $is_female, 'wpsteak' ), $singular_lower ),
		];
	}
}