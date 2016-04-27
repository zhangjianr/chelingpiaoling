<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>飘令-汇美令官方网站</title>
    <meta name="description" content="飘令,护发素,发膜,飘令黑金露">
    <meta name="keywords" content="飘令,护发素,发膜,飘令黑金露">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit"><!--360默认急速模式打开-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta name="full-screen" content="yes">
    <link rel="stylesheet" href="/Public/piaoling/cui.css">
    <link rel="stylesheet" href="/Public/piaoling/style.css">
    <link rel="stylesheet" href="/Public/piaoling/less.css">
</head>
<body>
    <div id="hd" class="default">
        <div class="wp">
            <div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/Public/piaoling/logo.png" alt=""></a></div>
            <div id="nav">
                <ul>
                    <li><a href="<?php echo U('Index/index');?>" class="mycur">首页</a></li>
                    <li><a href="<?php echo U('Index/product');?>">产品介绍</a></li>
                    <li><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
                    <li><a href="<?php echo U('Index/about');?>">关于我们</a></li>
                    <li><a href="">授权查询</a></li>
                    <li><a href="<?php echo U('Index/trial');?>">免费试用</a></li>
                </ul>
            </div>
            <div class="tel">021-64197568</div>
        </div>  
    </div>
    <!-- end #hd -->
    
    <div class="c"></div>   
    <div id="bd">
        <div id="banner">
            <div class="banner-bg"></div>
            <div class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1840px, 0px, 0px);">
                        <?php if(is_array($carousel)): foreach($carousel as $key=>$vo): ?><li class="s3 clone" aria-hidden="true" style="width: 1840px; float: left; display: block;">
                                <img src="/Public/<?php echo ($vo["carousel"]); ?>">
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev">
                        <a class="flex-prev" href=""></a>
                    </li>
                    <li class="flex-nav-next">
                        <a class="flex-next" href=""></a>
                    </li>
                </ul>
            </div>  
        </div>
        <!-- end #banner --> 
        <div class="row1 fix">
            <div class="wp">
                <div class="tit-i">
                    <h3>汇美优品</h3>
                    <h5><span>体验式购买 满意再买不满意退货</span> </h5>
                </div>  
                <ul class="ul-icon-i">
                    <?php if(is_array($product)): foreach($product as $key=>$vo): ?><a href="<?php echo U('Index/product');?>">
                        <li class="li1">
                            <div class="pad">
                                <div style="width: 212.5px;margin:auto;height: 369px;background-image:url(/Public/<?php echo ($vo["product"]); ?>);background-size: 100% 100%;"><div class="product1">查看详情</div></div>
                            </div>
                        </li>
                        </a><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
        <div class="row2 fix">
            <div class="wp">
                <div class="tit-i">
                    <h3>我们的案例</h3>
                    <h5><span>case</span> of us</h5>
                </div>  
                <div class="case-i">
                    <div class="c"></div>

                    <div class="more-i"><a href=""></a></div>
                </div>
            </div>
        </div>
        <div class="row4 fix">
            <div class="wp">
                <div class="tit-i">
                    <h3>联系我们</h3>
                    <h5><span>contact US</span>  </h5>
                </div>
                <div class="contact-l">
                    <ul class="ul-contact">
                        <li class="li1">上海市闵行区沪松公路565弄71号</li>
                        <li class="li2"><a href="tel:18121100869">18121100869 (咨询)/</a><a href="tel:021-64197568">021-64197568</a><!-- <a href="tel:023-68985689">023-68985689 (售后)<br></a><a href="tel:64197568">64197568 (咨询)</a> --></li>
                        <li class="li3"><a href="mailto:572663791@qq.com">572663791@qq.com</a></li>
                    </ul>
                </div>
                <div class="contact-r">
                    <form action="" onsubmit="return lianxi();" class="contact-form" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="action" value="post">
                        <input type="hidden" name="diyid" value="1">
                        <input type="hidden" name="do" value="2">

                        <div class="">
                            <input type="text" class="inp l" name="name" id="name" placeholder="您的姓名">
                            <input type="text" class="inp r" name="tel" id="tel" placeholder="您的联系方式">
                        </div>
                        <textarea cols="30" rows="10" name="txt_con" id="txt"></textarea>
                        <input type="hidden" name="dede_fields" value="name,text;tel,text;txt_con,multitext">
                        <input type="hidden" name="dede_fieldshash" value="46ed417d2802860830e2b8668691ab8b">
                        <input type="submit" value="提交您的需求" class="sub" id="sub">
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="map-s">
                <a href="javascript:void(0);" class="btn"><em></em>点击展开地图</a>
            </div>  
            <div class="map-pop">
                <a href="javascript:void(0);" class="btn-down"></a>
                <div class="map-bg1"></div>
                <div class="map-bg2"></div>
                <div id="map" class="map-i" style="width:100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- end #bd -->
    <div class="c"></div>
    <!-- begin #fd -->
    <div id="fd" class="index-fd pr">
    <div class="fd-copy">
        <div class="wp">
            <p>车令科技有限公司　ICP备案编号：沪ICP备12029384号 　</p>        
            <p>电话：021-64197568</p>
            <p>技术支持：PURELURE飘令</p>
        </div>
    </div>
</div>
<div class="side">
    <ul>
        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=572663791&amp;site=qq&amp;menu=yes" target="_blank"><div class="sidebox"><img src="/Public/piaoling/side_icon02.png">在线咨询</div></a></li>
        <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=572663791&amp;site=qq&amp;menu=yes"><div class="sidebox"><img src="/Public/piaoling/side_icon01.png">在线咨询</div></a></li>
        <li><a href="javascript:void(0);"><div class="sidebox"><img src="/Public/piaoling/side_icon03.png">64197568</div></a></li>
    </ul>
</div>
<div class="side2">
    <ul>
        <li><a href=""><img src="/Public/piaoling/r_icon1.png" alt=""></a><div class="weixin"><em></em><img src="/Public/piaoling/ewm.jpg" alt=""></div></li>
        <li><a href="javascript:goTop();" class="sidetop"><img src="/Public/piaoling/r_icon2.png"></a></li>
    </ul>
</div>  

<script type="text/javascript" src="/Public/piaoling/jquery.js"></script>
<script type="text/javascript" src="/Public/piaoling/lib.js"></script>
<link rel="stylesheet" href="/Public/piaoling/animate.css">
<link rel="stylesheet" href="/Public/piaoling/flexslider.css">
<script type="text/javascript" src="/Public/piaoling/flexslider.js"></script>
<script type="text/javascript" src="/Public/piaoling/banner.js"></script>
<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script>
<script type="text/javascript">

    function lianxi() {
        var name=$("#name").val();
        var tel=$("#tel").val();
        var txt=$("#txt").val();
        var re = /^[1][3587]\d{9}$/;
        if(name==""){
            layer.alert("姓名不能为空");
            return false;
        }
        if(!re.test(tel)){
            layer.alert("请输入正确的联系方式");
            return false;
        }
        if(txt==""){
            layer.alert("请输入您的需求");
            return false;
        }

        $.ajax({
            url:"<?php echo U('Index/trialAdd');?>",
            type:'post',
            dataType:'json',
            data:{'name':name,'tel':tel,'text':txt},
            success: function(data){
                if(data.msg == 1){
                    layer.msg('提交成功!',{icon:1,time:1000});
                }else{
                    layer.msg('提交失败!',{icon:2,time:1000});
                } 
            }
        })
        return false;
    }

</script>
<script>
    $('.ul-news-i li').hover(function(){
        $(this).toggleClass('on');
    })
    $('.ul-icon-i li').hover(function(){
        $(this).find('img:first').fadeIn(100);
        $(this).find('.pic-icon').animate({top:0});
    },function(){
        $(this).find('.pic-icon').animate({top:-134});
        $(this).find('img:first').fadeOut(100);
    })

    $('.case-img').hover(function(){
        $(this).toggleClass('on');
    })

    $('.map .btn').click(function(){
        $('.map-pop').show();
        $(this).parents('.map').addClass('map-big-i');
        var winW = $(window).width();
        var winH = $(window).height();
        console.log(winH);
        if(winW < 768){
            $('.map-pop').height($(window).height()-50-80);
            $('.map-big-i').height($(window).height()-50-80);
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }else{

            $('.map-pop').height($(window).height()-344);
            $('.map-big-i').height($(window).height()-344);
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }
        initMap();
    })
    $('.map .btn-down').click(function(){
        $('.map-pop').hide();
        $(this).parents('.map').removeClass('map-big-i');
        $('.map').height('107');
    })

</script>
<script type="text/javascript" src="/Public/piaoling/dbb662c2fefb4a18ab020df572c67122.js"></script><script type="text/javascript" src="/Public/piaoling/getscript"></script>
<script type="text/javascript" src="/Public/piaoling/map.js"></script>

</body></html>