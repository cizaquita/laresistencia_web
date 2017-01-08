<?php
/**
 * @package   	OneAll Social Login
 * @copyright 	Copyright 2013-2015 http://www.oneall.com - All rights reserved.
 * @license   	GNU/GPL 2 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */
if (! defined ('IN_PHPBB'))
{
	exit ();
}

if (empty ($lang) || ! is_array ($lang))
{
	$lang = array ();
}

// Social Login Frontend.
$lang = array_merge ($lang, array (
	'OA_SOCIAL_LOGIN_LINK_UCP' => 'Linkee cuentas de redes sociales',
	'OA_SOCIAL_LOGIN_LINK' => 'Linkee cuentas de redes sociales',
	'OA_SOCIAL_LOGIN_LINK_NETWORKS' => 'Redes Sociales',
	'OA_SOCIAL_LOGIN_LINK_DESC1' => 'En esta página puede conectar sus cuentas de redes sociales a la cuenta del foro.',
	'OA_SOCIAL_LOGIN_LINK_DESC2' => 'Una vez haya conectado alguna cuenta de red social, puede usarla para iniciar sesión.',
	'OA_SOCIAL_LOGIN_LINK_ACTION' => 'Clickee el icono de la red social para Vincular o desvincular.',
	'OA_SOCIAL_LOGIN_ENABLE_SOCIAL_NETWORK' => 'Tienes que activar al menos una red social',
	'OA_SOCIAL_LOGIN_ENTER_CREDENTIALS' => 'Algo de las credenciales',
	'OA_SOCIAL_LOGIN_SOCIAL_LINK' => 'Servicio Social Link',
	'OA_SOCIAL_LOGIN_ACCOUNT_ALREADY_LINKED' => 'Esta cuenta de red social está asociada a otro usuario en este foro.',
	'OA_SOCIAL_LOGIN_ACCOUNT_INACTIVE_OTHER' => 'Cuenta creada!. Sin embargo debe verificar su cuenta<br />Un link de activación ha sido enviado a su email<br />Es <b>importante</b> que revise la carpeta de <b>SPAM</b>',
	'OA_SOCIAL_LOGIN_ACCOUNT_INACTIVE_ADMIN' => 'Cuenta creada!. Sin embargo un administrador debe activar tu cuenta.<br />Será informado por email cuando el administrador haya activado tu cuenta.',
));
