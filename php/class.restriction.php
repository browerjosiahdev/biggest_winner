<?php

class Restriction
{   
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Variables.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    protected $p_strRestrictions = '';
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Setup Methods.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function addRestrictions( $strRestrictions )
    {
        if (strlen($p_strRestrictions) > 0)
            $p_strRestrictions .= ' AND ';
        
        $p_strRestrictions .= '(' . $strRestrictions . ')';
    };
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
// Group: Format Methods.
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
    public function getString()
    {
        return ('(' . $p_strRestrictions . ')');
    };
};

?>