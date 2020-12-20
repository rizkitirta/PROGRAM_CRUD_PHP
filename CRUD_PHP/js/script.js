const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container-1');

keyword.addEventListener('keyup', function()  {
	fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
	.then((response) => response.text())
	.then((response) => (container.innerHTML = response))
});

