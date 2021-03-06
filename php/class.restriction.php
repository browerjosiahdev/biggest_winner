<?php

class Restriction
{   
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Variables.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    protected $_strRestrictions = '';
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Setup Methods.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function addRestrictions( $strRestrictions )
    {
        if (strlen($this->_strRestrictions) > 0)
            $this->_strRestrictions .= ' AND ';
        
        $this->_strRestrictions .= '(' . $strRestrictions . ')';
    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Format Methods.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
    public function getString()
    {
        return $this->_strRestrictions;
    }
}

?>