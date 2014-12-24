<?php
namespace Illuminate\blog\Http\Controllers;

use Illuminate\Support\Facades\Facade;

  /**
 * This is the comment repository facade class.
 *
 * @author    lianwenjun<lianwenjun@ltbl.cn>
 */
class Articles extends Facade {

 /**
  * Get the registered name of the component.
  *
  * @return string
  */
  protected static function getFacadeAccessor() {
    return 'articles';
  }
}

