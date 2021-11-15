<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $_hist; 
    public function __construct() {
        $path = base_path("/resources/json/hist.json"); 
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

public function profile() {
    $user = [];
    if(session()->has('user')) {
        $user = session()->get('user');
    }
  return view('home.profile')->with('user', $user);
}

public function transfer() {
    $user = [];
    if(session()->has('user')) {
        $user = session()->get('user');
    }
  return view('home.transfer')->with('user', $user);
}

public function dashboard() {
    $user = [];
    if(session()->has('user')) {
        $user = session()->get('user');
    }
  return view('home.dashboard');
}

public function coming() {
    $user = [];
    if(session()->has('user')) {
        $user = session()->get('user');
    }
  return view('home.coming')->with('user', $user);
}
}