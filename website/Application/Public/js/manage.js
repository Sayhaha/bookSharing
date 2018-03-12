    var p_con=document.getElementsByClassName('details')[0].getElementsByTagName('p');
      // alert(p_con[0].innerHTML);
    function dialog(){
    //获取页面的高度和宽度
    var sWidth=document.body.scrollWidth || document.documentElement.scrollWidth;
    var sHeight=document.body.scrollHeight || document.documentElement.scrollHeight;
    
    //获取页面的可视区域高度和宽度
    var wHeight=document.documentElement.clientHeight || document.body.clientHeight;
    
                //创建遮罩层
    var oMask=document.createElement("div");
    oMask.id="mask";
    oMask.style.height=sHeight+"px";
    oMask.style.width=sWidth+"px";
    document.body.appendChild(oMask);            //添加到body末尾
      
               //创建登录框
    var oLogin=document.createElement("div");
    oLogin.id="edit_page";
    oLogin.innerHTML='<form action="" method="POST" enctype="multipart/form-data"><div class="editCon"><div id="close">点击关闭</div><div class="book_edit">书籍编辑</div><p><span>书名:</span><input type="text" name="book_name"/></p><p><span>简介:</span><textarea name="book_introduce"></textarea></p><p><span>积分:</span><input type="text" name="book_cost"/></p><input type="submit" value="确认"" name="" class="confirm"/><input type="reset" value="取消" name="" class="delete" id="delete"/></div></form>';
    
    document.body.appendChild(oLogin);
    
    //获取登陆框的宽和高
    var dHeight=oLogin.offsetHeight;
    var dWidth=oLogin.offsetWidth;

    //设置登陆框的left和top
    oLogin.style.left=sWidth/2-dWidth/2+"px";
    oLogin.style.top=wHeight/2-dHeight/2+"px";

    //获取关闭按钮
    var oClose=document.getElementById("close");
    //alert(oClose);
    //点击关闭按钮和点击登陆框以外的区域都可以关闭登陆框
    oClose.onclick=oMask.onclick=function(){
        document.body.removeChild(oLogin);
        document.body.removeChild(oMask);
    };

    var oDelete=document.getElementById('delete');
     oDelete.onclick=oMask.onclick=function(){
        document.body.removeChild(oLogin);
        document.body.removeChild(oMask);
    };
    //点击确认关闭弹出框
           var oConfirm=document.getElementsByClassName('confirm');
           for(var i=0;i<oConfirm.length;i++){
             oConfirm[i].onclick=function(){
             document.body.removeChild(oLogin);
             document.body.removeChild(oMask);
             };
           }
    }


      //添加图书登录框
      function add_pic(){
       //获取页面的高度和宽度
        var sWidth=document.body.scrollWidth || document.documentElement.scrollWidth;
        var sHeight=document.body.scrollHeight || document.documentElement.scrollHeight;
    
        //获取页面的可视区域高度和宽度
        var wHeight=document.documentElement.clientHeight || document.body.clientHeight;
        //创建遮罩层
        var oMask=document.createElement("div");
        oMask.id="mask";
        oMask.style.height=sHeight+"px";
        oMask.style.width=sWidth+"px";
        document.body.appendChild(oMask);            //添加到body末尾
      
               //创建登录框
        var oLogin=document.createElement("div");
        oLogin.id="edit_page";
        oLogin.innerHTML="<div class='addCon'><div id='close'>点击关闭</div><div class='book_edit'>书籍上传</div><p><span>书名:</span><input type='text' id='bookName'></p><p><span>简介:</span><textarea id='intro'></textarea></p><p><span>积分:</span><input type='text' id='bookName'></p><div id='preview' class='upload_pic'><img id='imghead' src='./img/1.jpg'/></div><input type='file' onchange='previewImage(this)' class='upload_btn'/><input type='button' value='确认' class='confirm_one' /><input type='button' value='取消' class='delete_one' id='delete'/></div></div>";
        document.body.appendChild(oLogin);
    
        //获取登陆框的宽和高
        var dHeight=oLogin.offsetHeight;
        var dWidth=oLogin.offsetWidth;

        //设置登陆框的left和top
        oLogin.style.left=sWidth/2-dWidth/2+"px";
        oLogin.style.top=wHeight/2-dHeight/2+"px";

        //获取关闭按钮
        var oClose=document.getElementById("close");
    
        //点击关闭按钮和点击登陆框以外的区域都可以关闭登陆框
        oClose.onclick=oMask.onclick=function(){
        document.body.removeChild(oLogin);
        document.body.removeChild(oMask);
        };
        var oDelete=document.getElementById('delete');
        oDelete.onclick=oMask.onclick=function(){
        document.body.removeChild(oLogin);
        document.body.removeChild(oMask);
       };
       //点击确认关闭弹出框
           var oConfirm=document.getElementsByClassName('confirm_one');
           oConfirm[0].onclick=function(){
           add_book();
           document.body.removeChild(oLogin);
           document.body.removeChild(oMask);
           };
      }  
      function previewImage(file){
          var MAXWIDTH  = 150; 
          var MAXHEIGHT = 150;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead class="own_pic">';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                // img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        } 
        //删除函数
        // function  amputate(){
        //    var oBtn2=document.getElementsByClassName("amputate");
        //    var book=document.getElementsByClassName("book_show");
        //    for(var i=0;i<oBtn2.length;i++){
        //         (function(i){
        //       oBtn2[i].onclick=function(){

        //       book[i].parentNode.removeChild(book[i]);
        //       }

        //         })(i);
        //    }
        // } 
        //添加书籍
        function add_book(){
           var oBook=document.createElement("div");
           var oManage=document.getElementById('book_manage');
           var oBtn=document.getElementsByClassName('book_show');
            var addpic=document.getElementsByClassName('add_pic');
           //取值
           var bn=document.getElementById('bookName');
           var intro=document.getElementById('intro');
           var img=document.getElementById('imghead').src;
           oBook.className="book_show";
           oBook.innerHTML='<div class="pic_show"><img src="'+img+'"><div class="edit"><span class="edit_con">编辑</span><span class="amputate" id="amputate">删除</span></div></div><div class="details"><span>书名：</span><p class="book_name">'+bn.value+'</p><span>简介：</span><p>'+intro.value+'</p></div></div>';
           oManage.insertBefore(oBook,addpic[0]);
           
        }             
        window.onload=function(){
        //添加图片
          var oBtn1=document.getElementById('add_icon');
          oBtn1.onclick=function(){
            add_pic();
          }    

         //编辑函数
          var bn=document.getElementsByClassName("book_name");
          var bc=document.getElementsByClassName("details");
          document.getElementById("book_manage").addEventListener("click",function(e){
          //clkdom为被点击的对象  如果进行编辑事件，clkdom就是span.edit_con本身，
          //你可以通过此对象找到原来的书名和简介
          var clkdom=e.target;
          //点击编辑引发的事件  
          if(clkdom.className=="edit_con"){ 
              dialog();
             
             // var nn=clkdom.parentNode.parentNode.parentNodes;
              //alert(nn);
             // var bb=document.getElementsByClassName("clkdom.parentNode.parentNode.parentNodes").getElementsByTagName("p");
             //alert(bb.value);
              
            }
            //点击删除引发的事件

          else if(clkdom.className=="amputate"){
              clkdom.parentNode.parentNode.parentNode.parentNode.removeChild(clkdom.parentNode.parentNode.parentNode);
          }
            //也就是说你把原来写的onclick引发的事件放在{...}就行了  ps:别忘了删除原来的函数



        },false);
       //    var oBtn=document.getElementsByClassName("edit_con");
       //    for(var i=0;i<oBtn.length;i++){
       //    oBtn[i].addEventListener("click",function(){
       //    dialog();
       //    var e_pCon=document.getElementsByTagName('input');
       //    var e_tCon=document.getElementsByTagName('textarea');
       //    e_pCon[0].value=p_con[0].innerHTML;
       //    e_tCon[0].value=p_con[1].innerHTML;
       //    // alert(e_pCon[0].innerHTML);
       //  },false);
       
       // }  
      }