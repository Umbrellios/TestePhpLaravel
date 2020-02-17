<?PHP
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;
  use App\HTTP\Requests;
  use Illuminate\Support\Facades\DB;
  use App\Usuario;
  use Goutte\Client;
  use Symfony\Component\DomCrawler\Crawler;

  class UsuarioLoginController extends Controller {

    public function login (Request $request){

      if( $id_usuario = $request->session()->get('id_usuario') == ''){
        $request->session()->forget('alert');
        return view('login');
      }else{

        return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
        ->with('usuario', $request->session()->get('usuario'));
      }

    }

    public function autentica(Request $request){
      $usuario =
      $senha = $request->input('senha');
      $request->input('usuario');
      $request->input('usuario');
      $dados_usuario = new Usuario();
      $dados_usuario = Usuario::where('usuario',$usuario)->where('senha',$senha)->get();

      foreach ($dados_usuario as $value){
        $request->session()->put('id_usuario', $value->id);
        $request->session()->put('usuario', $value->usuario);
        }

      if($dados_usuario->count() > 0){
        $request->session()->forget('alert');
        return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
        ->with('usuario', $request->session()->get('usuario'));
      }else{
        $request->session()->flash('alert', 'Usuário ou Senha inváidos');
        return view('login');
      }
  }

  public function logout(Request $request){
    $request->session()->forget('id_usuario');
    $request->session()->forget('usuario');
    $request->session()->forget('alert');
    return view('home');

  }
}

?>
