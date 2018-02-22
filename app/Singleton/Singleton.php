***REMOVED***

namespace PHPatterns\Singleton;

abstract class Singleton
***REMOVED***

    private static $instance;

    /**
     *
     */
    public static function getInstance() ***REMOVED***
        if(!isset(self::$instance))
            self::$instance = new static;
        return self::$instance;
***REMOVED***

    private function __construct() ***REMOVED***

***REMOVED***

***REMOVED***
