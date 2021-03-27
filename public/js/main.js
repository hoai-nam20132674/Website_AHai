$("#otp").inputmask({"mask": "999999"});

function repeat(str, total) {
	var final = '';
	for (var i = 0; i < total; i++) final += str;
		return final;
}