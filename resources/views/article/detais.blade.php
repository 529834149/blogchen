@extends('layouts.main')
@section('title')   
文章列表 
@stop
@section('styles')

@stop
@section('header')
    @include('header_top.header_top')
@stop
@section('content')

   <!--注册登录页面-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                 <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">登录</a>
                 <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">注册</a></div>
            <div class="col-sm-4"></div>
        </div>
       
         
        <div class="modal fade login" id="loginModal">
             <div class="modal-dialog login animated">
             <div class="modal-content">
                <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">登录 </h4>
           </div>
           <div class="modal-body">  
               <div class="box">
                    <div class="content">
                       <div class="social">
                           <a class="circle github" href="/auth/github">
                               <i class="fa fa-github fa-fw"></i>
                           </a>
                           <a id="google_login" class="circle google" href="/auth/google_oauth2">
                               <i class="fa fa-google-plus fa-fw"></i>
                           </a>
                           <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                               <i class="fa fa-facebook fa-fw"></i>
                           </a>
                       </div>
                       <div class="division">
                           <div class="line l"></div>
                             <span>or</span>
                           <div class="line r"></div>
                       </div>
                       <div class="error"></div>
                       <div class="form loginBox">
                           <form method="post" action="/login" accept-charset="UTF-8">
                           <input id="email" class="form-control" type="text" placeholder="输入6~12位用户名" name="email">
                           <input id="password" class="form-control" type="password" placeholder="输入6~12位用户密码" name="password">
                           <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                           </form>
                       </div>
                    </div>
               </div>
               <div class="box">
                   <div class="content registerBox" style="display:none;">
                    <div class="form">
                       <form method="post" html="{:multipart=>true}" data-remote="true" action="/User/checkLogins" accept-charset="UTF-8">
                       <input id="email" class="form-control" type="text" placeholder="输入6~12位用户名" name="username">
                       <input id="password" class="form-control" type="password" placeholder="输入6~12位用户密码" name="passwords">
                       <input id="password_confirmation" class="form-control" type="password" placeholder="确认密码" name="password_confirmation">
                       <input class="btn btn-default btn-register" type="submit" value="注册会员" name="commit" id="register">
                       </form>
                       </div>
                   </div>
               </div>
           </div>
           <div class="modal-footer">
               <div class="forgot login-footer">
                   <span>Looking to 
                        <a href="javascript: showRegisterForm();">create an account</a>
                   ?</span>
               </div>
               <div class="forgot register-footer" style="display:none">
                    <span>直接登录-></span>
                    <a href="javascript: showLoginForm();">登录</a>
               </div>
           </div>        
             </div>
             </div>
         </div>
    </div>
    <!--article content-->
    <div id="content">
        <div class="content-main">
	        <article class="post clearfix" itemscope itemtype="http://schema.org/Article">
		        <header class="post-header">
		            <h1 class="entry-title"><a href="/Article/details/1" rel="bookmark">ERP 系统优化之客户信息、联系人信息缓存之 DB 解决方案</a></h1>
		            <div class="post-date">
		                <time class="fa fa-calendar date" datetime="2017-07-24T05:48:14+00:00"
		                      itemprop="datePublished" pubdate=""> 24 July , 2017
		                </time>
		                <span class="views fa fa-eye" itemprop="views"> 9678 views</span>
		            </div>
		            <div class="clear"></div>
		        </header>
		        <div class="post-content post-desc" itemprop="articleBody">
		        	<p>昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。
						一套同时操作 MySQL昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。昨天我们说了如何把 13.9+ 万的客户数据导入 Redis 以及客户联系人的数据导入Redis 服务器去。
						今天我们再来说说程序里面如何优化，做到数据在查询的时候首先从 Redis 里面取数据，当 Redis 没有数据的时候再从 MySQL 里面取数据，并缓存。
						数据的增删改，这个我们来写一套 DB 的解决方案，在数据进行 MySQL 增删改操作的时候，同时对 Redis 进行增删操作。 ...
					</p>
		         
		        </div>
		        <div class="other-box"></div>
	        	<img src="http://bcdn5.blogchina.com/images/zybh.png" alt="">
         	 	<div class="Main2">     
			        <div class="Input_Box">     
                                    <div contenteditable="true" class="Input_text" id="textLogin"> </div>                      
			          <div class="Input_Foot">
			          	<a class="imgBtn" href="javascript:void(0);"><img src="http://www.appvue.com/public/assets/default/img/tieba/1.jpg">></a><a class="postBtn">确定</a> 
			          </div>     
			        </div> 
			        <div class="faceDiv">
			        	<section class="emoji_container">
			        	</section>
			        	<section class="emoji_tab"></section>
			        </div>    
			    </div>
				<div class="comment_header qb" style="display: block;">
			        <h3>全部评论
			            <span class="plnum">(<span id="commentCount">0</span>条评论)</span>
			            <a href="javascript:void(0);" id="load_all_discuss">
			                <img src="http://bcdn5.blogchina.com/images/fresh.png" alt="">

			            </a>
			        </h3>
					
			    </div>
				
				<p style="text-align: center;"><img src="{{asset('public/image/notingImage.jpg')}}" alt="还没有评论呢"></p>
				<p class="loading-more-no">
		            <a class="more-link" href="javascript:;">没有更多了</a>
		        </p>
				 	
		        <!-- 如果没有评论提示:来都来了，说几句吧 -->
	    	</article>
			
        </div>

    </div>
	<div id="contents">
	
	</div>
@stop  
<!-- js存放地方 -->
@section('scripts')
<script src="{{ asset('public/assets/default/js/jquery.js') }}"></script>

<script src="{{ asset('public/assets/default/js/common.js')}}"></script>
<script src="{{ asset('public/assets/default/jquery/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/assets/default/bootstrap3/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/assets/default/js/login-register.js')}}" type="text/javascript"></script>

<script src="{{ asset('public/assets/default/js/myemojiPl.js')}}"></script>
<script>
var emojiconfig = {
    tieba: {
        name: "<img src='http://www.appvue.com/public/assets/default/img/tieba/1.jpg'>",
        path: "http://www.appvue.com/public/assets/default/img/tieba/",
        maxNum: 50,
        file: ".jpg",
        placeholder: ":{alias}:",
        alias: {
            1: "hehe",
            2: "haha",
            3: "tushe",
            4: "a",
            5: "ku",
            6: "lu",
            7: "kaixin",
            8: "han",
            9: "lei",
            10: "heixian",
            11: "bishi",
            12: "bugaoxing",
            13: "zhenbang",
            14: "qian",
            15: "yiwen",
            16: "yinxian",
            17: "tu",
            18: "yi",
            19: "weiqu",
            20: "huaxin",
            21: "hu",
            22: "xiaonian",
            23: "neng",
            24: "taikaixin",
            25: "huaji",
            26: "mianqiang",
            27: "kuanghan",
            28: "guai",
            29: "shuijiao",
            30: "jinku",
            31: "shengqi",
            32: "jinya",
            33: "pen",
            34: "aixin",
            35: "xinsui",
            36: "meigui",
            37: "liwu",
            38: "caihong",
            39: "xxyl",
            40: "taiyang",
            41: "qianbi",
            42: "dnegpao",
            43: "chabei",
            44: "dangao",
            45: "yinyue",
            46: "haha2",
            47: "shenli",
            48: "damuzhi",
            49: "ruo",
            50: "OK"
        },
        title: {
            1: "呵呵",
            2: "哈哈",
            3: "吐舌",
            4: "啊",
            5: "酷",
            6: "怒",
            7: "开心",
            8: "汗",
            9: "泪",
            10: "黑线",
            11: "鄙视",
            12: "不高兴",
            13: "真棒",
            14: "钱",
            15: "疑问",
            16: "阴脸",
            17: "吐",
            18: "咦",
            19: "委屈",
            20: "花心",
            21: "呼~",
            22: "笑脸",
            23: "冷",
            24: "太开心",
            25: "滑稽",
            26: "勉强",
            27: "狂汗",
            28: "乖",
            29: "睡觉",
            30: "惊哭",
            31: "生气",
            32: "惊讶",
            33: "喷",
            34: "爱心",
            35: "心碎",
            36: "玫瑰",
            37: "礼物",
            38: "彩虹",
            39: "星星月亮",
            40: "太阳",
            41: "钱币",
            42: "灯泡",
            43: "茶杯",
            44: "蛋糕",
            45: "音乐",
            46: "haha",
            47: "胜利",
            48: "大拇指",
            49: "弱",
            50: "OK"
        }
      },
    AcFun:{
    	name : "<img src='http://www.appvue.com/public/assets/default/img/AcFun/1.png' width='30px;height='30px;'>",
    	path : "http://www.appvue.com/public/assets/default/img/AcFun/",
    	maxNum : 54,
    	file : ".png"
    }
  };
$('.Main2').myEmoji({emojiconfig : emojiconfig});
</script> 
@stop