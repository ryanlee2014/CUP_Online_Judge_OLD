
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CUP Online Judge</title>
    
<link rel="shortcut icon" href="">
<link href="/semantic-ui/semantic.min.css?ver=1.0.1" rel="stylesheet">
<link href="/devicon/devicon.min.css" rel="stylesheet">
<link href="/template/semantic-ui/css/style.css?ver=1.0.4.3" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/template/semantic-ui/css/judge.css?ver=1.1">
<link rel="stylesheet" type="text/css" href="/template/semantic-ui/css/home.css?ver=1.0.5.1">
<link rel="stylesheet" type="text/css" href="/template/semantic-ui/css/animate.css">
<link rel="stylesheet" href="/katex/katex.min.css">    <script src="/js/browser-detect.umd.js"></script>
<script>
var result = browserDetect();
if(result.name === "ie" && result.versionNumber < 10 || (result.name == "chrome" && result.versionNumber < 50) || (result.os.indexOf("XP")!== -1)) {
        location.href = "notie.php"
}
</script>
<script src="/template/semantic-ui/js/jquery-3.3.1.min.js"></script>
<script src="/semantic-ui/semantic.min.js?ver=1.0.6"></script>
<script src="/js/markdown-it.js?ver=1.0.5"></script>

<script src="/js/vue.min.js?ver=2.5.17"></script>
<script src="/js/d3.v5.min.js" charset="utf-8"></script>
<script src="/template/semantic-ui/js/base64.js?type=min&ver=1.0"></script>
<script src="/template/semantic-ui/js/utils.js?ver=1.0.4"></script>
<script src="/template/semantic-ui/js/anime.min.js"></script>
<script src="/js/dayjs.min.js"></script>
<script src="/js/lodash.min.js?ver=4.7.11"></script>
<script>
    $(document).ready(function(){
        $(function() {
                setTimeout(function() {
                $("body").prepend('<a href="#top" id="toTop" style="z-index:999"><i class="arrow alternate huge circle up icon"></i></a>');
            	$("#toTop").scrollToTop();
                }, 50);
            });
    })
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
    .editor { 
        height:300px;
        width:inherit;
    }
</style>
</head>

<body>
<!--<canvas class="fireworks" style="z-index:-999"></canvas>-->
<div class="following bar topmenu" style="z-index:900">
<div class="ui borderless network secondary menu" id="navbar-large">
    <div class="ui container">
        <div class="msg header item">
                        <a href="/" style="color:black">CUP Online Judge</a>
                    </div>
                        
                <a class="item"
                   href="problemset.php"><i class="browser icon"></i>问题</a>
                <a class="item"
                   href="status.php"><i class="tasks icon"></i>历史</a>
                <a class="item"
                   href="ranklist.php"><i class="trophy icon"></i>排名</a>
                                      <a class="item" href="discuss.php"><i class="comment alternate icon"></i>讨论</a>
                                      <a class="item"
                           href="contest.php"><i class="puzzle icon"></i>竞赛&作业</a>
                <div
                    class="ui dropdown item"
                    tabindex="0">
                                        <div class="text"><i class="options icon"></i>功能</div>
                                            <i class="dropdown icon"></i>
                                        <div class="menu">
                        <a class="item" href="faqs.php"><i class="help icon"></i>常见问答</a>
                        <a class="item"
                           href="specialsubject.php"><i class="rocket icon"></i>ACM专题</a>
                        <a class="item"
                           href="recent-contest.php"><i class="sitemap icon"></i>名校联赛</a>
                           <a class="item" href="acmmanager.php"><i class="road icon"></i>ACM管理系统</a>
                           <a class="item" href="software.php"><i class="plug icon"></i>常用软件</a>
                           <a class="item" href="whiteboard.php"><i class="calendar outline icon"></i>白板(β版测试)</a>
                                           <a class="item tutorial" target="_blank"><i class="question circle outline icon"></i>C/C++语言参考手册</a>
                                <a class="item" href="https://wiki.cupacm.com"><i class="book icon"></i>Wiki</a>
                                <a class="item" href="fame.php"><i class="chess queen icon"></i>Hall of Fame</a>

                                           
                        
                    </div>
                </div>
                <a class="item" href="/vjudgeindex.php"><i class="lab icon"></i>Virtual
                            Judge</a>
                
                                <div class="right menu">
                        <a v-html="message" class="item online_num" v-cloak
               href="newonline.php"><i class="remove icon"></i></a>                            <div class="ui dropdown item detail" tabindex="0">
                    <div class="text"><span class="profile_group">Ryan Lee(李昊元)</span></div>
                    <i class="dropdown icon"></i>
                </div>
                    </div>
    </div>
</div>
<div class="ui borderless network secondary menu" id="navbar-small">
    <div class="ui container">
        <div class="msg header item">
                        <a href="/" style="color:black">CUP Online Judge</a>
                    </div>
                        
                <a class="item"
                   href="problemset.php">问题</a>
                <a class="item"
                   href="status.php">历史</a>
                <a class="item"
                   href="ranklist.php">排名</a>
                   <a class="item"
                           href="contest.php">竞赛&作业</a>
                <div
                    class="ui dropdown item"
                    tabindex="0">
                                        <div class="text">其他</div>
                                            <i class="dropdown icon"></i>
                                        <div class="menu">
                        <a class="item" href="faqs.php">常见问答</a>
                        <a class="item"
                           href="specialsubject.php">ACM专题</a>
                        <a class="item"
                           href="recent-contest.php">名校联赛</a>
                           <a class="item" href="acmmanager.php">ACM管理系统</a>
                           <a class="item" href="software.php">常用软件</a>
                           <a class="item" href="whiteboard.php">白板(β版测试)</a>
                            <a class="item" href="/vjudgeproblemset.php">Virtual
                            Judge</a>
                
                <a class="item" href="https://wiki.cupacm.com">Wiki</a>
                                <a class="item tutorial" href="cppreference/en/" target="_blank">C/C++语言参考手册</a>
                                    </div>
                </div>
                                <div class="right menu">
                        <a v-html="message" class="item online_num1" v-cloak
               href="newonline.php"></a>                            <div class="ui dropdown item detail" tabindex="0">
                    <div class="text"><span class="profile_group">Ryan Lee(李昊元)</span></div>
                    <i class="dropdown icon"></i>
                </div>
                    </div>
    </div>
</div>
<div class="ui borderless network secondary menu" id="navbar-nano">
    <div class="ui container">
        <div class="msg header item">
                        <a href="/" style="color:black">CUP Online Judge</a>
                    </div>
        <div class="ui dropdown item" tabindex="0">
            <div class="text">通用</div>
            <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="faqs.php">常见问答</a>
                <a class="item"
                   href="problemset.php">问题</a>
                <a class="item"
                   href="status.php">历史</a>
                <a class="item"
                   href="ranklist.php">排名</a>
                <div class="item" tabindex="0">
                        <i class="right dropdown icon"></i>
                    <div class="text">其他</div>
                    <div class="menu">
                        <a class="item"
                           href="contest.php">竞赛&作业</a>
                        <a class="item"
                           href="specialsubject.php">ACM专题</a>
                        <a class="item"
                           href="recent-contest.php">名校联赛</a>
                           <a class="item" href="acmmanager.php">ACM管理系统</a>
                           <a class="item" href="software.php">常用软件</a>
                           <a class="item" href="whiteboard.php">白板(β版测试)</a>
                            <a class="item" href="/vjudgeindex.php">Virtual
                            Judge</a>
                
                <a class="item" href="https://wiki.cupacm.com">Wiki</a>
                                <a class="item tutorial" href="cppreference/en/" target="_blank">C/C++语言参考手册</a>
                                    </div>
                </div>
                  </div>
        </div>
                <div class="right menu">
                        <a v-html="message" class="item online_num2" v-cloak
               href="newonline.php"></a>                            <div class="ui dropdown item detail" tabindex="0">
                    <div class="text"><span class="profile_group">Ryan Lee(李昊元)</span></div>
                    <i class="dropdown icon"></i>
                </div>
                    </div>
    </div>
</div>
</div>
<div class="ui flowing popup hidden dropdown_menu_group">
     <div class='ui two column grid'><div class='row'><div class='column'><img src='./avatar/2016011253.jpg' class='ui small image'><h4 class='ui header'>2016011253<div class='sub header'>Ryan Lee(李昊元)</div></h4><p><i class='yen sign icon'></i>0</p></div><div class='column'><div class='ui link list'> <a class='item' href='/modifypage.php'><i class='edit icon'></i>修改帐号</a><br>
    <a class='item' href='/userinfo.php?user=2016011253'><i class='archive icon'></i>个人信息</a><br><a class='item' href='/status.php?user_id=2016011253'><i class='send icon'></i>我的提交</a><br><a class='item' href='/contest.php?my'><i class='book icon'></i>我的竞赛&作业</a><br><a class='logout item'><i class='remove user icon'></i>注销</a>&nbsp;<br><a class='item' href=admin/><i class='write icon'></i>管理</a>&nbsp;<br><a class='item' href=announce.php><i class='send outline icon'></i>在线用户推送</a>&nbsp;</div></div></div></div></div>
    <div class="ui vertical center aligned segment hidemenu" style="border-bottom:0px;display:none">
        <div class="ui container">
            <div class="ui inverted borderless large pointing menu" style="opacity:0">
                
            </div>
        </div>
    </div>
<div class="ui basic small test modal">
    <div class="ui icon header">
<i class="code icon"></i>
语言选择
    </div>
    <div class="content">
      <p>请选择参考手册的语言</p>
    </div>
    <div class="actions">
      <div class="ui blue cancel inverted button">
        中文
      </div>
      <div class="ui green ok inverted button">
        英文
      </div>
    </div>
  </div>
  <script>
      $('.ui.test.modal')
  .modal({
    onDeny    : function(){
      location.href = "/cppreference/zh-cn";
     // return false;
    },
    onApprove : function() {
      location.href = "/cppreference/en";
    }
  });
 setTimeout(function() {
     $(".tutorial")
.on("click",function(e){
    e.preventDefault();
    $(".ui.test.modal").modal('show')
})
 }, 500);
      
$("a[href='"+location.pathname.substring(1)+"']").addClass("active");
//if(typeof homepage !== "undefined") {
//    $(".ui.borderless.network.secondary.menu").addClass("inverted");
//}
if(location.pathname.substring(1).length > 0 && !location.pathname.match(/index/)) {
    $(".hidemenu").show();
}
  </script>
<script src="template/semantic-ui/js/cookie.js"></script>
<script src="template/semantic-ui/js/platform.js?ver=1.0.1"></script>

<script src="/socket.io/socket.io.js" id="socket_io"></script>
    <script>
   // $(document).ready(function(){
   $("#socket_io").ready(function(){
       var auth={
            user_id:"2016011253",
            token:""
        }
                var auth_msg={
            user_id: "2016011253",
            id: "admin",
            url: "/faqs.php",
            authcode: "",
            intranet_ip:"2001:da8:258:6808:a147:4630:83a5:f853",
            version:window.navigator.appVersion,
            nick:"Ryan Lee(李昊元)",
            platform:window.navigator.platform,
            browser_core:window.navigator.product,
            useragent:window.navigator.userAgent,
            screen:{
                width:screen.availWidth,
                height:screen.availHeight
            }
        };
        //$.post("/api/login/token","token="+Base64.encode(JSON.stringify(auth)));
        window.socket = io(location.hostname);
        //window.socket = io("school.haoyuan.info");
        var socket=window.socket;
        window.online_list = [];
        var vonline_num = new Vue({
           el:".following.bar",
           data:{
               message: '<i class="remove icon"></i>',
               user:0,
               judger:0
           },
           computed:{
               users:{
                   get:function(){
                       
                   },
                   set:function(val) {
                       this.user = val;
                       this.update();
                   }
               },
               judgers:{
                   get:function(){
                       
                   },
                   set:function(val) {
                       this.judger = val;
                       this.update();
                   }
               }
           },
           methods:{
               update:function(){
                   this.message = "<i class='users icon'></i>" + this.user + "人" + "&nbsp;<i class='microchip icon'></i>"+this.judger;
               }
           },
           mounted:function(){
               binding_method();
           }
        });
        window.connected = false;
        socket.on('connect',function(data){
            vonline_num.message="<i class='feed icon'></i>";
            socket.emit("auth",auth_msg);
            setTimeout(function(){
                window.addEventListener("blur", function(event){ 
        var socket = window.socket;
        if(socket && socket.connected && socket.io.engine.transport.query.transport === "polling") {
            socket.close();
        }
    });
    window.addEventListener("focus", function(event){
        var socket = window.socket;
        if(socket && !socket.connected) {
            socket.connect();
        }
    })
            },1000);
            window.connected = true;
        });
        socket.on('error',function(error){
            console.error(error);
        })
        socket.on('disconnect',function(data){
            if(!socket.windowDestroyClose) {
                vonline_num.message = "与服务器连接丢失";
            }
            window.connected = false;
        })
        socket.on('judgerChange',function(data){
            vonline_num.judgers = data.length;
        })
        socket.on('user', function (data) {
            var user = data.user;
            var judger = data.judger;
            vonline_num.users = user['user_cnt'];
            vonline_num.judgers = judger.length;
           // vonline_num.message="<i class='users icon'></i>" + user['user_cnt'] + "人" + "&nbsp;<i class='microchip icon'></i>"+judger.length;
            var receive_data = user;
                        console.log(receive_data)
            window.online_list = receive_data["user"];
            if (online_list&&typeof list_online=="function" && $("#online_user_table").attr("refresh") == "true")
            {
                list_online();
            }
                        if(typeof checkOnline == "function") {
            checkOnline(receive_data["user"]);
            }
        });
        
        socket.on("judger",function(data){
            console.log(data);
        });
        
        socket.on("submit",function(data){
            console.log(data);
            if(typeof status_func=="function")
            {
                status_func(data);
            }
            if(typeof window.problemStatus == "object" && typeof window.problemStatus.submit == "function")
            {
                window.problemStatus.submit(data);
            }
            if(typeof window.contestrank == "object" && typeof window.contestrank.handleNewSubmit == "function")
            {
                window.contestrank.handleNewSubmit(data);
            }
        })
        
        socket.on("result",function(data){
            console.log(data);
            if(typeof problemsubmitter == "object" && problemsubmitter.wsresult)
            {
                problemsubmitter.wsresult(data);
            }
            if(typeof problemsubmitter == "object" && problemsubmitter.wsfs_result)
            {
                problemsubmitter.wsfs_result(data);
            }
            if(typeof window.problemStatus == "object" && window.problemStatus.update)
            {
                window.problemStatus.update(data);
            }
            if(typeof window.contestrank == "object" && typeof window.contestrank.handleNewSubmit == "function")
            {
                window.contestrank.handleNewSubmit(data);
            }
        })
        socket.on('msg',function(data){
            console.log(data);
            $(".msg.header.item").attr("data-html","<div class='header'>From:"+data['user_id']+"<br>"+data['nick']+"</div><div class='content'>"+data['content']+"</div>")
            .popup("show").popup("set position","bottom center");
        });
        $("body").on('click',function(){
            $(".msg.header.item").popup("hide").removeAttr("data-html");
        })
        socket.on('chat',function(data){
            console.log(data);
        })
   })
   var url=location.href;
   var arr=url.split("/");
   var protocol=arr[0];
   window.addEventListener("beforeunload", function (event) {
       window.socket.windowDestroyClose = true;
       window.socket.close();
});
    </script>
<div class="">
    <!-- Main component for a primary marketing message or call to action -->
            <svg width="1400" height="600"></svg>
</div> <!-- /container -->

<script>
    var maps = window.maps = {};
    var hashtable = window.hashtable = {};
    function addEdge(from,to) {
        if(!maps[from]) {
            maps[from] = [to];
        }
        else {
            maps[from].push(to);
        }
    }
    let hashFlag = 0;
    function getHash(name) {
        if(hashtable[name] === undefined) {
            return hashtable[name] = hashFlag++;
        }
        else {
            return hashtable[name];
        }
    }
    let nodes = [];
    let edges = [];
    let a = new Set();
    $.get("/api/status/sim/?cid=" + getParameterByName("cid"),function(data){
        window.dataset = data.data; 
        for(let i of dataset) {
            var ta = getHash(i.nick),tb = getHash(i.snick);
            var tmp;
            tmp = {
                source:ta=getHash(i.nick),
                target:tb=getHash(i.snick),
                relation:"",
                value:1
            };
            if(!maps[ta]) {
                maps[ta] = {};
                maps[ta][tb] = tmp;
                edges.push(tmp);
            }
            else if(!maps[ta][tb]) {
                maps[ta][tb] = tmp;
                edges.push(tmp);
            }
            else {
                maps[ta][tb].value += tmp.value;
            }

            if(!a.has(ta)) {
                a.add(ta);
                nodes.push({name:i.nick});
            }
            if(!a.has(tb)) {
                a.add(tb);
                nodes.push({name:i.snick});
            }
            let mx = Math.max(ta,tb);
            //addEdge(i.s_id,i.sim_s_id);
            //addEdge(i.sim_s_id,i.s_id);
        }
        
        nodes.sort(function(a,b){
            return getHash(a.name) - getHash(b.name);
        });
        var marge = {top:60,bottom:60,left:60,right:60};
        try {
    	var svg = d3.select("svg")
    	var width = svg.attr("width")
    	var height = svg.attr("height")
    	var defs = svg.append("defs");
 
  var zoom = d3.zoom()
    .scaleExtent([1, 40])
    .translateExtent([
      [-100, -100],
      [width + 90, height + 100]
    ])
    .on("zoom", zoomed);
 
  svg.call(zoom);
 
  function zoomed() {
    svg.attr("transform", d3.event.transform);
  }
 
  function resetted() {
    svg.transition()
      .duration(750)
      .call(zoom.transform, d3.zoomIdentity);
  }
var arrowMarker = defs.append("marker")
						.attr("id","arrow")
						.attr("markerUnits","strokeWidth")
					    .attr("markerWidth","12")
                        .attr("markerHeight","12")
                        .attr("viewBox","0 0 12 12") 
                        .attr("refX","6")
                        .attr("refY","6")
                        .attr("orient","auto");
                        var arrow_path = "M2,2 L10,6 L2,10 L6,6 L2,2";

                        arrowMarker.append("path")
			.attr("d",arrow_path)
			.attr("fill","#000");

    	var g = svg.append("g")
    		.attr("transform","translate("+marge.top+","+marge.left+")");
    		var colorScale = d3.scaleOrdinal()
    		.domain(d3.range(nodes.length))
    		.range(d3.schemeCategory10);
        }
        catch(e) {
            console.log("error");
        }
    	//新建一个力导向图
    	var forceSimulation = d3.forceSimulation()
    		.force("link",d3.forceLink())
    		.force("charge",d3.forceManyBody())
    		.force("center",d3.forceCenter());
    	//初始化力导向图，也就是传入数据
    	//生成节点数据
    	forceSimulation.nodes(nodes)
    		.on("tick",ticked);//这个函数很重要，后面给出具体实现和说明
    	//生成边数据
    	forceSimulation.force("link")
    		.links(edges)
    		.distance(function(d){//每一边的长度
    			return d.value*100;
    		})    	
    	//设置图形的中心位置	
    	forceSimulation.force("center")
    		.x(width/2)
    		.y(height/2);
    	//在浏览器的控制台输出
    	console.log(nodes);
    	console.log(edges);
    	
    	//有了节点和边的数据后，我们开始绘制
    	//绘制边
    	var links = g.append("g")
    		.selectAll("line")
    		.data(edges)
    		.enter()
    		.append("line")
    		.attr("stroke",function(d,i){
    			return colorScale(i);
    		})
    		.attr("stroke-width",1).attr("marker-end","url(#arrow)");
    	var linksText = g.append("g")
    		.selectAll("text")
    		.data(edges)
    		.enter()
    		.append("text")
    		.text(function(d){
    			return d.relation;
    		})
    	
    	//绘制节点
    	//老规矩，先为节点和节点上的文字分组
    	var gs = g.selectAll(".circleText")
    		.data(nodes)
    		.enter()
    		.append("g")
    		.attr("transform",function(d,i){
    			var cirX = d.x;
    			var cirY = d.y;
    			return "translate("+cirX+","+cirY+")";
    		})
    		.call(d3.drag()
    			.on("start",started)
    			.on("drag",dragged)
    			.on("end",ended)
    		);
    		
    	//绘制节点
    	gs.append("circle")
    		.attr("r",3)
    		.attr("fill",function(d,i){
    			return colorScale(i);
    		})
    	//文字
    	gs.append("text")
    		.attr("x",-5)
    		.attr("y",-10)
    		.attr("dy",5)
    		.text(function(d){
    			return d.name;
    		})
    	
    	function ticked(){
    		links
    			.attr("x1",function(d){return d.source.x;})
    			.attr("y1",function(d){return d.source.y;})
    			.attr("x2",function(d){return d.target.x;})
    			.attr("y2",function(d){return d.target.y;});
    			
    		linksText
    			.attr("x",function(d){
    			return (d.source.x+d.target.x)/2;
    		})
    		.attr("y",function(d){
    			return (d.source.y+d.target.y)/2;
    		});
    			
    		gs
    			.attr("transform",function(d) { return "translate(" + d.x + "," + d.y + ")"; });
    	}
    	function started(d){
    		if(!d3.event.active){
    			forceSimulation.alphaTarget(0.8).restart();
    		}
    		d.fx = d.x;
    		d.fy = d.y;
    	}
    	function dragged(d){
    		d.fx = d3.event.x;
    		d.fy = d3.event.y;
    	}
    	function ended(d){
    		if(!d3.event.active){
    			forceSimulation.alphaTarget(0);
    		}
    		d.fx = null;
    		d.fy = null;
    	}
    });
    
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<div class="ui inverted vertical footer segment" style="margin-top:150px">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="five wide column">
                    <h3 class="ui inverted header"><a href="about.php" class="white link" target="_blank">关于
                        <div class="sub header">
                            常见问题
                        </div>
                    </a>
                    </h3>
                    <div class="ui inverted link list">
                        <a href="mailto:gxlhybh@gmail.com" class="item">联系开发者</a>
                        <a href="opensource.php" class="item">开放源代码声明</a>
                        <a href="privacy.php" class="item">隐私政策</a>
                        <a href="copyright.php" class="item">著作权声明</a>
                    </div>
                </div>
                <div class="five wide column">
                    <h3 class="ui inverted header">知识共享许可协议
                        <div class="sub header">
                            <a class="white link" href="https://creativecommons.org/licenses/by-nc-nd/4.0/deed.zh" target="_blank">署名-非商业性使用-禁止演绎 4.0
                            <div class="sub header">(CC BY-NC-ND 4.0)</div>
                             </a>
                        </div>
                    </h3>
                    <div class="ui mini images">
                        
                         <img class="ui image" src="/img/cc_icon_white_x2.png">
                         <img class="ui image" src="/img/attribution_icon_white_x2.png">
                        <img class="ui image" src="/img/nc_white_x2.png">
                        <img class="ui image" src="/img/nd_white_x2.png"> 
                    </div>
                </div>
                <div class="five wide column">
                    <h4 class="ui inverted header">© CUP Online Judge 2017-2018
                       <div class="sub header">  Impressed by HUSTOJ & SYZOJ & ECNUOJ</div>
                        <div class="sub header">  Powered By Vue.js,Node.js</div>
                        <div class="sub header">Software Designer:<a href="https://github.com/ryanlee2014" target="_blank">Ryan Lee(李昊元)</a></div>
                        </h4>
                </div>
            </div>
        </div>
    </div>-->
    <script>
        $("form").append("<div id='csrf' class='csrf' />");
	  $(".csrf").load("csrf.php");
	  var $logout=$(".logout");
$logout.on('click',function(){
    $.get("/api/logout",function(data){
        location.href="../logout.php";
    });
});
//$.get("/api");//keep node.js session awake
    </script></body>
</html>
<!--cache page-->