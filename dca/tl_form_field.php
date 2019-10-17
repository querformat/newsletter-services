<?php

/**
 * Contao Open Source CMS
 *
 * @package   querformat/newsletter-services
 * @author    Enrico Schiller
 * @license   GPL-3.0+
 * @copyright querformat GmbH & Co. KG
 */
$newPalette = '{newsletterservice_legend},cleverelementsId;{fconfig_legend}';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['text'] = str_replace('{fconfig_legend}', $newPalette, $GLOBALS['TL_DCA']['tl_form_field']['palettes']['text']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea'] = str_replace('{fconfig_legend}', $newPalette, $GLOBALS['TL_DCA']['tl_form_field']['palettes']['textarea']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['hidden'] = str_replace('{fconfig_legend}', $newPalette, $GLOBALS['TL_DCA']['tl_form_field']['palettes']['hidden']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox'] = str_replace('{fconfig_legend}', $newPalette, $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] = str_replace('{fconfig_legend}', $newPalette, $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select']);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['cleverelementsId'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_form_field']['cleverelementsId'],
    'exclude' => true,
    'search' => true,
    'inputType' => 'text',
    'eval' => array('maxlength' => 64),
    'sql' => "varchar(64) NOT NULL default ''"
);