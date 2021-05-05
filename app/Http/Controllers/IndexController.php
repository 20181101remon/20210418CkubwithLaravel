<?php

namespace App\Http\Controllers;
// use App\Models\club_info;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $table1='club_classrecord';
    private $table2='club_semester';
    private $table3='club_info';
    private $table4='classrecord_pic';

    private $table5= 'activity_results';
    private $table6 = 'activity_apply';
    private $table7 = 'activity_pic';

    // private $table1='club_news';
    // private $table2='club_info';
    // private $table3='news_type';
    // private $table4='news_attend_file';
    private $table8='club_news';
    private $table9='news_type';
    private $table10='news_attend_file';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classrecord = DB::table($this->table1)
        ->leftJoin($this->table2, $this->table1.'.club_semester', '=',  $this->table2.'.club_semester')
        ->leftJoin($this->table3, $this->table2.'.club_id', '=',  $this->table3.'.club_id')
        ->leftJoin($this->table4, $this->table1.'.flow_of_classrecord', '=',  $this->table4.'.flow_of_classrecord')
        ->where('PLC','1')
        ->groupBy($this->table1.'.flow_of_classrecord')->select('class_name as name', 'pic as image')
        ;
        $showPLC = DB::table($this->table5)
        ->leftJoin($this->table6, $this->table5.'.flow_of_activity', '=',  $this->table6.'.flow_of_activity')
        ->leftJoin($this->table2, $this->table6.'.club_semester', '=',  $this->table2.'.club_semester')
        ->leftJoin($this->table3, $this->table2.'.club_id', '=',  $this->table3.'.club_id')
        ->leftJoin($this->table7, $this->table5.'.flow_result_activity', '=',  $this->table7.'.flow_result_activity')
        ->where('PLC','1')
        ->groupBy($this->table5.'.flow_result_activity')->select('activity_name as name', 'pic as image')->union($classrecord)
        ->get();
        $news = DB::table($this->table8)
        ->leftJoin($this->table3, $this->table8.'.club_id', '=',  $this->table3.'.club_id')
        ->leftJoin($this->table9, $this->table8.'.news_id', '=',  $this->table9.'.news_id')
        ->leftJoin($this->table10, $this->table8.'.flow_of_news', '=',  $this->table10.'.flow_of_news')
        ->where('PLC','1')
        ->groupBy($this->table8.'.flow_of_news')->select('news_title','news_content','date','news_name','news_pic','news_file')->orderBy('date', 'desc')
        ->get();
        return with([$showPLC,$news]);
        // return with($showPLC);
        // return view('club.club')->with('clubInfo',$club);
        // 傳過去時要使用的變數名稱 變數
    }
}
