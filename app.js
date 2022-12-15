let tg = window.Telegram.WebApp;

let height = document.documentElement.scrollHeight;
let width = document.documentElement.scrollWidth;

tg.expand();



active = 1;
$(".inner").appendTo($(".container"));
let p = $(".inner2").detach();


function SendData(){
		let data='12345';
		var from = document.getElementsByid('d1').value; 
		data+=from;
// 		if (document.getElementByName("to1").checked==1) data+='from_the_owner ';
		
// 		if (document.getElementByName("start").checked==1) data+='Dubai ';

// 		if (document.getElementByName("end").checked==1) data+='apartment ';
// 		if (document.getElementByName("adult").checked==1) data+='townhouse ';
// 		if (document.getElementByName("child").checked!=1) data+='villa ';


// 		if (document.getElementByName("").checked==1) data+='studio ';

		console.log(data);
		tg.sendData(data);
}

