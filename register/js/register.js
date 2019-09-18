$(function(){
    (new Captcha({ lineNum: 10, dotNum: 20, length: 4, fontSize: 16 })).draw(document.querySelector('#captcha'), r => {
        console.log(r, '验证++++');
        imageCodeVal = r;
    });
})