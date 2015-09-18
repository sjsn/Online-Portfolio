(function() { 
	"use strict;"
	window.onload = function() {
		var timer = setInterval(drawGraph, 2000);
	};

	function drawGraph(){
		var skillsData = new Array (['Java', 7]), ['Javascript', 7], ['HTML/CSS', 8], ['PHP', 4], 
		['Video Editing', 9], ['Photography', 6], ['Adobe Suite', 8], ['Microsoft Office', 9]);
		.getElementById("skillsGraph").innerHTML = skillsData;	
		var skillsChart = new JSChart ('chartid', 'bar');
		skillsChart.setDataArray(devSkillsData);
		skillsChart.setBarColor('#7fc6db');
		skillsChart.setBarOpacity(0.8);
		skillsChart.setBarBorderColor('#eaf4f6');
		skillsChart.setBarValues(true);
		skillsChart.setTitleColor('#80766a');
		skillsChart.setAxisColor('#80766a');
		skillsChart.setAxisValuesColor('#80766a');
		skillsChart.draw();
	}
}();
