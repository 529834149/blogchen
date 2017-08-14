
////var DISCUSS_URL = "http://discuss5.blogcore.cn/";
//var UC_URL = "http://uc5.blogcore.cn/";
//if(document.domain.split('.')[1] == 'blogchina') {
//    var UC_URL = "http://post.blogchina.com/";
//    var DISCUSS_URL = "http://discuss5.blogchina.com/";
//    var BCDNS = 'http://bcdn5.blogchina.com/';
//    var DOMAIN = 'blogchina.com';
//} else {
//    var UC_URL = "http://uc5.blogcore.cn/";
//    var DISCUSS_URL = "http://discuss5.blogcore.cn/";
//    var DOMAIN = 'blogchina.com';
//}

;(function(){
    var common = {
        init: function ()
        {
//            this.checkLogin();
            this.register();
        },
//        用户注册
       register:function()
       {
          $('#register').click(function(){
            var username = $("input[name='username']").val();
            var password = $("input[name='passwords']").val();
            var password_confirmation = $("input[name='password_confirmation']").val();
            if(password !== password_confirmation){
                layer.msg('两密码不一样');
            }layer.msg
            //当前用户名是否符合条件
            if(common.checkUser(username) == false){
                layer.msg('用户名格式不正确');
                return false;
            }
            //当前密码和超级密码是否符合条件
            if(common.checkUser(password) == false || common.checkUser(password_confirmation) == false){
                layer.msg('密码格式不正确');
                return false;
            }
            $.ajax({
                type : "get",
                url: "/User/checkLogins/",
                cache:false,//不缓存数据
                beforeSend:function(){
                     var index = layer.load(0, {shade: false}); 
                },
                data:{
                   'username':username,
                   'password' :password,
                   'password_confirmation':password_confirmation,
                },
                dataType : "json",//数据类型为json
                //jsonp: "callback",//服务端用于接收callback调用的function名的参数
                success : function(data){
                   console.log(data);
                },
                complete: function(){
                    
                },
            });
                
              
          })
       },
       //正则验证用户名密码
       checkUser:function(username)
       {
            var pattern = /^^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,12}$/; 
            return pattern.test(username); 
       },
        //当用户点击留言板，检测是否登录
        checkLogin:function()
        {
            $.ajax({
                type : "get",
                url: '/User/checkLogins',
                cache:false,//不缓存数据
                data:{
                },
                dataType : "json",//数据类型为json
                //jsonp: "callback",//服务端用于接收callback调用的function名的参数
                success : function(root){
                    
                }
            });
        },
    };
    window.common = common;
    $(function(){
        common.init();
       
        $(document).on('click', '#textLogin', common.checkLogin);

      
    });
})();
