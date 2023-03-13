function load_effect_50ms() {
	var element = document.getElementsByClassName('load-fade-50ms');
	if (!element) return; // 要素がない場合は終了

	for (var i = 0; i < element.length; i++) {
		element[i].classList.add('is-show');
	}
}
function load_effect_100ms() {
	var element = document.getElementsByClassName('load-fade-100ms');
	if (!element) return; // 要素がない場合は終了

	for (var i = 0; i < element.length; i++) {
		element[i].classList.add('is-show');
	}
}
function load_effect_150ms() {
	var element = document.getElementsByClassName('load-fade-150ms');
	if (!element) return; // 要素がない場合は終了

	for (var i = 0; i < element.length; i++) {
		element[i].classList.add('is-show');
	}
}
function load_effect_200ms() {
	var element = document.getElementsByClassName('load-fade-200ms');
	if (!element) return; // 要素がない場合は終了

	for (var i = 0; i < element.length; i++) {
		element[i].classList.add('is-show');
	}
}
function load_effect_250ms() {
	var element = document.getElementsByClassName('load-fade-250ms');
	if (!element) return; // 要素がない場合は終了

	for (var i = 0; i < element.length; i++) {
		element[i].classList.add('is-show');
	}
}
setTimeout(load_effect_50ms, 50);
setTimeout(load_effect_100ms, 100);
setTimeout(load_effect_150ms, 150);
setTimeout(load_effect_200ms, 200);
setTimeout(load_effect_250ms, 250);
