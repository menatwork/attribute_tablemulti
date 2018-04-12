<?php

/**
 * This file is part of MetaModels/attribute_tablemulti.
 *
 * (c) 2012-2018 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeTableMulti
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Maack <david.maack@arcor.de>
 * @author     David Greminger <david.greminger@1up.io>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @author     Andreas Dziemba <adziemba@web.de>
 * @copyright  2012-2018 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_tablemulti/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_rendersetting']['metapalettes']['tablemulti extends default'] = array
(
    '+advanced' => array('tablemulti_hide_tablehead'),
);


$GLOBALS['TL_DCA']['tl_metamodel_rendersetting']['fields']['tablemulti_hide_tablehead'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_rendersetting']['tablemulti_hide_tablehead'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array
    (
        'tl_class' => 'clr w50'
    ),
    'sql'       => "varchar(1) NOT NULL default '0'",
);
