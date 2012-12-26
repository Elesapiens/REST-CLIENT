<?php
/*

Created by Rafael Torres Balderas (Raphadareangel)
website: www.raphadareangel.com
for Elesapiens Learning & FUN
website:www.elesapiens.com

*/

// class that handle exception

class Http_Exception extends Exception{
    const NOT_MODIFIED = 304; 
    const BAD_REQUEST = 400; 
    const NOT_FOUND = 404; 
    const NOT_ALOWED = 405; 
    const CONFLICT = 409; 
    const PRECONDITION_FAILED = 412; 
    const INTERNAL_ERROR = 500; 
}


// class that handle errors
class Http_Multiple_Error
{
    private $_status = null;
    private $_type   = null;
    private $_url    = null;
    private $_params = null;
    
    function __construct($status, $type, $url, $params)
    {
        $this->_status = $status;
        $this->_type   = $type;
        $this->_url    = $url;
        $this->_params = $params;
    }
    
    function getStatus()
    {
        return $this->_status;
    }
    
    function getType()
    {
        return $this->_type;
    }
    
    function getUrl()
    {
        return $this->_url;
    }
    
    function getParams()
    {
        return $this->_params;
    }
}
?>