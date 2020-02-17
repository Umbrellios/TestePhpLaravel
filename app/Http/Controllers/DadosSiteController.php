<?PHP
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\HTTP\Requests;
  use Illuminate\Support\Facades\DB;
  use App\Usuario;
  use App\DadosSite;
  use Goutte\Client;
  use Symfony\Component\DomCrawler\Crawler;

  class DadosSiteController extends Controller{

    public function dashboard(Request $request){
      if(view()->exists('dashboard')){
        return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
        ->with('usuario', $request->session()->get('usuario'));
      } else{
          return "Pagina não encontrada";
      }
    }

    public function dadosSite(Request $request){
      $busca = $request->input('busca');
      $html = file_get_contents('https://www.uplexis.com.br/blog/?s='.$busca);
      $crawler = new Crawler($html);
      $elementoTitulo = $crawler->filterXPath("//div[contains(@class, 'title')]")->extract(['_text']);
      $elementoUrl = $crawler->filterXPath("//a[contains(@class, 'btn-uplexis orange')]");
      $dados_usuario = new Usuario();
      $contReg = 0;

      foreach($elementoUrl as $elementUrl) {
        $link = $elementUrl->getAttribute('href');
          $dados_site = new DadosSite();
          $dados_site->id_usuario = $request->session()->get('id_usuario');
          $titulo = trim($elementoTitulo[$contReg]);
          $dados_site->titulo = $titulo;
          $dados_site->link = $link;
          $dados_site->save();
          $contReg= $contReg+1;
          }
          if($contReg == 0){
            $request->session()->flash('alert', 'A pesquisa não retornou registros.');

            return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
            ->with('usuario', $request->session()->get('usuario'));

          }else {
            $request->session()->flash('alert', 'Registros Capturados com sucesso');

            return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
            ->with('usuario', $request->session()->get('usuario'));
          }

          if(view()->exists('dashboard')){
            return view('dashboard')->with('id_usuario', $request->session()->get('id_usuario'))
            ->with('usuario', $request->session()->get('usuario'));
          } else{
              return "Pagina não encontrada";
          }
  }

    public function listar () {
      $dados_capturados = new DadosSite();
      $dados_capturados = DadosSite::All();
      return view ('listaDadosCapturados')->with('dados_capturados', $dados_capturados);
    }

    public function excluir($id) {
      $dados_artigos = DadosSite::find($id);
      $dados_artigos->delete();
      return redirect()->action('DadosSiteController@listar');

    }
  }

?>
