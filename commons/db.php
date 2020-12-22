 <?php
/*function getDBConnexion(){
	$servername = "sql25.phpnet.org";
//	$username = "dbRmSWTmRt";
//	$password = "XPIfvcfHz7";
//	$db = "dbRmSWTmRt";
	$username = "ewz65462";
	$password = "gvbgCHiIcqqA";
	$db = "ewz65462";

	$conn = apc_fetch('conn');
	if($conn == null){
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password,array(
						PDO::ATTR_PERSISTENT => true
					));
			apc_add ("conn",$conn);
	//		$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
	//		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			die("Could not connect to the database $dbname :" . $e->getMessage());
		}
	}else{
		$conn = apc_fetch('conn');
	}
	return $conn;
}*/

// General singleton class.
class DBConnexion {
  //Params 
//  private static $servername = "sql25.phpnet.org";
//  private static $username = "ewz65462";
//  private static $password = "gvbgCHiIcqqA";
//  private static $db = "ewz65462";
	
/*  private static $servername = "sql25.phpnet.org";
  private static $username = "ewz65463";
  private static $password = "7if83d09hrwD";
  private static $db = "ewz65463";
*/

  private static $servername = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $db = "monitoring";

  // Hold the class instance.
  private static $instance = null;
  
  // The constructor is private
  // to prevent initiation with outer code.
  private function __construct()
  {
	try {
		self::$instance = new PDO("mysql:host=".self::$servername.";dbname=".self::$db, 
							self::$username, 
							self::$password
							//array(PDO::ATTR_PERSISTENT => true)
						);
		//$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "FAILED ".$e->getMessage();
		die("Could not connect to the database $dbname :" . $e->getMessage());
	}
  }
 
  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      new DBConnexion();
    }
    
    return self::$instance;
  }
}
 

?> 