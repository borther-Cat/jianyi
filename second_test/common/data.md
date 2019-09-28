var arr = [];
        var oDiv1 = document.querySelectorAll("#sidebar-x-1 .sidelist-x .nav_zk");
        for(var p=0; p<oDiv1.length;p++){
             var title = oDiv1[p].querySelectorAll("a"); 
        var obj={};
        obj.title = [];
        for(var i=0;i<title.length;i++){
            obj.title.push(title[i].innerText);
        }
        oDiv2 = document.querySelectorAll("#sidebar-x-1 .i-list-x .i-list-x-l");
        oDiv3 = oDiv2[p].querySelectorAll(".i-list-con-x");
         obj.cate = [];
        for(j=0;j<oDiv3.length;j++){
            var obj2={};
             obj2.list_title = oDiv3[j].querySelectorAll("span a")[0].innerText;
             obj2.lis = [];
             var lis = oDiv3[j].querySelectorAll("ul li a");
             for(k=0;k<lis.length;k++){
                 obj2.lis.push(lis[k].innerText)
             }
             obj.cate.push(obj2);
        }
        obj.hot = [];
        oDiv4 = document.querySelectorAll("#sidebar-x-1 .i-list-x .i-list-right-x dl");
            var dd= oDiv4[p].querySelectorAll("dd");
            for(var n=0;n<dd.length;n++){
                var dd_a = dd[n].querySelectorAll("a");
                var a=[];
                for(var m=0;m<dd_a.length;m++){
                    
                    a.push(dd_a[m].innerText);
                }
                obj.hot.push(a);
            }
            arr.push(obj)
        }










        var odiv = document.querySelectorAll(".listsearchmain4 .listsearch-jg");
    var arr = [];
    for(var i=0;i<odiv.length;i++){
        
        var olis = odiv[i].querySelectorAll(".listsearch-one");
        for(var j=0;j<olis.length;j++){
            var obj = {};
            var img = olis[j].querySelector(".listsearch-ztimg center a img");
            obj.src = img.src;
            var del = olis[j].querySelector(".listsearch-mc a");
            obj.del = del.innerText;
            var price = olis[j].querySelector(".listsearch-price span");
            obj.price = price.innerText;
            var much = olis[j].querySelector(".listsearch-des span");
            obj.much = much.innerText;
            var des = olis[j].querySelector(".listsearch-des a");
            obj.des =des.innerText;
            arr.push(obj);
        }
    }



     var odiv = document.querySelector("#floorDiv4");
        var obj1 = {};
        obj1.floor = odiv.querySelector(".j11308_main_floor h2 span").innerText; 
        obj1.cite = odiv.querySelector(".j11308_main_floor h2 cite").innerText
        obj1.h2_r =  odiv.querySelector(".j11308_main_floor .zdwz").innerText
        var title_a=  odiv.querySelectorAll(".j11308_main_floor .j11402_tabstitle a");
        var title_arr=[];
        for(i=0;i<title_a.length;i++){
            title_arr.push(title_a[i].innerText);
        }
        obj1.title = title_arr;
        var odl = odiv.querySelectorAll(".j11308_main_floor .tabsconleft dl");
        obj1.list = [];
        for(var j=0;j<odl.length;j++){
            var obj1_l ={};
            obj1_l.list_title = odl[j].querySelector("dt a").innerText;
            var odl_dd = odl[j].querySelectorAll("dd a");
            obj1_l.lis = []
            for(var k =0;k<odl_dd.length;k++){
                obj1_l.lis.push(odl_dd[k].innerText);
            }
            obj1.list.push(obj1_l);
        }
        obj1.more = odiv.querySelector(".j11308_main_floor .tabsconleft p a").innerText;
        var mid_box = odiv.querySelectorAll(".j11308_main_floor .tabsconcenter");
        obj1.center =[]
        for(var l=0;l<mid_box.length;l++){
            var cen_obj ={};
            var mid_box_top = mid_box[l].querySelectorAll(".tabsconcentertop a img");
            cen_obj.top_list =[];
            for(var n=0;n<mid_box_top.length;n++){
                cen_obj.top_list.push(mid_box_top[n].src)
            }
            
            var mid_box_bot = mid_box[l].querySelectorAll(".tabsconcenterbottom dl");
            cen_obj.bot_dl = [];
            for(var m=0;m<mid_box_bot.length;m++){
                var bot_dl ={};
                bot_dl.bot_src = mid_box_bot[m].querySelector("dt a img").src;
                bot_dl.bot_price = mid_box_bot[m].querySelector("dd cite").innerText;
                bot_dl.bot_del = mid_box_bot[m].querySelector("dd a").innerText;
                cen_obj.bot_dl.push(bot_dl);
            }
            obj1.center.push(cen_obj);
        }
        var bot_box = odiv.querySelectorAll(".j11308_main_floor .tabsconright ul li");
        obj1.pic =[];
        for(var w=0;w<bot_box.length;w++){
            var pic_src = bot_box[w].querySelector("a img").src;
            obj1.pic.push(pic_src);
        }