## REST Interface

The API uses a REST-like interface. This means that our API method calls are made over the internet by sending HTTP GET or POST requests to the vBulletin API REST server http://www.yourforumcorebaseurl.com/api.php. Nearly any computer language can be used to communicate over HTTP with the REST server.

Note that api.php is located at your vBulletin core URL, not in the presentation layer.

### API Method Names and Legacy Actions Mapping

Each API method can be mapped to an action of a vB Web API.

Method Name: *&lt;classname&gt;.&lt;functionname&gt;*</tt>

is mapped to Web API: *vB_Api_Classname::functionname()*</tt>.

Eg.: *[[VB5_API:node.getNode|node.getNode]]*</tt>
is mapped to Web API: *vB_Api_Node::getNode()*</tt>.

*[[VB5_API:user.login|user.login]]*</tt> is mapped to Web API: *vB_Api_User::login()*</tt>.

### API Method Parameters

An API Method may accept two types of parameters: *GET* and *POST*. GET parameters should be passed via HTTP GET; POST parameters should be passed via HTTP POST. Both GET and POST parameters will be merged and used as the API parameters.

For example, the definition of *vB_Api_User::fetchUserinfo()*</tt> is

  public function fetchUserinfo($userid = false, $option = array(), $languageid = 0, $nocache = false)

If you pass GET['userid'] => 1, POST['option'] => array(FetchUserinfoOptions) to *[[VB5_API:user.fetchUserinfo|user.fetchUserinfo]]*</tt>, the following Web API will be called with the parameters:

*vB_Api_User::fetchUserinfo(1, array(FetchUserinfoOptions))*</tt>

Note that the keys 'userid' and 'option' match the parameter names in the API definition.

The parameters which don't match Web API defined parameter names will be ignored.

All parameters should be encoded into *UTF-8* charset.

### API Response

All API methods return *JSON* data to the clients. JSON objects ({}) and arrays ([]) are *all treated as arrays*.

All values are encoded into *Unicode/UTF-8*.

Note, for any response including the "postbits" block, vBulletin 5 may contain additional information related to the new vB5 content types. Please see [[VB5_API_Common_Array:Postbits_Array|this link]] for these additional elements.
