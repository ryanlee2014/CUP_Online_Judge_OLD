<?php
require_once('./include/db_info.inc.php');
	require_once('./include/setlang.php');
	require_once('./closed.php');
	$view_title= "ACM管理系统";
	if (!isset($_SESSION['user_id'])){

	require("template/".$OJ_TEMPLATE."/need_login.php");
	exit(0);
//	$_SESSION['user_id']="Guest";
}
 $name=$database->select("users_account","user_id");
    $num=[];
    $cnt=0;
    foreach($name as $value)
    {
        $result=$database->select("vjudge_record","*",[
            "user_id"=>$value,
            "result" => 4
            ]);
        $nresult = [];
        foreach ($result as $row) {
            $nresult[$row['oj_name'].$row['problem_id']] = $row; 
        }
        $result = [];
        foreach ($nresult as $row) {
            array_push($result,$row);
        }
        $lresult = $database->select("solution","*",[
            "user_id"=>$value,
            "result"=>4,
            "problem_id[>=]"=>1909
            ]);
        $nlresult = [];
        foreach ($lresult as $row) {
            $nlresult[$row['problem_id']] = $row;
        }
        $lresult = [];
        foreach ($nlresult as $row) {
            array_push($lresult,$row);
        }
        $res=$database->select("vjudge_solution","*",["user_id"=>$value,"result"=>4]);
        $nresult = [];
        foreach ($res as $row) {
            $nresult[$row['oj_name'].$row['problem_id']] = $row;
        }
        $res = [];
        foreach ($nresult as $row) {
            array_push($res,$row);
        }
        $t=[];
        foreach($res as $v)
        {
            $obj=intval(strtotime($v['in_date']));
            array_push($t,$obj);
        }
        foreach($lresult as $row)$t[]=intval(strtotime($row['in_date']));
        foreach($result as $v)$t[]=intval(strtotime($v['time']));
        rsort($t);
    //    echo var_dump(intval(strtotime(date("Y-m-d",time())." -1 day"))<=$t[0]);
       //print_r($t);
       // echo intval(strtotime(date("Y-m-d",time())." -30 day"));
       // array_multisort($t,SORT_DESC,$result);
        $cnt1=0;
        $cnt2=0;
        $cnt3=0;
        $len=count($t);
        for($i=0;$i<$len;++$i)
        {
          //  $v=$result[$i];
         //   echo strtotime($v['time'])."<br>";
          //  echo strtotime(date("Y-m-d",time())." -1 month")."<br>";
        //    echo strval(intval(strtotime(date("Y-m-d",time())." -1 month"))<=intval(strtotime($v['time'])))."<br><br>";
            if(intval(strtotime(date("Y-m-d",time())." -30 day"))<=$t[$i])++$cnt3;
            if(intval(strtotime(date("Y-m-d",time())." -7 day"))<=$t[$i])
            {
                ++$cnt1;
                if(intval(strtotime(date("Y-m-d",time())." -1 day"))<=$t[$i])++$cnt2;
            }
            }
            $nick=$database->select("users","nick",[
                "user_id"=>$value
                ]);
            $num[$cnt]->name=$value;
            $num[$cnt]->nick=$nick[0];
            $num[$cnt]->change_week=$cnt1*23;
            $num[$cnt]->change_day=$cnt2*23;
            $num[$cnt]->change_month=$cnt3*23;
            $num[$cnt++]->score=count($t)*23;
    }
    
function cmp($a,$b)
{
    if($a->score==$b->score)return 0;
    return $a->score>$b->score?-1:1;
}
uasort($num,'cmp');
$view_table="<table class=\"ui fixed selectable single line celled table center aligned\"><thead><tr><th width='15%'>Rank</th><th>name</th><th width='15%'>Rating</th><th width='15%'>Month</th><th width='15%'>Week</th><th width='15%'>Today</th></tr></thead><tbody>";
$cnt=0;
  foreach($num as $v)
  {
      $view_table.='<tr><td>'.++$cnt.'</td><td style="display:none">'.$v->name.'</td><td><a href="userinfo.php?user='.$v->name.'" target="_blank">'.$v->nick.'</a></td><td>'.$v->score."</td><td class='";
      if($v->change_month>0)
      $view_table.="positive'>+";
      else if($v->change_month<0)
      $view_table.="negative'>-";
      else
      $view_table.="'>";
      $view_table.=$v->change_month;
      $view_table.="</td><td class='";
      if($v->change_week>0)
      $view_table.="positive'>+";
      else if($v->change_week<0)
      $view_table.="negative'>-";
      else
      $view_table.="'>";
      $view_table.=$v->change_week;
      $view_table.="</td><td class='";
      if($v->change_day>0)
      $view_table.="positive'>+";
      else if($v->change_day<0)
      $view_table.="negative'>-";
      else
      $view_table.="'>";
      $view_table.=$v->change_day;
      $view_table.="</td></tr>";
  }
$view_table.="</tbody></table>";
require("template/".$OJ_TEMPLATE."/acmmanager.php");
?>