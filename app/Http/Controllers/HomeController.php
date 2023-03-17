<?php
namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\vacance;

class HomeController extends Controller
{
    public function __invoke()
    {
        $homes = Home::all();
        return view('home', compact('homes'));
    }
    public function store(Request $request)
    { 
      
$request->validate([
'dated'=>'required|',
       'datef'=>'bail|required|',
       'lieu'=>'bail|required|']
); 
$vac = new vacance();
    $vac->dated=$request->input('dated');
    $vac->datef=$request->input('datef');
    $vac->lieu=$request->input('lieu');
    $vac->save();



/*$query = DB::table('matieres')->insert([

  'code'=>$request->input('code'),
  'libelle'=>$request->input('libelle'),
  'COEFFICIENT'=>$request->input('coefficient')


]);*/

return view('home');


}
}
