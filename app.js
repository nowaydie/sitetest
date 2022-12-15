let tg = window.Telegram.WebApp;

let height = document.documentElement.scrollHeight;
let width = document.documentElement.scrollWidth;

tg.expand();


$("#slider2").ionRangeSlider({
    type: "double",
    skin:"round",
    min: 0,
    max: 60000000,
    from: 0,
    to: 60000000,
    step: 500000,
	postfix: '$',
	hide_min_max: true,
    onFinish: function (data) {
    		cost_from=data.from;
    		cost_to=data.to;
    },

});


$("#slider1").ionRangeSlider({
    type: "double",
    skin:"round",
    min: 0,
    max: 60000000,
    from: 0,
    to: 60000000,
    step: 500000,
	postfix: '$',
	hide_min_max: true,
    onFinish: function (data) {
    		cost_from=data.from;
    		cost_to=data.to;
    },

});


active = 1;
$(".inner").appendTo($(".container"));
let p = $(".inner2").detach();


function SendData(){
		let data='123';
		if (document.getElementByName("fromc").checked==1) data+='new_building ';
		if (document.getElementByName("to1").checked==1) data+='from_the_owner ';
		
		if (document.getElementByName("start").checked==1) data+='Dubai ';

		if (document.getElementByName("end").checked==1) data+='apartment ';
		if (document.getElementByName("adult").checked==1) data+='townhouse ';
		if (document.getElementByName("child").checked!=1) data+='villa ';


		if (document.getElementByName("").checked==1) data+='studio ';

		console.log(data);
		tg.sendData(data);
}

