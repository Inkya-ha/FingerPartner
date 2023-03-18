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

function scroll_effect() {
	var element = document.getElementsByClassName('scroll-up');
	if (!element) return;

	var scrollY = window.pageYOffset;
	var windowH = window.innerHeight;
	var showTiming = 200; // 要素を表示するタイミング
	for (var i = 0; i < element.length; i++) {
		var elemClientRect = element[i].getBoundingClientRect();
		var elemY = scrollY + elemClientRect.top;
		if (scrollY > elemY - windowH + showTiming) {
			element[i].classList.add('is-show');
		}
	}
}
window.addEventListener('scroll', scroll_effect); // スクロール時に実行

function scroll_effect2() {
	var element = document.getElementsByClassName('scroll-up2');
	if (!element) return;

	var scrollY = window.pageYOffset;
	var windowH = window.innerHeight;
	var showTiming = 200; // 要素を表示するタイミング
	for (var i = 0; i < element.length; i++) {
		var elemClientRect = element[i].getBoundingClientRect();
		var elemY = scrollY + elemClientRect.top;
		if (scrollY > elemY - windowH + showTiming) {
			element[i].classList.add('is-show');
		}
	}
}
window.addEventListener('scroll', scroll_effect2); // スクロール時に実行

