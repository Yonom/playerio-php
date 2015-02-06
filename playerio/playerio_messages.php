<?php
class ValueObject extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBEnum";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "PBSignedInt";
        $this->values["4"] = "";
        $this->fields["5"] = "PBInt";
        $this->values["5"] = "";
        $this->fields["6"] = "PBBool";
        $this->values["6"] = "";
        $this->fields["7"] = "float";
        $this->values["7"] = "";
        $this->fields["8"] = "double";
        $this->values["8"] = "";
        $this->fields["9"] = "PBString";
        $this->values["9"] = "";
        $this->fields["10"] = "PBInt";
        $this->values["10"] = "";
        $this->fields["11"] = "ArrayProperty";
        $this->values["11"] = array();
        $this->fields["12"] = "ObjectProperty";
        $this->values["12"] = array();
    }
    function valueType()
    {
        return $this->_get_value("1");
    }
    function set_valueType($value)
    {
        return $this->_set_value("1", $value);
    }
    function string()
    {
        return $this->_get_value("2");
    }
    function set_string($value)
    {
        return $this->_set_value("2", $value);
    }
    function int32()
    {
        return $this->_get_value("3");
    }
    function set_int32($value)
    {
        return $this->_set_value("3", $value);
    }
    function uInt()
    {
        return $this->_get_value("4");
    }
    function set_uInt($value)
    {
        return $this->_set_value("4", $value);
    }
    function long()
    {
        return $this->_get_value("5");
    }
    function set_long($value)
    {
        return $this->_set_value("5", $value);
    }
    function bool()
    {
        return $this->_get_value("6");
    }
    function set_bool($value)
    {
        return $this->_set_value("6", $value);
    }
    function float()
    {
        return $this->_get_value("7");
    }
    function set_float($value)
    {
        return $this->_set_value("7", $value);
    }
    function double()
    {
        return $this->_get_value("8");
    }
    function set_double($value)
    {
        return $this->_set_value("8", $value);
    }
    function byteArray()
    {
        return $this->_get_value("9");
    }
    function set_byteArray($value)
    {
        return $this->_set_value("9", $value);
    }
    function dateTime()
    {
        return $this->_get_value("10");
    }
    function set_dateTime($value)
    {
        return $this->_set_value("10", $value);
    }
    function arrayProperties($offset)
    {
        return $this->_get_arr_value("11", $offset);
    }
    function add_arrayProperties()
    {
        return $this->_add_arr_value("11");
    }
    function set_arrayProperties($index, $value)
    {
        $this->_set_arr_value("11", $index, $value);
    }
    function remove_last_arrayProperties()
    {
        $this->_remove_last_arr_value("11");
    }
    function arrayProperties_size()
    {
        return $this->_get_arr_size("11");
    }
    function objectProperties($offset)
    {
        return $this->_get_arr_value("12", $offset);
    }
    function add_objectProperties()
    {
        return $this->_add_arr_value("12");
    }
    function set_objectProperties($index, $value)
    {
        $this->_set_arr_value("12", $index, $value);
    }
    function remove_last_objectProperties()
    {
        $this->_remove_last_arr_value("12");
    }
    function objectProperties_size()
    {
        return $this->_get_arr_size("12");
    }
}
class ObjectProperty extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "ValueObject";
        $this->values["2"] = "";
    }
    function name()
    {
        return $this->_get_value("1");
    }
    function set_name($value)
    {
        return $this->_set_value("1", $value);
    }
    function value()
    {
        return $this->_get_value("2");
    }
    function set_value($value)
    {
        return $this->_set_value("2", $value);
    }
}
class ArrayProperty extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "ValueObject";
        $this->values["2"] = "";
    }
    function index()
    {
        return $this->_get_value("1");
    }
    function set_index($value)
    {
        return $this->_set_value("1", $value);
    }
    function value()
    {
        return $this->_get_value("2");
    }
    function set_value($value)
    {
        return $this->_set_value("2", $value);
    }
}
class BigDBChangeset extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "ObjectProperty";
        $this->values["4"] = array();
        $this->fields["5"] = "PBBool";
        $this->values["5"] = "";
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function key()
    {
        return $this->_get_value("2");
    }
    function set_key($value)
    {
        return $this->_set_value("2", $value);
    }
    function onlyIfVersion()
    {
        return $this->_get_value("3");
    }
    function set_onlyIfVersion($value)
    {
        return $this->_set_value("3", $value);
    }
    function changes($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_changes()
    {
        return $this->_add_arr_value("4");
    }
    function set_changes($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_changes()
    {
        $this->_remove_last_arr_value("4");
    }
    function changes_size()
    {
        return $this->_get_arr_size("4");
    }
    function fullOverwrite()
    {
        return $this->_get_value("5");
    }
    function set_fullOverwrite($value)
    {
        return $this->_set_value("5", $value);
    }
}
class BigDBObject extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ObjectProperty";
        $this->values["3"] = array();
        $this->fields["4"] = "PBSignedInt";
        $this->values["4"] = "";
    }
    function key()
    {
        return $this->_get_value("1");
    }
    function set_key($value)
    {
        return $this->_set_value("1", $value);
    }
    function version()
    {
        return $this->_get_value("2");
    }
    function set_version($value)
    {
        return $this->_set_value("2", $value);
    }
    function properties($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_properties()
    {
        return $this->_add_arr_value("3");
    }
    function set_properties($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_properties()
    {
        $this->_remove_last_arr_value("3");
    }
    function properties_size()
    {
        return $this->_get_arr_size("3");
    }
    function creator()
    {
        return $this->_get_value("4");
    }
    function set_creator($value)
    {
        return $this->_set_value("4", $value);
    }
}
class BigDBObjectId extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = array();
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function keys($offset)
    {
        $v = $this->_get_arr_value("2", $offset);
        return $v->get_value();
    }
    function append_keys($value)
    {
        $v = $this->_add_arr_value("2");
        $v->set_value($value);
    }
    function set_keys($index, $value)
    {
        $v = new $this->fields["2"]();
        $v->set_value($value);
        $this->_set_arr_value("2", $index, $v);
    }
    function remove_last_keys()
    {
        $this->_remove_last_arr_value("2");
    }
    function keys_size()
    {
        return $this->_get_arr_size("2");
    }
}
class ConnectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = array();
        $this->fields["7"] = "PBString";
        $this->values["7"] = "";
        $this->fields["8"] = "KeyValuePair";
        $this->values["8"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function connectionId()
    {
        return $this->_get_value("2");
    }
    function set_connectionId($value)
    {
        return $this->_set_value("2", $value);
    }
    function userId()
    {
        return $this->_get_value("3");
    }
    function set_userId($value)
    {
        return $this->_set_value("3", $value);
    }
    function auth()
    {
        return $this->_get_value("4");
    }
    function set_auth($value)
    {
        return $this->_set_value("4", $value);
    }
    function partnerId()
    {
        return $this->_get_value("5");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("5", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("6", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("6");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["6"]();
        $v->set_value($value);
        $this->_set_arr_value("6", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("6");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("6");
    }
    function clientAPI()
    {
        return $this->_get_value("7");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("7", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("8", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("8");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("8", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("8");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("8");
    }
}
class ConnectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class ConnectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PlayerInsightState";
        $this->values["6"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function partnerId()
    {
        return $this->_get_value("5");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("5", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("6");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("6", $value);
    }
}
class CreateJoinRoomArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "KeyValuePair";
        $this->values["4"] = array();
        $this->fields["5"] = "KeyValuePair";
        $this->values["5"] = array();
        $this->fields["6"] = "PBBool";
        $this->values["6"] = "";
    }
    function roomId()
    {
        return $this->_get_value("1");
    }
    function set_roomId($value)
    {
        return $this->_set_value("1", $value);
    }
    function roomType()
    {
        return $this->_get_value("2");
    }
    function set_roomType($value)
    {
        return $this->_set_value("2", $value);
    }
    function visible()
    {
        return $this->_get_value("3");
    }
    function set_visible($value)
    {
        return $this->_set_value("3", $value);
    }
    function roomData($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_roomData()
    {
        return $this->_add_arr_value("4");
    }
    function set_roomData($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_roomData()
    {
        $this->_remove_last_arr_value("4");
    }
    function roomData_size()
    {
        return $this->_get_arr_size("4");
    }
    function joinData($offset)
    {
        return $this->_get_arr_value("5", $offset);
    }
    function add_joinData()
    {
        return $this->_add_arr_value("5");
    }
    function set_joinData($index, $value)
    {
        $this->_set_arr_value("5", $index, $value);
    }
    function remove_last_joinData()
    {
        $this->_remove_last_arr_value("5");
    }
    function joinData_size()
    {
        return $this->_get_arr_size("5");
    }
    function isDevRoom()
    {
        return $this->_get_value("6");
    }
    function set_isDevRoom($value)
    {
        return $this->_set_value("6", $value);
    }
}
class CreateJoinRoomError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class CreateJoinRoomOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ServerEndpoint";
        $this->values["3"] = array();
    }
    function roomId()
    {
        return $this->_get_value("1");
    }
    function set_roomId($value)
    {
        return $this->_set_value("1", $value);
    }
    function joinKey()
    {
        return $this->_get_value("2");
    }
    function set_joinKey($value)
    {
        return $this->_set_value("2", $value);
    }
    function endpoints($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_endpoints()
    {
        return $this->_add_arr_value("3");
    }
    function set_endpoints($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_endpoints()
    {
        $this->_remove_last_arr_value("3");
    }
    function endpoints_size()
    {
        return $this->_get_arr_size("3");
    }
}
class CreateObjectsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "NewBigDBObject";
        $this->values["1"] = array();
        $this->fields["2"] = "PBBool";
        $this->values["2"] = "";
    }
    function objects($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_objects()
    {
        return $this->_add_arr_value("1");
    }
    function set_objects($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objects()
    {
        $this->_remove_last_arr_value("1");
    }
    function objects_size()
    {
        return $this->_get_arr_size("1");
    }
    function loadExisting()
    {
        return $this->_get_value("2");
    }
    function set_loadExisting($value)
    {
        return $this->_set_value("2", $value);
    }
}
class CreateObjectsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class CreateObjectsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObject";
        $this->values["1"] = array();
    }
    function objects_array()
    {
        return $this->_get_value("1");
    }
    function objects($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_objects()
    {
        return $this->_add_arr_value("1");
    }
    function set_objects($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objects()
    {
        $this->_remove_last_arr_value("1");
    }
    function objects_size()
    {
        return $this->_get_arr_size("1");
    }
}
class CreateRoomArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "KeyValuePair";
        $this->values["4"] = array();
        $this->fields["5"] = "PBBool";
        $this->values["5"] = "";
    }
    function roomId()
    {
        return $this->_get_value("1");
    }
    function set_roomId($value)
    {
        return $this->_set_value("1", $value);
    }
    function roomType()
    {
        return $this->_get_value("2");
    }
    function set_roomType($value)
    {
        return $this->_set_value("2", $value);
    }
    function visible()
    {
        return $this->_get_value("3");
    }
    function set_visible($value)
    {
        return $this->_set_value("3", $value);
    }
    function roomData($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_roomData()
    {
        return $this->_add_arr_value("4");
    }
    function set_roomData($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_roomData()
    {
        $this->_remove_last_arr_value("4");
    }
    function roomData_size()
    {
        return $this->_get_arr_size("4");
    }
    function isDevRoom()
    {
        return $this->_get_value("5");
    }
    function set_isDevRoom($value)
    {
        return $this->_set_value("5", $value);
    }
}
class CreateRoomError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class CreateRoomOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
    }
    function roomId()
    {
        return $this->_get_value("1");
    }
    function set_roomId($value)
    {
        return $this->_set_value("1", $value);
    }
}
class DeleteIndexRangeArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ValueObject";
        $this->values["3"] = array();
        $this->fields["4"] = "ValueObject";
        $this->values["4"] = array();
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function index()
    {
        return $this->_get_value("2");
    }
    function set_index($value)
    {
        return $this->_set_value("2", $value);
    }
    function startIndexValue($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_startIndexValue()
    {
        return $this->_add_arr_value("3");
    }
    function set_startIndexValue($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_startIndexValue()
    {
        $this->_remove_last_arr_value("3");
    }
    function startIndexValue_size()
    {
        return $this->_get_arr_size("3");
    }
    function stopIndexValue($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_stopIndexValue()
    {
        return $this->_add_arr_value("4");
    }
    function set_stopIndexValue($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_stopIndexValue()
    {
        $this->_remove_last_arr_value("4");
    }
    function stopIndexValue_size()
    {
        return $this->_get_arr_size("4");
    }
}
class DeleteIndexRangeError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class DeleteObjectsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObjectId";
        $this->values["1"] = array();
    }
    function objectIds($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_objectIds()
    {
        return $this->_add_arr_value("1");
    }
    function set_objectIds($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objectIds()
    {
        $this->_remove_last_arr_value("1");
    }
    function objectIds_size()
    {
        return $this->_get_arr_size("1");
    }
}
class DeleteObjectsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class FacebookOAuthConnectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = array();
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "KeyValuePair";
        $this->values["6"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function accessToken()
    {
        return $this->_get_value("2");
    }
    function set_accessToken($value)
    {
        return $this->_set_value("2", $value);
    }
    function partnerId()
    {
        return $this->_get_value("3");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("3", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("4", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("4");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["4"]();
        $v->set_value($value);
        $this->_set_arr_value("4", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("4");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("4");
    }
    function clientAPI()
    {
        return $this->_get_value("5");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("5", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("6", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("6");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("6", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("6");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("6");
    }
}
class FacebookOAuthConnectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class FacebookOAuthConnectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = "";
        $this->fields["7"] = "PlayerInsightState";
        $this->values["7"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function facebookUserId()
    {
        return $this->_get_value("5");
    }
    function set_facebookUserId($value)
    {
        return $this->_set_value("5", $value);
    }
    function partnerId()
    {
        return $this->_get_value("6");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("6", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("7");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("7", $value);
    }
}
class JoinRoomArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "KeyValuePair";
        $this->values["2"] = array();
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
    }
    function roomId()
    {
        return $this->_get_value("1");
    }
    function set_roomId($value)
    {
        return $this->_set_value("1", $value);
    }
    function joinData($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_joinData()
    {
        return $this->_add_arr_value("2");
    }
    function set_joinData($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_joinData()
    {
        $this->_remove_last_arr_value("2");
    }
    function joinData_size()
    {
        return $this->_get_arr_size("2");
    }
    function isDevRoom()
    {
        return $this->_get_value("3");
    }
    function set_isDevRoom($value)
    {
        return $this->_set_value("3", $value);
    }
}
class JoinRoomError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class JoinRoomOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "ServerEndpoint";
        $this->values["2"] = array();
    }
    function joinKey()
    {
        return $this->_get_value("1");
    }
    function set_joinKey($value)
    {
        return $this->_set_value("1", $value);
    }
    function endpoints($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_endpoints()
    {
        return $this->_add_arr_value("2");
    }
    function set_endpoints($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_endpoints()
    {
        $this->_remove_last_arr_value("2");
    }
    function endpoints_size()
    {
        return $this->_get_arr_size("2");
    }
}
class KeyValuePair extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function key()
    {
        return $this->_get_value("1");
    }
    function set_key($value)
    {
        return $this->_set_value("1", $value);
    }
    function value()
    {
        return $this->_get_value("2");
    }
    function set_value($value)
    {
        return $this->_set_value("2", $value);
    }
}
class KongregateConnectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = array();
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "KeyValuePair";
        $this->values["6"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function gameAuthToken()
    {
        return $this->_get_value("3");
    }
    function set_gameAuthToken($value)
    {
        return $this->_set_value("3", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("4", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("4");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["4"]();
        $v->set_value($value);
        $this->_set_arr_value("4", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("4");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("4");
    }
    function clientAPI()
    {
        return $this->_get_value("5");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("5", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("6", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("6");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("6", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("6");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("6");
    }
}
class KongregateConnectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class KongregateConnectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PlayerInsightState";
        $this->values["5"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("5");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("5", $value);
    }
}
class ListRoomsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "KeyValuePair";
        $this->values["2"] = array();
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "PBInt";
        $this->values["4"] = "";
        $this->fields["5"] = "PBBool";
        $this->values["5"] = "";
    }
    function roomType()
    {
        return $this->_get_value("1");
    }
    function set_roomType($value)
    {
        return $this->_set_value("1", $value);
    }
    function searchCriteria($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_searchCriteria()
    {
        return $this->_add_arr_value("2");
    }
    function set_searchCriteria($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_searchCriteria()
    {
        $this->_remove_last_arr_value("2");
    }
    function searchCriteria_size()
    {
        return $this->_get_arr_size("2");
    }
    function resultLimit()
    {
        return $this->_get_value("3");
    }
    function set_resultLimit($value)
    {
        return $this->_set_value("3", $value);
    }
    function resultOffset()
    {
        return $this->_get_value("4");
    }
    function set_resultOffset($value)
    {
        return $this->_set_value("4", $value);
    }
    function onlyDevRooms()
    {
        return $this->_get_value("5");
    }
    function set_onlyDevRooms($value)
    {
        return $this->_set_value("5", $value);
    }
}
class ListRoomsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class ListRoomsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "RoomInfo";
        $this->values["1"] = array();
    }
    function rooms($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_rooms()
    {
        return $this->_add_arr_value("1");
    }
    function set_rooms($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_rooms()
    {
        $this->_remove_last_arr_value("1");
    }
    function rooms_size()
    {
        return $this->_get_arr_size("1");
    }
}
class LoadIndexRangeArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ValueObject";
        $this->values["3"] = array();
        $this->fields["4"] = "ValueObject";
        $this->values["4"] = array();
        $this->fields["5"] = "PBInt";
        $this->values["5"] = "";
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function index()
    {
        return $this->_get_value("2");
    }
    function set_index($value)
    {
        return $this->_set_value("2", $value);
    }
    function startIndexValue($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_startIndexValue()
    {
        return $this->_add_arr_value("3");
    }
    function set_startIndexValue($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_startIndexValue()
    {
        $this->_remove_last_arr_value("3");
    }
    function startIndexValue_size()
    {
        return $this->_get_arr_size("3");
    }
    function stopIndexValue($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_stopIndexValue()
    {
        return $this->_add_arr_value("4");
    }
    function set_stopIndexValue($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_stopIndexValue()
    {
        $this->_remove_last_arr_value("4");
    }
    function stopIndexValue_size()
    {
        return $this->_get_arr_size("4");
    }
    function limit()
    {
        return $this->_get_value("5");
    }
    function set_limit($value)
    {
        return $this->_set_value("5", $value);
    }
}
class LoadIndexRangeError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class LoadIndexRangeOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObject";
        $this->values["1"] = array();
    }
    function objects($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function objects_array()
    {
        return $this->_get_value("1");
    }
    function add_objects()
    {
        return $this->_add_arr_value("1");
    }
    function set_objects($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objects()
    {
        $this->_remove_last_arr_value("1");
    }
    function objects_size()
    {
        return $this->_get_arr_size("1");
    }
}
class LoadMatchingObjectsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ValueObject";
        $this->values["3"] = array();
        $this->fields["4"] = "PBInt";
        $this->values["4"] = "";
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function index()
    {
        return $this->_get_value("2");
    }
    function set_index($value)
    {
        return $this->_set_value("2", $value);
    }
    function indexValue($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_indexValue()
    {
        return $this->_add_arr_value("3");
    }
    function set_indexValue($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_indexValue()
    {
        $this->_remove_last_arr_value("3");
    }
    function indexValue_size()
    {
        return $this->_get_arr_size("3");
    }
    function limit()
    {
        return $this->_get_value("4");
    }
    function set_limit($value)
    {
        return $this->_set_value("4", $value);
    }
}
class LoadMatchingObjectsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class LoadMatchingObjectsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObject";
        $this->values["1"] = array();
    }
    function objects($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function objects_array()
    {
        return $this->_get_value("1");
    }
    function add_objects()
    {
        return $this->_add_arr_value("1");
    }
    function set_objects($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objects()
    {
        $this->_remove_last_arr_value("1");
    }
    function objects_size()
    {
        return $this->_get_arr_size("1");
    }
}
class LoadMyPlayerObjectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class LoadMyPlayerObjectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObject";
        $this->values["1"] = "";
    }
    function playerObject()
    {
        return $this->_get_value("1");
    }
    function set_playerObject($value)
    {
        return $this->_set_value("1", $value);
    }
}
class LoadObjectsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObjectId";
        $this->values["1"] = array();
    }
    function objectIds($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_objectIds()
    {
        return $this->_add_arr_value("1");
    }
    function set_objectIds($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objectIds()
    {
        $this->_remove_last_arr_value("1");
    }
    function objectIds_size()
    {
        return $this->_get_arr_size("1");
    }
}
class LoadObjectsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class LoadObjectsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "BigDBObject";
        $this->values["1"] = array();
    }
    function objects($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function objects_array()
    {
        return $this->values["1"];
    }
    function add_objects()
    {
        return $this->_add_arr_value("1");
    }
    function set_objects($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_objects()
    {
        $this->_remove_last_arr_value("1");
    }
    function objects_size()
    {
        return $this->_get_arr_size("1");
    }
}
class NewBigDBObject extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "ObjectProperty";
        $this->values["3"] = array();
    }
    function table()
    {
        return $this->_get_value("1");
    }
    function set_table($value)
    {
        return $this->_set_value("1", $value);
    }
    function key()
    {
        return $this->_get_value("2");
    }
    function set_key($value)
    {
        return $this->_set_value("2", $value);
    }
    function properties($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_properties()
    {
        return $this->_add_arr_value("3");
    }
    function set_properties($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_properties()
    {
        $this->_remove_last_arr_value("3");
    }
    function properties_size()
    {
        return $this->_get_arr_size("3");
    }
}
class PartnerPaySetTagArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
    }
    function partnerId()
    {
        return $this->_get_value("1");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PartnerPaySetTagError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PartnerPayTriggerArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBSignedInt";
        $this->values["2"] = "";
    }
    function key()
    {
        return $this->_get_value("1");
    }
    function set_key($value)
    {
        return $this->_set_value("1", $value);
    }
    function count()
    {
        return $this->_get_value("2");
    }
    function set_count($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PartnerPayTriggerError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultBuyArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultBuyItemInfo";
        $this->values["1"] = array();
        $this->fields["2"] = "PBBool";
        $this->values["2"] = "";
    }
    function items($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_items()
    {
        return $this->_add_arr_value("1");
    }
    function set_items($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_items()
    {
        $this->_remove_last_arr_value("1");
    }
    function items_size()
    {
        return $this->_get_arr_size("1");
    }
    function storeItems()
    {
        return $this->_get_value("2");
    }
    function set_storeItems($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultBuyError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultBuyItemInfo extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "ObjectProperty";
        $this->values["2"] = array();
    }
    function itemKey()
    {
        return $this->_get_value("1");
    }
    function set_itemKey($value)
    {
        return $this->_set_value("1", $value);
    }
    function payload($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_payload()
    {
        return $this->_add_arr_value("2");
    }
    function set_payload($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_payload()
    {
        $this->_remove_last_arr_value("2");
    }
    function payload_size()
    {
        return $this->_get_arr_size("2");
    }
}
class PayVaultBuyOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultConsumeArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = array();
    }
    function ids($offset)
    {
        $v = $this->_get_arr_value("1", $offset);
        return $v->get_value();
    }
    function append_ids($value)
    {
        $v = $this->_add_arr_value("1");
        $v->set_value($value);
    }
    function set_ids($index, $value)
    {
        $v = new $this->fields["1"]();
        $v->set_value($value);
        $this->_set_arr_value("1", $index, $v);
    }
    function remove_last_ids()
    {
        $this->_remove_last_arr_value("1");
    }
    function ids_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PayVaultConsumeError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultConsumeOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultContents extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBInt";
        $this->values["2"] = "";
        $this->fields["3"] = "PayVaultItem";
        $this->values["3"] = array();
    }
    function version()
    {
        return $this->_get_value("1");
    }
    function set_version($value)
    {
        return $this->_set_value("1", $value);
    }
    function coins()
    {
        return $this->_get_value("2");
    }
    function set_coins($value)
    {
        return $this->_set_value("2", $value);
    }
    function items($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_items()
    {
        return $this->_add_arr_value("3");
    }
    function set_items($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_items()
    {
        $this->_remove_last_arr_value("3");
    }
    function items_size()
    {
        return $this->_get_arr_size("3");
    }
}
class PayVaultCreditArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBSignedInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function amount()
    {
        return $this->_get_value("1");
    }
    function set_amount($value)
    {
        return $this->_set_value("1", $value);
    }
    function reason()
    {
        return $this->_get_value("2");
    }
    function set_reason($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultCreditError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultCreditOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultDebitArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBSignedInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function amount()
    {
        return $this->_get_value("1");
    }
    function set_amount($value)
    {
        return $this->_set_value("1", $value);
    }
    function reason()
    {
        return $this->_get_value("2");
    }
    function set_reason($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultDebitError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultDebitOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultGiveArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultBuyItemInfo";
        $this->values["1"] = array();
    }
    function items($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_items()
    {
        return $this->_add_arr_value("1");
    }
    function set_items($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_items()
    {
        $this->_remove_last_arr_value("1");
    }
    function items_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PayVaultGiveError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultGiveOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultHistoryEntry extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = array();
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = "";
        $this->fields["7"] = "PBString";
        $this->values["7"] = "";
    }
    function amount()
    {
        return $this->_get_value("1");
    }
    function set_amount($value)
    {
        return $this->_set_value("1", $value);
    }
    function type()
    {
        return $this->_get_value("2");
    }
    function set_type($value)
    {
        return $this->_set_value("2", $value);
    }
    function timestamp()
    {
        return $this->_get_value("3");
    }
    function set_timestamp($value)
    {
        return $this->_set_value("3", $value);
    }
    function itemKeys($offset)
    {
        $v = $this->_get_arr_value("4", $offset);
        return $v->get_value();
    }
    function append_itemKeys($value)
    {
        $v = $this->_add_arr_value("4");
        $v->set_value($value);
    }
    function set_itemKeys($index, $value)
    {
        $v = new $this->fields["4"]();
        $v->set_value($value);
        $this->_set_arr_value("4", $index, $v);
    }
    function remove_last_itemKeys()
    {
        $this->_remove_last_arr_value("4");
    }
    function itemKeys_size()
    {
        return $this->_get_arr_size("4");
    }
    function reason()
    {
        return $this->_get_value("5");
    }
    function set_reason($value)
    {
        return $this->_set_value("5", $value);
    }
    function providerTransactionId()
    {
        return $this->_get_value("6");
    }
    function set_providerTransactionId($value)
    {
        return $this->_set_value("6", $value);
    }
    function providerPrice()
    {
        return $this->_get_value("7");
    }
    function set_providerPrice($value)
    {
        return $this->_set_value("7", $value);
    }
}
class PayVaultItem extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "ObjectProperty";
        $this->values["4"] = array();
    }
    function id()
    {
        return $this->_get_value("1");
    }
    function set_id($value)
    {
        return $this->_set_value("1", $value);
    }
    function itemKey()
    {
        return $this->_get_value("2");
    }
    function set_itemKey($value)
    {
        return $this->_set_value("2", $value);
    }
    function purchaseDate()
    {
        return $this->_get_value("3");
    }
    function set_purchaseDate($value)
    {
        return $this->_set_value("3", $value);
    }
    function properties($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_properties()
    {
        return $this->_add_arr_value("4");
    }
    function set_properties($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_properties()
    {
        $this->_remove_last_arr_value("4");
    }
    function properties_size()
    {
        return $this->_get_arr_size("4");
    }
}
class PayVaultPaymentInfoArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "KeyValuePair";
        $this->values["2"] = array();
        $this->fields["3"] = "PayVaultBuyItemInfo";
        $this->values["3"] = array();
    }
    function provider()
    {
        return $this->_get_value("1");
    }
    function set_provider($value)
    {
        return $this->_set_value("1", $value);
    }
    function purchaseArguments($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_purchaseArguments()
    {
        return $this->_add_arr_value("2");
    }
    function set_purchaseArguments($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_purchaseArguments()
    {
        $this->_remove_last_arr_value("2");
    }
    function purchaseArguments_size()
    {
        return $this->_get_arr_size("2");
    }
    function items($offset)
    {
        return $this->_get_arr_value("3", $offset);
    }
    function add_items()
    {
        return $this->_add_arr_value("3");
    }
    function set_items($index, $value)
    {
        $this->_set_arr_value("3", $index, $value);
    }
    function remove_last_items()
    {
        $this->_remove_last_arr_value("3");
    }
    function items_size()
    {
        return $this->_get_arr_size("3");
    }
}
class PayVaultPaymentInfoError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultPaymentInfoOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "KeyValuePair";
        $this->values["1"] = array();
    }
    function providerArguments($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_providerArguments()
    {
        return $this->_add_arr_value("1");
    }
    function set_providerArguments($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_providerArguments()
    {
        $this->_remove_last_arr_value("1");
    }
    function providerArguments_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PayVaultReadHistoryArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBSignedInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBSignedInt";
        $this->values["2"] = "";
    }
    function page()
    {
        return $this->_get_value("1");
    }
    function set_page($value)
    {
        return $this->_set_value("1", $value);
    }
    function pageSize()
    {
        return $this->_get_value("2");
    }
    function set_pageSize($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultReadHistoryError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultReadHistoryOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultHistoryEntry";
        $this->values["1"] = array();
    }
    function entries($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_entries()
    {
        return $this->_add_arr_value("1");
    }
    function set_entries($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_entries()
    {
        $this->_remove_last_arr_value("1");
    }
    function entries_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PayVaultRefreshArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
    }
    function lastVersion()
    {
        return $this->_get_value("1");
    }
    function set_lastVersion($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultRefreshError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultRefreshOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PayVaultContents";
        $this->values["1"] = "";
    }
    function vaultContents()
    {
        return $this->_get_value("1");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PayVaultUsePaymentInfoArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "KeyValuePair";
        $this->values["2"] = array();
    }
    function provider()
    {
        return $this->_get_value("1");
    }
    function set_provider($value)
    {
        return $this->_set_value("1", $value);
    }
    function providerArguments($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_providerArguments()
    {
        return $this->_add_arr_value("2");
    }
    function set_providerArguments($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_providerArguments()
    {
        $this->_remove_last_arr_value("2");
    }
    function providerArguments_size()
    {
        return $this->_get_arr_size("2");
    }
}
class PayVaultUsePaymentInfoError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PayVaultUsePaymentInfoOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "KeyValuePair";
        $this->values["1"] = array();
        $this->fields["2"] = "PayVaultContents";
        $this->values["2"] = "";
    }
    function providerResults($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_providerResults()
    {
        return $this->_add_arr_value("1");
    }
    function set_providerResults($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_providerResults()
    {
        $this->_remove_last_arr_value("1");
    }
    function providerResults_size()
    {
        return $this->_get_arr_size("1");
    }
    function vaultContents()
    {
        return $this->_get_value("2");
    }
    function set_vaultContents($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightEvent extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBInt";
        $this->values["2"] = "";
    }
    function eventType()
    {
        return $this->_get_value("1");
    }
    function set_eventType($value)
    {
        return $this->_set_value("1", $value);
    }
    function value()
    {
        return $this->_get_value("2");
    }
    function set_value($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightRefreshError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightRefreshOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PlayerInsightState";
        $this->values["1"] = "";
    }
    function state()
    {
        return $this->_get_value("1");
    }
    function set_state($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PlayerInsightSetSegmentsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = array();
    }
    function segments($offset)
    {
        $v = $this->_get_arr_value("1", $offset);
        return $v->get_value();
    }
    function append_segments($value)
    {
        $v = $this->_add_arr_value("1");
        $v->set_value($value);
    }
    function set_segments($index, $value)
    {
        $v = new $this->fields["1"]();
        $v->set_value($value);
        $this->_set_arr_value("1", $index, $v);
    }
    function remove_last_segments()
    {
        $this->_remove_last_arr_value("1");
    }
    function segments_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PlayerInsightSetSegmentsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightSetSegmentsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PlayerInsightState";
        $this->values["1"] = "";
    }
    function state()
    {
        return $this->_get_value("1");
    }
    function set_state($value)
    {
        return $this->_set_value("1", $value);
    }
}
class PlayerInsightState extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "KeyValuePair";
        $this->values["2"] = array();
    }
    function playersOnline()
    {
        return $this->_get_value("1");
    }
    function set_playersOnline($value)
    {
        return $this->_set_value("1", $value);
    }
    function segments($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_segments()
    {
        return $this->_add_arr_value("2");
    }
    function set_segments($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_segments()
    {
        $this->_remove_last_arr_value("2");
    }
    function segments_size()
    {
        return $this->_get_arr_size("2");
    }
}
class PlayerInsightTrackEventsArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PlayerInsightEvent";
        $this->values["1"] = array();
    }
    function events($offset)
    {
        return $this->_get_arr_value("1", $offset);
    }
    function add_events()
    {
        return $this->_add_arr_value("1");
    }
    function set_events($index, $value)
    {
        $this->_set_arr_value("1", $index, $value);
    }
    function remove_last_events()
    {
        $this->_remove_last_arr_value("1");
    }
    function events_size()
    {
        return $this->_get_arr_size("1");
    }
}
class PlayerInsightTrackEventsError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightTrackExternalPaymentArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBInt";
        $this->values["2"] = "";
    }
    function currency()
    {
        return $this->_get_value("1");
    }
    function set_currency($value)
    {
        return $this->_set_value("1", $value);
    }
    function amount()
    {
        return $this->_get_value("2");
    }
    function set_amount($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightTrackExternalPaymentError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightTrackInvitedByArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function invitingUserId()
    {
        return $this->_get_value("1");
    }
    function set_invitingUserId($value)
    {
        return $this->_set_value("1", $value);
    }
    function invitationChannel()
    {
        return $this->_get_value("2");
    }
    function set_invitationChannel($value)
    {
        return $this->_set_value("2", $value);
    }
}
class PlayerInsightTrackInvitedByError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class RoomInfo extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
        $this->fields["4"] = "KeyValuePair";
        $this->values["4"] = array();
    }
    function id()
    {
        return $this->_get_value("1");
    }
    function set_id($value)
    {
        return $this->_set_value("1", $value);
    }
    function roomType()
    {
        return $this->_get_value("2");
    }
    function set_roomType($value)
    {
        return $this->_set_value("2", $value);
    }
    function onlineUsers()
    {
        return $this->_get_value("3");
    }
    function set_onlineUsers($value)
    {
        return $this->_set_value("3", $value);
    }
    function roomData($offset)
    {
        return $this->_get_arr_value("4", $offset);
    }
    function add_roomData()
    {
        return $this->_add_arr_value("4");
    }
    function set_roomData($index, $value)
    {
        $this->_set_arr_value("4", $index, $value);
    }
    function remove_last_roomData()
    {
        $this->_remove_last_arr_value("4");
    }
    function roomData_size()
    {
        return $this->_get_arr_size("4");
    }
}
class SaveObjectChangesArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBEnum";
        $this->values["1"] = "";
        $this->fields["2"] = "BigDBChangeset";
        $this->values["2"] = array();
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
    }
    function lockType()
    {
        return $this->_get_value("1");
    }
    function set_lockType($value)
    {
        return $this->_set_value("1", $value);
    }
    function changesets($offset)
    {
        return $this->_get_arr_value("2", $offset);
    }
    function add_changesets()
    {
        return $this->_add_arr_value("2");
    }
    function set_changesets($index, $value)
    {
        $this->_set_arr_value("2", $index, $value);
    }
    function remove_last_changesets()
    {
        $this->_remove_last_arr_value("2");
    }
    function changesets_size()
    {
        return $this->_get_arr_size("2");
    }
    function createIfMissing()
    {
        return $this->_get_value("3");
    }
    function set_createIfMissing($value)
    {
        return $this->_set_value("3", $value);
    }
}
class SaveObjectChangesError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SaveObjectChangesOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = array();
    }
    function versions($offset)
    {
        $v = $this->_get_arr_value("1", $offset);
        return $v->get_value();
    }
    function versions_array()
    {
        return $this->_get_value("1");
    }
    function append_versions($value)
    {
        $v = $this->_add_arr_value("1");
        $v->set_value($value);
    }
    function set_versions($index, $value)
    {
        $v = new $this->fields["1"]();
        $v->set_value($value);
        $this->_set_arr_value("1", $index, $v);
    }
    function remove_last_versions()
    {
        $this->_remove_last_arr_value("1");
    }
    function versions_size()
    {
        return $this->_get_arr_size("1");
    }
}
class ServerEndpoint extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBInt";
        $this->values["2"] = "";
    }
    function address()
    {
        return $this->_get_value("1");
    }
    function set_address($value)
    {
        return $this->_set_value("1", $value);
    }
    function port()
    {
        return $this->_get_value("2");
    }
    function set_port($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleConnectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = array();
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "KeyValuePair";
        $this->values["6"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function usernameOrEmail()
    {
        return $this->_get_value("2");
    }
    function set_usernameOrEmail($value)
    {
        return $this->_set_value("2", $value);
    }
    function password()
    {
        return $this->_get_value("3");
    }
    function set_password($value)
    {
        return $this->_set_value("3", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("4", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("4");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["4"]();
        $v->set_value($value);
        $this->_set_arr_value("4", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("4");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("4");
    }
    function clientAPI()
    {
        return $this->_get_value("5");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("5", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("6", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("6");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("6", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("6");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("6");
    }
}
class SimpleConnectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleConnectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PlayerInsightState";
        $this->values["6"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function partnerId()
    {
        return $this->_get_value("5");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("5", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("6");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("6", $value);
    }
}
class SimpleGetCaptchaArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBInt";
        $this->values["2"] = "";
        $this->fields["3"] = "PBInt";
        $this->values["3"] = "";
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function width()
    {
        return $this->_get_value("2");
    }
    function set_width($value)
    {
        return $this->_set_value("2", $value);
    }
    function height()
    {
        return $this->_get_value("3");
    }
    function set_height($value)
    {
        return $this->_set_value("3", $value);
    }
}
class SimpleGetCaptchaError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleGetCaptchaOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function captchaKey()
    {
        return $this->_get_value("1");
    }
    function set_captchaKey($value)
    {
        return $this->_set_value("1", $value);
    }
    function captchaImageUrl()
    {
        return $this->_get_value("2");
    }
    function set_captchaImageUrl($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleRecoverPasswordArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function usernameOrEmail()
    {
        return $this->_get_value("2");
    }
    function set_usernameOrEmail($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleRecoverPasswordError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SimpleRegisterArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = "";
        $this->fields["7"] = "PBString";
        $this->values["7"] = "";
        $this->fields["5"] = "KeyValuePair";
        $this->values["5"] = array();
        $this->fields["8"] = "PBString";
        $this->values["8"] = "";
        $this->fields["9"] = "PBString";
        $this->values["9"] = array();
        $this->fields["10"] = "PBString";
        $this->values["10"] = "";
        $this->fields["11"] = "KeyValuePair";
        $this->values["11"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function username()
    {
        return $this->_get_value("2");
    }
    function set_username($value)
    {
        return $this->_set_value("2", $value);
    }
    function password()
    {
        return $this->_get_value("3");
    }
    function set_password($value)
    {
        return $this->_set_value("3", $value);
    }
    function email()
    {
        return $this->_get_value("4");
    }
    function set_email($value)
    {
        return $this->_set_value("4", $value);
    }
    function captchaKey()
    {
        return $this->_get_value("6");
    }
    function set_captchaKey($value)
    {
        return $this->_set_value("6", $value);
    }
    function captchaValue()
    {
        return $this->_get_value("7");
    }
    function set_captchaValue($value)
    {
        return $this->_set_value("7", $value);
    }
    function extraData($offset)
    {
        return $this->_get_arr_value("5", $offset);
    }
    function add_extraData()
    {
        return $this->_add_arr_value("5");
    }
    function set_extraData($index, $value)
    {
        $this->_set_arr_value("5", $index, $value);
    }
    function remove_last_extraData()
    {
        $this->_remove_last_arr_value("5");
    }
    function extraData_size()
    {
        return $this->_get_arr_size("5");
    }
    function partnerId()
    {
        return $this->_get_value("8");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("8", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("9", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("9");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["9"]();
        $v->set_value($value);
        $this->_set_arr_value("9", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("9");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("9");
    }
    function clientAPI()
    {
        return $this->_get_value("10");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("10", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("11", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("11");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("11", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("11");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("11");
    }
}
class SimpleRegisterError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
    function usernameError()
    {
        return $this->_get_value("3");
    }
    function set_usernameError($value)
    {
        return $this->_set_value("3", $value);
    }
    function passwordError()
    {
        return $this->_get_value("4");
    }
    function set_passwordError($value)
    {
        return $this->_set_value("4", $value);
    }
    function emailError()
    {
        return $this->_get_value("5");
    }
    function set_emailError($value)
    {
        return $this->_set_value("5", $value);
    }
    function captchaError()
    {
        return $this->_get_value("6");
    }
    function set_captchaError($value)
    {
        return $this->_set_value("6", $value);
    }
}
class SimpleRegisterOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PlayerInsightState";
        $this->values["6"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function partnerId()
    {
        return $this->_get_value("5");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("5", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("6");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("6", $value);
    }
}
class SteamConnectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = array();
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "KeyValuePair";
        $this->values["6"] = array();
    }
    function gameId()
    {
        return $this->_get_value("1");
    }
    function set_gameId($value)
    {
        return $this->_set_value("1", $value);
    }
    function steamAppId()
    {
        return $this->_get_value("2");
    }
    function set_steamAppId($value)
    {
        return $this->_set_value("2", $value);
    }
    function steamSessionTicket()
    {
        return $this->_get_value("3");
    }
    function set_steamSessionTicket($value)
    {
        return $this->_set_value("3", $value);
    }
    function playerInsightSegments($offset)
    {
        $v = $this->_get_arr_value("4", $offset);
        return $v->get_value();
    }
    function append_playerInsightSegments($value)
    {
        $v = $this->_add_arr_value("4");
        $v->set_value($value);
    }
    function set_playerInsightSegments($index, $value)
    {
        $v = new $this->fields["4"]();
        $v->set_value($value);
        $this->_set_arr_value("4", $index, $v);
    }
    function remove_last_playerInsightSegments()
    {
        $this->_remove_last_arr_value("4");
    }
    function playerInsightSegments_size()
    {
        return $this->_get_arr_size("4");
    }
    function clientAPI()
    {
        return $this->_get_value("5");
    }
    function set_clientAPI($value)
    {
        return $this->_set_value("5", $value);
    }
    function clientInfo($offset)
    {
        return $this->_get_arr_value("6", $offset);
    }
    function add_clientInfo()
    {
        return $this->_add_arr_value("6");
    }
    function set_clientInfo($index, $value)
    {
        $this->_set_arr_value("6", $index, $value);
    }
    function remove_last_clientInfo()
    {
        $this->_remove_last_arr_value("6");
    }
    function clientInfo_size()
    {
        return $this->_get_arr_size("6");
    }
}
class SteamConnectError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
class SteamConnectOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBBool";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PlayerInsightState";
        $this->values["6"] = "";
    }
    function token()
    {
        return $this->_get_value("1");
    }
    function set_token($value)
    {
        return $this->_set_value("1", $value);
    }
    function userId()
    {
        return $this->_get_value("2");
    }
    function set_userId($value)
    {
        return $this->_set_value("2", $value);
    }
    function showBranding()
    {
        return $this->_get_value("3");
    }
    function set_showBranding($value)
    {
        return $this->_set_value("3", $value);
    }
    function gameFSRedirectMap()
    {
        return $this->_get_value("4");
    }
    function set_gameFSRedirectMap($value)
    {
        return $this->_set_value("4", $value);
    }
    function partnerId()
    {
        return $this->_get_value("5");
    }
    function set_partnerId($value)
    {
        return $this->_set_value("5", $value);
    }
    function playerInsightState()
    {
        return $this->_get_value("6");
    }
    function set_playerInsightState($value)
    {
        return $this->_set_value("6", $value);
    }
}
class WriteErrorArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "KeyValuePair";
        $this->values["5"] = array();
    }
    function source()
    {
        return $this->_get_value("1");
    }
    function set_source($value)
    {
        return $this->_set_value("1", $value);
    }
    function error()
    {
        return $this->_get_value("2");
    }
    function set_error($value)
    {
        return $this->_set_value("2", $value);
    }
    function details()
    {
        return $this->_get_value("3");
    }
    function set_details($value)
    {
        return $this->_set_value("3", $value);
    }
    function stacktrace()
    {
        return $this->_get_value("4");
    }
    function set_stacktrace($value)
    {
        return $this->_set_value("4", $value);
    }
    function extraData($offset)
    {
        return $this->_get_arr_value("5", $offset);
    }
    function add_extraData()
    {
        return $this->_add_arr_value("5");
    }
    function set_extraData($index, $value)
    {
        $this->_set_arr_value("5", $index, $value);
    }
    function remove_last_extraData()
    {
        $this->_remove_last_arr_value("5");
    }
    function extraData_size()
    {
        return $this->_get_arr_size("5");
    }
}
class WriteErrorError extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBInt";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
    }
    function errorCode()
    {
        return $this->_get_value("1");
    }
    function set_errorCode($value)
    {
        return $this->_set_value("1", $value);
    }
    function message()
    {
        return $this->_get_value("2");
    }
    function set_message($value)
    {
        return $this->_set_value("2", $value);
    }
}
// Added stuff
class LoadMyPlayerObjectArgs extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
    }
}

class DeleteObjectsOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
    }
}
class DeleteIndexRangeOutput extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
    }
}
?>