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
						一套同时操作 MySQL ...
					</p>
		            <p><a href="https://cong5.net/post/erp-system-optimize-to-read-write-mysql-and-redis" rel="nofollow">阅读更多-></a></p>
		            <div class="clear"></div>
		        </div>
	    	</article>

        </div>
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
						一套同时操作 MySQL ...
					</p>
		            <p><a href="https://cong5.net/post/erp-system-optimize-to-read-write-mysql-and-redis" rel="nofollow">阅读更多-></a></p>
		            <div class="clear"></div>
		        </div>
	    	</article>

        </div>
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
						一套同时操作 MySQL ...
					</p>
		            <p><a href="https://cong5.net/post/erp-system-optimize-to-read-write-mysql-and-redis" rel="nofollow">阅读更多-></a></p>
		            <div class="clear"></div>
		        </div>
	    	</article>

        </div>

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
						一套同时操作 MySQL ...
					</p>
		            <p><a href="https://cong5.net/post/erp-system-optimize-to-read-write-mysql-and-redis" rel="nofollow">阅读更多-></a></p>
		            <div class="clear"></div>
		        </div>
	    	</article>

        </div>

        <div id="footer">
            <div class="footer-content">
                <div class="footer-border">
                    <p><a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">桂ICP备14007691号</a></p>
                    <p>本站点采用<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" rel="nofollow">知识共享 署名-非商业性使用-相同方式共享 4.0 国际 许可协议</a></p>
                    <p>Coder by <a href="https://cong5.net">@Mr柿子</a>，您可以在 GitHub <i class="fa fa-github"></i> 找到<a href="https://github.com/Cong5/myPersimmon">本站源码</a> - CopyRight &copy; 2017</p>
                                    </div>
            </div>
        </div>

    </div>
@stop  
<!-- js存放地方 -->
@section('scripts')

@stop