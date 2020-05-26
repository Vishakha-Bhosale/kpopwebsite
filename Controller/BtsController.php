<?php
require ("Model/BtsModel.php");

class BtsController {
    function CreateBtsDropDownlist($name)
    {
        $btsModel = new BtsModel();
        $result = "<form action ='' method = 'post' width = '200px'>
                    Select name of group:
                    <select name = 'name' >
                        <option value = '%'> All</option>
                        ".$this->CreateOptionValues($btsModel->GetBandTypes(),$name).
                    "</select>
                    <input type = 'submit' value = 'Search'>
                    
                   </form>";
        
        return $result;
                
    }
    function CreateOptionValues(array $valueArray, $name )
    {
        $result ="";
        foreach ($valueArray as $value)
        {
            if($value == $name){
                $result = $result . "<option selected='selected' value='$value'>$value</option>";                
            }
            else{
                $result = $result . "<option  value='$value'>$value</option>";
            }

        }
        return $result;
        
    }
    
    function CreateTables($name)
    {
        $btsModel = new BtsModel();
        $btsArray = $btsModel->GetBandByName($name);
        $result = "";
        
        foreach($btsArray as $key =>$bts)
        {
            $result = $result . 
                    "<table class = 'btsTable'>
                        <tr>
                            <th rowspan='4' width='50px' height='50px' ><img runat = 'server' src = '$bts->image'/></th>
                            <th>Name:</th>
                            <td>$bts->name</td>
                        </tr>
                        
                        <tr>
                            <th> Number of Members:</th>
                            <td>$bts->numberofmembers</td>
                         </tr>
                         
                        <tr>
                            <th>Country</th>
                            <td>$bts->country</td>
                        </tr>
                        
                        
                    </table>";
                    
        }
        return $result;
    }
}

?>
