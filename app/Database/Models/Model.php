***REMOVED***

namespace PHPatterns\Database\Models;

use PHPatterns\Contracts\DatabaseContracts\Model as ModelContract;

abstract class Model implements ModelContract
***REMOVED***
    /**
     * 
     */
    public static function find(Int $id) ***REMOVED***
        return $id;
***REMOVED***

    /**
     *
     */
    public static function all() ***REMOVED***
        return "all";
***REMOVED***

    /**
     *
     */
    public static function create(Array $attr) ***REMOVED***
        return $attr;
***REMOVED***

***REMOVED***
