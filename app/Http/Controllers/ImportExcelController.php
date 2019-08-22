<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Tightenco\Collect\Support\Collection;
    use Rodenastyle\StreamParser\StreamParser;
    use App\Models\Torcedor;

    class ImportExcelController extends Controller {

        public function index() {
            return view('torcedor.import_xml');
        }


        public function import(Request $request) {
          $this->validate($request,[
            'select_file' => 'required|mimes:xls,xlsx,xml'
          ]);
        	$file = $request->file('select_file');
        	$file_path = $file->getPathName();

        	$xml = simplexml_load_file($file_path);
        	$xmlToArray = json_decode(json_encode((array)$xml), true);

        	foreach ($xmlToArray["torcedor"] as $torcedor) {
                     $torcedor["@attributes"]["ativo"] = ($torcedor["@attributes"]["ativo"] == "" ? 0 : $torcedor["@attributes"]["ativo"]);
        		$create = Torcedor::create($torcedor["@attributes"]);
        	}

        	return redirect('torcedor');
        }

      }
