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

               $file = $request->file('select_file');
               $file_path = $file->getPathName();

               //$xml=simplexml_load_file($file_path);
               $xml=simplexml_load_string($file_path, null, LIBXML_NOCDATA);
              //StreamParser::xml($file_path)->each(function(Collection $torcedor){
              //$torcedores = Torcedor::create($torcedor->all());
                  print_r($xml);
                  //echo"\r\n\r\n";
        //};
        //   return redirect('torcedor');
        }


    }
