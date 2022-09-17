<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sammy\Packs\Singular
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace Sammy\Packs\Singular {
  /**
   * Make sure the module base internal class is not
   * declared in the php global scope defore creating
   * it.
   * It ensures that the script flux is not interrupted
   * when trying to run the current command by the cli
   * API.
   */
  if (!trait_exists ('Sammy\Packs\Singular\ParticularCase')) {
  /**
   * @trait ParticularCase
   * Base internal trait for the
   * Singular module.
   * -
   * This is (in the ils environment)
   * an instance of the php module,
   * wich should contain the module
   * core functionalities that should
   * be extended.
   * -
   * For extending the module, just create
   * an 'exts' directory in the module directory
   * and boot it by using the ils directory boot.
   * -
   */
  trait ParticularCase {
    /**
     * @method array ParticalCases
     *
     */
    public static function ParticularCases () {
      $particularCasesList = array (
        'teeth' => 'tooth',
        'feet' => 'foot',
        'geese' => 'goose',
        'men' => 'man',
        'women' => 'woman',
        'oxen' => 'ox',
        'children' => 'child',
        'brethren' => 'brother',
        'sheep' => 'sheep',
        'deer' => 'deer',
        'swine' => 'swine',
        'fish' => 'fish',
        'trout' => 'trout',
        'salmon' => 'salmon',
        'data' => 'datum',
        'phenomena' => 'phenomenon',
        'termini' => 'terminus',
        'criteria' => 'criterion',
        'formulae' => 'formula',
        'beaux' => 'beau',
        'bureaux' => 'bureau',
        'memoranda' => 'memorandum',
        'appendices' =>'appendix'
      );

      $particularCases = preg_split ( '/\s+/',
        'piano photo solo proof roof ' .
        'chief cliff grief gulf ' .
        'safe dwarf reef'
      );

      $particularCasesCount = count ($particularCases);

      for ($i = 0 ; $i < $particularCasesCount; $i++ ) {
        $particularCasesList [$particularCases [$i] . 's'] = (
          $particularCases [$i]
        );
      }

      return $particularCasesList;
    }

    /**
     * @method boolean IsParticularCase
     *
     */
    public static function IsParticularCase (string $string) {
      $particularCases = self::ParticularCases ();

      $string = trim ($string);

      $isParticularCase = ( boolean ) (
        is_array ($particularCases) &&
        isset ($particularCases [ strtolower ($string) ])
      );

      return !$isParticularCase ? false : (
        $particularCases [ strtolower ($string) ]
      );
    }
  }}
}
