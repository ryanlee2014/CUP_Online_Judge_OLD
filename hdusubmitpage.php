<?php
$cache_time = 30;
$OJ_CACHE_SHARE = false;
$oj_signal = "HDU";
//require_once('./include/cache_start.php');
require_once('./include/db_info.inc.php');
require_once('./include/const.inc.php');
require_once('./include/setlang.php');
require_once("./include/simple_html_dom.php");
$ok = true;
$user = $_SESSION['user_id'];
$ok = $ok || isset($_SESSION['administrator']);
$view_src = "";
$sid = "";
$pr_flag=true;
$code_lang = 0;
function cchin($txt)
{
    $txt = mb_convert_encoding($txt, "UTF-8", "GBK");
    return $txt;
}

if (!isset($_SESSION['user_id'])) {
    $view_errors = "<a href=newloginpage.php>$MSG_Login</a>";
    require("template/" . $OJ_TEMPLATE . "/error.php");
    exit(0);
//	$_SESSION['user_id']="Guest";
}



$pid = "";
$cpid="";
$row;
$tid = "";
$cnt = "";
$cid="";
if(isset($_GET['cid']))
{
    $cid=intval($_GET['cid']);
    $pid=intval($_GET['pid']);
    if(is_numeric($cid)&&$cid)
    {
        $result=$database->select("contest_problem","problem_id",["contest_id"=>$cid,"num"=>$pid]);
        if(count($result)==0)
        {
            $view_errors="发生错误.";
            print_r($result);
            require("template/" . $OJ_TEMPLATE . "/error.php");
            exit(0);
        }
        $cpid=$pid;
        $pid=$result[0];
    }
    $pr_flag=false;
}
if (isset($_GET['tid'])) {
    $tid = intval($_GET['tid']);
    $cnt = intval($_GET['pid']);
    if (is_numeric($tid) && $tid) {
        $result = $database->select("special_subject_problem", "problem_id", [
            "topic_id" => $tid,
            "num" => $cnt
        ]);
        $pid = $result[0];
    }
} else if (isset($_GET['pid'])&&!isset($_GET['cid'])) {
    $pid = intval($_GET['pid']);
}
else if(isset($_GET['id'])&&!isset($_GET['cid']))
{
    $pid=intval($_GET['id']);
}
if (isset($_GET['sid'])) {
    $sid = intval($_GET['sid']);

    if ($sid > -1) {
        $user_name = $database->select("vjudge_solution", ["user_id","language"], [
            "solution_id" => $sid
        ]);
        $code_lang = $user_name[0]["language"];
        $user_name = $user_name[0]["user_id"];
        $ok = $ok || ($user_name == $_SESSION['user_id']);
        $result = $database->select("vjudge_source_code", "source", [
            "solution_id" => $sid
        ]);
        $view_src = $result[0];
    }
}
if (!$ok) {
    $view_errors = "Permission Denied.";
    require("template/" . $OJ_TEMPLATE . "/error.php");
    exit(0);
}
$url = "http://acm.hdu.edu.cn/showproblem.php?pid=" . $pid;
if (!$url) $url = $_GET['url'];
if (strpos($url, "http") === false) {
    echo "Please Input like http://acm.split.hdu.edu.cn/showproblem.php?pid=1000";
    exit(1);
}
if (get_magic_quotes_gpc()) {
    $url = stripslashes($url);
}
$result = $database->select("vjudge_problem", "*", [
    "problem_id" => $pid,
    "source" => "HDU"
]);

if (!$result) {
    $baseurl = substr($url, 0, strrpos($url, "/") + 1);
    //echo $baseurl;
    try {
        $aContext = array(
            'http' => array(
                'proxy' => 'tcp://127.0.0.1:8118',
                'request_fulluri' => true,
            ),
        );
        $cxContext = stream_context_create($aContext);
        $html = file_get_html($url, false, $cxContext);
        if (preg_match('/No such/', $html->plaintext)) {
            $view_errors = "题目不存在";
            require("template/" . $OJ_TEMPLATE . "/error.php");
            exit(0);
        } else if (preg_match('/closed/', $html->plaintext) && !preg_match('/Time Limit/', $html->plaintext)) {
            $view_errors = "HDU暂时关闭";
            require("template/" . $OJ_TEMPLATE . "/error.php");
            exit(0);
        } else if (preg_match('/System Message/', $html->plaintext)) {
            $view_errors = "HDU出现不可预料的错误";
            require("template/" . $OJ_TEMPLATE . "/error.php");
            exit(0);
        }
        foreach ($html->find('img') as $element) {
            if (preg_match("/http/", $element->src)) {
                continue;
            } else
                $element->src = $baseurl . $element->src;
        }
        $element = $html->find('h1', 0);
        $title = $element->plaintext;

        $element = $html->find('span', 0);
        $tlimit = $element->plaintext;
        $tlimit = substr($tlimit, 12);
        $tlimit = substr($tlimit, strpos($tlimit, '/') + 1, strpos($tlimit, ' MS') - strpos($tlimit, '/'));
        $mlimit = $element->plaintext;
        $mlimit = substr($mlimit, strpos($mlimit, "Memory"));
        $mlimit = substr($mlimit, strpos($mlimit, '/') + 1, strpos($mlimit, ' K') - strpos($mlimit, '/'));
        $tlimit /= 1000;
        $mlimit /= 1024;

        $element = $html->find('div[class=panel_content]', 0);
        $descriptionHTML = $element->outertext;

        $element = $html->find('div[class=panel_content]', 1);
        $inputHTML = $element->outertext;
        $element = $html->find('div[class=panel_content]', 2);
        $outputHTML = $element->outertext;

        $element = $html->find('pre', 0);
        $element = $element->find('div', 0);
        $sample_input = $element->innertext;
        $element = $html->find('pre', 1);
        $element = $element->find('div', 0);
        $sample_output = $element->innertext;
        $pid = cchin($pid);
        $title = cchin($title);
        $tlimit = cchin($tlimit);
        $mlimit = cchin($mlimit);
        $descriptionHTML = cchin($descriptionHTML);
        $inputHTML = cchin($inputHTML);
        $outputHTML = cchin($outputHTML);
        $sample_input = cchin($sample_input);
        $sample_output = cchin($sample_output);
        $problem_row->problem_id = $pid;
        $problem_row->title = $title;
        $problem_row->time_limit = $tlimit;
        $problem_row->memory_limit = $mlimit;
        $problem_row->description = $descriptionHTML;
        $problem_row->input = $inputHTML;
        $problem_row->output = $outputHTML;
        $problem_row->sample_input = $sample_input;
        $problem_row->sample_output = $sample_output;
        $problem_row->accepted = 0;
        $problem_row->submit = 0;
        $view_sample_input = $sample_output;
        $view_sample_output = $sample_output;
        $database->insert("vjudge_problem", [
            "problem_id" => $pid,
            "title" => $title,
            "time_limit" => $tlimit,
            "memory_limit" => $mlimit,
            "description" => $descriptionHTML,
            "input" => $inputHTML,
            "output" => $outputHTML,
            "sample_input" => $sample_input,
            "sample_output" => $sample_output,
            "source" => "HDU"
        ]);
    } catch (Exception $e) {

        $view_errors = "无法爬取HDU数据";
        require("template/" . $OJ_TEMPLATE . "/error.php");
        exit(0);
    }

} else {
    $problem_row->problem_id = $result[0]['problem_id'];
    $problem_row->title = $result[0]['title'];
    $problem_row->time_limit = $result[0]['time_limit'];
    $problem_row->memory_limit = $result[0]['memory_limit'];
    $problem_row->description = $result[0]['description'];
    $problem_row->input = $result[0]['input'];
    $problem_row->output = $result[0]['output'];
    $problem_row->sample_input = $result[0]['sample_input'];
    $problem_row->sample_output = $result[0]['sample_output'];
    $problem_row->accepted = $result[0]['accepted'];
    $problem_row->submit = $result[0]['submit'];
    $problem_row->source = $result[0]['source'];
    $view_sample_input = $result[0]['sample_input'];
    $view_sample_output = $result[0]['sample_output'];
}
/////////////////////////Template
require("./template/" . $OJ_TEMPLATE . "/hdusubmitpage.php");
/////////////////////////Common foot
if (file_exists('./include/cache_end.php'))
    require_once('./include/cache_end.php');
?>

