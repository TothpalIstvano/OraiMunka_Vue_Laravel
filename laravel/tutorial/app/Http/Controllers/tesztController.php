<?
namespace App\Http\Controllers;
use App\Models\Name;
use App\Models\Family;
class tesztController 
{
    public function teszt()
    {
        $name = ['Pali', 'Jani', 'Kati', 'Mari', 'Niki', 'Tomi', 'Szabi'];
        $randomNameKey = array_rand($name,1);
        $randomName = $name[$randomNameKey];
        return view('pages.teszt',compact('randomName'));
    }

    public function names()
    {
        /*
        $names = ['Pali', 'Jani', 'Kati', 'Szabi', 'Niki', 'Tomi', 'Mari'];
        return view('pages.names', compact('names'));
        */
        $names = Name::all();

        /*
        $names = Name::find(1);
        $names = Name::where('name', 'Béla')->first();
        $names = Name::where('name', 'Béla')->get();
        $names = Name::where('id', '>', '2')->first();
        $names = Name::where('name','<>','Béla')
                ->whereAnd('id', '>', '2')
                ->orderBy('id', 'desc')
                ->get();
        */
        return view('pages.names', compact('names'));
    }

    public function namesCreate($family, $name)
    {
        $nameRecord = new Name();
        $nameRecord->name = $name;
        $nameRecord->family_id = $family;
        $nameRecord->save();
        return $nameRecord->id;
    }

    public function familiesCreate($name)
    {
        $familyRecord = new Family();
        $familyRecord->surname = $name;
        $familyRecord->save();
        return $familyRecord->id;
    }

    /*
    $names = \DB::table('names')
        ->where('name', '<>', 'Béla')
        ->whereAnd('id', '>', 1)
        ->orderBy('id', 'desc')
        ->get();
    
    $names = \DB::select("SELECT * FROM names WHERE name <> ? AND id > ? ORDER BY id DESC', ['Béla', 1]");
    */
}