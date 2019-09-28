$(function(){
       let queryString = decodeURI(window.location.search.slice(4));
       let id=queryString;
         var Data=""
        new Promise(function(resolve, reject) {
            $.ajax({
                type: "get",
                data: `id=${id}`,
                url: "./server/detailPage.php",
                dataType: "json",
                success: function(response) {
                    Data = response.data;
                    resolve();
                }
            });
        }).then(function(){
            console.log(Data);
            $(".min-img img").attr("src",Data[0].src)

        })





var magnify = document.querySelector('.magnify-box');
var minBox = document.querySelector('.min-img');
var minBoxImg = document.querySelector('.min-img img');
var mask = document.querySelector('.mask');

var maxBox = document.querySelector('.max-img');
var maxImg = document.querySelector('.max-img img');

// 第一步 绑定鼠标移入事件

minBox.onmouseenter = function(){
    mask.style.display = "block";
    maxBox.style.display = "block";
};

// 第二步 当鼠标在图片上移动的时候绑定移动事件

minBox.onmousemove = function(e){
    // 为什么没有用 minBox.offsetLeft
    var x = e.pageX - magnify.offsetLeft - mask.offsetWidth/2;

    var y = e.pageY - magnify.offsetTop - mask.offsetHeight/2;

    // 为了不让遮罩出去，需要限制范围
    // 遮罩可以运动的最大范围
    var maxX = minBox.offsetWidth - mask.offsetWidth; // 100px
    var maxY = minBox.offsetHeight - mask.offsetHeight;
    if(x<=0) {
        x = 0;
    }
    if(y<=0) {
        y = 0;
    }
    if(x>= maxX) {
        x = maxX;
    }
    if(y>= maxY){
        y = maxY;
    }
    mask.style.left = x + 'px';
    mask.style.top  = y + 'px';

    // 大图片可以运动的最大X方向的距离
    var maxImgX = maxImg.offsetWidth - maxBox.offsetWidth;   // 200px
    var maxImgY = maxImg.offsetHeight - maxBox.offsetHeight;

    var biliX = maxImgX / maxX;  // 2;

    var biliY = maxImgY / maxY; // 2
        // 大盒子运动的距离 = 遮罩每像素移动的距离 * 遮罩运动的距离
    
    maxImg.style.left =  - (x * biliX) + 'px';
    maxImg.style.top =  - (y * biliY) + 'px';

}

// 第三部 绑定鼠标移出事件


minBox.onmouseleave = function(){
    mask.style.display = "none";
    maxBox.style.display = "none";
}

// var imgArr = document.querySelectorAll('.img-list img');

// for (let i = 0; i < imgArr.length; i++) {
//     imgArr[i].onclick = function(){
//         minBoxImg.src = `./images/min${i+1}.jpg`
//         maxImg.src = `./images/max${i+1}.jpg`
//     }
// }
})