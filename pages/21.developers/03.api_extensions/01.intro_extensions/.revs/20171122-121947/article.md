[toc]

## What is an extension class?
An extension is a class that extends the current API classes, it can contain new methods, or methods that extend the existing original API method. In the case of extending existing methods, the original API function is the last function called. An extension may elect to short circuit further calls on error, or to do extension specific behavior.



## How to add an Extension
In order to create and add a new extension you need to create a folder (if it doesn't already exist) with the base API name (e.g. "route"). Inside this folder create a file with the extension name (e.g. "test1.php"). test1.php then needs to define the extension class and the methods within it.
The extension class needs to follow the naming convention (e.g. vB_Api_Extension_Route_Test1) where Route corresponds to the base API and Test1 to the extension file name. The class must extend vB_Api_Extension.

You can specify the order of execution of the extension by setting the protected property extensionOrder (see example below). Extensions will be executed in ascending order, by default you shold use the value 10.

The extension class only needs to define the methods that it wants to modify. If a method is not defined in an extension class, vB just skips onto the next one.
The extension class method is responsible of calling the next instance of the method (which could be another extension or the original API class. In order to do this, it must use the vB_Api_Extension helper method callNext(__METHOD__, $args) where $args is the arguments array and can be created using func_get_args(). This helper will call the next extension or the original API method and return its response. If an extension fails to use this helper, it will be the only instance of that method called, no further extensions (or the original !) will get called. This is important to remember.

## Example

```
<?php 
/** vb/api/extensions/user/test4.php **/

class vB_Api_Extensions_User_Test4 extends vB_Api_Extensions
{
	protected $extensionOrder = 9;

	/* Extend existing fetchUserName */ 
	public function fetchUserName($userid)
	{ 
		$something = 'Hello World';

		/* Do stuff here */

		$args = func_get_args(); 
		$this->callNext(__METHOD__, $args);

		return $something; 
	}

	/* Brand New Method */ 
	public function fetchMyUserName() 
	{ 
		$something = 'Good News Everyone';

		/* Optional, Not needed if you are
		sure this will unique to your extension. */
		//$args = func_get_args(); 
		//$this->callNext(__METHOD__, $args);

		return $something; 
	} 
}
```