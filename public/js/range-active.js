/*--
	Range Slider Active
------------------------*/
var rangeSlider = document.querySelectorAll('input[type="range"]');
rangesliderJs.create(rangeSlider,{});
$('input[type="range"]').on('input', function() {
    $(this).siblings('p').find('span').html( $(this).val() );
});
var locRadius = $('input[type="range"]').attr('value');
$('input[type="range"]').siblings('p').find('span').html( locRadius );