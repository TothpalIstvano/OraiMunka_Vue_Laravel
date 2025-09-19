<?
namespace App\Http\Controllers;

class tesztController 
{
    public function teszt()
    {
        $names = ['Pali', 'Jani', 'Kati', 'Mari', 'Niki', 'Tomi', 'Szabi'];
        $randomNameKey = array_rand($names,1);
        $randomName = $names[$randomNameKey];

        return view('pages.teszt',compact('randomName'));
    }

    public function names()
    {
        $names = ['Pali', 'Jani', 'Kati', 'Szabi', 'Niki', 'Tomi', 'Mari'];
        return view('pages.names', compact('names'));
    }
}