<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $_hist; 
    public function __construct() {
        $path = storage_path() . "/app/json/hist.json"; 
        $this->_hist = json_decode(file_get_contents($path), true);  
    }
public function history() {
	 
	$x = 1;
	foreach (array_reverse($this->_hist) as $key => $value) {
		 ?>

<tr> 
<td><?=$x;?></td>
<td><?php echo $value['description']; ?> </td> 
<td><?php echo $value['amount']; ?> </td> 
<td><?php echo $value['ref']; ?> </td> 
<td><?php echo $value['date']; ?> </td> 
</tr>
<?php 
$x++; 
 } 
   
}
}
