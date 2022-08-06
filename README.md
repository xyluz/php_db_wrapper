# php_db_wrapper

Extend this class in all classes that use database.
use $this->getLink() in the Constructor.
use $this->connected() to test Cconnection.
Remember to remove $this->connected after checking connection.

example:
  class example extends Database{
    public function __construct(){
          $this->getLink();
          $this->connected();
      }
  }