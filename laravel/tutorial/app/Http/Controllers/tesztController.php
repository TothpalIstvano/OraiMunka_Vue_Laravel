<?
namespace App\Http\Controllers;

use COM;

class tesztController 
{
    public function teszt()
    {
        $name = ['Pali', 'Jani', 'Kati', 'Mari'];
        $randomNameKey = array_rand($name,1);
        $randomName = $name[$randomNameKey];

        return view('teszt',compact('randomName'));
    }
}