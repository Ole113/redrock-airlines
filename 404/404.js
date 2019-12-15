let percent;

window.onload = () => {
	let amount;
	window.addEventListener("scroll", () => {
		amount = $(window).scrollTop();
		console.log(amount > 200 && amount < 250);
	});
}