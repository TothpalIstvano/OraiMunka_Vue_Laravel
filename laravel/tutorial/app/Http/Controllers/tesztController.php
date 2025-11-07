<?
namespace App\Http\Controllers;
use App\Models\Name;
use App\Models\Family;
use Illuminate\Http\Request;

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

    public function namesDelete(Request $request)
    {
        $name = Name::find($request->input('id'));
        $name->delete();
        return "ok";
    }

    public function manageSurname()
    {
        $names = Family::all();
        return view('pages.surname', compact('names'));
    }

    public function surnameDelete(Request $request)
    {
        $family = Family::find($request->input('id'));
        $family->delete();
        return "ok";
    }

    public function newSurname(Request $request)
    {
        $familyRecord = new Family();
        $familyRecord->surname = $request->input('inputFamily');
        $familyRecord->save();
        return redirect('/names/manage/surname');
    }

 /*
    function saveData(Request $request)
    {

    }

    function returnObject()
    {
        $obj = new \stdClass();
        $obj->name = "Gábor";
        $obj->server = "SZBI-PG";
        return response()->json($obj);
    }

    function returnError()
    {
        return response()->view('error', ['valtozó'=> 'ez egy változó értéke'], 404);
    }

    function redirectAway()
    {
        return redirect('https://szbi-pg.hu');
    }

   
    $names = \DB::table('names')
        ->where('name', '<>', 'Béla')
        ->whereAnd('id', '>', 1)
        ->orderBy('id', 'desc')
        ->get();
    
    $names = \DB::select("SELECT * FROM names WHERE name <> ? AND id > ? ORDER BY id DESC', ['Béla', 1]");
    */
    
}