<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App;
/**
 * amazonコイン表示用コントローラー.
 *
 * @package  app
 * @extends  Controller
 */
class AcoinController extends Controller
{

    /**
     * 表示用読込みファイル
     *
     * @var array
     */
	protected $file;

    /**
     * Constructor.
     */
	public function __construct() {
        parent::__construct();
        $this->file = file_get_contents(Config::get('const.ACD_CSV'), "r");
    }

    /**
     * 初期表示
     */
    public function index() {
        //var_dump(env('APP_ENV'));
        $rows = explode("\n", $this->file);// 行分割
        $rows = array_filter($rows, 'strlen'); // 文字数が0の行を取り除く
        $convert_rows = [];
        foreach ($rows as $row) {
            $convert_rows[] = $this->convert_ymd($row);
        }
        $this->smarty->assign(
            "rows",
            $convert_rows
        );
        return $this->smarty->display('acoin.tpl');
    }
  
    /**
     * 行の最初に日付けを代入する
     * @param 行の配列 $row
     */
    private function convert_ymd($row) {
    	$in_line = explode(",", $row);
    	if ( isset($in_line[0]) ) {
    		$in_line[0] = date('Y/m/d', strtotime($in_line[0]));
    	}
    	return implode("," , $in_line);
    }
}
