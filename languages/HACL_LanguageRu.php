<?php

/**
 * Copyright 2013+, Vitaliy Filippov <vitalif[d.o.g]mail.ru>
 *                  Stas Fomin <stas.fomin[d.o.g]yandex.ru>
 * This file is part of IntraACL MediaWiki extension. License: GPLv3.
 * Homepage: http://wiki.4intra.net/IntraACL
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if (!defined('MEDIAWIKI')) die();

// Russian language labels for important IntraACL labels (namespaces, ,...)

class HACLLanguageRu extends HACLLanguage
{
    public $mPermissionDeniedPage = 'Доступ запрещён';

    // Only for compatibility!
    // From now all ACL title prefixes are always english.
    // (because they're stored as-is in the DB, and won't survive $wgContLang change otherwise)
    public $mPetAliases = array('категория' => IACL::PE_CATEGORY);
}
