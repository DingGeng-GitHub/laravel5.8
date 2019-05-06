<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{URL::asset('favicon.ico')}}" rel="icon" type="image/x-icon"/>
    <link href="{{URL::asset('favicon.gif')}}" rel="icon" type="image/gif" >

    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}" />

    {{-- Swiper JS --}}
    <link rel="stylesheet" href="{{URL::asset('css/swiper.min.css')}}" />

    {{-- Swiper动画CSS --}}
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}" />


    <script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>

    {{-- Swiper JS --}}
    <script type="text/javascript" src="{{URL::asset('js/swiper.min.js')}}"></script>

    {{-- Swiper动画js --}}
    <script type="text/javascript" src="{{URL::asset('js/swiper.animate.min.js')}}"></script>
    <title>laravel5.8</title>

    <style>
        .home-page-h1{
            text-shadow: black 1px 1px 5px;
            font-style:italic;
            font-weight: bolder;
            text-align:center;
            font-family: 'Microsoft YaHei';
            line-height:80px;
        }
    </style>

</head>

<body style="background-color: #FFFFFF">

    {{-- header --}}
    <div class="container">
        <div class="row" style="height: 80px">
            <div class="col-2">
                <img src="{{URL::asset('images/title.jpg')}}" alt="">
            </div>
            <div class="col-7" style="width: 60%">
                <h1 class="home-page-h1">Currency Server</h1>
            </div>
            <div class="col-3" style="margin-top: 20px">
                <button class="btn btn-light btn-lg" type="submit">登陆</button>
                <button class="btn btn-light btn-lg" type="submit">注册</button>
            </div>
        </div>
    </div>

    {{-- slide show --}}
    <div class="container-fluid">
        <div class="row" style="margin: 5px  -15px  10px -15px">
            <div class="col">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{URL::asset('images/1.jpg')}}" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('images/2.jpg')}}" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('images/3.jpg')}}" alt="" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{URL::asset('images/4.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">

            </div>
        </div>


        <script type="text/javascript">
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay:true,
            });
        </script>
        <script>
            !function(){function n(n,e,t){return n.getAttribute(e)||t}function e(n){return document.getElementsByTagName(n)}function t(){var t=e("script"),o=t.length,i=t[o-1];return{l:o,z:n(i,"zIndex",-1),o:n(i,"opacity",13.3),c:n(i,"color","059,153,255"),n:n(i,"count",199)}}function o(){a=m.width=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,c=m.height=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight}function i(){r.clearRect(0,0,a,c);var n,e,t,o,m,l;s.forEach(function(i,x){for(i.x+=i.xa,i.y+=i.ya,i.xa*=i.x>a||i.x<0?-1:1,i.ya*=i.y>c||i.y<0?-1:1,r.fillRect(i.x-.5,i.y-.5,1,1),e=x+1;e<u.length;e++)n=u[e],null!==n.x&&null!==n.y&&(o=i.x-n.x,m=i.y-n.y,l=o*o+m*m,l<n.max&&(n===y&&l>=n.max/2&&(i.x-=.03*o,i.y-=.03*m),t=(n.max-l)/n.max,r.beginPath(),r.lineWidth=t/2,r.strokeStyle="rgba("+d.c+","+(t+.2)+")",r.moveTo(i.x,i.y),r.lineTo(n.x,n.y),r.stroke()))}),x(i)}var a,c,u,m=document.createElement("canvas"),d=t(),l="c_n"+d.l,r=m.getContext("2d"),x=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(n){window.setTimeout(n,1e3/45)},w=Math.random,y={x:null,y:null,max:2e4};m.id=l,m.style.cssText="position:fixed;top:0;left:0;z-index:"+d.z+";opacity:"+d.o,e("body")[0].appendChild(m),o(),window.onresize=o,window.onmousemove=function(n){n=n||window.event,y.x=n.clientX,y.y=n.clientY},window.onmouseout=function(){y.x=null,y.y=null};for(var s=[],f=0;d.n>f;f++){var h=w()*a,g=w()*c,v=2*w()-1,p=2*w()-1;s.push({x:h,y:g,xa:v,ya:p,max:6e3})}u=s.concat([y]),setTimeout(function(){i()},100)}();
        </script>
    </div>

    {{--  --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>
    </div>
</body>
</html>